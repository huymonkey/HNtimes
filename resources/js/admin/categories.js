import '../app.js';
import toastr from "toastr";

"use strict";

$(document).ready(async function () {

    await handleGetAllCategory();

    await handleGetAllTrash();


    // HANDLE FUNCTION
    async function handleGetAllCategory(isBlockUI = true) {
        await $.ajax({
            url: '/api/categories/withSubCategory',
            type: 'GET',
            contentType: false,
            processData: false,
            beforeSend: function () {
                if (isBlockUI) {
                    $('#list-categories-detail').block({
                        message: '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span><div>'
                    });
                }
            },
            complete: function () {
                if (isBlockUI) {
                    $('#list-categories-detail').unblock();
                }
            },
            success: function(res) {

                let listCategorires = res.data.map(category => {

                    let listSubCategory = category.sub_categories.map(subCategory => {
                        return componentSubCategory({
                            id: subCategory.id,
                            name: subCategory.name,
                            ordinal: subCategory.ordinal,
                        })
                    });

                    return componentCategory({
                        id: category.id,
                        img_cover: category.img_cover,
                        name: category.name,
                        ordinal: category.ordinal,
                        props: listSubCategory.join('')
                    });
                });

                $('#list-categories-detail').html(listCategorires.join(''));
            },
            error: function(jqXHR) {
                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                console.log('Status error: ' + jqXHR.status);
            }
        });

        // Event click to buttons edit category
        $('.btn-edit-category').on('click', function (e) {
            handleShowModalEditCategory(e);
        });

        // Event click to buttons move to trash category
        $('.btn-move-trash-category').on('click', function (e) {
            handleShowModalConfirmMoveToTrash(e);
        });

        //Event click to buttons create sub category
        $('.btn-add-sub-category').on('click', function (e) {
            handleShowModalCreateSubCategory(e);
        });

        //Event click to buttons edit sub category
        $('.btn-edit-sub-category').on('click', function (e) {
            handleShowModalEditSubCategory(e);
        });

        //Event click to buttons delete sub category
        $('#list-categories-detail .btn-delete-sub-category').on('click', function (e) {
            handleShowModalConfirmDeleteSubCategory(e);
        });


    }

    async function handleGetAllTrash(isBlockUI = true) {
        await $.ajax({
            url: '/api/categories/trashes',
            type: 'GET',
            contentType: false,
            processData: false,
            beforeSend: function () {
                if (isBlockUI) {
                    $('#list-trashes-detail').block({
                        message: '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span><div>'
                    });
                }
            },
            complete: function () {
                if (isBlockUI) {
                    $('#list-trashes-detail').unblock();
                }
            },
            success: function (response) {
                const sumTrashes = response.data.length;

                if (sumTrashes > 0) {
                    $('#sum-trashes').text(sumTrashes);
                }

                let trashes = response.data.map(category => {

                    let listSubCategory = category.sub_categories.map(subCategory => {
                        return componentSubCategory({
                            id: subCategory.id,
                            name: subCategory.name,
                            ordinal: subCategory.ordinal,
                            isTrashed: true
                        });
                    });

                    return componentCategory({
                        id: category.id,
                        img_cover: category.img_cover,
                        name: category.name,
                        ordinal: category.ordinal,
                        isTrashed: true,
                        props: listSubCategory.join('')
                    });
                });

                $('#list-trashes-detail').html(trashes.join(''));
            },
            error: function (jqXHR) {
                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                console.log('Status error: ' + jqXHR.status);
            }
        });

        // Event click button restore category
        $('.btn-restore-category').on('click', function (event) {
            handleShowConfirmRestoreCategory(event);
        });

        //Event click to buttons delete sub category
        $('#list-trashes-detail .btn-delete-sub-category').on('click', function (e) {
            handleShowModalConfirmDeleteSubCategory(e, true);
        });
    }

    function handleResetForm(formId) {
        const form = $('#' + formId);

        form.find('input[type="text"], input[type="file"], input[type="number"]').each(function () {
            $(this).val("");
            $(this).removeClass("is-invalid");
            $(this).parent().find('.invalid-feedback').html("");
        })

    }

    function handleUpdateUICategory(category) {
        $('#formEditCategory .img_cover').attr('src', `/storage/${category.img_cover}`);
        $('#formEditCategory input[name="img_cover"]').val("");
        $('#formEditCategory input[name="name"]').val(category.name);
        $('#formEditCategory input[name="ordinal"]').val(category.ordinal);

        handleGetAllCategory(false);
    }

    function handleUpdateUIWhenMoveCategoryToTrash(categoryID) {
        handleRemoveUICategory(categoryID);

        handleGetAllTrash();
    }

    function handleUpdateUIWhenRestoreCategory(categoryID) {
        handleRemoveUICategory(categoryID, true);

        const sumTrashes = parseInt($('#sum-trashes').text());

        if ((sumTrashes - 1) === 0) {
            $('#sum-trashes').text("");
        }
        else {
            $('#sum-trashes').text(sumTrashes - 1);
        }

        handleGetAllCategory();
    }

    function handleUpdateUIWhenRestoreAllCategory() {
        handleRemoveUIAllCategory(true);
        $('#sum-trashes').text("");

        handleGetAllCategory();
    }

    function handleUpdateUIWhenUpdateSubCategory(subCategory) {
        $('#formEditSubCategory input[name="name"]').val(subCategory.name);
        $('#formEditSubCategory input[name="ordinal"]').val(subCategory.ordinal);

        handleGetAllCategory(false);
    }

    function handleRemoveUICategory(id, isTrashes = false) {
        if (isTrashes) {
            $(`#list-trashes-detail .category[data-id="${id}"]`).remove();
            return;
        }

        $(`#list-categories-detail .category[data-id="${id}"]`).remove();
    }

    function handleRemoveUIAllCategory(trashes = false) {
        if (trashes) {
            $('#list-trashes-detail').html("");
            return;
        }

        $('#list-categories-detail').html("");
    }

    function handleShowModalEditCategory(e) {
        const category = {
            id: $(e.target).data('id'),
            name: $(e.target).data('name'),
            ordinal: $(e.target).data('ordinal'),
            img_cover: $(e.target).data('imgCover')
        };

        $('#formEditCategory .img_cover').attr('src', `/storage/${category.img_cover}`);
        $('#formEditCategory input[name="name"]').val(category.name);
        $('#formEditCategory input[name="ordinal"]').val(category.ordinal);

        $('#formEditCategory').data('id', category.id);

        $('#editCategory').modal('show');
    }

    function handleShowModalConfirmMoveToTrash(e) {
        $('#moveTrashCategory .category-name').text($(e.target).data('name'));
        $('#formMoveTrashCategory').data('id', $(e.target).data('id'));
        $('#moveTrashCategory').modal('show');
    }

    function handleShowConfirmRestoreCategory(e) {
        $('#restoreCategory .category-name').text($(e.target).data('name'));
        $('#formRestoreCategory').data('id', $(e.target).data('id'));
        $('#restoreCategory').modal('show');
    }

    function handleShowModalCreateSubCategory(e) {
        $('#formCreateSubCategory').data('categoryId', $(e.target).data('categoryId'));
        $('#createSubCategory').modal('show');
    }

    function handleShowModalEditSubCategory(e) {
        const subCategory = {
            id: $(e.target).data('id'),
            name: $(e.target).data('name'),
            ordinal: $(e.target).data('ordinal')
        };

        $('#formEditSubCategory input[name="name"]').val(subCategory.name);
        $('#formEditSubCategory input[name="ordinal"]').val(subCategory.ordinal);

        $('#formEditSubCategory').data('id', subCategory.id);

        $('#editSubCategory').modal('show');
    }

    function handleShowModalConfirmDeleteSubCategory(e, isTrashed = false) {
        if (isTrashed) {
            $('#deleteSubCategoryTrash .sub-category-name').text($(e.target).data('name'));
            $('#formDeleteSubCategoryTrash').data('id', $(e.target).data('id'));
            $('#deleteSubCategoryTrash').modal('show');
            return;
        }

        $('#deleteSubCategory .sub-category-name').text($(e.target).data('name'));
        $('#formDeleteSubCategory').data('id', $(e.target).data('id'));
        $('#deleteSubCategory').modal('show');
    }


    // COMPONENT
    function componentCategory({
        id,
        img_cover,
        name,
        ordinal,
        isTrashed,
        props = ''
    }) {
        let action = `
            <li>
                <button
                    class="dropdown-item text-warning py-2 btn-edit-category"
                    data-id="${id}"
                    data-name="${name}"
                    data-ordinal="${ordinal}"
                    data-img-cover="${img_cover}"
                >
                    Edit
                </button>
            </li>
            <li>
                <button
                    class="dropdown-item text-danger py-2 btn-move-trash-category"
                    data-id="${id}"
                    data-name="${name}"
                >
                    Move To Trash
                </button>
            </li>
        `;

        let addNewCategoryElement = `
            <button class="btn btn-light w-100 mt-5 py-3 btn-add-sub-category" type="button"
                style="border: 2px dashed #ccc;"
                data-category-id="${id}"
            >
                <i class="material-icons">
                    add
                </i>
                Add new sub category
            </button>
        `;

        if (isTrashed) {
            action = `
                <li>
                    <button
                        class="dropdown-item text-warning py-2 btn-restore-category"
                        data-id="${id}"
                        data-name="${name}"
                    >
                        Restore
                    </button>
                </li>
            `;

            addNewCategoryElement = '';
        }

        return `
            <div class="col-3 category" data-ordinal="${ordinal}" data-id="${id}">
                <div class="card widget widget-list">
                    <div class="card-header px-4 border-bottom">
                        <h4 class="card-title d-flex justify-content-between align-items-center">
                            <p class="mb-0 fs-4 d-flex align-items-center">
                                <span class="widget-list-item-icon-header d-flex align-items-center justify-content-center fs-4 ordinal">${ordinal}</span>
                                <span class="name">${name}</span>
                            </p>
                            <div class="dropdown">
                                <button type="button" class="btn btn-secondary btn-burger"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="option">
                                    ${action}
                                </ul>
                            </div>
                        </h4>
                    </div>
                    <div class="card-body px-4">
                        <ul class="widget-list-content list-unstyled ms-4">
                            ${props}
                        </ul>
                        ${addNewCategoryElement}
                    </div>
                </div>
            </div>
        `
    }

    function componentSubCategory({
        id,
        name,
        ordinal,
        isTrashed
    }) {
        let action = `
            <button
                type="button"
                class="btn btn-warning btn-burger btn-edit-sub-category"
                data-id="${id}"
                data-name="${name}"
                data-ordinal="${ordinal}"
            >
                <i
                    class="material-icons"
                    data-id="${id}"
                    data-name="${name}"
                    data-ordinal="${ordinal}"
                >
                mode_edit
                </i>
            </button>
            <button
                type="button"
                class="btn btn-danger btn-burger btn-delete-sub-category"
                data-id="${id}"
                data-name="${name}"
            >
                <i
                    class="material-icons"
                    data-id="${id}"
                    data-name="${name}"
                >
                delete_outline
                </i>
            </button>
        `;

        if (isTrashed) {
            action = `
                <button
                    type="button"
                    class="btn btn-danger btn-burger btn-delete-sub-category"
                    data-id="${id}"
                    data-name="${name}"
                >
                    <i
                        class="material-icons"
                        data-id="${id}"
                        data-name="${name}"
                    >
                    delete_outline
                    </i>
                </button>
            `;
        }

        return `
            <li class="widget-list-item widget-list-item-blue d-flex justify-content-between subCategory" data-id="${id}">
                <span class="widget-list-item-description-title fs-6 d-flex align-items-center">
                    <span class="widget-list-item-icon d-flex align-items-center justify-content-center">${ordinal}</span>
                    <div>
                        ${name}
                    </div>
                </span>
                <div>
                    ${action}
                </div>
            </li>
        `;
    }



    // HANDLE EVENT

    // Event click to button create category
    $('.btn-create-category').on('click', function () {
        $('#createCategory').modal('show');
    });

    // Event click to model createCategory
    $('#createCategory').on('click', function (e) {
        if ($(e.target).is('#createCategory') && $(e.target).hasClass('show')) {
            return;
        }
        handleResetForm('formCreateCategory');
    });

    // Event click to formCreateCategory
    $('#formCreateCategory').on('click', function (e) {
        if (!$(e.target).data('bsDismiss')) {
            e.stopPropagation();
        }
    });

    // Event click to model editCategory
    $('#editCategory').on('click', function (e) {
        if ($(e.target).is('#editCategory') && $(e.target).hasClass('show')) {
            return;
        }
        handleResetForm('formEditCategory');
    });

    // Event click to formEditCategory
    $('#formEditCategory').on('click', function (e) {
        if (!$(e.target).data('bsDismiss')) {
            e.stopPropagation();
        }
    });

    // Event click to model createSubCategory
    $('#createSubCategory').on('click', function (e) {
        if ($(e.target).is('#createSubCategory') && $(e.target).hasClass('show')) {
            return;
        }
        handleResetForm('formCreateSubCategory');
    });

    // Event click to formCreateSubCategory
    $('#formCreateSubCategory').on('click', function (e) {
        if (!$(e.target).data('bsDismiss')) {
            e.stopPropagation();
        }
    });


    /**
     * --------------Create Category--------------
     */

    // Event when submit formCreateCategory
    $('#formCreateCategory').on("submit", function (event) {
        event.preventDefault();

        const imageCover = $('#formCreateCategory input[name="img_cover"]');
        const name = $('#formCreateCategory input[name="name"]');
        const ordinal = $('#formCreateCategory input[name="ordinal"]');

        let formData = new FormData();

        if (imageCover[0].files[0]) {
            formData.append('img_cover', imageCover[0].files[0]);
        }
        formData.append('name', name.val());
        formData.append('ordinal', ordinal.val());

        $.ajax({
            url: '/api/categories',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $('#formCreateCategory').block({
                    message: '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span><div>'
                });
            },
            complete: function () {
                $('#formCreateCategory').unblock();
            },
            success: function (response) {
                toastr.success(response.message, 'Success');
                $('#formCreateCategory .btn-close').click();
                handleGetAllCategory();
            },
            error: function (jqXHR) {
                if (jqXHR.status === 422) {
                    const errors = jqXHR.responseJSON.errors;

                    $.each(errors, function (field, messages) {
                        let fieldInput = $(`#formCreateCategory input[name="${field}"]`);
                        fieldInput.addClass("is-invalid");
                        fieldInput.parent().find('.invalid-feedback').html(messages);

                        fieldInput.on('input', function () {
                            fieldInput.removeClass("is-invalid");
                            fieldInput.parent().find('.invalid-feedback').html("");
                        })

                    });
                }
                else {
                    toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                }

                console.log("Status error: " + jqXHR.status);
            }
        });

    });



    /**
     * --------------Edit Category--------------
     */

    // Event when submit formEditCategory
    $('#formEditCategory').on('submit', function (event) {
        event.preventDefault();

        const imageCover = $('#formEditCategory input[name="img_cover"]');
        const name = $('#formEditCategory input[name="name"]');
        const ordinal = $('#formEditCategory input[name="ordinal"]');

        let formData = new FormData();

        formData.append('_method', 'PUT');
        if (imageCover[0].files[0]) {
            formData.append('img_cover', imageCover[0].files[0]);
        }
        formData.append('name', name.val());
        formData.append('ordinal', ordinal.val());


        $.ajax({
            url: '/api/categories/update/' + $('#formEditCategory').data('id'),
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $('#formEditCategory').block({
                    message: '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span><div>'
                });
            },
            complete: function () {
                $('#formEditCategory').unblock();
            },
            success: function (response) {
                toastr.success(response.message, 'Success');
                handleUpdateUICategory(response.data);
            },
            error: function (jqXHR) {

                if (jqXHR.status === 422) {
                    const errors = jqXHR.responseJSON.errors;

                    $.each(errors, function (field, messages) {
                        let fieldInput = $(`#formEditCategory input[name="${field}"]`);
                        fieldInput.addClass("is-invalid");
                        fieldInput.parent().find('.invalid-feedback').html(messages);

                        fieldInput.on('input', function () {
                            fieldInput.removeClass("is-invalid");
                            fieldInput.parent().find('.invalid-feedback').html("");
                        })

                    });
                }
                else {
                    toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                }

                console.log("Status error: " + jqXHR.status);
            }
        });
    });


    /**
     * --------------Move To Trash Category--------------
     */

    // Event submit formMoveTrashCategory
    $('#formMoveTrashCategory').on('submit', function (event) {
        event.preventDefault();

        $.ajax({
            url: '/api/categories/softDelete/' + $(event.target).data('id'),
            type: 'DELETE',
            contentType: false,
            processData: false,
            beforeSend: function () {
                $('#formMoveTrashCategory').block({
                    message: '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span><div>'
                });
            },
            complete: function () {
                $('#formMoveTrashCategory').unblock();
                $('#moveTrashCategory').modal('hide');
            },
            success: function (response) {
                toastr.success('Move to trash category success !', 'Success');
                handleUpdateUIWhenMoveCategoryToTrash($(event.target).data('id'));
            },
            error: function (jqXHR) {
                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                console.log('Status error: ' + jqXHR.status);
            },
        });
    });


    /**
     * --------------Restore Category--------------
     */

    // Event submit formRestoreCategory
    $('#formRestoreCategory').on('submit', function (event) {
        event.preventDefault();

        $.ajax({
            url: "/api/categories/restore/" + $(event.target).data('id'),
            type: 'PUT',
            contentType: false,
            processData: false,
            beforeSend: function () {
                $('#formRestoreCategory').block({
                    message: '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span><div>'
                });
            },
            complete: function () {
                $('#formRestoreCategory').unblock();
                $('#restoreCategory').modal('hide');
            },
            success: function (response) {
                toastr.success(response.message, 'Success');
                handleUpdateUIWhenRestoreCategory($(event.target).data('id'));
            },
            error: function (jqXHR) {
                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                console.log('Status error: ' + jqXHR.status);
            },
        })
    });

    // Event submit formRestoreAllCategory
    $('#formRestoreAllCategory').on('submit', function (event) {
        event.preventDefault();

        $.ajax({
            url: "/api/categories/restoreAll",
            type: 'PUT',
            contentType: false,
            processData: false,
            beforeSend: function () {
                $('#formRestoreAllCategory').block({
                    message: '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span><div>'
                });
            },
            complete: function () {
                $('#formRestoreAllCategory').unblock();
                $('#restoreAllCategory').modal('hide');
            },
            success: function (response) {
                toastr.success(response.message, 'Success');
                handleUpdateUIWhenRestoreAllCategory();
            },
            error: function (jqXHR) {
                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                console.log('Status error: ' + jqXHR.status);
            },
        })
    });


    /**
     * --------------Create Sub Category--------------
     */

    // Event click submit formCreateSubCategory
    $('#formCreateSubCategory').on('submit', function (event) {
        event.preventDefault();
        const formData = new FormData();

        const name = $('#formCreateSubCategory input[name="name"]');
        const ordinal = $('#formCreateSubCategory input[name="ordinal"]');

        formData.append('name', name.val());
        formData.append('ordinal', ordinal.val());

        const categoryId = $(event.target).data('categoryId');

        $.ajax({
            url: `/api/categories/${categoryId}/subCategories`,
            method: 'POST',
            contentType: false,
            processData: false,
            data: formData,
            beforeSend: function () {
                $('#formCreateSubCategory').block({
                    message: '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span><div>'
                });
            },
            complete: function () {
                $('#formCreateSubCategory').unblock();
            },
            success: function (response) {
                toastr.success(response.message, 'Success');
                handleGetAllCategory();
                $('#createSubCategory').modal('hide');
            },
            error: function (jqXHR) {
                if (jqXHR.status === 422) {
                    const errors = jqXHR.responseJSON.errors;

                    $.each(errors, function (field, messages) {
                        let fieldInput = $(`#formCreateSubCategory input[name="${field}"]`);
                        fieldInput.addClass("is-invalid");
                        fieldInput.parent().find('.invalid-feedback').html(messages);

                        fieldInput.on('input', function () {
                            fieldInput.removeClass("is-invalid");
                            fieldInput.parent().find('.invalid-feedback').html("");
                        });

                    });
                }
                else {
                    toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                    console.log('Status error: ' + jqXHR.status);
                }

            }
        })
    });

    /**
     * --------------Edit Sub Category--------------
     */

    // Event click submit formEditSubCategory
    $('#formEditSubCategory').on('submit', function (event) {
        event.preventDefault();

        const formData = new FormData();

        const name = $('#formEditSubCategory input[name="name"]');
        const ordinal = $('#formEditSubCategory input[name="ordinal"]');

        formData.append('_method', 'PUT');
        formData.append('name', name.val());
        formData.append('ordinal', ordinal.val());

        $.ajax({
            url: `/api/subCategories/update/` + $(event.target).data('id'),
            method: 'POST',
            contentType: false,
            processData: false,
            data: formData,
            beforeSend: function () {
                $('#formEditSubCategory').block({
                    message: '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span><div>'
                });
            },
            complete: function () {
                $('#formEditSubCategory').unblock();
            },
            success: function (response) {
                toastr.success(response.message, 'Success');
                handleUpdateUIWhenUpdateSubCategory(response.data);
            },
            error: function (jqXHR) {
                if (jqXHR.status === 422) {
                    const errors = jqXHR.responseJSON.errors;

                    $.each(errors, function (field, messages) {
                        let fieldInput = $(`#formEditSubCategory input[name="${field}"]`);
                        fieldInput.addClass("is-invalid");
                        fieldInput.parent().find('.invalid-feedback').html(messages);

                        fieldInput.on('input', function () {
                            fieldInput.removeClass("is-invalid");
                            fieldInput.parent().find('.invalid-feedback').html("");
                        });

                    });
                }
                else {
                    toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                    console.log('Status error: ' + jqXHR.status);
                }

            }
        })
    });

    /**
     * --------------Delete Sub Category--------------
     */

    // Event submit formDeleteSubCategory
    $('#formDeleteSubCategory').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: '/api/subCategories/delete/' + $(e.target).data('id'),
            method: 'DELETE',
            contentType: false,
            processData: false,
            beforeSend: function () {
                $('#formDeleteSubCategory').block({
                    message: '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span><div>'
                });
            },
            complete: function () {
                $('#formDeleteSubCategory').unblock();
            },
            success: function (response) {
                toastr.success('Delete sub category success !', 'Success');
                handleGetAllCategory();
                $('#deleteSubCategory').modal('hide');
            },
            errors: function (jqXHR) {
                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                console.log('Status error: ' + jqXHR.status);
            }
        })
    })

    // Event submit formDeleteSubCategoryTrash
    $('#formDeleteSubCategoryTrash').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: '/api/subCategories/delete/' + $(e.target).data('id'),
            method: 'DELETE',
            contentType: false,
            processData: false,
            beforeSend: function () {
                $('#formDeleteSubCategoryTrash').block({
                    message: '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span><div>'
                });
            },
            complete: function () {
                $('#formDeleteSubCategoryTrash').unblock();
            },
            success: function (response) {
                toastr.success('Delete sub category success !', 'Success');
                handleGetAllTrash();
                $('#deleteSubCategoryTrash').modal('hide');
            },
            errors: function (jqXHR) {
                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                console.log('Status error: ' + jqXHR.status);
            }
        })
    })


})

