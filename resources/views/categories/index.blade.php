@extends('template')
 
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Categories</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Categories</li>
            </ol>
            </div>
        </div>
    </div>
</div>
 
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div claass="card-header">
                        List Semua Kategori
                    </div>
                    <div class="card-body">
                        {{-- session --}}
                        @if($message = Session::get('success'))
                        <div id="alert-msg" class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            {{$message}}
                        </div>
                        @elseif($message = Session::get('info'))
                        <div id="alert-msg" class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                {{$message}} 
                            </div>
                        @elseif($message = Session::get('warning'))
                        <div id="alert-msg" class="alert alert-warning alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                {{$message}}
                            </div>                        
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" style="text-align: center;">
                                <thead>
                                    <tr>
                                        <th width="20px">No</th>
                                        <th>Category Name</th>
                                        <th width="150px">Status</th>
                                        <th width="90px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach($categories as $data)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $data->category_name }}</td>
                                        <td>{{ $data->category_status }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('category/edit/'.$data->category_id) }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                                <a href="{{ url('category/show/'.$data->category_id) }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                                {{-- <i href="{{ url('category/delete/'.$data->category_id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></i> --}}
                                                <!-- Button to Open the Modal -->
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDelete{{$data->category_id}}"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- The Modal Delete-->
@foreach($categories as $data)
<div class="modal" id="modalDelete{{$data->category_id}}">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Delete Category</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
              Apakah Anda yakin ingin menghapus kategori <b>{{ $data->category_name }}?</b>
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <a href="{{url('category/delete/'.$data->category_id)}}" class="btn btn-default">Delete</a>
            </div>
      
          </div>
        </div>
      </div>
@endforeach
@endsection