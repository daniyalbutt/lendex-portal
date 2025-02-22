@extends('layouts.admin-app')

@section('content')
<!-- Page Head -->
<div class="page-head">
    <div class="row">
        <div class="col-sm-6 mb-sm-4 mb-3">
            <h3 class="mb-0">Good Morning, {{ Auth::user()->name }}</h3>
            <p class="mb-0">Here’s what’s happening with your Portal today</p>
        </div>
        <div class="col-sm-6 mb-4 text-sm-end">
            
        </div>
    </div>
</div>

<div class="row">
    @if(Auth::user()->hasRole('User'))
    <div class="col-lg-7">
        <div class="card" style="height: auto;">
            <div class="card-body">
                <div class="alert alert-{{ Auth::user()->application->find_status_alert_class() }} border-{{ Auth::user()->application->find_status_alert_class() }} outline-dashed py-3 px-3 mb-0 text-dark d-flex align-items-center">
                    <div class="clearfix">
                        <i class="fa-regular fa-file-lines fa-{{ Auth::user()->application->find_status_alert_class() }}" style="font-size: 16px;border-radius: 50px;width: 35px;height: 35px;text-align: center;line-height: 35px;color: white;"></i>
                    </div>
                    <div class="mx-3">
                        <h6 class="mb-0 fw-semibold">Application - {{ Auth::user()->application->find_status() }}</h6>
                        <p class="mb-0">{{ date('d M, Y h:i a', strtotime(Auth::user()->application->created_at)) }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach(Auth::user()->user_docs as $key => $value)
            <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body px-4 py-3 d-flex align-items-center gap-3">
                        <div>
                            @if($value->status == 1)
                            <img src="{{ asset('images/files/no-file.png') }}" width="45" alt="">
                            @else
                            <img src="{{ asset('images/files') }}/{{ $value->getExtension() }}" width="45" alt="">
                            @endif
                        </div>
                        <div class="clearfix">
                            <h6 class="mb-0">{{ $value->name }}
                                @if($value->file_path != null)
                                <a class="text-success" href="{{ asset($value->file_path) }}" download><i class="fa-solid fa-cloud-arrow-down"></i></a>
                                @endif
                            </h6>
                            <span class="fs-14">{{ $value->updated_at->diffForHumans() }}</span>
                            <span class="badge {{ $value->find_status_class() }} btn-sm" style="position: absolute;top: 0;right: 0;border-radius: 0;padding: 3px 6px;text-transform: uppercase;font-size: 10px !important;">{{ $value->find_status() }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-md-6 col-lg-5">
        <div class="card">
            <div class="card-body p-0">
                <div id="DZ_W_TimeLine" class="widget-timeline ic-scroll p-4">
                    <ul class="timeline">
                        @php
                        $status_array = ['primary', 'info', 'danger', 'success', 'warning', 'dark'];
                        $status_key = 0;
                        @endphp
                        @foreach(Auth::user()->time_lines as $key => $value)
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
    @else
    <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-info">
            <div class="card-body p-4">
                <div class="media">
                    <span class="me-3">
                    <i class="flaticon-heart-1"></i>
                    </span>
                    <div class="media-body text-white text-end">
                        <p class="mb-1">Total Applications <br>Received</p>
                        <h3 class="text-white">{{ $total_app }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-success">
            <div class="card-body p-4">
                <div class="media">
                    <span class="me-3">
                    <i class="flaticon-web"></i>
                    </span>
                    <div class="media-body text-white text-end">
                        <p class="mb-1">Approved <br>Applications</p>
                        <h3 class="text-white">{{ $total_approved }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-danger">
            <div class="card-body  p-4">
                <div class="media">
                    <span class="me-3">
                    <i class="flaticon-document"></i>
                    </span>
                    <div class="media-body text-white text-end">
                        <p class="mb-1">Rejected <br>Applications</p>
                        <h3 class="text-white">{{ $total_rejected }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-warning">
            <div class="card-body  p-4">
                <div class="media">
                    <span class="me-3">
                    <i class="flaticon-document"></i>
                    </span>
                    <div class="media-body text-white text-end">
                        <p class="mb-1">Pending <br>Applications</p>
                        <h3 class="text-white">{{ $total_pending }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header flex-wrap">
                <h5 class="mb-0">Application Details</h5>
            </div>
            <div class="card-body pb-2">
                <div class="table-responsive">
                    <table id="transaction-tbl" class="table transaction-tbl ItemsCheckboxSec">
                        <thead class="border-self">
                            <tr>
                                <th>Date</th>
                                <th>Client</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Last Updates</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $value)
                            <tr>
                                <td>
                                    <p class="mb-0 ms-2">{{ date('d M, Y - h:i a', strtotime($value->created_at)) }}</p>
                                </td>
                                <td>{{ $value->find_name() }}</td>
                                <td>{{ $value->find_email() }}</td>
                                <td>
                                    <button class="btn {{ $value->find_status_class() }} btn-sm">{{ $value->find_status() }}</button>
                                </td>
                                <td>
                                    <p class="mb-0 ms-2">{{ date('d M, Y - h:i a', strtotime($value->updated_at)) }}</p>
                                </td>
                                <td>
                                    <div class="d-flex gap-1 justify-content-end">
                                        <a class="btn btn-info btn-sm" href="{{ route('applications.show',$value->id) }}"><i class="fa-solid fa-eye"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
