@extends('layouts.admin-app')

@section('content')
<div class="row page-titles mx-0">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Create New Page</a></li>
    </ol>
</div>

<form method="post" action="{{ route('pages.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xl-8">
            <div class="card h-auto">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" placeholder="Title" name="name" required>
                        </div>
                    </form>
                    <label class="form-label">Description</label>
                    <textarea id="summernote" name="description" required></textarea>
                </div>
            </div>
            <div class="filter cm-content-box box-primary">
                <div class="content-title SlideToolHeader">
                    <div class="cpa"> Slug
                    </div>
                    <div class="tools">
                        <a href="javascript:void(0);" class="expand handle"><i
                            class="fal fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="cm-content-body form excerpt">
                    <div class="card-body">
                        <label class="form-label">Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                </div>
            </div>
            <div class="filter cm-content-box box-primary">
                <div class="content-title SlideToolHeader">
                    <div class="cpa">Author
                    </div>
                    <div class="tools">
                        <a href="javascript:void(0);" class="expand handle"><i
                            class="fal fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="cm-content-body form excerpt">
                    <div class="card-body">
                        <label class="form-label">User</label>
                        <select class="form-control default-select h-auto wide">
                            <option value="{{ Auth::user()->id }}" selected>{{ Auth::user()->email }}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="filter cm-content-box box-primary">
                <div class="content-title SlideToolHeader">
                    <div class="cpa"> Seo
                    </div>
                    <div class="tools">
                        <a href="javascript:void(0);" class="expand handle"><i
                            class="fal fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="cm-content-body form excerpt">
                    <div class="card-body">
                        <label class="form-label">Page Title</label>
                        <input type="text" class="form-control mb-3" placeholder="Page title" name="seo_title">
                        <div class="row">
                            <div class="col-xl-6 col-sm-6">
                                <label class="form-label">Keywords</label>
                                <input type="text" class="form-control mb-3 mb-sm-0" placeholder="Enter meta Keywords" name="seo_keywords">
                            </div>
                            <div class="col-xl-6 col-sm-6">
                                <label class="form-label">Descriptions</label>
                                <textarea class="form-control" rows="3" placeholder="Enter meta Keywords" name="seo_descriptions"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="right-sidebar-sticky">
                <div class="filter cm-content-box box-primary">
                    <div class="content-title SlideToolHeader">
                        <div class="cpa">
                            Published
                        </div>
                        <div class="tools">
                            <a href="javascript:void(0);" class="expand handle"><i
                                class="fal fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="cm-content-body publish-content form excerpt">
                        <div class="card-body py-3">
                            <ul class="list-style-1 block">
                                <li>
                                    <div>
                                        <label class="form-label mb-0 me-2">
                                        <i class="fa-solid fa-key"></i>
                                        Status:
                                        </label>
                                        <span class="font-w500">Published</span>
                                        <a href="javascript:void(0);"
                                            class="badge badge-primary light ms-3" id="headingOne"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-controls="collapseOne" aria-expanded="true"
                                            role="button">Edit</a>
                                    </div>
                                    <div id="collapseOne" class="collapse"
                                        aria-labelledby="headingOne"
                                        data-bs-parent="#accordion-one">
                                        <div class=" border rounded p-3 mt-3">
                                            <div class="mb-2">
                                                <label class="form-label w-100">Content Type</label>
                                                <select class="form-control solid default-select" name="status">
                                                    <option value="">Select Status</option>
                                                    <option value="0" selected>Published</option>
                                                    <option value="1">Trash</option>
                                                </select>
                                            </div>
                                            <div class="mt-3">
                                                <button class="btn btn-primary btn-sm me-2"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne"
                                                    aria-expanded="false"
                                                    aria-controls="collapseOne">
                                                Ok
                                                </button>
                                                <button class="btn btn-danger light btn-sm"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne"
                                                    aria-expanded="false"
                                                    aria-controls="collapseOne">
                                                Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="border-bottom-0">
                                    <div>
                                        <label class="form-label mb-0 me-2">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        Published
                                        </label>
                                        <span class="font-w500">on : {{\Illuminate\Support\Carbon::parse(now())->format("Y-m-d")}}</span>
                                        <a href="javascript:void(0);"
                                            class="badge badge-primary light ms-3" id="headingthree"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapsethree"
                                            aria-controls="collapsethree" aria-expanded="true"
                                            role="button">Edit</a>
                                    </div>
                                    <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-bs-parent="#accordion-one">
                                        <div class="p-3 mt-3 border rounded">
                                            <div class="input-hasicon">
                                                <input type="date" name="published_date" class="form-control solid" value='{{\Illuminate\Support\Carbon::parse(now())->format("Y-m-d")}}'>
                                                <div class="icon"><i class="far fa-calendar"></i></div>
                                            </div>
                                            <div class="mt-3">
                                                <button class="btn btn-primary btn-sm me-2"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsethree"
                                                    aria-expanded="false"
                                                    aria-controls="collapsethree">
                                                Ok
                                                </button>
                                                <button class="btn btn-danger light btn-sm"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsethree"
                                                    aria-expanded="false"
                                                    aria-controls="collapsethree">
                                                Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer border-top text-end py-3 ">
                            <button type="submit" class="btn btn-primary btn-sm">Publish</button>
                        </div>
                    </div>
                </div>
                <div class="filter cm-content-box box-primary">
                    <div class="content-title SlideToolHeader">
                        <div class="cpa">
                            Page Type
                        </div>
                        <div class="tools">
                            <a href="javascript:void(0);" class="expand handle"><i
                                class="fal fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="cm-content-body publish-content form excerpt">
                        <div class="card-body">
                            <label class="form-label">Content Type</label>
                            <select class="form-control default-select h-auto wide"
                                aria-label="Default select example">
                                <option Value="1" selected>Page</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="filter cm-content-box box-primary">
                    <div class="content-title SlideToolHeader">
                        <div class="cpa">
                            Featured Image
                        </div>
                        <div class="tools">
                            <a href="javascript:void(0);" class="expand handle"><i
                                class="fal fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="cm-content-body publish-content form excerpt">
                        <div class="card-body">
                            <div class="avatar-upload d-flex align-items-center">
                                <div class=" position-relative ">
                                    <div class="avatar-preview">
                                        <div id="imagePreview" style="background-image: url({{ asset('images/no-img-avatar.png') }});"></div>
                                    </div>
                                    <div class="change-btn d-flex align-items-center flex-wrap">
                                        <input type='file' class="form-control d-none" id="imageUpload" name="image">
                                        <label for="imageUpload" class="btn btn-primary light ms-0">Select Image</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
@push('scripts')
<script>
    $('.custom-field').click(function(){
        $('#exampleModalCenter').modal('show');
    });
    $(document).ready(function(){
        $('.repeater').repeater();
        $('#section-type').change(function(){
            if(this.value == 3){
                $('.repeater-wrapper').show();
            }else{
                $('.repeater-wrapper').hide();
            }
        });
    });
</script>
@endpush