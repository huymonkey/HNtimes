@extends('admin.layouts.master')

{{-- ================================== --}}
{{--                 CSS                --}}
{{-- ================================== --}}

@push('css_library')
@endpush

@push('css')
    <style>
        .widget-list-item-icon-header {
            width: 45px;
            height: 45px;
            border-radius: 10px;
            text-align: center;
            margin-right: 10px;
            vertical-align: middle;
            float: left;
            background: #e3e3ff;
            color: #6363ff;
        }
    </style>
@endpush




{{-- ================================== --}}
{{--                 MAIN               --}}
{{-- ================================== --}}


@section('currentPage')
    @php
        $currentPage = 'categories';
    @endphp
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="page-description page-description-tabbed">
                    <h1>Categories</h1>
                    <ul class="nav nav-tabs mb-3 ps-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="list-categories-tab" data-bs-toggle="tab"
                                data-bs-target="#list-categories" type="button" role="tab"
                                aria-controls="list-categories" aria-selected="true">
                                List Categories
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-flex align-items-center" id="trashes-tab" data-bs-toggle="tab"
                                data-bs-target="#trashes" type="button" role="tab" aria-controls="trash"
                                aria-selected="false">
                                Trash
                                <span class="badge rounded-pill badge-danger ms-1" id="sum-trashes"></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="tab-content" id="myTabContent">
                <!-- LIST CATEGORIES -->
                <div class="tab-pane fade show active" id="list-categories" role="tabpanel"
                    aria-labelledby="list-categories-tab">
                    <div class="mb-4">
                        <!-- Btn create category -->
                        <button type="button" class="btn btn-success btn-create-category">
                            <i class="material-icons-outlined">add</i>
                            Create Category
                        </button>
                    </div>
                    <div class="row" id="list-categories-detail">

                    </div>
                </div>

                <!-- TRASH -->
                <div class="tab-pane fade" id="trashes" role="tabpanel" aria-labelledby="trash-tab">
                    <div class="mb-4">
                        <!-- Btn restore all category -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#restoreAllCategory">
                            <i class="material-icons-outlined">settings_backup_restore</i>
                            Restore All
                        </button>
                    </div>
                    <div class="row" id="list-trashes-detail">

                    </div>
                </div>
            </div>

            <!-- MODAL -->
                <!-- Create category -->
                <div class="modal fade" id="createCategory" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered w-50">
                        <div class="modal-content">
                            <form action="" method="POST" id="formCreateCategory">
                                <div class="modal-header">
                                    <h5>Create category</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-2">
                                                <label for="" class="form-label d-block">Image</label>
                                            </div>
                                            <div class="col-10">
                                                <input type="file" class="form-control" name="img_cover">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Ordinal</label>
                                        <input type="number" class="form-control" name="ordinal">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Edit category -->
                <div class="modal fade" id="editCategory" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered w-50">
                        <div class="modal-content">
                            <form action="" method="POST" id="formEditCategory">
                                <div class="modal-header">
                                    <h5>Edit category</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-2">
                                                <label for="" class="form-label d-block">Image</label>
                                                <img src="" alt="" class="avatar avatar-sm img_cover">
                                            </div>
                                            <div class="col-10 mt-2">
                                                <input type="file" class="form-control mt-4" name="img_cover">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Ordinal</label>
                                        <input type="number" class="form-control" name="ordinal">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Move trash category -->
                <div class="modal fade" id="moveTrashCategory" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form action="" method="POST" id="formMoveTrashCategory" data-id="">
                                <div class="modal-header">
                                    <h5>
                                        Do you want move category
                                        <strong class="text-capitalize fw-bolder category-name"></strong>
                                        to trash ?
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Move to trash</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Restore category -->
                <div class="modal fade" id="restoreCategory" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form action="" method="POST" id="formRestoreCategory" data-id="">
                                <div class="modal-header">
                                    <h5>
                                        Do you want restore category
                                        <strong class="text-capitalize fw-bolder category-name"></strong> ?
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-warning">Restore</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Restore all category -->
                <div class="modal fade" id="restoreAllCategory" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form action="" method="POST" id="formRestoreAllCategory">
                                <div class="modal-header">
                                    <h5>
                                        Do you want restore all category ?
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-warning">Restore all</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                <!-- Create New Sub Category -->
                <div class="modal fade" id="createSubCategory" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered w-50">
                        <div class="modal-content">
                            <form action="" method="POST" id="formCreateSubCategory" data-category-id="">
                                <div class="modal-header">
                                    <h5>Create sub category</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div class="mb-3">
                                        <label for="" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Ordinal</label>
                                        <input type="number" class="form-control" name="ordinal">
                                        <div class="invalid-feedback"></div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Edit Sub Category -->
                <div class="modal fade" id="editSubCategory" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered w-50">
                        <div class="modal-content">
                            <form action="" method="POST" id="formEditSubCategory" data-id="">
                                <div class="modal-header">
                                    <h5>Edit sub category</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div class="mb-3">
                                        <label for="" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Ordinal</label>
                                        <input type="number" class="form-control" name="ordinal">
                                        <div class="invalid-feedback"></div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Delete SubCategory -->
                <div class="modal fade" id="deleteSubCategory" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form action="" method="POST" id="formDeleteSubCategory" data-id="">
                                <div class="modal-header">
                                    <h5>
                                        Do you want delete sub category
                                        <strong class="text-capitalize fw-bolder sub-category-name"></strong> ?
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Delete SubCategory Trash -->
                <div class="modal fade" id="deleteSubCategoryTrash" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form action="" method="POST" id="formDeleteSubCategoryTrash" data-id="">
                                <div class="modal-header">
                                    <h5>
                                        Do you want delete sub category
                                        <strong class="text-capitalize fw-bolder sub-category-name"></strong> ?
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
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
    <!-- TAB -->
    <script src="/admin/assets/plugins/highlight/highlight.pack.js"></script>
    <script src="/admin/assets/plugins/blockUI/jquery.blockUI.min.js"></script>
@endpush

@push('js')
    @vite('resources/js/admin/categories.js')
@endpush
