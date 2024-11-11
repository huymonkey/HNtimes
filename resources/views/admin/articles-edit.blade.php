@extends('admin.layouts.master')

{{-- ================================== --}}
{{--                 CSS                --}}
{{-- ================================== --}}

@push('css_library')
    <!-- SELECT PLUGIN CSS -->
    <link href="/admin/assets/plugins/highlight/styles/github-gist.css" rel="stylesheet">
    <link href="/admin/assets/plugins/select2/css/select2.min.css" rel="stylesheet">

    <!-- TEXT AREA CSS -->
    <link href="/admin/assets/plugins/summernote/summernote-lite.min.css" rel="stylesheet">
@endpush

@push('css')
    <style>
        .tags-look .tagify__dropdown__item{
            display: inline-block;
            vertical-align: middle;
            border-radius: 3px;
            padding: .3em .5em;
            border: 1px solid #CCC;
            background: #F3F3F3;
            margin: .2em;
            font-size: .85em;
            color: black;
            transition: 0s;
        }

        .tags-look .tagify__dropdown__item--active{
            border-color: black;
        }

        .tags-look .tagify__dropdown__item:hover{
            background: lightyellow;
            border-color: gold;
        }

        .tags-look .tagify__dropdown__item--hidden {
            max-width: 0;
            max-height: initial;
            padding: .3em 0;
            margin: .2em 0;
            white-space: nowrap;
            text-indent: -20px;
            border: 0;
        }

        .select2-container--default .select2-results__group {
            padding: 6px;
            font-size: 14px;
        }
    </style>
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
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                    <h1>Edit Article</h1>
                </div>
            </div>
        </div>
        <form action="" method="POST" enctype="multipart/form-data" id="form-edit-article">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="accordion accordion-separated" id="accordionSeparatedExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeparatedOne">
                                    <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSeparatedOne" aria-expanded="true"
                                            aria-controls="collapsSeparatedeOne">
                                        #1 Information
                                    </button>
                                </h2>
                                <div id="collapseSeparatedOne" class="accordion-collapse collapse show"
                                     aria-labelledby="headingSeparatedOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4">
                                        <div class="py-2">
                                            <input type="hidden" name="author_id" value="{{  Auth::user()->id }}">
                                            <div>
                                                <div class="row">
                                                    <div class="col-7 mt-2">
                                                        <h5 class="card-title mb-3">Image</h5>
                                                        <img src="" class="img-thumbnail" alt="..." id="img">
                                                        <input type="file" class="form-control mt-2" name="img">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                    <div class="col-5">
                                                        <h5 class="card-title mb-3">Artist</h5>
                                                        <div class="avatar avatar-rounded">
                                                            <img src="" data-bs-toggle="tooltip" data-bs-placement="right"
                                                                 title="" id="user">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <h5 class="card-title mb-3">Title <span class="text-danger ms-1">*</span>
                                                </h5>
                                                <input type="text" class="form-control" placeholder="Title Article..." name="title">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="mt-4">
                                                <h5 class="card-title mb-3">Description</h5>
                                                <textarea class="form-control" style="min-height: 100px;" name="description"></textarea>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="mt-4">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h5 class="card-title mb-3">Type</h5>
                                                        <select class="form-select" name="type" aria-label="Default select example">

                                                        </select>
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                    <div class="col-4 offset-1">
                                                        <h5 class="card-title d-inline">Is Trending</h5>
                                                        <div class="form-check form-switch mt-3">
                                                            <input class="form-check-input" type="checkbox"  id="flexSwitchCheckChecked" name="is_trending" value="1">
                                                            <div class="invalid-feedback"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <h5 class="card-title mb-3">Sub Categories<span class="text-danger ms-1">*</span></h5>
                                                <select class="form-select" tabindex="-1"  style="display: none; width: 100%" multiple name="sub_categories[]">

                                                </select>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="mt-4">
                                                <h5 class="card-title mb-3">Tags</h5>
                                                <input placeholder="tag..." name="tags" class="w-100">
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
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseSeparatedTwo" aria-expanded="false"
                                            aria-controls="collapseSeparatedTwo">
                                        #2 Media
                                    </button>
                                </h2>
                                <div id="collapseSeparatedTwo" class="accordion-collapse collapse show"
                                     aria-labelledby="headingSeparatedTwo" data-bs-parent="#accordionSeparatedExample">
                                    <div class="accordion-body">
                                        <div class="py-2">
                                            <div class="mt-2">
                                                <h5 class="card-title mb-3">Type</h5>
                                                <select class="form-select" aria-label="Default select example" name="media[type]">
                                                    <option selected value="">--Choose Type--</option>
                                                    <option value="video">Video</option>
                                                    <option value="live">Live</option>
                                                </select>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="my-4">
                                                <h5 class="card-title mb-3">File path</h5>
                                                <input type="text" class="form-control" placeholder="File path..." name="media[file_path]">

                                                <div class="invalid-feedback"></div>
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
                                     aria-labelledby="headingSeparatedThree"
                                     data-bs-parent="#accordionSeparatedExample">
                                    <div class="accordion-body">
                                        <div class="py-2">
                                            <div class="mt-2">
                                                <h5 class="card-title mb-3">Title</h5>
                                                <input type="text" class="form-control" placeholder="Title audio..." name="audio[title]">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="my-4">
                                                <h5 class="card-title mb-3">File path</h5>
                                                <div class="w-100" id="audio_file_path">

                                                </div>
                                                <input type="file" class="form-control mt-2" placeholder="File path..." name="audio[file_path]">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <h5 class="card-title mb-3">Content <span class="text-danger ms-1">*</span></h5>
                    <div class="row">
                        <div class="col form-control p-0" name="content">
                            <div id="summernote"></div>
                        </div>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
            </div>
            <div class="text-end">
                <a href="{{ url()->previous() }}" class="btn btn-lg btn-secondary">Back</a>
                <button type="button" class="btn btn-lg btn-success ms-2" id="btn-update">Update</button>
            </div>
        </form>
    </div>
@endsection



{{-- ================================== --}}
{{--                 JS                 --}}
{{-- ================================== --}}

@push('js_library')
    <!-- SELECT PLUGIN JS -->
    <script src="/admin/assets/plugins/select2/js/select2.full.min.js"></script>
    <!-- TEXT AREA JS -->
    <script src="/admin/assets/plugins/summernote/summernote-lite.min.js"></script>
@endpush

@push('js')
    <script>
        var article = {!! json_encode($article) !!};
    </script>
    @vite('resources/js/admin/articles/edit.js')
@endpush
