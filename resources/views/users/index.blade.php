@extends('layouts.admin-app')

@section('content')
<div class="row page-titles mx-0">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Users</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">All Users</a></li>
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
                <h4 class="card-title">User management</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $user)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $v)
                                    <label class="badge badge-success badge-sm">{{ $v }}</label>
                                    @endforeach
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex gap-1 justify-content-end">
                                        
                                        <a class="btn btn-warning btn-sm content-icon" href="{{ route('documents.create', ['user' => $user->id])}}"><i class="fa fa-file"></i></a>

                                        <a class="btn btn-info btn-sm" href="{{ route('users.show',$user->id) }}"><i class="fa-solid fa-eye"></i></a>
                                        @can('user-edit')
                                        <a class="btn btn-warning btn-sm content-icon" href="{{ route('users.edit', $user->id) }}"><i class="fa fa-edit"></i></a>
                                        @endcan
                                        @can('user-delete')
                                        <form method="post" action="{{ route('users.destroy', $user->id) }}">
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
                                <th>Roles</th>
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