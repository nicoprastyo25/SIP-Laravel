@extends('template')
 
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Category</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Edit Category</li>
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
                                <h3 class="card-title">Edit Category</h3>
                            </div>
                    <div class="card-body">
 
                        <form action="{{ url('/category/update/'.$category_edit->category_id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Category Name</label>
                                <input type="text" name="category_name" class="form-control"
                                value="{{ $category_edit->category_name }}" placeholder="Enter Category Name" required>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="category_status"  class="form-control" required>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <a href="{{ url('/categories') }}" class="btn btn-outline-info">Back</a>
                                <button class="btn btn-primary float-right" type="submit">Update</button>
                            </div>             
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection