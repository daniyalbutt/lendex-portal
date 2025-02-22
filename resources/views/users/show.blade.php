@extends('layouts.admin-app')

@section('content')
<style>
    #application u{
        display: block;
    }
    #application th {
        background-color: black !important;
        color: white !important;
    }
</style>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p class="mb-0">{{ $message }}</p>
</div>
@endif

<div class="card profile-overview profile-overview-wide">
    <div class="card-body d-flex">
        <div class="clearfix">
            <div class="d-inline-block position-relative me-sm-4 me-3 mb-3 mb-lg-0">
                <img src="{{ asset('images/dummy-user.png') }}" alt="" class="rounded-4 profile-avatar">
                <span class="fa fa-circle border border-3 border-white text-success position-absolute bottom-0 end-0 rounded-circle"></span>
            </div>
        </div>
        <div class="clearfix d-xl-flex flex-grow-1">
            <div class="clearfix pe-md-5">
                <h3 class="fw-semibold mb-1">{{ $data->name }}<img src="{{ asset('images/blue-tick.png') }}" alt="Blue Tick"></h3>
                <ul class="d-flex flex-wrap fs-6 align-items-center">
                    <li class="me-3 d-inline-flex align-items-center"><i class="fa-solid fa-location-dot me-1 fs-18"></i>{{ $data->application->find_key('physical_address') }}, {{ $data->application->find_key('physical_city') }}, {{ $data->application->find_key('physical_state') }}, {{ $data->application->find_key('physical_zip') }}</li>
                    <li class="me-3 d-inline-flex align-items-center"><i class="fa fa-envelope me-1 fs-18"></i>{{ $data->email }}</li>
                </ul>
                @can('application-list')
                <div class="d-md-flex d-none flex-wrap">
                    <div class="border outline-dashed rounded p-2 d-flex align-items-center me-3 mt-3">
                        <div class="avatar avatar-md style-1 bg-primary-light text-primary rounded d-flex align-items-center justify-content-center">
                            <i class="fa-regular fa-file" style="font-size: 20px;"></i>
                        </div>
                        <div class="clearfix ms-2">
                            <h3 class="mb-0 fw-semibold lh-1">{{ count($data->user_docs) }}</h3>
                            <span class="fs-14">Total Documents</span>
                        </div>
                    </div>
                </div>
                @endcan
            </div>
            <div class="clearfix mt-3 mt-xl-0 ms-auto d-flex flex-column col-xl-3">
                <div class="clearfix mb-3 text-xl-end">
                    <a href="javascript:void(0);" class="btn {{ $data->application->find_status_class() }} ms-2">{{ $data->application->find_status() }}</a>
                </div>
                <div class="mt-auto d-flex align-items-center">
                    <div class="clearfix me-3">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer py-0 d-flex flex-wrap justify-content-between align-items-center px-0">
        <ul class="nav nav-underline nav-underline-primary nav-underline-text-dark nav-underline-gap-x-0" id="myTab" role="tablist">
            @can('user-list')
            <li class="nav-item ms-1" role="presentation">
                <a class="nav-link py-3 border-3 text-black active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
            </li>
            @endcan
            @can('application-list')
            <li class="nav-item ms-1" role="presentation">
                <a class="nav-link py-3 border-3 text-black" id="application-tab" data-bs-toggle="tab" data-bs-target="#application" type="button" role="tab" aria-controls="application" aria-selected="false">Application</a>
            </li>
            @endcan
            @can('user-doc-list')
            <li class="nav-item ms-1" role="presentation">
                <a class="nav-link py-3 border-3 text-black" id="documents-tab" data-bs-toggle="tab" data-bs-target="#documents" type="button" role="tab" aria-controls="documents" aria-selected="false">Documents</a>
            </li>
            @endcan
            <li class="nav-item ms-1" role="presentation">
                <a class="nav-link py-3 border-3 text-black" id="message-tab" data-bs-toggle="tab" data-bs-target="#message" type="button" role="tab" aria-controls="message" aria-selected="false">Message</a>
            </li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="tab-content" id="myTabContent">
        @can('user-list')
        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-{{ $data->application->find_status_alert_class() }} border-{{ $data->application->find_status_alert_class() }} outline-dashed py-3 px-3 mb-0 text-dark d-flex align-items-center">
                        <div class="clearfix">
                            <i class="fa-regular fa-file-lines fa-{{ $data->application->find_status_alert_class() }}" style="font-size: 16px;border-radius: 50px;width: 35px;height: 35px;text-align: center;line-height: 35px;color: white;"></i>
                        </div>
                        <div class="mx-3">
                            <h6 class="mb-0 fw-semibold">Application - {{ $data->application->find_status() }}</h6>
                            <p class="mb-0">{{ date('d M, Y h:i a', strtotime($data->application->created_at)) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endcan
        @can('application-list')
        <div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
            <div class="row">
                <div class="col-12">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <p class="mb-1"><strong>Whoops!</strong> There were some problems with your input.</p>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped table-bordered">
                                <tr class="text-center">
                                    <th colspan="2">CONTACT INFORMATION</th>
                                </tr>
                                <tr>
                                    <td style="width: 50%;"><strong>Business Legal Name:</strong> <u>{{ $data->application->find_key('business_legal_name') }}</u></td>
                                    <td class="text-start"><strong>Business DBA (if applicable):</strong> <u>{{ $data->application->find_key('business_dba') }}</u></td>
                                </tr>
                                <tr>
                                    <td><strong>Business Phone:</strong> <u>{{ $data->application->find_key('business_phone') }}</u></td>
                                    <td class="text-start"><strong>Mobile Phone:</strong> <u>{{ $data->application->find_key('mobile_phone') }}</u></td>
                                </tr>
                                <tr>
                                    <td><strong>Business Fax:</strong> <u>{{ $data->application->find_key('business_fax') }}</u></td>
                                    <td class="text-start"><strong>Other Phone:</strong> <u>{{ $data->application->find_key('other_phone') }}</u></td>
                                </tr>
                                <tr>
                                    <td><strong>Website:</strong> <u>{{ $data->application->find_key('website') }}</u></td>
                                    <td class="text-start"><strong>Email:</strong> <u>{{ $data->application->find_key('email') }}</u></td>
                                </tr>
                                <tr>
                                    <td><strong>Physical Address:</strong> <u>{{ $data->application->find_key('physical_address') }}</u></td>
                                    <td class="p-0">
                                        <table class="table mb-0">
                                            <tr>
                                                <td class="text-start"><strong>City:</strong> <u>{{ $data->application->find_key('physical_city') }}</u></td>
                                                <td class="text-start"><strong>State:</strong> <u>{{ $data->application->find_key('physical_state') }}</u></td>
                                                <td class="text-start"><strong>Zip:</strong> <u>{{ $data->application->find_key('physical_zip') }}</u></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Mailing Address:</strong> <u>{{ $data->application->find_key('mailing_address') }}</u></td>
                                    <td class="p-0">
                                        <table class="table mb-0" style="--bs-table-color-type: var(--bs-table-striped-color);--bs-table-bg-type: var(--bs-table-striped-bg);">
                                            <tr>
                                                <td class="text-start"><strong>City:</strong> <u>{{ $data->application->find_key('mailing_city') }}</u></td>
                                                <td class="text-start"><strong>State:</strong> <u>{{ $data->application->find_key('mailing_state') }}</u></td>
                                                <td class="text-start"><strong>Zip:</strong> <u>{{ $data->application->find_key('mailing_zip') }}</u></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table class="table table-striped table-bordered">
                                <tr class="text-center">
                                    <th colspan="4">BUSINESS INFORMATION</th>
                                </tr>
                                <tr>
                                    <td><strong>Legal Entity:</strong> <u>{{ $data->application->find_key('legal_entity') }}</u></td>
                                    <td class="text-start"><strong>Business Start Date:</strong> <u>{{ $data->application->find_key('business_start_date') }}</u></td>
                                    <td class="text-start"><strong>Federal Tax ID:</strong> <u>{{ $data->application->find_key('federal_tax_id') }}</u></td>
                                    <td class="text-start"><strong>Home Based Business?</strong> <u>{{ $data->application->find_key('home_based_business') }}</u></td>
                                </tr>
                                <tr>
                                    <td><strong>Open Judgements/Liens?</strong> <u>{{ $data->application->find_key('open_judgements') }}</u></td>
                                    <td class="text-start"><strong>Open Bankruptcies?</strong> <u>{{ $data->application->find_key('open_bankrupticies') }}</u></td>
                                    <td class="text-start"><strong>State of Inc/LLC:</strong> <u>{{ $data->application->find_key('state_of_inc') }}</u></td>
                                    <td class="text-start"><strong>Industry Type (SIC Code):</strong> <u>{{ $data->application->find_key('industry_type') }}</u></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-start"><strong>Business Description:</strong> <u>{{ $data->application->find_key('business_description') }}</u></td>
                                </tr>
                                <tr>
                                    <td><strong>Business Rent/Mortgage Information:</strong> <u>{{ $data->application->find_key('business_rent') }}</u></td>
                                    <td class="text-start"><strong>Mthly Rent/Lease/Mtg Payment:</strong> <u>{{ $data->application->find_key('mthly_rent') }}</u></td>
                                    <td class="text-start"><strong>Remaining Term for Rent/Lease:</strong> <u>{{ $data->application->find_key('remaining_term_for_rent') }}</u></td>
                                    <td class="text-start"><strong>Payment Current?</strong> <u>{{ $data->application->find_key('payment_current') }}</u></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong>Landlord/Mortgage Company Contact:</strong> <u>{{ $data->application->find_key('landlord_company_contact') }}</u></td>
                                    <td colspan="2" class="text-start"><strong>Phone Number:</strong> <u>{{ $data->application->find_key('phone_number') }}</u></td>
                                </tr>
                            </table>
                            <table class="table table-striped table-bordered">
                                <tr class="text-center">
                                    <th colspan="5">FUNDING INFORMATION</th>
                                </tr>
                                <tr>
                                    <td><strong>Amount Requested:</strong> <u>{{ $data->application->find_key('amount_requested') }}</u></td>
                                    <td class="text-start"><strong>When Are Funds Needed:</strong> <u>{{ $data->application->find_key('when_are_funds_needed') }}</u></td>
                                    <td colspan="2" class="text-start"><strong>Desired Use of Funding Proceeds:</strong> <u>{{ $data->application->find_key('desired_user_of_funding_proceeds') }}</u></td>
                                </tr>
                                <tr>
                                <td class="text-start"><strong>what kind of loan they are looking for?</strong> <u>{{ $data->application->find_key('desired_user_of_funding_proceeds') }}</u></td>
                                    <td><strong>Gross Annual Sales:</strong> <u>{{ $data->application->find_key('gross_annual_sales') }}</u></td>
                                    <td class="text-start"><strong>Gross Monthly Sales:</strong> <u>{{ $data->application->find_key('gross_monthly_sales') }}</u></td>
                                </tr>
                                <tr>
                                    <td colspan="1" class="text-start"><strong>Monthly Credit Card Volume:</strong> <u>{{ $data->application->find_key('monthly_credit_card_volume') }}</u></td>
                                    <td colspan="1" class="text-start"><strong>Current Cash Advance?</strong> <u>{{ $data->application->find_key('current_cash_advance') }}</u></td>
                                    <td colspan="2" class="text-start"><strong>Cash Advance/Loan Balance:</strong> <u>{{ $data->application->find_key('cash_advance_balance') }}</u></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong>Current Credit Card Processing Company:</strong> <u>{{ $data->application->find_key('current_credit_card_processing_company') }}</u></td>
                                    <td><strong>Credit Score:</strong> <u>{{ $data->application->find_key('current_credit_card_processing_company') }}</u></td>
                                    <td colspan="2" class="text-start"><strong>Account Number:</strong> <u>{{ $data->application->find_key('account_number') }}</u></td>
                                </tr>
                            </table>
                            <table class="table table-striped table-bordered">
                                <tr class="text-center">
                                    <th colspan="5">OWNER/PRINCIPAL INFORMATION</th>
                                </tr>
                                <tr>
                                    <td><strong>First Name:</strong> <u>{{ $data->application->find_key('first_name') }}</u></td>
                                    <td><strong>MI:</strong> <u>{{ $data->application->find_key('mi') }}</u></td>
                                    <td><strong>Last Name:</strong> <u>{{ $data->application->find_key('last_name') }}</u></td>
                                    <td><strong>Title:</strong> <u>{{ $data->application->find_key('title') }}</u></td>
                                    <td class="text-start"><strong>% Ownership:</strong> <u>{{ $data->application->find_key('ownership') }}</u></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong>Home Address:</strong> <u>{{ $data->application->find_key('home_address') }}</u></td>
                                    <td><strong>City:</strong> <u>{{ $data->application->find_key('home_city') }}</u></td>
                                    <td><strong>State:</strong> <u>{{ $data->application->find_key('home_state') }}</u></td>
                                    <td class="text-start"><strong>Zip:</strong> <u>{{ $data->application->find_key('home_zip') }}</u></td>
                                </tr>
                                <tr>
                                    <td><strong>Home Phone:</strong> <u>{{ $data->application->find_key('home_phone') }}</u></td>
                                    <td><strong>Mobile Phone:</strong> <u>{{ $data->application->find_key('home_mobile_phone') }}</u></td>
                                    <td colspan="3" class="p-0">
                                        <table class="table mb-0">
                                            <tr>
                                                <td class="text-start"><strong>Date of Birth:</strong> <u>{{ $data->application->find_key('date_of_birth') }}</u></td>
                                                <td class="text-start"><strong>SS#:</strong> <u>{{ $data->application->find_key('ss#') }}</u></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table class="table table-striped table-bordered">
                                <tr class="text-center">
                                    <th colspan="5">CO-OWNER/PRINCIPAL INFORMATION</th>
                                </tr>
                                <tr>
                                    <td><strong>First Name:</strong> <u>{{ $data->application->find_key('owner_first_name') }}</u></td>
                                    <td><strong>MI:</strong> <u>{{ $data->application->find_key('owner_mi') }}</u></td>
                                    <td><strong>Last Name:</strong> <u>{{ $data->application->find_key('owner_last_name') }}</u></td>
                                    <td><strong>Title:</strong> <u>{{ $data->application->find_key('owner_title') }}</u></td>
                                    <td class="text-start"><strong>% Ownership:</strong> <u>{{ $data->application->find_key('owner_ownership') }}</u></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong>Home Address:</strong> <u>{{ $data->application->find_key('owner_home_address') }}</u></td>
                                    <td><strong>City:</strong> <u>{{ $data->application->find_key('owner_home_city') }}</u></td>
                                    <td><strong>State:</strong> <u>{{ $data->application->find_key('owner_home_state') }}</u></td>
                                    <td class="text-start"><strong>Zip:</strong> <u>{{ $data->application->find_key('owner_home_zip') }}</u></td>
                                </tr>
                                <tr>
                                    <td><strong>Home Phone:</strong> <u>{{ $data->application->find_key('owner_home_phone') }}</u></td>
                                    <td><strong>Mobile Phone:</strong> <u>{{ $data->application->find_key('owner_home_mobile_phone') }}</u></td>
                                    <td colspan="3" class="p-0">
                                        <table class="table mb-0">
                                            <tr>
                                                <td class="text-start"><strong>Date of Birth:</strong> <u>{{ $data->application->find_key('owner_date_of_birth') }}</u></td>
                                                <td class="text-start"><strong>SS#:</strong> <u>{{ $data->application->find_key('owner_ss#') }}</u></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table class="table table-striped table-bordered">
                                <tr class="text-center">
                                    <th colspan="2">AUTHORIZATION</th>
                                </tr>
                                <tr>
                                    <td><strong>Owner Signature:</strong> <u>{{ $data->application->find_key('owner_signature') }}</u></td>
                                    <td class="text-start"><strong>Co-Owner Signature:</strong> <u>{{ $data->application->find_key('co_owner_signature') }}</u></td>
                                </tr>
                                <tr>
                                    <td><strong>Printed Name:</strong> <u>{{ $data->application->find_key('owner_printed_name') }}</u></td>
                                    <td class="text-start"><strong>Printed Name:</strong> <u>{{ $data->application->find_key('co_owner_printed_name') }}</u></td>
                                </tr>
                                <tr>
                                    <td><strong>Date:</strong> <u>{{ $data->application->find_key('owner_date') }}</u></td>
                                    <td class="text-start"><strong>Date:</strong> <u>{{ $data->application->find_key('co_owner_date') }}</u></td>
                                </tr>
                            </table>
                            <table class="table table-striped table-bordered">
                                <tr class="text-center">
                                    <th colspan="2">BANK STATEMENT</th>
                                </tr>
                                @foreach(json_decode($data->application->find_key('bank_statement_path')) as $key => $value)
                                <td class="text-start"><strong>File:</strong> <a href="{{ asset($value) }}" download>Download File</a></td>
                                @endforeach
                            </table>
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <td class="text-start" style="width:49%">
                                        <p><strong>Date:</strong> <br>{{ date('h:m:A - j F Y', strtotime($data->application->created_at)) }}</p>
                                        <form method="POST" action="{{ route('applications.update', $data->application->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="email" value="{{ $data->application->find_email() }}">
                                            <p class="mb-1"><strong>Comments:</strong></p>
                                            <textarea name="comments" id="comments" class="form-control">{{ $data->application->comments }}</textarea>

                                            <p class="mb-1 mt-3"><strong>Status: </strong></p>
                                            <div class="input-group mb-3">
                                                <select name="status" id="status" class="form-control">
                                                    <option value="1" {{ $data->application->status == 1 ? 'selected' : '' }} disabled>Pending</option>
                                                    <option value="4" {{ $data->application->status == 4 ? 'selected' : '' }}>In Process</option>
                                                    <option value="2" {{ $data->application->status == 2 ? 'selected' : '' }}>Approved</option>
                                                    <option value="3" {{ $data->application->status == 3 ? 'selected' : '' }}>Rejected</option>
                                                </select>
                                                <button class="btn btn-primary" type="submit" id="button-addon2">Update Status</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endcan
        @can('user-doc-list')
        <div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="documents-tab">
            <div class="card">
                <div class="card-body">
                    @can('user-doc-create')
                    <div class="text-end">
                        <a class="btn btn-success btn-sm" href="{{ route('documents.create', ['user' => $data->id])}}">Create Document</a>
                    </div>
                    @endcan
                    <div class="row mt-3">
                        @foreach($data->user_docs as $key => $value)
                        <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6">
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
            </div>
        </div>
        @endcan
        <div class="tab-pane fade" id="message" role="tabpanel" aria-labelledby="message-tab">
            <div class="card">
                <div class="card-body">
                @can('message-create')
                <div class="text-end">
                    <a target="_blank" href="{{ route('messages.show', $data->id) }}" class="btn btn-success btn-sm">Reply to this message</a>
                </div>
                @endcan
                @foreach($messages as $key => $message)
                    @if($message->sender_id != Auth::user()->id)
                    <div class="media my-4 mb-4 justify-content-end align-items-end">
                        <div class="message-sent">
                            <p class="mb-1">
                                {{ $message->messages }}
                            </p>
                            <span class="fs-12">{{ date('h:i a - d M, Y', strtotime($message->created_at)) }}</span>
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
                                {{ $message->messages }}
                            </p>
                            <span class="fs-12">{{ date('h:i a - d M, Y', strtotime($message->created_at)) }}</span>
                        </div>
                    </div>
                    @endif
                @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-xl-4 col-xxl-4 col-lg-4">
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
                        @foreach($data->time_lines as $key => $value)
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