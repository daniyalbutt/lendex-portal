@extends('layouts.admin-app')

@section('content')
<div class="row page-titles mx-0">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Permissions</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Show Permissions - {{ $data->name }}</a></li>
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
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Permissions - {{ $data->name }}</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Name</th>
                        <td class="text-start">{{ $data->name }}</td>
                    </tr>
                    <tr>
                        <th>Guard Name</th>
                        <td class="text-start">{{ $data->guard_name }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection