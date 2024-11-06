import '../../app.js';
import {formatDate} from "@/bootstrap";
import toastr from "toastr";

"use strict";

function init() {

    $('.filter').select2();

    const successMessage = sessionStorage.getItem('successMessage');

    if (successMessage) {
        toastr.success(successMessage, 'Success');

        sessionStorage.removeItem('successMessage');

    }


    $.ajax({
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
        },
        success: function (response) {

            renderListArticles(response.data);

            createPagination(
                response.current_page,
                response.last_page,
                response.next_page_url,
                response.prev_page_url,
                response.path
            );

            console.log(response);


        },
        error: function (jqXHR) {

        }
    })
}

function createPagination(current_page, last_page, next_page_url, prev_page_url, path) {

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
                <a class="page-link" href="${path + "?page=" + i}">${i}</a>
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

    $('#pagination').html(pagination);

    $(".page-item").on('click', function (e) {
        e.preventDefault();

        if (!$(e.target).hasClass('disabled') && !$(e.target).hasClass('active')) {
            $.ajax({
                url: $(e.target).attr('href'),
                method: 'GET',
                processData: false,
                contentType: false,
                success: function (response) {

                    renderListArticles(response.data);


                    let currentActiveElement = $('#pagination').find('.active');

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

                    $('#pagination .previous').find('.page-link').attr('href', response.prev_page_url);
                    $('#pagination .next').find('.page-link').attr('href', response.next_page_url);

                    if (response.current_page === 1) {
                        $('#pagination .previous').addClass('disabled');
                    }
                    else {
                        $('#pagination .previous').removeClass('disabled');
                    }

                    if (response.current_page === last_page) {
                        !$('#pagination .next').addClass('disabled');
                    }
                    else {
                        !$('#pagination .next').removeClass('disabled');
                    }

                },
                error: function (jqXHR) {
                    console.log(jqXHR.status);
                }
            })

        }
    })

}




function renderListArticles(articles) {
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
                            <li>
                                <a href="articles-show.html"
                                    class="dropdown-item text-info hover-background-color-ccc-important">
                                    <p class="mb-0">
                                        View detail
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="articles-comments.html"
                                    class="dropdown-item text-light hover-background-color-ccc-important">
                                    <p class="mb-0">
                                        View Comments
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="articles-edit.html"
                                    class="dropdown-item text-warning hover-background-color-ccc-important">
                                    <p class="mb-0">
                                        Edit
                                    </p>
                                </a>
                            </li>
                            <li>
                                <button class="dropdown-item text-danger" data-bs-toggle="modal"
                                    data-bs-target="#moveTrashArticle">
                                    <p class="mb-0">
                                        Move To Trash
                                    </p>
                                </button>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        `;
    })

    $('#list-articles').html(listCategories.join(''));
}

init();


$(document).ready(function () {




})
