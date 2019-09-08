@extends('template')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Category</li>
                </ol>
            </div>
        </div>
    </div>
  </div>
  
  <div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <form method="POST" action="{{ url('/category/add') }}">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Category</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Category</label>
                            <input type="text" name="category_name" class="form-control" placeholder="Enter category" required/>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="category_status" class="form-control" required>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('/categories') }}" class="btn btn-outline-info">Back</a>
                        <button type="submit" class="btn btn-primary float-right">Add Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
  </div>
@endsection