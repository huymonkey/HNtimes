@extends('admin.layouts.master')

@push('css_library')
    <!-- SELECT PLUGIN CSS -->
    <link href="/admin/assets/plugins/highlight/styles/github-gist.css" rel="stylesheet">
    <link href="/admin/assets/plugins/select2/css/select2.min.css" rel="stylesheet">
@endpush

@section('currentPage')
    @php
        $currentPage = 'articles';
    @endphp
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="page-description">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Articles</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Comments</li>
                        </ol>
                    </nav>
                    <h1>Article Comments</h1>
                </div>
            </div>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row mb-4">
                <!-- Btn create article -->
                <div class="col-2">
                    <a href="articles-create.html" class="btn btn-danger w-100 h-100">
                        <div class="h-100 d-flex align-items-center justify-content-center">
                            <i class="material-icons-outlined">delete_outline</i>
                            Delete all
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <select id="filter" class="js-states form-control" tabindex="-1" style="display: none; width: 100%">
                        <option>Sort by: Newest</option>
                        <option>Sort by: Lastest</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <div class="avatar avatar-sm avatar-rounded me-2 mb-2">
                                    <img src="/admin/assets/images/avatars/avatar1.jpg">
                                </div>
                                <span class="text-nowrap position-relative">
                                    huymamicoi@gmail.com
                                    <button type="button" class="btn position-absolute" style="right: -52px ; top: -8px;"
                                        data-bs-toggle="modal" data-bs-target="#lockUser">
                                        <i class="material-icons text-danger">
                                            lock
                                        </i>
                                    </button>
                                </span>
                                <!-- <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#unlockUser">
                                            <i class="material-icons text-success">
                                                lock_open
                                            </i>
                                        </button> -->
                            </h5>
                            <p class="card-text mt-4">
                                This is a wider card with supporting text below as a
                                natural lead-in to additional content. This content is a little bit
                                longer.
                                <button type="button" class="btn py-0 px-2" data-bs-toggle="modal"
                                    data-bs-target="#deleteComment">
                                    <i class="material-icons text-danger">
                                        delete
                                    </i>
                                </button>
                            </p>
                            <p class="card-text">
                                <small class="text-muted">Created at 2/10/2024 14:02:00</small>
                            </p>
                        </div>
                        <div class="accordion" id="accordionIconsExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="icons-headingOne">
                                    <button class="accordion-button d-flex align-items-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#icons-collapseOne" aria-expanded="false"
                                        aria-controls="icons-collapseOne">
                                        <i class="material-icons-two-tone">reply</i> Replies <span
                                            class="badge rounded-pill badge-info ms-1">10</span>
                                    </button>
                                </h2>
                                <div id="icons-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="icons-headingOne" data-bs-parent="#accordionIconsExample">
                                    <div class="card-body border-bottom ps-5">
                                        <h5 class="card-title">
                                            <div class="avatar avatar-xs avatar-rounded me-2 mb-2">
                                                <img src="/admin/assets/images/avatars/avatar1.jpg">
                                            </div>
                                            <span class="text-nowrap fs-6 position-relative">
                                                huymamicoi@gmail.com
                                                <button type="button" class="btn position-absolute"
                                                    style="right: -52px ; top: -8px;" data-bs-toggle="modal"
                                                    data-bs-target="#lockUser">
                                                    <i class="material-icons text-danger">
                                                        lock
                                                    </i>
                                                </button>
                                            </span>
                                            <!-- <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#unlockUser">
                                                            <i class="material-icons text-success">
                                                                lock_open
                                                            </i>
                                                        </button> -->
                                        </h5>
                                        <p class="card-text mt-4" style="font-size: 13px;">
                                            This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a
                                            little bit
                                            longer.
                                            <button type="button" class="btn py-0 px-2" data-bs-toggle="modal"
                                                data-bs-target="#deleteComment">
                                                <i class="material-icons text-danger">
                                                    delete
                                                </i>
                                            </button>
                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">Created at 2/10/2024
                                                14:02:00</small>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- MODAL -->
        <!-- Lock User -->
        <div class="modal fade" id="lockUser" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>
                            Do you want lock
                            <strong class="fw-bolder">Nguyen Huu Huy</strong> ?
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn btn-danger">Lock</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  Unlock User -->
        <div class="modal fade" id="unlockUser" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>
                            Do you want unlock
                            <strong class="fw-bolder">Nguyen Huu Huy</strong> ?
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn btn-success">Unlock</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete Comment User -->
        <div class="modal fade" id="deleteComment" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>
                            Do you want delete
                            <strong class="fw-bolder">this comment</strong> ?
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn btn-danger">Yes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL -->
    </div>
@endsection

@push('js_library')
    <!-- SELECT PLUGIN JS -->
    <script src="/admin/assets/plugins/select2/js/select2.full.min.js"></script>
@endpush

@push('js')
    <script>
        $('#filter').select2();
    </script>
@endpush
