@extends('template')
 
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Show Category</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Show Category</li>
            </ol>
            </div>
        </div>
    </div>
</div>
 
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                        <div class="card-header">
                                <h3 class="card-title">Show Category</h3>
                            </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text" name="category_name" class="form-control"
                            value="{{ $category_show->category_name }}" placeholder="Enter Category Name" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="text" name="category_name" class="form-control"
                            value="{{ $category_show->category_status }}" placeholder="Enter Category Name" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{ url('/categories') }}" class="btn btn-outline-info">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection