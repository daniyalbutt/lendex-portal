@extends('layouts.admin-app')

@section('content')
<div class="row page-titles mx-0">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Permissions</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">All Permissions</a></li>
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
                <h4 class="card-title">Permission Management</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Guard Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $value)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->guard_name }}</td>
                                <td>
                                    <div class="d-flex gap-1 justify-content-end">
                                        <a class="btn btn-info btn-sm" href="{{ route('permissions.show',$value->id) }}"><i class="fa-solid fa-eye"></i></a>
                                        @can('permission-edit')
                                        <a class="btn btn-warning btn-sm content-icon" href="{{ route('permissions.edit',$value->id) }}"><i class="fa fa-edit"></i></a>
                                        @endcan
                                        @can('permission-delete')
                                        <form method="post" action="{{ route('permissions.destroy', $value->id) }}">
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
                                <th>Guard Name</th>
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