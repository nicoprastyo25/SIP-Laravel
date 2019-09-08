@extends('template')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Product</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active">Edit Product</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                {{ Form::open(['url' => 'product/update/'.$product->product_id, 'files' => true]) }}
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::label('product_name', 'Product Name')}}
                                    {{ Form::text('product_name', $product->product_name, ['class' => 'form-control', 'placeholder' => 'Enter Product Name']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('product_sku', 'Product SkU')}}
                                    {{ Form::text('product_sku', $product->product_sku, ['class' => 'form-control', 'placeholder' => 'Enter Product SKU']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('product_price', 'Product Price')}}
                                    {{ Form::number('product_price', $product->product_price, ['class' => 'form-control', 'placeholder' => 'Enter Product Price']) }}
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                    {{ Form::label('product_status', 'Product Status')}}
                                    {{ Form::select('product_status', ['Active' => 'Active', 'Inactive' => 'Inactive'], $product->product_status, ['class' => 'form-control', 'placeholder' => 'Choose One']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('product_category', 'Product Category')}}
                                    {{ Form::select('product_category', $categories, $product->category_id, ['class' => 'form-control', 'placeholder' => 'Choose One']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('product_image', 'Product Image') }}
                                    <br/><img src="{{ asset('storage/'.$product->product_image) }}" alt="" class="img-circle" width="150" height="150">    
                                    {{ Form::file('product_image', ['class'=>'form-control']) }}    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('product_description', 'Product Description')}}
                                    {{ Form::textarea('product_description', $product->product_description, ['class' => 'form-control', 'placeholder' => 'Enter Product Description', 'rows' => '3']) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('products') }}" class="btn btn-outline-info">Back</a>
                        <button class="btn btn-primary float-right" type="submit">Update</button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@endsection