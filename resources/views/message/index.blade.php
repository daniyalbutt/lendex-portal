@extends('layouts.admin-app')

@section('content')
<div class="row page-titles mx-0">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Messages</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">All Messages</a></li>
    </ol>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recent Messages</h4>
            </div>
            <div class="card-body p-0">
                <div id="DZ_W_Todo3" class="widget-media p-4 ic-scroll">
                    <ul class="timeline">
                        @php
                        $status_array = ['primary', 'info', 'danger', 'success', 'warning', 'dark'];
                        $status_key = 0;
                        @endphp
                        @foreach($data as $key => $value)
                        <li>
                            <div class="timeline-panel">
                                <div class="media me-2 media-{{ $status_array[$status_key] }}">
                                    {{ $value->user->initials() }}
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-1">{{ $value->user->name }} <small class="text-muted"> {{ date('d M, Y h:i a', strtotime($value->last_message()->created_at)) }}</small>
                                    </h5>
                                    <p class="mb-1">{{ $value->last_message()->messages }}</p>
                                    <a href="{{ route('messages.show', $value->user->id) }}" class="btn btn-primary btn-xxs shadow">Reply</a>
                                </div>
                            </div>
                        </li>
                        @php
                        if(count($status_array) - 1 == $key){
                            $status_key = 0;
                        }else{
                            $status_key++;
                        }
                        @endphp
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection