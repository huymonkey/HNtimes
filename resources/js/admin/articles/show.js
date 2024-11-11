import '../../app.js';
import {formatDate} from "@/bootstrap";
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


    await $.when(getTypes, getCategories)
        .done(function (response1, response2) {

            let types =  response1[0].data.map((value, key) => {
                let selected = '';

                if (value === article.type) {
                    selected = 'selected';
                }

                return `
                        <option value="${value}" ${selected}>${value}</option>
                `;
            })

            $('#type').append(types.join(''));



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

            $('#sub_categories').append(categories.join(''));
        })

    console.log(article);

    $('#img').attr({
        src: `/storage/${article.img}`,
        alt: `Image ${article.title}`,
    });

    $('#user').attr({
        src: `/storage/${article.user.avatar}`,
        title: article.user.email
    });

    $('#title').val(article.title);

    $('#description').val(article.description);

    if (!!article.is_trending) {
        $('#is_trending').attr('checked', true);
    }

    $('#sub_categories').select2();


    let tags = (article.tags.map(tag => tag.name)).join(',');
    $('#tags').val(tags);
    new Tagify($('#tags')[0]);


    $('#created_at').text(formatDate(article.created_at));
    $('#updated_at').text(formatDate(article.updated_at));

    $('#content').html(article.content);

    if (article.media) {
        $('#media_type').val(article.media.type);
        $('#media_file_path').val(article.media.file_path);
    }

    if (article.audio) {
        $('#audio_title').val(article.audio.title);
        $('#audio_file_path').html(`
            <audio controls>
                <source src="/storage/${article.audio.file_path}" type="audio/mpeg">
            </audio>
        `);
    }



})
