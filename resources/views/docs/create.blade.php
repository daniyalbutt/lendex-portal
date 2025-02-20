@extends('layouts.admin-app')

@section('content')
<div class="row page-titles mx-0">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $user->name }}</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Document</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Create Document</a></li>
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
                <h4 class="card-title">User Details</h4>
            </div>
            <div class="card-body">
                <table class="table table-stripped table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td class="text-start">{{ $user->email }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

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
                <h4 class="card-title">Document Management</h4>
            </div>
            @can('user-doc-list')
            @foreach($user->user_docs as $key => $value)
            <div class="card-body">
                <div class="basic-form">
                    @can('user-doc-delete')
                    <form method="post" action="{{ route('documents.destroy', $value->id) }}" class="document-delete-form">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger btn-sm content-icon btn-sm" type="submit"><i class="fa fa-times"></i></button>
                    </form>
                    @endcan
                    <form action="{{ route('documents.update', $value->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row align-items-end">
                            <div class="col-md-4 col-lg-3">
                                <label class="form-label">Document Name</label>
                                <input type="text" name="name" placeholder="Document Name" class="form-control" value="{{ $value->name }}" required>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <label class="form-label">Additional Comments (optional)</label>
                                <input type="text" name="comments" placeholder="Additional Comments" class="form-control" value="{{ $value->comments }}">
                            </div>
                            <div class="col-md-2 col-lg-3">
                                <ul style="display: flex;align-items: end;gap: 15px;justify-content: space-between;">
                                    <li>
                                        <span class="badge {{ $value->find_status_class() }}">{{ $value->find_status() }}</span>
                                    </li>
                                    @can('user-doc-edit')
                                    <li><button class="btn btn-warning" type="submit">Update</button></li>
                                    @endcan
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="mb-2">
            @endforeach
            @endcan
            @can('user-doc-create')
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('documents.store') }}" method="post">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        @csrf
                        <div class="row align-items-end">
                            <div class="col-md-4 col-lg-3">
                                <label class="form-label">Document Name</label>
                                <input type="text" name="name" placeholder="Document Name" class="form-control" required>
                            </div>
                            <div class="col-md-6 col-lg-7">
                                <label class="form-label">Additional Comments (optional)</label>
                                <input type="text" name="comments" placeholder="Additional Comments" class="form-control">
                            </div>
                            <div class="col-md-2 text-end">
                                <button type="submit" class="btn-loader btn btn-primary btn-block" style="height: 40.59px;"><img src="{{ asset('images/loader.gif') }}" alt="Loading"> Save Document</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @endcan
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $('form').on('submit', function(){
            $(this).find('.btn-loader').prop('disabled', true);
            $(this).find('img').show();
        })
    });
</script>
@endpush