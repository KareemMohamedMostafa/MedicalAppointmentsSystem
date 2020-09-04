@extends('layouts.app')

@section('content')
<section class="content">
  <div class="block-header">
    <div class="row">
      <div class="col-lg-7 col-md-6 col-sm-12">
        <h2>All Patients
          <small class="text-muted">Listing</small>
        </h2>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-12">
        <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
          <i class="zmdi zmdi-plus"></i>
        </button>
        <ul class="breadcrumb float-md-right">
          <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="zmdi zmdi-home"></i> Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0);">Patients</a></li>
          <li class="breadcrumb-item active">All Patients</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row clearfix">
      <div class="col-md-12">
        <div class="card patients-list">
          <div class="body">
            @if (count($results) > 0)
            <div class="table-responsive">
              <table class="table m-b-0 table-hover js-basic-example dataTable">
                <thead>
                  <tr>
                    <th>Img</th>
                    <th>Patients ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Since</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($results as $result)
                  <tr>
                    <td><span class="list-icon"><img class="patients-img" src="{{ $result->image }}" alt=""></span></td>
                    <td><span class="list-name">{{ $result->id }}</span></td>
                    <td>{{ $result->fullname }}</td>
                    <td>{{ \FormatTime::LongTimeFilter($result->birthdate) }}</td>
                    <td>{{ $result->address }}</td>
                    <td>{{ $result->phone }}</td>
                    <td>{{ $result->email }}</td>
                    <td>{{ \FormatTime::LongTimeFilter($result->created_at) }}</td>
                    <td><span class="badge badge-success">{{ $result->status }}</span></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            @else
            <div class="alert alert-info">Empty data</div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection