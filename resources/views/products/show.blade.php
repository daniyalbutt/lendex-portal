@extends('layouts.admin-app')

@section('content')
<div class="row page-titles mx-0">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Products</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Show Product - {{ $data->name }}</a></li>
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
                <h4 class="card-title">Products - {{ $data->name }}</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Image</th>
                        <td class="text-start"><img src="{{ asset($data->image) }}" alt="{{ $data->name }}" width="80"></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td class="text-start">{{ $data->name }}</td>
                    </tr>
                    <tr>
                        <th>Details</th>
                        <td class="text-start">{{ $data->detail }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection