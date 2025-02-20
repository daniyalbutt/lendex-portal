@extends('layouts.admin-app')

@section('content')
<div class="row page-titles mx-0">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Track Your Application</a></li>
    </ol>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p class="mb-0">{{ $message }}</p>
</div>
@endif

<!-- row -->
<div class="row">
    <div class="col-md-6 col-lg-7">
        <div class="card" style="height: auto;">
            <div class="card-header">
                <h4 class="card-title">Track Your Application</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $data->find_name() }}</td>
                                <td>
                                    <button class="btn {{ $data->find_status_class() }} btn-sm">{{ $data->find_status() }}</button>
                                </td>
                                <td>{{ date('d M, Y h:i a', strtotime($data->created_at)) }}</td>
                                <td>
                                    <div class="d-flex gap-1 justify-content-end">
                                        @can('application-view')
                                        <a class="btn btn-info btn-sm" href="{{ route('application.view',$data->id) }}"><i class="fa-solid fa-eye"></i></a>
                                        @endif
                                        @can('application-edit')
                                        <a class="btn btn-warning btn-sm content-icon" href="{{ route('applications.edit',$data->id) }}"><i class="fa fa-edit"></i></a>
                                        @endcan
                                        @can('application-delete')
                                        <form method="post" action="{{ route('applications.destroy', $data->id) }}">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-danger btn-sm content-icon"><i class="fa fa-times"></i></button>
                                        </form>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-5">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Timeline</h4>
            </div>
            <div class="card-body p-0">
                <div id="DZ_W_TimeLine" class="widget-timeline ic-scroll p-4">
                    <ul class="timeline">
                        @php
                        $status_array = ['primary', 'info', 'danger', 'success', 'warning', 'dark'];
                        $status_key = 0;
                        @endphp
                        @foreach($data->user->time_lines as $key => $value)
                        <li>
                            <div class="timeline-badge {{ $status_array[$status_key] }}"></div>
                            <a class="timeline-panel text-muted" href="javascript:;">
                                <span>{{ $value->created_at->diffForHumans() }}</span>
                                <h6 class="mb-0">{{ $value->title }}</h6>
                                @if($value->comments != null)
                                <p class="mb-0">{{ $value->comments }}</p>
                                @endif
                            </a>
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