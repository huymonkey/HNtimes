import '../../app.js';
import {formatDate} from "@/bootstrap.js";
import toastr from "toastr";
import Tagify from "@yaireo/tagify";
import '@yaireo/tagify/dist/tagify.css';

"use strict";



$(document).ready(async function () {

    const getTypes = $.ajax({
        url: '/api/articles/types',
        method: 'GET',
        contentType: false,
        processData: false,
    }).fail(function (jqXHR) {
        toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`)
        console.log('Error status: ' + jqXHR.status);
    });

    const getCategories = $.ajax({
        url: '/api/categories/withSubCategory',
        method: 'GET',
        contentType: false,
        processData: false,
    }).fail(function (jqXHR) {
        toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`)
        console.log('Error status: ' + jqXHR.status);
    });

    const getTags = $.ajax({
        url: '/api/tags',
        method: 'GET',
        contentType: false,
        processData: false,
    }).fail(function (jqXHR) {
        toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`)
        console.log('Error status: ' + jqXHR.status);
    });

    async function init() {

        await $.when(getTypes, getCategories, getTags)
            .done(function (response1, response2, response3) {

                let types =  response1[0].data.map((value, key) => {
                    let selected = '';

                    if (value === article.type) {
                        selected = 'selected';
                    }

                    return `
                        <option value="${value}" ${selected}>${value}</option>
                `;
                })

                $('#form-edit-article [name="type"]').append(types.join(''));


                let categories =  response2[0].data.map((category) => {

                    let subCategories = category.sub_categories.map((subCategory) => {

                        let isSelected = article.sub_categories.some(sub_category => sub_category.id === subCategory.id);
                        let selected = '';

                        if (isSelected) {
                            selected = 'selected';
                        }


                        return `
                            <option value="${subCategory.id}" ${selected}>${subCategory.name}</option>
                        `;
                    });

                    return `
                        <optgroup label="${category.name}">
                            ${subCategories.join('')}
                        </optgroup>
                    `;
                })

                $('#form-edit-article [name="sub_categories[]"]').append(categories.join(''));


                let tagsSelected = (article.tags.map(tag => tag.name)).join(',');

                $('#form-edit-article [name="tags"]').val(tagsSelected);

                let tags = response3[0].data.map(tag => tag.name);

                new Tagify($('#form-edit-article [name="tags"]')[0], {
                    whitelist: tags,
                    maxTags: 10,
                    dropdown: {
                        maxItems: 12,           // <- mixumum allowed rendered suggestions
                        classname: 'tags-look', // <- custom classname for this dropdown, so it could be targeted
                        enabled: 0,             // <- show suggestions on focus
                        closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
                    }
                });
            })

        $('#img').attr({
            src: `/storage/${article.img}`,
            alt: `Image ${article.title}`,
        });

        $('#user').attr({
            src: `/storage/${article.user.avatar}`,
            title: article.user.email
        });

        $('#form-edit-article [name="title"]').val(article.title);

        $('#form-edit-article [name="description"]').val(article.description);

        if (!!article.is_trending) {
            $('#form-edit-article [name="is_trending"]').attr('checked', true);
        }

        $('#form-edit-article [name="sub_categories[]"]').select2();

        $('#created_at').text(formatDate(article.created_at));

        $('#updated_at').text(formatDate(article.updated_at));

        if (article.media) {
            $('#form-edit-article [name="media[type]"]').val(article.media.type);
            $('#form-edit-article [name="media[file_path]"]').val(article.media.file_path);
        }

        if (article.audio) {
            $('#form-edit-article [name="audio[title]"]').val(article.audio.title);
            $('#audio_file_path').html(`
                <audio controls>
                    <source src="/storage/${article.audio.file_path}" type="audio/mpeg" id="audio_file_path_src">
                </audio>
            `);
        }

        $('#summernote').summernote({
            height: 1000
        });

        $('.note-editable').html(article.content);
    }

    await init();

    // EVENT
    $('#btn-update').on('click', function (e) {

        let tags =  $('#form-edit-article [name="tags"]').val();
        let content = $('.note-editable').html();

        const formData = new FormData($('#form-edit-article')[0]);

        formData.append('_method', 'PUT');

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
            url: '/api/articles/update/' + article.id,
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                toastr.success(response.message, 'Success');
                article = response.data;

                $('#img').attr({
                    src: `/storage/${article.img}`,
                    alt: `Image ${article.title}`,
                });

                $('#form-edit-article [name="img"]').val('');

                $('#user').attr({
                    src: `/storage/${article.user.avatar}`,
                    title: article.user.email
                });

                $('#updated_at').text(formatDate(article.updated_at));

                if (article.audio) {
                    if (article.audio.file_path) {
                        $('#audio_file_path_src').attr('src', article.audio.file_path);
                        $('#form-edit-article [name="audio[file_path]"]').val('');
                    }
                }

            },
            error: function (jqXHR) {

                toastr.error(jqXHR.responseJSON.message, `Error [#${jqXHR.status}]`);

                if (jqXHR.status === 422) {
                    const errors = jqXHR.responseJSON.errors;

                    $.each(Object.entries(errors), function (index, [field, messages]) {
                        let input = $(`#form-edit-article [name="${field}"], #form-edit-article [name="${field}[]"]`);

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
                                    $('#form-edit-article #collapseSeparatedTwo').collapse('show');
                                    $.each(Object.keys(messages), function (index, key) {
                                        input = $(`#form-edit-article [name="media[${key}]"]`);
                                        handleError(input, messages[key]);
                                    });
                                    break;
                                };
                                case 'audio': {
                                    $('#form-edit-article #collapseSeparatedThree').collapse('show');
                                    $.each(Object.keys(messages), function (index, key) {
                                        input = $(`#form-edit-article [name="audio[${key}]"]`);
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
