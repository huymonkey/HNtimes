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
                            <li class="breadcrumb-item"><a href="#">Articles</a></li>
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
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h5 class="card-title mb-3">Image</h5>
                                                        <img src="/admin/assets/images/world.jpg" class="img-thumbnail"
                                                            alt="...">
                                                    </div>
                                                    <div class="col-5 offset-3">
                                                        <h5 class="card-title mb-3">Artist</h5>
                                                        <div class="avatar avatar-rounded">
                                                            <img src="/admin/assets/images/avatars/avatar1.jpg"
                                                                data-bs-toggle="tooltip" data-bs-placement="right"
                                                                title="Peter Griffin">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-9 offset-3 text-danger" style="height: 23px;"></div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title mb-3">Title</h5>
                                                <input type="text" class="form-control form-control-solid-bordered"
                                                    placeholder="Title Article..." disabled>
                                                <div class="text-danger mt-2" style="min-height: 18px; font-size: 14px;">
                                                </div>

                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title mb-3">Description</h5>
                                                <textarea name="" class="form-control form-control-solid-bordered" style="min-height: 100px;" disabled></textarea>
                                                <div class="text-danger mt-2" style="min-height: 18px; font-size: 14px;">
                                                </div>

                                            </div>
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h5 class="card-title mb-3">Type</h5>
                                                        <select class="form-select" aria-label="Default select example"
                                                            disabled>
                                                            <option selected disabled>--Choose Type--
                                                            </option>
                                                            <option value="1">Feature</option>
                                                            <option value="2">Normal</option>
                                                        </select>
                                                        <div class="text-danger mt-2"
                                                            style="min-height: 18px; font-size: 14px;">
                                                        </div>
                                                    </div>
                                                    <div class="col-4 offset-1">
                                                        <h5 class="card-title d-inline">Is Trending</h5>
                                                        <div class="form-check form-switch mt-3">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked disabled>
                                                        </div>
                                                        <div class="text-danger mt-2"
                                                            style="min-height: 18px; font-size: 14px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title mb-3">Tags</h5>
                                                <input type="text" class="form-control" placeholder="tag..."
                                                    aria-describedby="tagHelp" disabled>
                                                <div id="tagHelp" class="form-text">Tag feature: #world
                                                    #feature</div>
                                                <div class="text-danger mt-2" style="min-height: 18px; font-size: 14px;">
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
                                <div id="collapseSeparatedTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeparatedTwo" data-bs-parent="#accordionSeparatedExample">
                                    <div class="accordion-body">
                                        <div>
                                            <div class="mb-3">
                                                <h5 class="card-title mb-3">Type</h5>
                                                <select class="form-select" aria-label="Default select example" disabled>
                                                    <option selected disabled>--Choose Type--</option>
                                                    <option value="1">Video</option>
                                                    <option value="2">Live</option>
                                                </select>
                                                <div class="text-danger mt-2" style="min-height: 18px; font-size: 14px;">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title mb-3">File fath</h5>
                                                <input type="text" class="form-control form-control-solid-bordered"
                                                    placeholder="File fath..." disabled>
                                                <div class="text-danger mt-2" style="min-height: 18px; font-size: 14px;">
                                                </div>
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
                                <div id="collapseSeparatedThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeparatedThree" data-bs-parent="#accordionSeparatedExample">
                                    <div class="accordion-body">
                                        <div>
                                            <div class="mb-3">
                                                <h5 class="card-title mb-3">Title</h5>
                                                <input type="text" class="form-control form-control-solid-bordered"
                                                    placeholder="Title audio..." disabled>
                                                <div class="text-danger mt-2" style="min-height: 18px; font-size: 14px;">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title mb-3">File path</h5>
                                                <div class="w-100">
                                                    <audio controls>
                                                        <source src="/admin/assets/img/audio1.mp3"
                                                            type="audio/mpeg">
                                                    </audio>
                                                </div>
                                                <div class="text-danger mt-2" style="min-height: 18px; font-size: 14px;">
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
                                <div class="card-body">
                                    Hello Summernote
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

@endpush
