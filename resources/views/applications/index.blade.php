@extends('layouts.admin-app')

@section('content')
<div class="row page-titles mx-0">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Applications</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">All Applications</a></li>
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
                <h4 class="card-title">Application Management</h4>
                <form method="get" action="{{ route('applications.index') }}">
                    <select name="status" id="status" class="form-control" style="min-width: 150px;" onchange="submitForm(this)">
                        <option value="" {{ app('request')->input('status') == '' ? 'selected' : '' }}>All Status</option>
                        <option value="1" {{ app('request')->input('status') == 1 ? 'selected' : '' }}>Pending</option>
                        <option value="2" {{ app('request')->input('status') == 2 ? 'selected' : '' }}>Approved</option>
                        <option value="3" {{ app('request')->input('status') == 3 ? 'selected' : '' }}>Rejected</option>
                    </select>
                </form>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $value)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $value->find_name() }}</td>
                                <td>{{ $value->find_email() }}</td>
                                <td>
                                    <button class="btn {{ $value->find_status_class() }} btn-sm">{{ $value->find_status() }}</button>
                                </td>
                                <td>{{ date('d M, Y h:i a', strtotime($value->created_at)) }}</td>
                                <td>
                                    <div class="d-flex gap-1 justify-content-end">
                                        <a class="btn btn-primary btn-sm" href="{{ route('application.download',$value->id) }}"><i class="fa-solid fa-download"></i></a>
                                        <a class="btn btn-info btn-sm" href="{{ route('applications.show',$value->id) }}"><i class="fa-solid fa-eye"></i></a>
                                        @can('application-edit')
                                        <a class="btn btn-warning btn-sm content-icon" href="{{ route('applications.edit',$value->id) }}"><i class="fa fa-edit"></i></a>
                                        @endcan
                                        @can('application-delete')
                                        <form method="post" action="{{ route('applications.destroy', $value->id) }}">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-danger btn-sm content-icon"><i class="fa fa-times"></i></button>
                                        </form>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
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
</div>
@endsection