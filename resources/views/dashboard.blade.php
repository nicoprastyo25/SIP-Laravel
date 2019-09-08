@extends('template')

@section('content')
<div class="content-header">
  <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
          </div>
      </div>
  </div>
</div>

<div class="content">
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Sales Graph</h3>
        </div>
        <div class="card-body">
          Sales graph here <br><br><br><br>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Latest Transaction</h3>
        </div>
        <div class="card-body">
          Lates Transaction here <br><br><br><br>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection      