@extends('layouts.admin-app')

@section('content')
<div class="row page-titles mx-0">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">All Pages</a></li>
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
                    <table class="table table-striped" id="example">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Modified</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $value)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->status == 0 ? 'Published' : 'Trash' }}</td>
                                <td class="text-nowrap">{{ $value->created_at->format('d M, Y') }}</td>
                                <td class="text-nowrap">
                                    <div class="d-flex gap-1 justify-content-end">
                                        <a href="javascript:void(0);" class="btn btn-info btn-sm content-icon">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        @can('product-edit')
                                        <a href="{{ route('pages.edit',$value->id) }}" class="btn btn-warning btn-sm content-icon">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        @endcan
                                        @can('product-delete')
                                        <form method="post" action="{{ route('pages.destroy', $value->id) }}">
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
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection