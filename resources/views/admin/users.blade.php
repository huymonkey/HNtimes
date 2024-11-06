@extends('admin.layouts.master')

{{-- ================================== --}}
{{--                 CSS                --}}
{{-- ================================== --}}

@push('css_library')
    <!-- Select Plugin -->
    <link href="/admin/assets/plugins/highlight/styles/github-gist.css" rel="stylesheet">
    <link href="/admin/assets/plugins/select2/css/select2.min.css" rel="stylesheet">
@endpush

@push('css')
@endpush




{{-- ================================== --}}
{{--                 MAIN               --}}
{{-- ================================== --}}


@section('currentPage')
    @php
        $currentPage = 'users';
    @endphp
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="page-description page-description-tabbed">
                    <h1>Users</h1>
                    <ul class="nav nav-tabs mb-3 ps-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="list-tab" data-bs-toggle="tab" data-bs-target="#list"
                                type="button" role="tab" aria-controls="list" aria-selected="true">
                                List Users
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="lock-tab" data-bs-toggle="tab" data-bs-target="#lock"
                                type="button" role="tab" aria-controls="lock" aria-selected="true">
                                Lock
                                <span class="badge rounded-pill badge-warning ms-1">10</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="tab-content" id="myTabContent">
                <!-- LIST USERS -->
                <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
                    <div class="mb-4 row">
                        <!-- Btn create user -->
                        <div class="col-2">
                            <button class="btn btn-success w-100 h-100" data-bs-toggle="modal" data-bs-target="#createUser">
                                <div class="h-100 d-flex align-items-center justify-content-center">
                                    <i class="material-icons-outlined">add</i>
                                    Create User
                                </div>
                            </button>
                        </div>
                        <div class="col-3">
                            <select class="filter" class="js-states form-control" tabindex="-1"
                                style="display: none; width: 100%">
                                <option>Sort by: Default</option>
                                <optgroup label="Role">
                                    <option>Sort by: Admin</option>
                                    <option>Sort by: Columnist</option>
                                    <option>Sort by: Reader</option>
                                </optgroup>
                                <optgroup label="Date">
                                    <option>Sort by: Created at asc</option>
                                    <option>Sort by: Created at desc</option>
                                    <option>Sort by: Updated at asc</option>
                                    <option>Sort by: Updated at desc</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-4 offset-3">
                            <input type="text" class="form-control form-control-material" aria-describedby="..."
                                placeholder="Search for id, name, email...">
                        </div>

                    </div>
                    <table class="table table-hover bg-white">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Avatar</th>
                                <th scope="col">User info</th>
                                <th scope="col">Role</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Updated at</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td width="1px">
                                    <div class="avatar avatar-rounded">
                                        <img src="/admin/assets/images/avatars/avatar1.jpg">
                                    </div>
                                </td>
                                <td>
                                    <strong>huymamicoi@gmail.com</strong>
                                    <br>
                                    Nguyen Huu Huy
                                </td>
                                <td>
                                    <span class="badge rounded-pill badge-dark">Admin</span>
                                    <span class="badge rounded-pill badge-warning">Columnist</span>
                                    <span class="badge rounded-pill badge-secondary">Reader</span>
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
                                                <button data-bs-toggle="modal" data-bs-target="#viewUser"
                                                    class="dropdown-item text-info hover-background-color-ccc-important">
                                                    <p class="mb-0">
                                                        View detail
                                                    </p>
                                                </button>
                                            </li>
                                            <li>
                                                <button data-bs-toggle="modal" data-bs-target="#editUser"
                                                    class="dropdown-item text-warning hover-background-color-ccc-important">
                                                    <p class="mb-0">
                                                        Edit
                                                    </p>
                                                </button>
                                            </li>
                                            <li>
                                                <button class="dropdown-item text-danger" data-bs-toggle="modal"
                                                    data-bs-target="#lockUser">
                                                    <p class="mb-0">
                                                        Lock
                                                    </p>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <!-- PAGINATE -->
                    <nav aria-label="..." class="mt-4">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- LOCK TAB -->
                <div class="tab-pane fade" id="lock" role="tabpanel" aria-labelledby="lock-tab">
                    <div class="mb-4 row">
                        <!-- Btn create user -->
                        <div class="col-2">
                            <button class="btn btn-success w-100 h-100">
                                <div class="h-100 d-flex align-items-center justify-content-center">
                                    <i class="material-icons-outlined">lock_open</i>
                                    Unlock All User
                                </div>
                            </button>
                        </div>
                        <div class="col-3">
                            <select class="filter" class="js-states form-control" tabindex="-1"
                                style="display: none; width: 100%">
                                <option>Sort by: Default</option>
                                <optgroup label="Role">
                                    <option>Sort by: Admin</option>
                                    <option>Sort by: Columnist</option>
                                    <option>Sort by: Reader</option>
                                </optgroup>
                                <optgroup label="Date">
                                    <option>Sort by: Created at asc</option>
                                    <option>Sort by: Created at desc</option>
                                    <option>Sort by: Updated at asc</option>
                                    <option>Sort by: Updated at desc</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-4 offset-3">
                            <input type="text" class="form-control form-control-material" aria-describedby="..."
                                placeholder="Search for id, name, email...">
                        </div>

                    </div>
                    <table class="table table-hover bg-white">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Avatar</th>
                                <th scope="col">User info</th>
                                <th scope="col">Role</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Updated at</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td width="1px">
                                    <div class="avatar avatar-rounded">
                                        <img src="/admin/assets/images/avatars/avatar1.jpg">
                                    </div>
                                </td>
                                <td>
                                    <strong>huymamicoi@gmail.com</strong>
                                    <br>
                                    Nguyen Huu Huy
                                </td>
                                <td>
                                    <span class="badge rounded-pill badge-dark">Admin</span>
                                    <span class="badge rounded-pill badge-warning">Columnist</span>
                                    <span class="badge rounded-pill badge-secondary">Reader</span>
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
                                                <button data-bs-toggle="modal" data-bs-target="#viewUser"
                                                    class="dropdown-item text-info hover-background-color-ccc-important">
                                                    <p class="mb-0">
                                                        View detail
                                                    </p>
                                                </button>
                                            </li>
                                            <li>
                                                <button class="dropdown-item text-success" data-bs-toggle="modal"
                                                    data-bs-target="#unlockUser">
                                                    <p class="mb-0">
                                                        Unlock
                                                    </p>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <!-- PAGINATE -->
                    <nav aria-label="..." class="mt-4">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- MODAL -->
            <!-- Create User -->
            <div class="modal fade" id="createUser" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered w-50">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>Create user</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                <!-- @csrf -->
                                <div class="mb-2">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-solid-bordered">
                                    <div class="text-danger mt-2" style="min-height: 18px; font-size: 14px;"></div>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="form-control form-control-solid-bordered">
                                    <div class="text-danger mt-2" style="min-height: 18px; font-size: 14px;"></div>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" class="form-control form-control-solid-bordered">
                                    <div class="text-danger mt-2" style="min-height: 18px; font-size: 14px;"></div>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Role</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected disabled>--Choose Role--</option>
                                        <option value="1">Admin</option>
                                    </select>
                                    <div class="text-danger mt-2" style="min-height: 18px; font-size: 14px;"></div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Create</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- View User -->
            <div class="modal fade" id="viewUser" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered w-50">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>View user <span><strong class="fw-bolder">Nguyen Huu Huy</strong></span></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                <!-- @csrf -->
                                <div class="mb-2">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="" class="form-label d-block">Avatar</label>
                                            <div class="avatar avatar-rounded">
                                                <img src="/admin/assets/images/world.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <label for="" class="form-label">Name</label>
                                            <input type="text" class="form-control form-control-solid-bordered"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-10 offset-2 text-danger" style="height: 23px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-solid-bordered" disabled>
                                    <div class="text-danger mt-2" style="min-height: 18px; font-size: 14px;"></div>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Role</label>
                                    <select class="form-select" aria-label="Default select example" disabled>
                                        <option selected disabled>--Choose Role--</option>
                                        <option value="1">Admin</option>
                                    </select>
                                    <div class="text-danger mt-2" style="min-height: 18px; font-size: 14px;"></div>
                                </div>
                                <div class="mb-2">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="" class="form-label">Created at</label>
                                            <p>10/2/2024 14:02:00</p>
                                        </div>
                                        <div class="col-6">
                                            <label for="" class="form-label">Updated at</label>
                                            <p>10/2/2024 14:02:00</p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Edit User -->
            <div class="modal fade" id="editUser" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered w-50">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>Edit user <span><strong class="fw-bolder">Nguyen Huu Huy</strong></span></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                <!-- @csrf -->
                                <div class="mb-2">
                                    <div class="row">
                                        <div class="col-2">
                                            <label for="" class="form-label d-block">Avatar</label>
                                            <div class="avatar avatar-sm">
                                                <img src="/admin/assets/images/world.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-10 d-flex align-items-end">
                                            <input type="file" class="form-control form-control-solid-bordered">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-10 offset-2 text-danger" style="height: 23px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-solid-bordered">
                                    <div class="text-danger mt-2" style="min-height: 18px; font-size: 14px;"></div>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="form-control form-control-solid-bordered">
                                    <div class="text-danger mt-2" style="min-height: 18px; font-size: 14px;"></div>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" class="form-control form-control-solid-bordered">
                                    <div class="text-danger mt-2" style="min-height: 18px; font-size: 14px;"></div>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Role</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected disabled>--Choose Role--</option>
                                        <option value="1">Admin</option>
                                    </select>
                                    <div class="text-danger mt-2" style="min-height: 18px; font-size: 14px;"></div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Lock User -->
            <div class="modal fade" id="lockUser" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>
                                Do you want lock
                                <strong class="fw-bolder">Nguyen Huu Huy</strong> ?
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <button type="button" class="btn btn-success">Unlock</button>
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
    <!-- TAB -->
    <script src="/admin/assets/plugins/highlight/highlight.pack.js"></script>
    <!-- SELECT PLUGIN -->
    <script src="/admin/assets/plugins/select2/js/select2.full.min.js"></script>
@endpush

@push('js')
    <script>
        $('.filter').select2();
    </script>
@endpush
