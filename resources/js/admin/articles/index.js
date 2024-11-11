import '../../app.js';
import {formatDate, getHost} from "@/bootstrap";
import toastr from "toastr";

"use strict";

const successMessage = sessionStorage.getItem('successMessage');

if (successMessage) {
    toastr.success(successMessage, 'Success');

    sessionStorage.removeItem('successMessage');

}


$(document).ready(async function () {

    async function init() {

        $('.filter').select2();

        let request1 = $.ajax({
            url: '/api/articles',
            method: 'GET',
            contentType: false,
            processData: false,
            beforeSend: function () {
                $('#list-articles-block').block({
                    message: '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span><div>'
                });
            },
            complete: function () {
                $('#list-articles-block').unblock();
            }
        }).fail(function (jqXHR) {
            toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
            console.log("Error status" + jqXHR.status);
        })

        let request2 = $.ajax({
            url: '/api/articles/trashes',
            method: 'GET',
            processData: false,
            contentType: false,
        }).fail(function (jqXHR) {
            toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
            console.log("Error status" + jqXHR.status);
        })


        await $.when(request1, request2)
            .done(function (response1, response2) {

                renderListArticles(response1[0].data);

                renderPagination(
                    'pagination',
                    response1[0].current_page,
                    response1[0].last_page,
                    response1[0].next_page_url,
                    response1[0].prev_page_url,
                    response1[0].path
                );

                if (response2[0].total !== 0) {
                    $('#trashes-tab #count-trashes').text(response2[0].total);
                }

                renderListArticles(response2[0].data, true);

                renderPagination(
                    'pagination-trashes',
                    response2[0].current_page,
                    response2[0].last_page,
                    response2[0].next_page_url,
                    response2[0].prev_page_url,
                    response2[0].path
                );

            })

    }

    await init();



    //HANDLE FUNCTION

    function getParams() {
        const _sortArticle = $('#sort-article').val();
        const _termArticle = $('#term-article').val();

        return `_sort=${_sortArticle}&_term=${_termArticle}`;
    }

    function getParamsTrashes() {
        const _sortArticle = $('#sort-trashes').val();
        const _termArticle = $('#term-trashes').val();

        return `_sort=${_sortArticle}&_term=${_termArticle}`;
    }

    function renderListArticles(articles, isTrashes = false) {


        let listCategories = articles.map(article => {

            let elementIsTrending = '';

            let iconType = '';
            let colorType = '';
            switch (article.type) {
                case 'feature': {
                    colorType = 'danger';
                    iconType = 'local_fire_department';
                    break;
                }
                case 'normal': {
                    colorType = 'secondary';
                    iconType = 'more_horiz';
                    break;
                }
                default: {
                    colorType = 'secondary';
                    iconType = "more_horiz";
                    break;
                }
            }

            let elementType = `
                <span class="badge badge-style-light rounded-pill badge-${colorType} me-1">
                    <div class="d-flex align-items-center">
                        <span class="text-capitalize">${article.type}</span>
                        <i class="material-icons-outlined">${iconType}</i>
                    </div>
                </span>
            `;

            if (article.is_trending) {
                elementIsTrending = `
                    <span class="badge badge-style-light rounded-pill badge-primary me-1">
                        <div class="d-flex align-items-center">
                            <span>Trending</span>
                            <i class="material-icons-outlined">trending_up</i>
                        </div>
                    </span>
                `;
            }

            let action = '';

            if (isTrashes) {
                action = `
                    <li>
                        <a href="${getHost()}/admin/articles/show/${article.id}"
                            class="dropdown-item text-info hover-background-color-ccc-important">
                            <p class="mb-0">
                                View detail
                            </p>
                        </a>
                    </li>
                    <li>
                        <button href="#!" class="dropdown-item text-warning btnRestoreArticle" data-id="${article.id}"">
                            Restore
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item text-danger btnDeleteArticle" data-id="${article.id}">
                            Delete
                        </button>
                    </li>
                `;
            }
            else {
                action = `
                    <li>
                        <a href="${getHost()}/admin/articles/show/${article.id}"
                            class="dropdown-item text-info hover-background-color-ccc-important"
                        >
                            <p class="mb-0">
                                View detail
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="${getHost()}/admin/articles/comments/${article.id}"
                            class="dropdown-item text-light hover-background-color-ccc-important"
                        >
                            <p class="mb-0">
                                View Comments
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="${getHost()}/admin/articles/edit/${article.id}"
                            class="dropdown-item text-warning hover-background-color-ccc-important"
                        >
                            <p class="mb-0">
                                Edit
                            </p>
                        </a>
                    </li>
                    <li>
                        <button class="dropdown-item text-danger btnMoveTrashArticle" data-id="${article.id}">
                            Move To Trash
                        </button>
                    </li>
                `;
            }

            return `
                <tr>
                    <td>${article.id}</td>
                    <td>
                        <div class="avatar avatar-xl m-r-xs">
                            <img src="/storage/${article.img}" alt="${article.title}">
                        </div>
                    </td>
                    <td>
                        <span>${article.title}</span>
                        <br> <br>
                        ${elementType}
                        ${elementIsTrending}
                    </td>
                    <td>
                        <!-- <span class="badge rounded-pill badge-secondary">Coming soon</span> -->
                        <span class="badge rounded-pill badge-success text-capitalize">${article.status}</span>
                    </td>
                    <td>${article.views}</td>
                    <td>${formatDate(article.created_at)}</td>
                    <td>${formatDate(article.updated_at)}</td>
                    <td style="width: 1px;">
                        <div class="dropdown">
                            <button type="button" class="btn btn-secondary btn-burger"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="option">
                                ${action}
                            </ul>
                        </div>
                    </td>
                </tr>
            `;
        })


        if (isTrashes) {
            $('#list-articles-trashes').html(listCategories.join(''));

            $('.btnRestoreArticle').on('click', function (e) {
                const id = $(e.target).data('id');
                $('#restoreArticle').modal('show');
                $('#formRestoreArticle').data('id', id);
                $('#formRestoreArticle .article-id').text(`#${id}`);
            })

            $('.btnDeleteArticle').on('click', function (e) {
                const id = $(e.target).data('id');
                $('#deleteArticle').modal('show');
                $('#formDeleteArticle').data('id', id);
                $('#formDeleteArticle .article-id').text(`#${id}`);
            })
        }
        else {
            $('#list-articles').html(listCategories.join(''));

            $('.btnMoveTrashArticle').on('click', function (e) {
                const id = $(e.target).data('id');
                $('#moveTrashArticle').modal('show');
                $('#formMoveTrashArticle').data('id', id);
                $('#formMoveTrashArticle .article-id').text(`#${id}`);
            })
        }

    }

    function renderPagination(idPagination, current_page, last_page, next_page_url, prev_page_url, path) {

        let params = '';

        if (idPagination === 'pagination-trashes') {
            params = getParamsTrashes();
        }
        else {
            params = getParams();
        }

        let pages = '';
        let isDisableNextPage = '';
        let isDisablePrePage = '';

        for (let i = 1 ; i <= last_page; i++) {

            let isActive = '';

            if (i === current_page) {
                isActive = 'active';
            }

            pages += `
                <li class="page-item ${isActive}">
                    <a class="page-link" href="${`${path}?page=${i}&${params}`}">${i}</a>
                </li>
            `;
        }

        if (!next_page_url) {
            isDisableNextPage = 'disabled';
        }
        if (!prev_page_url) {
            isDisablePrePage = 'disabled';
        }

        let pagination = `
        <li class="page-item previous ${isDisablePrePage}">
            <a class="page-link" href="${prev_page_url}" tabindex="-1" ${isDisablePrePage}>Previous</a>
        </li>
        ${pages}
        <li class="page-item next ${isDisableNextPage}">
            <a class="page-link" href="${next_page_url}" tabindex="-1" ${isDisableNextPage}>Next</a>
        </li>
    `;

        $(`#${idPagination}`).html(pagination);

        $(`#${idPagination} .page-link`).on('click', function (e) {

            e.preventDefault();
            if (!$(e.target).parent().hasClass('disabled') && !$(e.target).parent().hasClass('active')) {

                $.ajax({
                    url: $(e.target).attr('href'),
                    method: 'GET',
                    processData: false,
                    contentType: false,
                    success: function (response) {

                        if (idPagination === 'pagination-trashes') {
                            renderListArticles(response.data, true);
                        }
                        else {
                            renderListArticles(response.data);
                        }

                        let currentActiveElement = $(`#${idPagination}`).find('.active');

                        if ($(e.target).parent().hasClass('previous')) {
                            currentActiveElement.prev().addClass('active');
                        }
                        else if($(e.target).parent().hasClass('next')) {
                            currentActiveElement.next().addClass('active');
                        }
                        else {
                            $(e.target).parent().addClass('active');
                        }

                        currentActiveElement.removeClass('active');

                        $(`#${idPagination} .previous`).find('.page-link').attr('href', response.prev_page_url);
                        $(`#${idPagination} .next`).find('.page-link').attr('href', response.next_page_url);

                        if (response.current_page === 1) {
                            $(`#${idPagination} .previous`).addClass('disabled');
                        }
                        else {
                            $(`#${idPagination} .previous`).removeClass('disabled');
                        }

                        if (response.current_page === last_page) {
                            !$(`#${idPagination} .next`).addClass('disabled');
                        }
                        else {
                            !$(`#${idPagination} .next`).removeClass('disabled');
                        }

                    },
                    error: function (jqXHR) {
                        toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                        console.log(jqXHR.status);
                    }
                })

            }
        })

    }

    function reloadArticle() {
        const currentActive = $('#pagination').find('.page-item.active').find('.page-link');

        $.ajax({
            url: currentActive.attr('href'),
            method: 'GET',
            processData: false,
            contentType: false,
            beforeSend: function () {
                $('#list-articles').block({
                    message: '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span><div>'
                });
            },
            complete: function () {
                $('#list-articles').unblock();
            },
            success: function (response) {

                if (response.data.length !== 0) {

                    renderListArticles(response.data);

                    renderPagination(
                        'pagination',
                        response.current_page,
                        response.last_page,
                        response.next_page_url,
                        response.prev_page_url,
                        response.path
                    );

                }
                else {

                    if (parseInt(currentActive.text()) !== 1) {
                        let parseUrl = new URL(currentActive.attr('href'));
                        parseUrl.searchParams.set("page", parseInt(currentActive.text()) - 1);
                        let preUrl = parseUrl.toString();

                        $.ajax({
                            url: preUrl,
                            method: 'GET',
                            processData: false,
                            contentType: false,
                            success: function (response) {

                                renderListArticles(response.data);

                                renderPagination(
                                    'pagination',
                                    response.current_page,
                                    response.last_page,
                                    response.next_page_url,
                                    response.prev_page_url,
                                    response.path
                                );

                            },
                            error: function (jqXHR) {
                                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                                console.log("Error status " + jqXHR.status);
                            }
                        })

                    }
                    else {
                        $('#list-articles').html("");
                    }

                }

            },
            error: function (jqXHR) {
                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                console.log("Error status" + jqXHR.status);
            }
        })
    }

    function reloadTrash () {

        const currentActive = $('#pagination-trashes').find('.page-item.active').find('.page-link');

        $.ajax({
            url: currentActive.attr('href'),
            method: 'GET',
            processData: false,
            contentType: false,
            beforeSend: function () {
                $('#list-articles-trashes').block({
                    message: '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span><div>'
                });
            },
            complete: function () {
                $('#list-articles-trashes').unblock();
            },
            success: function (response) {

                if (response.data.length !== 0) {
                    renderListArticles(response.data, true);

                    renderPagination(
                        'pagination-trashes',
                        response.current_page,
                        response.last_page,
                        response.next_page_url,
                        response.prev_page_url,
                        response.path
                    );
                }
                else {

                    if (parseInt(currentActive.text()) !== 1) {
                        let parseUrl = new URL(currentActive.attr('href'));
                        parseUrl.searchParams.set("page", parseInt(currentActive.text()) - 1);
                        let preUrl = parseUrl.toString();

                        $.ajax({
                            url: preUrl,
                            method: 'GET',
                            processData: false,
                            contentType: false,
                            success: function (response) {

                                renderListArticles(response.data, true);

                                renderPagination(
                                    'pagination-trashes',
                                    response.current_page,
                                    response.last_page,
                                    response.next_page_url,
                                    response.prev_page_url,
                                    response.path
                                );

                            },
                            error: function (jqXHR) {
                                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                                console.log("Error status " + jqXHR.status);
                            }
                        })

                    }
                    else {
                        $('#list-articles-trashes').html("");
                    }

                }

            },
            error: function (jqXHR) {
                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                console.log("Error status" + jqXHR.status);
            }
        })
    }


    // HANDLE EVENT

    $('#list-tab').on('click', function () {
        $('#trashes-tab').removeClass('active');
        $('#trash').removeClass(['active', 'show']);
        $('#trash').hide();

        $('#list-tab').addClass('active');
        $('#list').addClass(['active', 'show']);
        $('#list').show();

        if (sessionStorage.getItem('is-article-load')) {
            reloadArticle();
            sessionStorage.removeItem('is-article-load');
        }
    })

    $('#trashes-tab').on('click', function () {
        $('#list-tab').removeClass('active');
        $('#list').removeClass(['active', 'show']);
        $('#list').hide();

        $('#trashes-tab').addClass('active');
        $('#trash').addClass(['active', 'show']);
        $('#trash').show();

        if (sessionStorage.getItem('is-article-trash-load')) {
            reloadTrash()
            sessionStorage.removeItem('is-article-trash-load');
        }

    })

    // Sort Article
    $('#sort-article').on('change', function (event) {

        let params = getParams();

        $.ajax({
            url: '/api/articles?' + params,
            method: 'GET',
            contentType: false,
            processData: false,
            success: function (response) {

                renderListArticles(response.data);

                renderPagination(
                    'pagination',
                    response.current_page,
                    response.last_page,
                    response.next_page_url,
                    response.prev_page_url,
                    response.path
                );

            },
            error: function (jqXHR) {
                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                console.log("Error status " + jqXHR.status);
            }
        })

    })

    // Search Article
    $('#btn-search-article').on('click', function (event) {

        const params = getParams();

        $.ajax({
            url: '/api/articles?' + params,
            method: 'GET',
            contentType: false,
            processData: false,
            success: function (response) {

                renderListArticles(response.data);

                renderPagination(
                    'pagination',
                    response.current_page,
                    response.last_page,
                    response.next_page_url,
                    response.prev_page_url,
                    response.path
                );

            },
            error: function (jqXHR) {
                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                console.log("Error status " + jqXHR.status);
            }
        })
    })

    // Event submit formMoveTrashArticle
    $('#formMoveTrashArticle').on('submit', function (event) {

        event.preventDefault();

        const id = $(event.target).data('id');

        $.ajax({
            url: '/api/articles/softDelete/' + id,
            method: 'DELETE',
            contentType: false,
            processData: false,
            complete: function () {
                $('#moveTrashArticle').modal('hide');
            },
            success: function (response) {

                toastr.success('Move to trash article success !', 'Success');

                reloadArticle();

                const currentCountTrashes = parseInt($('#trashes-tab #count-trashes').text());

                if (currentCountTrashes) {
                    $('#trashes-tab #count-trashes').text(currentCountTrashes + 1);
                }
                else {
                    $('#trashes-tab #count-trashes').text(1);
                }

                if (!sessionStorage.getItem('is-article-trash-load')) {
                    sessionStorage.setItem('is-article-trash-load', true);
                }

            },
            error: function (jqXHR) {
                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                console.log("Error status " + jqXHR.status);
            }
        })

    })

    // Sort Trashes
    $('#sort-trashes').on('change', function (event) {
        let params = getParamsTrashes();

        $.ajax({
            url: '/api/articles/trashes?' + params,
            method: 'GET',
            contentType: false,
            processData: false,
            success: function (response) {
                renderListArticles(response.data, true);

                renderPagination(
                    'pagination-trashes',
                    response.current_page,
                    response.last_page,
                    response.next_page_url,
                    response.prev_page_url,
                    response.path
                );

            },
            error: function (jqXHR) {
                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                console.log("Error status " + jqXHR.status);
            }
        })

    })

    // Search Trashes
    $('#btn-search-trashes').on('click', function (event) {

        const params = getParamsTrashes();

        $.ajax({
            url: '/api/articles/trashes?' + params,
            method: 'GET',
            contentType: false,
            processData: false,
            success: function (response) {

                renderListArticles(response.data, true);

                renderPagination(
                    'pagination-trashes',
                    response.current_page,
                    response.last_page,
                    response.next_page_url,
                    response.prev_page_url,
                    response.path
                );

            },
            error: function (jqXHR) {
                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                console.log("Error status " + jqXHR.status);
            }
        })
    })

    // Event submit formRestoreArticle
    $('#formRestoreArticle').on('submit', function (e) {

        e.preventDefault();

        const id = $(this).data('id');

        $.ajax({
            url: '/api/articles/restore/' + id,
            method: 'PUT',
            processData: false,
            contentType: false,
            complete: function () {
                $('#restoreArticle').modal('hide');
            },
            success: function (response) {

                toastr.success(response.message, 'Success');

                reloadTrash()

                const currentCountTrashes = parseInt($('#trashes-tab #count-trashes').text());

                if (currentCountTrashes === 1) {
                    $('#trashes-tab #count-trashes').text("");
                }
                else {
                    $('#trashes-tab #count-trashes').text(currentCountTrashes - 1);
                }

                if (!sessionStorage.getItem('is-article-load')) {
                    sessionStorage.setItem('is-article-load', true);
                }

            },
            error: function (jqXHR) {
                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                console.log("Error status " + jqXHR.status);
            }
        })
    })

    // Event submit formRestoreAllArticle
    $('#formRestoreAllArticle').on('submit', function (e) {

        e.preventDefault();

        $.ajax({
            url: '/api/articles/restoreAll',
            method: 'PUT',
            processData: false,
            contentType: false,
            complete: function () {
                $('#restoreAllArticle').modal('hide');
            },
            success: function (response) {

                toastr.success(response.message, 'Success');

                $('#term-trashes').val("");
                $("#sort-trashes").val("").trigger("change");

                $.ajax({
                    url: '/api/articles/trashes',
                    method: 'GET',
                    processData: false,
                    contentType: false,
                    success: function (response) {

                        renderListArticles(response.data, true);

                        renderPagination(
                            'pagination-trashes',
                            response.current_page,
                            response.last_page,
                            response.next_page_url,
                            response.prev_page_url,
                            response.path
                        );
                    },
                    error: function (jqXHR) {
                        toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                        console.log("Error status" + jqXHR.status);
                    }
                })

                $('#trashes-tab #count-trashes').text("");

                if (!sessionStorage.getItem('is-article-load')) {
                    sessionStorage.setItem('is-article-load', true);
                }

            },
            error: function (jqXHR) {
                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                console.log("Error status " + jqXHR.status);
            },
        })

    })

    // Event submit formDeleteArticle
    $('#formDeleteArticle').on('submit', function (e) {

        e.preventDefault();

        const id = $(this).data('id');

        $.ajax({
            url: '/api/articles/delete/' + id,
            method: 'DELETE',
            processData: false,
            contentType: false,
            complete: function () {
                $('#deleteArticle').modal('hide');
            },
            success: function (response) {

                toastr.success('Delete article success !', 'Success');

                reloadTrash()

                const currentCountTrashes = parseInt($('#trashes-tab #count-trashes').text());

                if (currentCountTrashes === 1) {
                    $('#trashes-tab #count-trashes').text("");
                } else {
                    $('#trashes-tab #count-trashes').text(currentCountTrashes - 1);
                }

            },
            error: function (jqXHR) {
                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                console.log("Error status " + jqXHR.status);
            }
        })

    })

    // Event submit formDeleteAllArticle
    $('#formDeleteAllArticle').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: '/api/articles/deleteAll',
            method: 'DELETE',
            processData: false,
            contentType: false,
            complete: function () {
                $('#deleteAllArticle').modal('hide');
            },
            success: function (response) {

                toastr.success('Delete all article success !', 'Success');

                $('#term-trashes').val("");
                $("#sort-trashes").val("").trigger("change");

                $.ajax({
                    url: '/api/articles/trashes',
                    method: 'GET',
                    processData: false,
                    contentType: false,
                    success: function (response) {

                        renderListArticles(response.data, true);

                        renderPagination(
                            'pagination-trashes',
                            response.current_page,
                            response.last_page,
                            response.next_page_url,
                            response.prev_page_url,
                            response.path
                        );
                    },
                    error: function (jqXHR) {
                        toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                        console.log("Error status" + jqXHR.status);
                    }
                })

                $('#trashes-tab #count-trashes').text("");

            },
            error: function (jqXHR) {
                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);
                console.log("Error status " + jqXHR.status);
            },
        })
    })
})
