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
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::label('product_name', 'Product Name')}}
                                    {{ Form::text('product_name', $product->product_name, ['class' => 'form-control', 'placeholder' => 'Enter Product Name', 'readonly']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('product_sku', 'Product SkU')}}
                                    {{ Form::text('product_sku', $product->product_sku, ['class' => 'form-control', 'placeholder' => 'Enter Product SKU', 'readonly']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('product_price', 'Product Price')}}
                                    {{ Form::number('product_price', $product->product_price, ['class' => 'form-control', 'placeholder' => 'Enter Product Price', 'readonly']) }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::label('product_status', 'Product Status')}}
                                    {{ Form::text('product_sku', $product->product_status, ['class' => 'form-control', 'placeholder' => 'Enter Product Status', 'readonly']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('product_category', 'Product Category')}}
                                    {{ Form::text('product_category', $product->category_name, ['class' => 'form-control', 'placeholder' => 'Enter Category Name', 'readonly']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('product_image', 'Product Image') }}
                                    <br/><img src="{{ asset('storage/'.$product->product_image) }}" alt="" class="img-circle" width="150" height="150">      
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('product_description', 'Product Description')}}
                                    {{ Form::textarea('product_description', $product->product_description, ['class' => 'form-control', 'placeholder' => 'Enter Product Description', 'rows' => '3', 'readonly']) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('products') }}" class="btn btn-outline-info">Back</a>
                        <button class="btn btn-primary float-right" type="submit">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection