@extends('layouts.admin-app')

@section('content')
<div class="row page-titles mx-0">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Applications</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Application - {{ $data->find_name() }}</a></li>
    </ol>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p class="mb-0">{{ $message }}</p>
</div>
@endif

<div class="row">
    <div class="col-xl-12 col-lg-12">
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
                <h4 class="card-title">Role Management</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="POST" action="{{ route('applications.update', $data->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" placeholder="Name" class="form-control" value="{{ old('name', $data->find_name()) }}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email', $data->find_email()) }}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="0" {{ $data->status == 0 ? 'selected' : '' }} disabled>Pending</option>
                                    <option value="2" {{ $data->status == 2 ? 'selected' : '' }}>Rejected</option>
                                    <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Approved</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Comments</label>
                                <textarea name="comments" id="comments" class="form-control">{{ $data->comments }}</textarea>
                            </div>
                            <div class="col-md-12 text-end">
                                <button type="submit" class="btn btn-primary">Update Document</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection