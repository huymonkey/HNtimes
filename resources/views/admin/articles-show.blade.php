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
                            <li class="breadcrumb-item"><a href="{{ route('admin.articles') }}">Articles</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Show</li>
                        </ol>
                    </nav>
                    <h1>Show Article</h1>
                </div>
            </div>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="accordion accordion-separated" id="accordionSeparatedExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeparatedOne">
                                    <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeparatedOne" aria-expanded="true"
                                        aria-controls="collapsSeparatedeOne">
                                        #1 Infomation
                                    </button>
                                </h2>
                                <div id="collapseSeparatedOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingSeparatedOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4">
                                        <div>
                                            <div class="mb-4">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h5 class="card-title mb-3">Image</h5>
                                                        <img src="" class="img-thumbnail" alt="..." id="img">
                                                    </div>
                                                    <div class="col-5 offset-3">
                                                        <h5 class="card-title mb-3">Artist</h5>
                                                        <div class="avatar avatar-rounded">
                                                            <img src="" data-bs-toggle="tooltip" data-bs-placement="right"
                                                                title="" id="user">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <h5 class="card-title mb-3">Title</h5>
                                                <input type="text" class="form-control form-control-solid-bordered" id="title" disabled>
                                            </div>
                                            <div class="mb-4">
                                                <h5 class="card-title mb-3">Description</h5>
                                                <textarea id="description" class="form-control form-control-solid-bordered" style="min-height: 100px;" disabled></textarea>
                                            </div>
                                            <div class="mb-4">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h5 class="card-title mb-3">Type</h5>
                                                        <select id="type" class="form-select" aria-label="Default select example" disabled>

                                                        </select>
                                                    </div>
                                                    <div class="col-4 offset-1">
                                                        <h5 class="card-title d-inline">Is Trending</h5>
                                                        <div class="form-check form-switch mt-3">
                                                            <input id="is_trending" class="form-check-input" type="checkbox" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <h5 class="card-title mb-3">Sub Categories</h5>
                                                <select id="sub_categories" class="form-select" tabindex="-1"  style="display: none; width: 100%" multiple disabled>

                                                </select>
                                            </div>
                                            <div class="mb-4">
                                                <h5 class="card-title mb-3">Tags</h5>
                                                <input class="w-100" id="tags" disabled>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="my-4">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h5 class="card-title mb-2">Created at</h5>
                                                        <p id="created_at"></p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="card-title mb-2">Updated at</h5>
                                                        <p id="updated_at"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeparatedTwo">
                                    <button class="accordion-button collapsed fs-4" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSeparatedTwo"
                                        aria-expanded="false" aria-controls="collapseSeparatedTwo">
                                        #2 Media
                                    </button>
                                </h2>
                                <div id="collapseSeparatedTwo" class="accordion-collapse collapse show"
                                    aria-labelledby="headingSeparatedTwo" data-bs-parent="#accordionSeparatedExample">
                                    <div class="accordion-body">
                                        <div>
                                            <div class="mb-3">
                                                <h5 class="card-title mb-3">Type</h5>
                                                <select id="media_type" class="form-select" aria-label="Default select example" disabled>
                                                    <option value=""></option>
                                                    <option value="video">Video</option>
                                                    <option value="live">Live</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title mb-3">File path</h5>
                                                <input id="media_file_path" type="text" class="form-control form-control-solid-bordered" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeparatedThree">
                                    <button class="accordion-button collapsed fs-4" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSeparatedThree"
                                        aria-expanded="false" aria-controls="collapseSeparatedThree">
                                        #3 Audio
                                    </button>
                                </h2>
                                <div id="collapseSeparatedThree" class="accordion-collapse collapse show"
                                    aria-labelledby="headingSeparatedThree" data-bs-parent="#accordionSeparatedExample">
                                    <div class="accordion-body">
                                        <div>
                                            <div class="mb-3">
                                                <h5 class="card-title mb-3">Title</h5>
                                                <input id="audio_title" type="text" class="form-control form-control-solid-bordered" disabled>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title mb-3">File path</h5>
                                                <div class="w-100" id="audio_file_path">
                                                    <input type="text" disabled class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <h5 class="card-title mb-3">Content</h5>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body" id="content">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection





{{-- ================================== --}}
{{--                 JS                 --}}
{{-- ================================== --}}

@push('js_library')
    <!-- SELECT PLUGIN -->
    <script src="/admin/assets/plugins/select2/js/select2.full.min.js"></script>
@endpush

@push('js')
    <script>
        var article = {!! json_encode($article) !!};
    </script>
    @vite('resources/js/admin/articles/show.js')
@endpush
