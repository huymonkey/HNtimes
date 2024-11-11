import '../../app.js';
import toastr from "toastr";
import Tagify from "@yaireo/tagify";
import '@yaireo/tagify/dist/tagify.css';

"use strict";



$(document).ready(async function () {

    async function init() {

        $('#form-create-article [name="sub_categories[]"]').select2();

        $('#summernote').summernote({
            height: 700
        });

        $('.note-editable').html("");

        let tags = [];

        await $.ajax({
            url: '/api/articles/types',
            method: 'GET',
            contentType: false,
            processData: false,
            success: function (response) {

                let types =  response.data.map((value, key) => {
                    return `
                        <option value="${value}">${value}</option>
                    `;
                })

                $('#form-create-article [name="type"]').append(types.join(''));
            },
            error: function (jqXHR) {
                console.log('Error status: ' + jqXHR.status);
            }
        });

        await $.ajax({
            url: '/api/categories/withSubCategory',
            method: 'GET',
            contentType: false,
            processData: false,
            success: function (response) {

                let categories =  response.data.map((category) => {

                    let subCategories = category.sub_categories.map((subCategory) => {
                        return `
                            <option value="${subCategory.id}">${subCategory.name}</option>
                        `;
                    });

                    return `
                        <optgroup label="${category.name}">
                            ${subCategories.join('')}
                        </optgroup>
                    `;
                })

                $('#form-create-article [name="sub_categories[]"]').append(categories.join(''));

            },
            error: function (jqXHR) {
                console.log('Error status: ' + jqXHR.status);
            }
        });

        await $.ajax({
            url: '/api/tags',
            method: 'GET',
            contentType: false,
            processData: false,
            success: function (response) {
                tags = response.data.map(tag => tag.name);
            },
            error: function (jqXHR) {
                console.log('Error status: ' + jqXHR.status);
            }
        });

        const tagify = new Tagify($('#form-create-article [name="tags"]')[0], {
            whitelist: tags,
            maxTags: 10,
            dropdown: {
                maxItems: 12,           // <- mixumum allowed rendered suggestions
                classname: 'tags-look', // <- custom classname for this dropdown, so it could be targeted
                enabled: 0,             // <- show suggestions on focus
                closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
            }
        });

    }

    await init();

    $('#btn-create').on('click', function (e) {

        let tags =  $('#form-create-article [name="tags"]').val();
        let content = $('.note-editable').html();

        const formData = new FormData($('#form-create-article')[0]);

        formData.append('content', content);

        if (tags) {
            tags = JSON.parse(tags).map(item => item.value);
            $.each(tags, function (index, value) {
                formData.append('tags[]', value);
            })
        }
        else {
            formData.delete('tags');
        }

        if (!formData.get('media[file_path]')) {
            formData.delete('media[file_path]');
        }

        if (!formData.get('media[type]')) {
            formData.delete('media[type]');
        }

        if (!formData.get('audio[title]')) {
            formData.delete('audio[title]');
        }

        $.ajax({
            url: '/api/articles',
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                $('#form-create-article')[0].reset();
                $('.note-editable').html("");
                sessionStorage.setItem('successMessage', response.message);
                window.location.href = response.redirect;
            },
            error: function (jqXHR) {

                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);

                if (jqXHR.status === 422) {
                    const errors = jqXHR.responseJSON.errors;

                    $.each(Object.entries(errors), function (index, [field, messages]) {
                        let input = $(`#form-create-article [name="${field}"], #form-create-article [name="${field}[]"]`);


                        if ($.isArray(messages)) {
                            handleError(input, messages.join(' <br> '), 'change');
                            return true;
                        }

                        if (typeof messages === 'object' && !$.isArray(messages)) {

                            switch (field) {
                                case 'tags': {
                                    let errorTags = '';

                                    $.each(Object.keys(messages), function (index, key) {
                                        errorTags += messages[key] + ' <br> ';
                                    });
                                    handleError(input, errorTags, 'change');
                                    break;
                                };
                                case 'media': {
                                    $('#form-create-article #collapseSeparatedTwo').collapse('show');
                                    $.each(Object.keys(messages), function (index, key) {
                                        input = $(`#form-create-article [name="media[${key}]"]`);
                                        handleError(input, messages[key]);
                                    });
                                    break;
                                };
                                case 'audio': {
                                    $('#form-create-article #collapseSeparatedThree').collapse('show');
                                    $.each(Object.keys(messages), function (index, key) {
                                        input = $(`#form-create-article [name="audio[${key}]"]`);
                                        handleError(input, messages[key]);
                                    });
                                    break;
                                }
                            }

                            return true;
                        }

                        input.addClass("is-invalid");
                        input.parent().find('.invalid-feedback').html(messages);

                        input.on('input', function () {
                            input.removeClass("is-invalid");
                            input.parent().find('.invalid-feedback').html("");
                        })


                        function handleError(input, error, event = 'input') {
                            input.addClass("is-invalid");
                            input.parent().find('.invalid-feedback').html(error);

                            input.on(event, function () {
                                input.removeClass("is-invalid");
                                input.parent().find('.invalid-feedback').html("");
                            });
                        }

                    });
                }
                else {
                    console.log(jqXHR.responseJSON.message);
                }
            }
        });



    })

})
