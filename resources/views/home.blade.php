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
                <h5 class="mb-0">Transaction Details</h5>
                <div class="d-flex align-items-center justify-content-between transaction flex-wrap">
                    <div class="input-group search-area style-1">
                        <span class="input-group-text"><a href="javascript:void(0);" class="m-0"><i
                                    class="flaticon-search-interface-symbol"></i></a></span>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <a href="javascript:void(0);" class="btn">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.66699 4.66699H13.3337" stroke="black" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M2.66699 8L9.33366 8" stroke="black" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M2.66699 11.333H4.00033" stroke="black" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        Sort By
                    </a>
                    <a href="javascript:void(0);" class="btn">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.1594 3.33301H4.84121C3.98686 3.33301 3.52595 4.33513 4.08196 4.9838L6.42625 7.71881C6.5816 7.90005 6.66699 8.13089 6.66699 8.3696V11.3816C6.66699 11.7604 6.881 12.1067 7.21978 12.2761L7.88645 12.6094C8.55135 12.9419 9.33366 12.4584 9.33366 11.715V8.3696C9.33366 8.13089 9.41905 7.90005 9.5744 7.71881L11.9187 4.9838C12.4747 4.33513 12.0138 3.33301 11.1594 3.33301Z"
                                stroke="#1C2430" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Filter
                    </a>
                </div>
            </div>
            <div class="card-body pb-2">
                <div class="table-responsive">
                    <table id="transaction-tbl" class="table transaction-tbl ItemsCheckboxSec">
                        <thead class="border-self">
                            <tr>
                                <th>
                                    <div class="form-check custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="checkAll">
                                        <label class="form-check-label" for="checkAll"></label>
                                    </div>
                                    <span>ID</span>
                                </th>
                                <th>Date</th>
                                <th>Client</th>
                                <th>Payment</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check custom-checkbox">
                                        <input type="checkbox" class="form-check-input"
                                            id="customCheckBox3" required>
                                        <label class="form-check-label" for="customCheckBox3"></label>
                                    </div>
                                    <span>129361171</span>
                                </td>
                                <td>
                                    <p class="mb-0 ms-2">18 Feb 2024</p>
                                </td>
                                <td class>
                                    <span>Rolex leo</span>
                                </td>
                                <td>
                                    <span class="text-success">$376.24</span>
                                </td>
                                <td class="pe-0">
                                    <span class="badge badge-primary light border-0">Completed</span>
                                </td>
                                <td>
                                    <div class="dropdown ms-2">
                                        <div class="btn-link custome-d" data-bs-toggle="dropdown">
                                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="2" height="2" fill="black" />
                                                <rect width="2" height="2" fill="black" />
                                                <rect x="7" y="7" width="2" height="2" fill="black" />
                                                <rect x="7" width="2" height="2" fill="black" />
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"
                                                href="javascript:void(0)">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check custom-checkbox">
                                        <input type="checkbox" class="form-check-input"
                                            id="customCheckBox3" required>
                                        <label class="form-check-label" for="customCheckBox3"></label>
                                    </div>
                                    <span>129361178</span>
                                </td>
                                <td>
                                    <p class="mb-0 ms-2">18 Feb 2024</p>
                                </td>
                                <td class>
                                    <span>Jaction leo</span>
                                </td>
                                <td>
                                    <span class="text-success">$376.24</span>
                                </td>
                                <td class="pe-0">
                                    <span class="badge badge-primary light border-0">Completed</span>
                                </td>
                                <td>
                                    <div class="dropdown ms-2">
                                        <div class="btn-link custome-d" data-bs-toggle="dropdown">
                                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="2" height="2" fill="black" />
                                                <rect width="2" height="2" fill="black" />
                                                <rect x="7" y="7" width="2" height="2" fill="black" />
                                                <rect x="7" width="2" height="2" fill="black" />
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"
                                                href="javascript:void(0)">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check custom-checkbox">
                                        <input type="checkbox" class="form-check-input"
                                            id="customCheckBox3" required>
                                        <label class="form-check-label" for="customCheckBox3"></label>
                                    </div>
                                    <span>129361179</span>
                                </td>
                                <td>
                                    <p class="mb-0 ms-2">18 Feb 2024</p>
                                </td>
                                <td class>
                                    <span>Rolex leo</span>
                                </td>
                                <td>
                                    <span class="text-warning">$254.24</span>
                                </td>
                                <td class="pe-0">
                                    <span class="badge badge-warning light border-0">Inprogress</span>
                                </td>
                                <td>
                                    <div class="dropdown ms-2">
                                        <div class="btn-link custome-d" data-bs-toggle="dropdown">
                                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="2" height="2" fill="black" />
                                                <rect width="2" height="2" fill="black" />
                                                <rect x="7" y="7" width="2" height="2" fill="black" />
                                                <rect x="7" width="2" height="2" fill="black" />
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"
                                                href="javascript:void(0)">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check custom-checkbox">
                                        <input type="checkbox" class="form-check-input"
                                            id="customCheckBox3" required>
                                        <label class="form-check-label" for="customCheckBox3"></label>
                                    </div>
                                    <span>129361179</span>
                                </td>
                                <td>
                                    <p class="mb-0 ms-2">18 Feb 2024</p>
                                </td>
                                <td class>
                                    <span>Meview Otis</span>
                                </td>
                                <td>
                                    <span class="text-danger">$254.24</span>
                                </td>
                                <td class="pe-0">
                                    <span class="badge badge-danger light border-0">Pending</span>
                                </td>
                                <td>
                                    <div class="dropdown ms-2">
                                        <div class="btn-link custome-d" data-bs-toggle="dropdown">
                                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="2" height="2" fill="black" />
                                                <rect width="2" height="2" fill="black" />
                                                <rect x="7" y="7" width="2" height="2" fill="black" />
                                                <rect x="7" width="2" height="2" fill="black" />
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"
                                                href="javascript:void(0)">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check custom-checkbox">
                                        <input type="checkbox" class="form-check-input"
                                            id="customCheckBox3" required>
                                        <label class="form-check-label" for="customCheckBox3"></label>
                                    </div>
                                    <span>129361171</span>
                                </td>
                                <td>
                                    <p class="mb-0 ms-2">18 Feb 2024</p>
                                </td>
                                <td class>
                                    <span>Rolex leo</span>
                                </td>
                                <td>
                                    <span class="text-success">$376.24</span>
                                </td>
                                <td class="pe-0">
                                    <span class="badge badge-primary light border-0">Completed</span>
                                </td>
                                <td>
                                    <div class="dropdown ms-2">
                                        <div class="btn-link custome-d" data-bs-toggle="dropdown">
                                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="2" height="2" fill="black" />
                                                <rect width="2" height="2" fill="black" />
                                                <rect x="7" y="7" width="2" height="2" fill="black" />
                                                <rect x="7" width="2" height="2" fill="black" />
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"
                                                href="javascript:void(0)">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check custom-checkbox">
                                        <input type="checkbox" class="form-check-input"
                                            id="customCheckBox3" required>
                                        <label class="form-check-label" for="customCheckBox3"></label>
                                    </div>
                                    <span>129361178</span>
                                </td>
                                <td>
                                    <p class="mb-0 ms-2">18 Feb 2024</p>
                                </td>
                                <td class>
                                    <span>Jaction leo</span>
                                </td>
                                <td>
                                    <span class="text-success">$376.24</span>
                                </td>
                                <td class="pe-0">
                                    <span class="badge badge-primary light border-0">Completed</span>
                                </td>
                                <td>
                                    <div class="dropdown ms-2">
                                        <div class="btn-link custome-d" data-bs-toggle="dropdown">
                                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="2" height="2" fill="black" />
                                                <rect width="2" height="2" fill="black" />
                                                <rect x="7" y="7" width="2" height="2" fill="black" />
                                                <rect x="7" width="2" height="2" fill="black" />
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"
                                                href="javascript:void(0)">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
