@extends('layouts.admin-app')

@section('content')
<div class="row page-titles mx-0">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Page - {{ $data->name }}</a></li>
    </ol>
</div>

<form method="post" action="{{ route('pages.update', $data->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xl-8">
            <div class="card h-auto">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" placeholder="Title" name="name" value="{{ old('name', $data->name) }}" required>
                    </div>
                    <label class="form-label">Description</label>
                    <textarea id="summernote" name="description" required>{!! old('description', $data->description) !!}</textarea>
                </div>
            </div>
            @foreach($data->sections as $key => $value)
            <div class="filter cm-content-box box-primary">
                <div class="cm-content-body form excerpt">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-4 col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Name" value="{{ $value->name }}">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label">Slug</label>
                                    <input type="text" class="form-control" placeholder="Slug" value="{{ $value->slug }}">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label">Type</label>
                                    <input type="text" class="form-control" placeholder="Type" value="{{ $value->get_type() }}">
                                </div>
                            </div>
                            <div class="col-xl-12 col-sm-12">
                                <div class="mb-3">
                                    @if($value->type != 3)
                                    <label class="form-label">Value</label>
                                    @endif
                                    @if($value->type == 0)
                                    <input type="text" class="form-control" name="section[{{ $value->id }}]" value="">
                                    @elseif($value->type == 1)
                                    <textarea class="form-control summernote" name="section[{{ $value->id }}]" id=""></textarea>
                                    @elseif($value->type == 2)
                                    <input type="file" class="form-control dropify" name="section[{{ $value->id }}]">
                                    @elseif($value->type == 3)
                                    <div class="repeater">
                                        <div class="text-end mb-3">
                                            <button class="btn btn-primary" data-repeater-create type="button">Add Section</button>
                                        </div>
                                        <div data-repeater-list="group" class="row">
                                            <div data-repeater-item class="col-md-6">
                                                <div class="card-box mb-3">
                                                    @foreach($value->repeator_section as $inner_key => $inner_value)
                                                    <div class="mb-3">
                                                        <label class="form-label">{{ $inner_value->name }}</label>
                                                        @if($inner_value->type == 0)
                                                        <input type="text" class="form-control" name="section[{{$inner_value->id}}]" value="" data-id="{{ $inner_value->id }}">
                                                        @elseif($inner_value->type == 1)
                                                        <textarea class="form-control summernote" name="section[{{$inner_value->id}}]" id="" data-id="{{ $inner_value->id }}"></textarea>
                                                        @elseif($inner_value->type == 2)
                                                        <input type="file" class="form-control dropify" name="section[{{$inner_value->id}}]" data-id="{{ $inner_value->id }}">
                                                        @endif
                                                    </div>
                                                    @endforeach
                                                    <div class="text-end">
                                                        <button data-repeater-delete type="button" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="filter cm-content-box box-primary">
                <div class="cm-content-body form excerpt">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary mt-3 mt-sm-0 custom-field">Add Custom Field</button>
                    </div>
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
                        <input type="text" class="form-control" name="slug" value="{{ old('slug', $data->slug) }}">
                    </div>
                </div>
            </div>
            <div class="filter cm-content-box box-primary">
                <div class="content-title SlideToolHeader">
                    <div class="cpa">Author
                    </div>
                    <div class="tools">
                        <a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
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
                        <a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="cm-content-body form excerpt">
                    <div class="card-body">
                        <label class="form-label">Page Title</label>
                        <input type="text" class="form-control mb-3" placeholder="Page title" name="seo_title" value="{{ old('seo_title', $data->seo_title) }}">
                        <div class="row">
                            <div class="col-xl-6 col-sm-6">
                                <label class="form-label">Keywords</label>
                                <input type="text" class="form-control mb-3 mb-sm-0" placeholder="Enter meta Keywords" name="seo_keywords" value="{{ old('seo_keywords', $data->seo_keywords) }}">
                            </div>
                            <div class="col-xl-6 col-sm-6">
                                <label class="form-label">Descriptions</label>
                                <textarea class="form-control" rows="3" placeholder="Enter meta Keywords" name="seo_descriptions">{{ old('seo_descriptions', $data->seo_descriptions) }}</textarea>
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
                                                    <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Published</option>
                                                    <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Trash</option>
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
                                        <span class="font-w500">on : {{\Illuminate\Support\Carbon::parse($data->published_date)->format("Y-m-d")}}</span>
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
                                                <input type="date" name="published_date" class="form-control solid" value='{{\Illuminate\Support\Carbon::parse($data->published_date)->format("Y-m-d")}}'>
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
                                        <div id="imagePreview" style="background-image: url({{ asset($data->image) }});"></div>
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

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="post" action="{{ route('sections.store') }}" id="section-add">
                @csrf
                <div class="loader">
                    <img src="{{ asset('images/loader.gif') }}" alt="Loader">
                </div>
                <input type="hidden" name="page_id" value="{{ $data->id }}">
                <div class="modal-header">
                    <h5 class="modal-title">Add Custom Field</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Type</label>
                            <select name="type" id="section-type" class="form-control" required>
                                <option value="0">Text</option>
                                <option value="1">Textarea</option>
                                <option value="2">Image</option>
                                <option value="3">Repeater</option>
                            </select>
                        </div>
                        <div class="repeater-wrapper">
                            <div class="col-md-12 mb-2">
                                <h5>Repeater</h5>
                            </div>
                            <div class="repeater">
                                <div data-repeater-list="section">
                                    <div data-repeater-item class="row align-items-end mb-3">
                                        <div class="col-md-5">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control"/>
                                        </div>
                                        <div class="col-md-5">
                                            <label class="form-label">Type</label>
                                            <select name="type" id="type" class="form-control">
                                                <option value="0">Text</option>
                                                <option value="1">Textarea</option>
                                                <option value="2">Image</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button data-repeater-delete type="button" class="btn btn-danger btn-sm content-icon w-100" style="margin-bottom: 1px;">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" data-repeater-create class="btn btn-primary btn-sm content-icon">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $('.custom-field').click(function(){
        $('#exampleModalCenter').modal('show');
    });
    $(document).ready(function(){
        $('.repeater').repeater({
            show: function () {
                var repeater_form = this;
                $(this).parent().prev().find('button').prop('disabled', true);
                var array = [];
                $(this).prev().find("[data-id]").each(function(e){
                    array.push($(this).data('id'));
                });
                console.log(array);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url : "{{ route('sections.store') }}",
                    data : {'section_id' : array, 'page_edit' : 1},
                    type : 'POST',
                    dataType : 'json',
                    success : function(result){
                        console.log(result.status);
                        if(result.status){
                            $(repeater_form).slideDown();
                            $(repeater_form).parent().prev().find('button').prop('disabled', true);
                        }
                    }
                });
            },
        });
        $('#section-type').change(function(){
            if(this.value == 3){
                $('.repeater-wrapper').show();
            }else{
                $('.repeater-wrapper').hide();
            }
        });
        $('#section-add').submit(function(e){
            $('.loader').css('display', 'flex');
            e.preventDefault();
            $.ajax({
                type:'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success:function(data) {
                    if(data.status){
                        $('.loader').hide();
                        $('#exampleModalCenter').modal('hide');
                    }
                }
            });
        });
    });
</script>
@endpush