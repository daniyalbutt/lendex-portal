@extends('layouts.admin-app')

@section('content')
<style>
    u{
        display: block;
    }
    th {
        background-color: black !important;
        color: white !important;
    }
</style>
<div class="row page-titles mx-0">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Applications</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Show Application - {{ $data->id }}</a></li>
    </ol>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p class="mb-0">{{ $message }}</p>
</div>
@endif

<!-- row -->
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
            <div class="card-header">
                <h4 class="card-title">Application - {{ $data->find_name(); }}</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <tr class="text-center">
                        <th colspan="2">CONTACT INFORMATION</th>
                    </tr>
                    <tr>
                        <td style="width: 50%;"><strong>Business Legal Name:</strong> <u>{{ $data->find_key('business_legal_name') }}</u></td>
                        <td class="text-start"><strong>Business DBA (if applicable):</strong> <u>{{ $data->find_key('business_dba') }}</u></td>
                    </tr>
                    <tr>
                        <td><strong>Business Phone:</strong> <u>{{ $data->find_key('business_phone') }}</u></td>
                        <td class="text-start"><strong>Mobile Phone:</strong> <u>{{ $data->find_key('mobile_phone') }}</u></td>
                    </tr>
                    <tr>
                        <td><strong>Business Fax:</strong> <u>{{ $data->find_key('business_fax') }}</u></td>
                        <td class="text-start"><strong>Other Phone:</strong> <u>{{ $data->find_key('other_phone') }}</u></td>
                    </tr>
                    <tr>
                        <td><strong>Website:</strong> <u>{{ $data->find_key('website') }}</u></td>
                        <td class="text-start"><strong>Email:</strong> <u>{{ $data->find_key('email') }}</u></td>
                    </tr>
                    <tr>
                        <td><strong>Physical Address:</strong> <u>{{ $data->find_key('physical_address') }}</u></td>
                        <td class="p-0">
                            <table class="table mb-0">
                                <tr>
                                    <td class="text-start"><strong>City:</strong> <u>{{ $data->find_key('physical_city') }}</u></td>
                                    <td class="text-start"><strong>State:</strong> <u>{{ $data->find_key('physical_state') }}</u></td>
                                    <td class="text-start"><strong>Zip:</strong> <u>{{ $data->find_key('physical_zip') }}</u></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Mailing Address:</strong> <u>{{ $data->find_key('mailing_address') }}</u></td>
                        <td class="p-0">
                            <table class="table mb-0" style="--bs-table-color-type: var(--bs-table-striped-color);--bs-table-bg-type: var(--bs-table-striped-bg);">
                                <tr>
                                    <td class="text-start"><strong>City:</strong> <u>{{ $data->find_key('mailing_city') }}</u></td>
                                    <td class="text-start"><strong>State:</strong> <u>{{ $data->find_key('mailing_state') }}</u></td>
                                    <td class="text-start"><strong>Zip:</strong> <u>{{ $data->find_key('mailing_zip') }}</u></td>
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
                        <td><strong>Legal Entity:</strong> <u>{{ $data->find_key('legal_entity') }}</u></td>
                        <td class="text-start"><strong>Business Start Date:</strong> <u>{{ $data->find_key('business_start_date') }}</u></td>
                        <td class="text-start"><strong>Federal Tax ID:</strong> <u>{{ $data->find_key('federal_tax_id') }}</u></td>
                        <td class="text-start"><strong>Home Based Business?</strong> <u>{{ $data->find_key('home_based_business') }}</u></td>
                    </tr>
                    <tr>
                        <td><strong>Open Judgements/Liens?</strong> <u>{{ $data->find_key('open_judgements') }}</u></td>
                        <td class="text-start"><strong>Open Bankruptcies?</strong> <u>{{ $data->find_key('open_bankrupticies') }}</u></td>
                        <td class="text-start"><strong>State of Inc/LLC:</strong> <u>{{ $data->find_key('state_of_inc') }}</u></td>
                        <td class="text-start"><strong>Industry Type (SIC Code):</strong> <u>{{ $data->find_key('industry_type') }}</u></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-start"><strong>Business Description:</strong> <u>{{ $data->find_key('business_description') }}</u></td>
                    </tr>
                    <tr>
                        <td><strong>Business Rent/Mortgage Information:</strong> <u>{{ $data->find_key('business_rent') }}</u></td>
                        <td class="text-start"><strong>Mthly Rent/Lease/Mtg Payment:</strong> <u>{{ $data->find_key('mthly_rent') }}</u></td>
                        <td class="text-start"><strong>Remaining Term for Rent/Lease:</strong> <u>{{ $data->find_key('remaining_term_for_rent') }}</u></td>
                        <td class="text-start"><strong>Payment Current?</strong> <u>{{ $data->find_key('payment_current') }}</u></td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Landlord/Mortgage Company Contact:</strong> <u>{{ $data->find_key('landlord_company_contact') }}</u></td>
                        <td colspan="2" class="text-start"><strong>Phone Number:</strong> <u>{{ $data->find_key('phone_number') }}</u></td>
                    </tr>
                </table>
                <table class="table table-striped table-bordered">
                    <tr class="text-center">
                        <th colspan="5">FUNDING INFORMATION</th>
                    </tr>
                    <tr>
                        <td><strong>Amount Requested:</strong> <u>{{ $data->find_key('amount_requested') }}</u></td>
                        <td class="text-start"><strong>When Are Funds Needed:</strong> <u>{{ $data->find_key('when_are_funds_needed') }}</u></td>
                        <td colspan="2" class="text-start"><strong>Desired Use of Funding Proceeds:</strong> <u>{{ $data->find_key('desired_user_of_funding_proceeds') }}</u></td>
                        <td class="text-start"><strong>What kind of Loan are you looking for?</strong> <u>{{ $data->find_key('what_kind_of_loan_are_you_looking_for') }}</u></td>
                    </tr>
                    <tr>
                        <td><strong>Gross Annual Sales:</strong> <u>{{ $data->find_key('gross_annual_sales') }}</u></td>
                        <td class="text-start"><strong>Gross Monthly Sales:</strong> <u>{{ $data->find_key('gross_monthly_sales') }}</u></td>
                        <td class="text-start"><strong>Monthly Credit Card Volume:</strong> <u>{{ $data->find_key('monthly_credit_card_volume') }}</u></td>
                        <td class="text-start"><strong>Current Cash Advance?</strong> <u>{{ $data->find_key('current_cash_advance') }}</u></td>
                        <td class="text-start"><strong>Cash Advance/Loan Balance:</strong> <u>{{ $data->find_key('cash_advance_balance') }}</u></td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Current Credit Card Processing Company:</strong> <u>{{ $data->find_key('current_credit_card_processing_company') }}</u></td>
                        <td><strong>Credit Score:</strong> <u>{{ $data->find_key('credit_score') }}</u></td>
                        <td colspan="2" class="text-start"><strong>Account Number:</strong> <u>{{ $data->find_key('account_number') }}</u></td>
                    </tr>
                </table>
                <table class="table table-striped table-bordered">
                    <tr class="text-center">
                        <th colspan="5">OWNER/PRINCIPAL INFORMATION</th>
                    </tr>
                    <tr>
                        <td><strong>First Name:</strong> <u>{{ $data->find_key('first_name') }}</u></td>
                        <td><strong>MI:</strong> <u>{{ $data->find_key('mi') }}</u></td>
                        <td><strong>Last Name:</strong> <u>{{ $data->find_key('last_name') }}</u></td>
                        <td><strong>Title:</strong> <u>{{ $data->find_key('title') }}</u></td>
                        <td class="text-start"><strong>% Ownership:</strong> <u>{{ $data->find_key('ownership') }}</u></td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Home Address:</strong> <u>{{ $data->find_key('home_address') }}</u></td>
                        <td><strong>City:</strong> <u>{{ $data->find_key('home_city') }}</u></td>
                        <td><strong>State:</strong> <u>{{ $data->find_key('home_state') }}</u></td>
                        <td class="text-start"><strong>Zip:</strong> <u>{{ $data->find_key('home_zip') }}</u></td>
                    </tr>
                    <tr>
                        <td><strong>Home Phone:</strong> <u>{{ $data->find_key('home_phone') }}</u></td>
                        <td><strong>Mobile Phone:</strong> <u>{{ $data->find_key('home_mobile_phone') }}</u></td>
                        <td colspan="3" class="p-0">
                            <table class="table mb-0">
                                <tr>
                                    <td class="text-start"><strong>Date of Birth:</strong> <u>{{ $data->find_key('date_of_birth') }}</u></td>
                                    <td class="text-start"><strong>SS#:</strong> <u>{{ $data->find_key('ss#') }}</u></td>
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
                        <td><strong>First Name:</strong> <u>{{ $data->find_key('owner_first_name') }}</u></td>
                        <td><strong>MI:</strong> <u>{{ $data->find_key('owner_mi') }}</u></td>
                        <td><strong>Last Name:</strong> <u>{{ $data->find_key('owner_last_name') }}</u></td>
                        <td><strong>Title:</strong> <u>{{ $data->find_key('owner_title') }}</u></td>
                        <td class="text-start"><strong>% Ownership:</strong> <u>{{ $data->find_key('owner_ownership') }}</u></td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Home Address:</strong> <u>{{ $data->find_key('owner_home_address') }}</u></td>
                        <td><strong>City:</strong> <u>{{ $data->find_key('owner_home_city') }}</u></td>
                        <td><strong>State:</strong> <u>{{ $data->find_key('owner_home_state') }}</u></td>
                        <td class="text-start"><strong>Zip:</strong> <u>{{ $data->find_key('owner_home_zip') }}</u></td>
                    </tr>
                    <tr>
                        <td><strong>Home Phone:</strong> <u>{{ $data->find_key('owner_home_phone') }}</u></td>
                        <td><strong>Mobile Phone:</strong> <u>{{ $data->find_key('owner_home_mobile_phone') }}</u></td>
                        <td colspan="3" class="p-0">
                            <table class="table mb-0">
                                <tr>
                                    <td class="text-start"><strong>Date of Birth:</strong> <u>{{ $data->find_key('owner_date_of_birth') }}</u></td>
                                    <td class="text-start"><strong>SS#:</strong> <u>{{ $data->find_key('owner_ss#') }}</u></td>
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
                        <td><strong>Owner Signature:</strong> <u>{{ $data->find_key('owner_signature') }}</u></td>
                        <td class="text-start"><strong>Co-Owner Signature:</strong> <u>{{ $data->find_key('co_owner_signature') }}</u></td>
                    </tr>
                    <tr>
                        <td><strong>Printed Name:</strong> <u>{{ $data->find_key('owner_printed_name') }}</u></td>
                        <td class="text-start"><strong>Printed Name:</strong> <u>{{ $data->find_key('co_owner_printed_name') }}</u></td>
                    </tr>
                    <tr>
                        <td><strong>Date:</strong> <u>{{ $data->find_key('owner_date') }}</u></td>
                        <td class="text-start"><strong>Date:</strong> <u>{{ $data->find_key('co_owner_date') }}</u></td>
                    </tr>
                </table>

                <table class="table table-striped table-bordered">
                    <tr class="text-center">
                        <th colspan="2">BANK STATEMENT</th>
                    </tr>
                    <tr>
                        @foreach(json_decode($data->find_key('bank_statement_path')) as $key => $value)
                        <td class="text-start"><strong>File:</strong> <a href="{{ asset($value) }}" download>Download File</a></td>
                        @endforeach
                    </tr>
                </table>

                <table class="table table-striped table-bordered">
                    <tr>
                        <td class="text-start" style="width:49%">
                            <p><strong>Date:</strong> <br>{{ date('h:m:A - j F Y', strtotime($data->created_at)) }}</p>
                            <form method="POST" action="{{ route('applications.update', $data->id) }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="email" value="{{ $data->find_email() }}">
                                <p class="mb-1"><strong>Comments:</strong></p>
                                <textarea name="comments" id="comments" class="form-control">{{ $data->comments }}</textarea>

                                <p class="mb-1 mt-3"><strong>Status: </strong></p>
                                <div class="input-group mb-3">
                                    <select name="status" id="status" class="form-control">
                                        <option value="1" {{ $data->status == 1 ? 'selected' : '' }} disabled>Pending</option>
                                        <option value="4" {{ $data->status == 4 ? 'selected' : '' }}>In Process</option>
                                        <option value="2" {{ $data->status == 2 ? 'selected' : '' }}>Approved</option>
                                        <option value="3" {{ $data->status == 3 ? 'selected' : '' }}>Rejected</option>
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
@endsection