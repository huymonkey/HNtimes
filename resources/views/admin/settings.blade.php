@extends('admin.layouts.master')

{{-- ================================== --}}
{{--                 CSS                --}}
{{-- ================================== --}}

@push('css_library')
@endpush

@push('css')
@endpush




{{-- ================================== --}}
{{--                 MAIN               --}}
{{-- ================================== --}}


@section('currentPage')
    @php
        $currentPage = 'settings';
    @endphp
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="page-description page-description-tabbed">
                    <h1>Settings</h1>

                    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="account-tab" data-bs-toggle="tab" data-bs-target="#account"
                                type="button" role="tab" aria-controls="hoaccountme"
                                aria-selected="true">Account</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security"
                                type="button" role="tab" aria-controls="security"
                                aria-selected="false">Security</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="settingsName" class="form-label">Name</label>
                                        <input type="email" class="form-control" id="settingsName"
                                            aria-describedby="settingsEmailHelp">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="settingsAvatar" class="form-label">Avatar</label>
                                        <input type="file" class="form-control" id="settingsAvatar">
                                    </div>
                                </div>
                                <div class="row m-t-lg">
                                    <div class="col">
                                        <a href="#" class="btn btn-primary m-t-sm">Update</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-t-xxl">
                                    <div class="col-md-6">
                                        <label for="settingsCurrentPassword" class="form-label">Current Password</label>
                                        <input type="password" class="form-control"
                                            aria-describedby="settingsCurrentPassword"
                                            placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                                        <div id="settingsCurrentPassword" class="form-text">Never share your password with
                                            anyone.</div>
                                    </div>
                                </div>
                                <div class="row m-t-xxl">
                                    <div class="col-md-6">
                                        <label for="settingsNewPassword" class="form-label">New Password</label>
                                        <input type="password" class="form-control" aria-describedby="settingsNewPassword"
                                            placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                                    </div>
                                </div>
                                <div class="row m-t-xxl">
                                    <div class="col-md-6">
                                        <label for="settingsConfirmPassword" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control"
                                            aria-describedby="settingsConfirmPassword"
                                            placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                                    </div>
                                </div>
                                <div class="row m-t-xxl">
                                    <div class="col-md-6">
                                        <label for="settingsEmailCode" class="form-label">Email Code</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" aria-describedby="settingsEmailCode"
                                                placeholder="&#9679;&#9679;&#9679;&#9679;">
                                            <button class="btn btn-primary btn-style-light"
                                                id="settingsResentEmailCode">Send</button>
                                        </div>
                                        <div id="settingsSmsCode" class="form-text">Code will be sent to the email from your
                                            account.</div>
                                    </div>
                                </div>
                                <div class="row m-t-lg">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="settingsPasswordLogout" checked>
                                            <label class="form-check-label" for="settingsPasswordLogout">
                                                Log out from all current sessions
                                            </label>
                                        </div>
                                        <a href="#" class="btn btn-primary m-t-sm">Change Password</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection





{{-- ================================== --}}
{{--                 JS                 --}}
{{-- ================================== --}}

@push('js_library')
    <!-- TAB -->
    <script src="/admin/assets/plugins/highlight/highlight.pack.js"></script>
@endpush

@push('js')
@endpush
