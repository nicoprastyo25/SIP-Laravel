@extends('template')

@section('content')
    
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Create Product
                        </li>
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
                        {{ Form::open(['url' => 'product/add', 'files' => true]) }}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('product_name', 'Product Name')}}
                                        {{-- <label for="product_name">Product Name</label> --}}
                                        {{ Form::text('product_name','',['class' => 'form-control', 'placeholder' => 'Enter Product Name'])}}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('product_sku', 'Product SKU')}}
                                        {{ Form::text('product_sku','',['class' => 'form-control', 'placeholder' => 'Enter Product SKU'])}}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('product_price', 'Product Price')}}
                                        {{ Form::number('product_price','',['class' => 'form-control', 'placeholder' => 'Enter Product PRICE'])}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('product_status', 'Product Status')}}
                                        {{ Form::select('product_status',['Active' => 'Active', 'Inactive' => 'Inactive'], null,
                                        ['class' => 'form-control', 'placeholder' => 'Choose One']) }}
                                    </div>                                    
                                    <div class="form-group">
                                        {{ Form::label('product_category', 'Product Category')}}
                                        {{ Form::select('product_category',$categories, null,
                                        ['class' => 'form-control', 'placeholder' => 'Choose One']) }}
                                    </div>                                    
                                    <div class="form-group">
                                        {{ Form::label('product_image', 'Product Image')}}
                                        {{ Form::file('product_image', 
                                        ['class' => 'form-control']) }}
                                    </div>                                    
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('product_description', 'Product Description')}}
                                        {{ Form::textarea('product_description','',['class' => 'form-control', 'placeholder' => 'Enter Product Description', 'rows' => '5'])}}                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                        <a href="{{url('products')}}" class="btn btn-outline-info">back</a>
                        <button class="btn btn-primary float-right" type="submit">Simpan</button>
                        </div>

                        
                        {{ Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection