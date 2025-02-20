@extends('layouts.admin-app')

@section('content')
<style>
    .badge p a{
        color: white;
    }
</style>
<div class="row page-titles mx-0">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Documents</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">All Documents</a></li>
    </ol>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p class="mb-0">{{ $message }}</p>
</div>
@endif

<!-- row -->
<div class="row">
    @foreach ($data as $key => $value)
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">{{ $value->name }}</h5>
                <div class="status-wrapper">
                    <span class="badge {{ $value->find_status_class() }} badge-sm">{{ $value->find_status() }}</span>
                </div>
            </div>
            @if(!Auth::user()->hasRole('User'))
            <div class="card-header">
                <p class="mb-0">{{ $value->user->name }}<br>{{ $value->user->email }}</p>
            </div>
            @endif
            <div class="card-body-status card-body badge {{ $value->file_path != null ? $value->find_status_class() : '' }}" style="border-radius: 0;">
                <div class="output text-start">
                    @if($value->file_path != null)
                    <p class="mb-0"><a href="{{ asset($value->file_path) }}" target="_blank">Click here to preview the file</a> <a href="{{ asset($value->file_path) }}" download><i class="fa-solid fa-download"></i></a></p>
                    @endif
                </div>
            </div>
            @if($value->comments != null)
            <div class="card-body">
                <p class="card-text alert alert-info text-start">{{ $value->comments }}</p>
            </div>
            @endif
            <div class="card-footer d-sm-flex justify-content-between align-items-center">
                <div class="card-footer-link mb-4 mb-sm-0">
                    <p class="card-text text-dark d-inline">Last updated {{ $value->updated_at->diffForHumans() }}</p>
                </div>
                @can('user-doc-upload')
                @if(($value->status != 2) && ($value->status != 4))
                <button class="btn btn-primary upload-file" data-id="{{ $value->id }}" data-name="{{ $value->name }}">Upload File</button>
                @endif
                @endcan
            </div>
            @can('document-status')
            <div class="card-footer">
                <form action="{{ route('documents.change-status') }}" method="post" class="status-form">
                    @csrf
                    <input type="hidden" name="user_doc_id" value="{{ $value->id }}">
                    <input type="text" name="comments" class="form-control" placeholder="Comments Here">
                    <div class="input-group w-auto mt-2">
                        <select name="status" id="status" class="form-control" style="font-size: 12px;text-transform: uppercase;font-weight: 500;color: black;padding-left: 12px;">
                            <option value="4" disabled selected>Uploaded</option>
                            <option value="2" {{ $value->status == 2 ? 'selected' : '' }}>Approved</option>
                            <option value="3" {{ $value->status == 3 ? 'selected' : '' }}>Rejected</option>
                            <option value="5" {{ $value->status == 5 ? 'selected' : '' }}>Resubmission Required</option>
                        </select>
                        <button class="btn btn-info btn-sm btn-loader" type="submit">
                            <img src="{{ asset('images/loader.gif') }}" alt="">
                            UPDATE STATUS
                        </button>
                    </div>
                </form>
            </div>
            @endcan
        </div>
    </div>
    @endforeach
</div>
@can('user-doc-upload')
<!-- Modal -->
<div class="modal fade" id="basicModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload File - <span></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('documents.upload-file') }}" enctype="multipart/form-data" class="upload-file-form">
                    <input type="hidden" name="user_docs_id" class="user_docs_id">
                    @csrf
                    <input type="file" name="file" class="form-control mb-3" required>
                    <button class="btn btn-primary btn-loader" type="submit">
                        <img src="{{ asset('images/loader.gif') }}" alt="Loader">
                        Upload file
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endcan
@endsection

@push('scripts')

@can('document-status')
<script>
    $('.status-form').submit(function(e){
        var status_form = $(this);
        $(this).find('.btn-loader').prop('disabled', true);
        $(this).find('img').show();
        e.preventDefault();
        var formData = new FormData($(this)[0]);
        $.ajaxSetup({
            headers: {
                "X-CSRFToken": $('meta[name="csrf_token"]').attr('content')
            }
        });
        $.ajax({
            url: $(status_form).attr('action'),
            type: 'POST',              
            data: formData,
            processData: false,
            contentType: false,
            success: function(result){
                if(result.status){
                    $(status_form).parent().parent().find('.status-wrapper').html('<span class="badge '+result.doc_status_class+' badge-sm">'+result.doc_status+'</span>');
                    $(status_form).parent().parent().find('.card-body-status').removeClass(result.old_status).addClass(result.doc_status_class);
                    $(status_form).find('img').hide();
                    $(status_form).find('.btn-loader').prop('disabled', false);
                }
            },
            error: function(data){
                console.log(data);
            }
        });
    });
</script>
@endcan

<script>
    var html_output;
    $('.upload-file').click(function(){
        var id = $(this).data('id');
        $('.modal-title').find('span').text($(this).data('name'));
        $('#basicModal').find('.user_docs_id').val(id);
        $('#basicModal').modal('show');
        html_output = $(this);
    });

    $('.upload-file-form').submit(function(e){
        $(this).find('.btn-loader').prop('disabled', true);
        $(this).find('img').show();
        e.preventDefault();
        var formData = new FormData($(this)[0]);
        $.ajaxSetup({
            headers: {
                "X-CSRFToken": $('meta[name="csrf_token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('documents.upload-file') }}",
            type: 'POST',              
            data: formData,
            processData: false,
            contentType: false,
            success: function(result){
                if(result.status){
                    $(html_output).parent().parent().find('.output').html('<p class="mb-0"><a href="'+result.data.file_path+'" target="_blank">Click here to preview the file</a> <a href="'+result.data.file_path+'" download><i class="fa-solid fa-download"></i></a></p>');
                    $('#basicModal').modal('hide');
                    $('.upload-file-form').find('.btn-loader').prop('disabled', false);
                    $('.upload-file-form').find('img').hide();
                    $(".upload-file-form")[0].reset();

                    $(html_output).parent().parent().parent().find('.status-wrapper').html('<span class="badge '+result.doc_status_class+' badge-sm">'+result.doc_status+'</span>');
                    $(html_output).parent().parent().find('.card-body-status').addClass(result.doc_status_class);
                    $(html_output).hide();
                }
            },
            error: function(data){
                console.log(data);
            }
        });
    })
</script>
@endpush