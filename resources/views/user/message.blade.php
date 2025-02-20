@extends('layouts.admin-app')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="d-flex justify-content-between align-items-center border-bottom px-4 pt-4 flex-wrap">
                            <div class="d-flex align-items-center pb-3">
                                <div class="image-box">
                                    <img src="{{ asset('images/dummy-user.png') }}" alt="" class=" img-1">
                                </div>
                                <div class="ms-3">
                                    <h4 class="fs-20 mb-1 font-w700"><a href="javascript:;" class="text-dark">Agent</a></h4>
                                    <span>Last message at 04:45 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat-box-area ic-scroll chat-box-area" id="chatArea">
                            <div class="chat-box-area dz-scroll" id="chartBox">
                                @foreach($data as $key => $value)
                                @if($value->sender_id == Auth::user()->id)
                                <div class="media my-4 mb-4 justify-content-end align-items-end">
                                    <div class="message-sent">
                                        <p class="mb-1">
                                            {{ $value->messages }}
                                        </p>
                                        <span class="fs-12">{{ date('h:i a - d M, Y', strtotime($value->created_at)) }}</span>
                                    </div>
                                    <div class="image-box ms-sm-3 ms-2 mb-4">
                                        <img src="{{ asset('images/user.jpg') }}" alt="" class=" img-1">
                                        <span class="active"></span>
                                    </div>
                                </div>
                                @else
                                <div class="media my-4 justify-content-start align-items-start">
                                    <div class="image-box me-sm-3 me-2">
                                        <img src="{{ asset('images/dummy-user.png') }}" alt="" class="img-1">
                                        <span class="active1"></span>
                                    </div>
                                    <div class="message-received">
                                        <p class="mb-1">
                                            {{ $value->messages }}
                                        </p>
                                        <span class="fs-12">{{ date('h:i a - d M, Y', strtotime($value->created_at)) }}</span>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        @can('message-create')
                        <div class="card-footer border-0 type-massage">
                            <form action="{{ route('messages.store') }}" method="post" class="message-form">
                                @csrf
                                <div class="input-group">
                                    <textarea class="form-control" name="message" rows="3" placeholder="Message here.." required></textarea>
                                </div>
                                <div class="input-group-append d-flex justify-content-between flex-wrap">
                                    <div>
                                        <button type="submit" class="btn btn-primary text-white btn-loader">
                                            <img src="{{ asset('images/loader.gif') }}" alt="Loader">
                                            <i class="far fa-paper-plane me-2"></i>SEND
                                        </button>
                                        <!-- <button type="button" class="btn"><i class="fas fa-paperclip scale5 text-primary"></i></button> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $('.message-form').submit(function(e){
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
                console.log(result);
                if(result.status){
                    $('#chartBox').append(result.html);
                    $(status_form).find('img').hide();
                    $(status_form).find('.btn-loader').prop('disabled', false);
                    $(".upload-file-form")[0].reset();
                }
            },
            error: function(data){
                console.log(data);
            }
        });
    });
</script>
@endpush