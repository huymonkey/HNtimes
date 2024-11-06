@extends('admin.layouts.master')

{{-- ================================== --}}
{{--                 CSS                --}}
{{-- ================================== --}}

@push('css_library')
    <!-- Select Plugin -->
    <link href="/admin/assets/plugins/highlight/styles/github-gist.css" rel="stylesheet">
    <link href="/admin/assets/plugins/select2/css/select2.min.css" rel="stylesheet">

    <!-- Text Area -->
    <link href="/admin/assets/plugins/summernote/summernote-lite.min.css" rel="stylesheet">
@endpush

@push('css')
@endpush




{{-- ================================== --}}
{{--                 MAIN               --}}
{{-- ================================== --}}


@section('currentPage')
    @php
        $currentPage = 'articles';
    @endphp
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="page-description page-description-tabbed">
                    <h1>Articles</h1>
                    <ul class="nav nav-tabs mb-3 ps-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#list"
                                type="button" role="tab" aria-controls="list" aria-selected="true">
                                List Articles
                            </button>
                        </li>
                        {{--<li class="nav-item" role="presentation">
                            <button class="nav-link" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending"
                                type="button" role="tab" aria-controls="pending" aria-selected="true">
                                Pending
                                <span class="badge rounded-pill badge-warning ms-1">10</span>
                            </button>
                        </li>--}}
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-flex align-items-center" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#trash" type="button" role="tab" aria-controls="trash"
                                aria-selected="false">
                                Trash
                                <span class="badge rounded-pill badge-danger ms-1">14</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="tab-content" id="myTabContent">
                <!-- PUBLISHES -->
                <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="publishes-tab">
                    <div class="mb-4 row">
                        <!-- Btn create article -->
                        <div class="col-2">
                            <a href="{{ route('admin.articles.create') }}" class="btn btn-success w-100 h-100">
                                <div class="h-100 d-flex align-items-center justify-content-center">
                                    <i class="material-icons-outlined">add</i>
                                    Create Article
                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <select class="filter" class="js-states form-control" tabindex="-1"
                                style="display: none; width: 100%">
                                <option>Sort by: Default</option>
                                <option>Sort by: Title A - Z</option>
                                <option>Sort by: Title Z - A</option>
                                <option>Sort by: Views Low to High</option>
                                <option>Sort by: Views High to Low</option>
                                <option>Sort by: Created latest</option>
                                <option>Sort by: Created oldest</option>
                                <option>Sort by: Updated latest</option>
                                <option>Sort by: Updated oldest</option>
                            </select>
                        </div>
                        <div class="col-4 offset-3">
                            <div class="row g-2">
                                <div class="col-10">
                                    <input type="text" class="form-control form-control-material" aria-describedby="..."
                                        placeholder="Search for title, type...">
                                </div>
                                <div class="col-2">
                                    <button class="btn btn-success w-100 h-100 p-0">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <table class="table table-hover bg-white">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col" class="w-50">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Views</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Updated at</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody id="list-articles">
                            <tr id="list-articles-block">
                                <td></td>
                            </tr>
                            {{--<tr>
                                <td>1</td>
                                <td>
                                    <div class="avatar avatar-xl m-r-xs">
                                        <img src="/admin/assets/images/avatars/avatar6.jpg" alt="">
                                    </div>
                                </td>
                                <td>
                                    Cristiano Ronaldo remains all the rage but Saudi Pro League
                                    needs a title race Cristiano Ronaldo remains all the rage but Saudi
                                    Pro League
                                    needs a title race
                                    <br> <br>
                                    <span class="badge badge-style-light rounded-pill badge-danger me-1">
                                        <div class="d-flex align-items-center">
                                            <span>Feature</span>
                                            <i class="material-icons-outlined">local_fire_department</i>
                                        </div>
                                    </span>
                                    <span class="badge badge-style-light rounded-pill badge-primary me-1">
                                        <div class="d-flex align-items-center">
                                            <span>Trending</span>
                                            <i class="material-icons-outlined">trending_up</i>
                                        </div>
                                    </span>
                                    <span class="badge badge-style-light rounded-pill badge-secondary me-1">
                                        <div class="d-flex align-items-center">
                                            <span>Normal</span>
                                            <i class="material-icons-outlined">more_horiz</i>
                                        </div>

                                    </span>
                                </td>
                                <td>
                                    <!-- <span class="badge rounded-pill badge-secondary">Coming soon</span> -->
                                    <span class="badge rounded-pill badge-success">Published</span>
                                </td>
                                <td>10</td>
                                <td>October 1, 2024</td>
                                <td>October 1, 2024</td>
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
                            </tr>--}}
                        </tbody>
                    </table>

                    <!-- PAGINATE -->
                    <nav aria-label="..." class="mt-4">
                        <ul class="pagination justify-content-end" id="pagination">

                        </ul>
                    </nav>
                </div>

                <!-- PENDING TAB -->
                {{--<div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                    <div class="mb-4 row">
                        <!-- Btn Publish Article -->
                        <div class="col-2">
                            <a href="#!" class="btn btn-success w-100 h-100" data-bs-toggle="modal"
                                data-bs-target="#publishAllArticle">
                                <div class="h-100 d-flex align-items-center justify-content-center">

                                    <i class="material-icons-outlined">publish</i>
                                    Publish All
                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <select class="filter" class="js-states form-control" tabindex="-1"
                                style="display: none; width: 100%">
                                <option>Sort by: Default</option>
                                <optgroup label="Status">
                                    <option>Sort by: Publish</option>
                                    <option>Sort by: Coming soon</option>
                                </optgroup>
                                <optgroup label="Type">
                                    <option>Sort by: Trending</option>
                                    <option>Sort by: Feature</option>
                                    <option>Sort by: Normal</option>
                                </optgroup>
                                <optgroup label="Date">
                                    <option>Sort by: Created at asc</option>
                                    <option>Sort by: Created at desc</option>
                                    <option>Sort by: Updated at asc</option>
                                    <option>Sort by: Updated at desc</option>
                                    <option>Sort by: Published at desc</option>
                                    <option>Sort by: Published at desc</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-4 offset-3">
                            <input type="text" class="form-control form-control-material" aria-describedby="..."
                                placeholder="Search for id, title...">
                        </div>
                    </div>
                    <table class="table table-hover bg-white">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Updated at</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <div class="avatar avatar-xl m-r-xs">
                                        <img src="/admin/assets/images/avatars/avatar6.jpg" alt="">
                                    </div>
                                </td>
                                <td>Cristiano Ronaldo remains all the rage but Saudi Pro League
                                    needs a title race</td>
                                <td>
                                    <!-- <span class="badge rounded-pill badge-secondary">Coming soon</span> -->
                                    <span class="badge rounded-pill badge-warning">Pending</span>
                                </td>
                                <td>October 1, 2024</td>
                                <td>October 1, 2024</td>
                                <td style="width: 1px;">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-secondary btn-burger"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="option">
                                            <li>
                                                <a href="#!"
                                                    class="dropdown-item text-info hover-background-color-ccc-important">
                                                    <p class="mb-0">
                                                        View detail
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="dropdown-item text-success" data-bs-toggle="modal"
                                                    data-bs-target="#publishArticle">
                                                    <p class="mb-0">
                                                        Publish
                                                    </p>
                                                </button>
                                            </li>
                                            <li>
                                                <button class="dropdown-item text-danger" data-bs-toggle="modal"
                                                    data-bs-target="#cancelArticle">
                                                    <p class="mb-0">
                                                        Cancel
                                                    </p>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>--}}

                <!-- TRASH -->
                <div class="tab-pane fade" id="trash" role="tabpanel" aria-labelledby="trash-tab">
                    <!-- Example single danger button -->
                    <!-- Example single danger button -->
                    <div class="mb-4 row">
                        <!-- Btn Publish Article -->
                        <div class="col-2">
                            <button type="button" class="btn btn-warning w-100 h-100" data-bs-toggle="modal"
                                data-bs-target="#restoreAllArticle">
                                <div class="h-100 d-flex align-items-center justify-content-center">
                                    <i class="material-icons-outlined">settings_backup_restore</i>
                                    Restore All
                                </div>
                            </button>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-danger w-100 h-100" data-bs-toggle="modal"
                                data-bs-target="#deleteAllArticle">
                                <div class="h-100 d-flex align-items-center justify-content-center">
                                    <i class="material-icons-outlined">delete_outline</i>
                                    Delete All
                                </div>
                            </button>
                        </div>
                        <div class="col-3">
                            <select class="filter" class="js-states form-control" tabindex="-1"
                                style="display: none; width: 100%">
                                <option>Sort by: Default</option>
                                <optgroup label="Status">
                                    <option>Sort by: Publish</option>
                                    <option>Sort by: Coming soon</option>
                                </optgroup>
                                <optgroup label="Type">
                                    <option>Sort by: Trending</option>
                                    <option>Sort by: Feature</option>
                                    <option>Sort by: Normal</option>
                                </optgroup>
                                <optgroup label="Views">
                                    <option>Sort by: Views asc</option>
                                    <option>Sort by: Views desc</option>
                                </optgroup>
                                <optgroup label="Date">
                                    <option>Sort by: Created at asc</option>
                                    <option>Sort by: Created at desc</option>
                                    <option>Sort by: Updated at asc</option>
                                    <option>Sort by: Updated at desc</option>
                                    <option>Sort by: Published at desc</option>
                                    <option>Sort by: Published at desc</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-4 offset-1">
                            <input type="text" class="form-control form-control-material" aria-describedby="..."
                                placeholder="Search for id, title...">
                        </div>
                    </div>
                    <table class="table table-hover bg-white">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Views</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Updated at</th>
                                <th scope="col">Published at</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <div class="avatar avatar-xl m-r-xs">
                                        <img src="/admin/assets/images/avatars/avatar6.jpg" alt="">
                                    </div>
                                </td>
                                <td>
                                    Cristiano Ronaldo remains all the rage but Saudi Pro League
                                    needs a title race
                                    <br> <br>
                                    <span class="badge badge-style-light rounded-pill badge-danger me-1">
                                        <div class="d-flex align-items-center">
                                            <span>Feature</span>
                                            <i class="material-icons-outlined">local_fire_department</i>
                                        </div>
                                    </span>
                                    <span class="badge badge-style-light rounded-pill badge-primary me-1">
                                        <div class="d-flex align-items-center">
                                            <span>Trending</span>
                                            <i class="material-icons-outlined">trending_up</i>
                                        </div>
                                    </span>
                                    <span class="badge badge-style-light rounded-pill badge-secondary me-1">
                                        <div class="d-flex align-items-center">
                                            <span>Normal</span>
                                            <i class="material-icons-outlined">more_horiz</i>
                                        </div>

                                    </span>
                                </td>
                                <td>
                                    <!-- <span class="badge rounded-pill badge-secondary">Coming soon</span> -->
                                    <span class="badge rounded-pill badge-success">Published</span>
                                </td>
                                <td>10</td>
                                <td>October 1, 2024</td>
                                <td>October 1, 2024</td>
                                <td>October 1, 2024</td>
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
                                                <button href="#!" class="dropdown-item text-warning"
                                                    data-bs-toggle="modal" data-bs-target="#restoreArticle">
                                                    <p class="mb-0">
                                                        Restore
                                                    </p>
                                                </button>
                                            </li>
                                            <li>
                                                <button class="dropdown-item text-danger" data-bs-toggle="modal"
                                                    data-bs-target="#deleteArticle">
                                                    <p class="mb-0">
                                                        Delete
                                                    </p>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <!-- MODAL -->
            <!-- Move Trash Article -->
            <div class="modal fade" id="moveTrashArticle" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>
                                Do you want move article
                                <strong class="text-capitalize fw-bolder">#1</strong>
                                to trash ?
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger">Move to trash</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Publish All Articles -->
            <div class="modal fade" id="publishAllArticle" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>
                                Do you want publish all article ?
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Publish</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Publish Article -->
            <div class="modal fade" id="publishArticle" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>
                                Do you want publish article
                                <strong class="text-capitalize fw-bolder">#1</strong> ?
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Publish</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cancel Article -->
            <div class="modal fade" id="cancelArticle" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>
                                Do you want cancel article
                                <strong class="text-capitalize fw-bolder">#1</strong> ?
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body py-2">
                            <form action="" method="POST">
                                <!-- @csrf -->
                                <div class="mb-2">
                                    <label for="" class="form-label">Reason</label>
                                    <textarea class="form-control"></textarea>
                                    <div class="text-danger mt-2" style="min-height: 18px; font-size: 14px;"></div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Restore All Article -->
            <div class="modal fade" id="restoreAllArticle" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>
                                Do you want restore all article ?
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-warning">Restore</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Delete All Article -->
            <div class="modal fade" id="deleteAllArticle" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>
                                Do you want <strong class="fw-bolder">delete all</strong> article ?
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Restore Article -->
            <div class="modal fade" id="restoreArticle" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>
                                Do you want restore article
                                <strong class="text-capitalize fw-bolder">#1</strong>
                                ?
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-warning">Restore</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Delete Article -->
            <div class="modal fade" id="deleteArticle" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>
                                Do you want delete article
                                <strong class="text-capitalize fw-bolder">#1</strong>
                                ?
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger">Restore</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL -->
        </div>
    </div>
@endsection





{{-- ================================== --}}
{{--                 JS                 --}}
{{-- ================================== --}}

@push('js_library')
    <!-- TAB PLUGIN -->
    <script src="/admin/assets/plugins/highlight/highlight.pack.js"></script>
    <!-- SELECT PLUGIN -->
    <script src="/admin/assets/plugins/select2/js/select2.full.min.js"></script>
    <!-- TEXT AREA -->
    <script src="/admin/assets/plugins/summernote/summernote-lite.min.js"></script>
    <script src="/admin/assets/plugins/blockUI/jquery.blockUI.min.js"></script>
@endpush

@push('js')
    @vite('resources/js/admin/articles/index.js')
@endpush
