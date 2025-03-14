@extends('layouts.admin-app')

@section('content')
<div class="row page-titles mx-0">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Products</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Product - {{ $data->name }}</a></li>
    </ol>
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
                <h4 class="card-title">Product management</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="{{ route('products.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control dropify" data-default-file="{{ asset($data->image) }}">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" placeholder="Name" class="form-control" value="{{ old('name', $data->name) }}" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Detail</label>
                                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ old('detail', $data->detail) }}</textarea>
                            </div>
                            <div class="col-md-12 text-end">
                                <button type="submit" class="btn btn-primary">Update Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection