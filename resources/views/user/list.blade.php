@extends('layouts.app')

@section('content')

<section class="content">

  <div class="block-header">

    <div class="row">

      <div class="col-lg-7 col-md-6 col-sm-12">

        <h2>All Users <small class="text-muted">Listing</small> </h2>

      </div>

      <div class="col-lg-5 col-md-6 col-sm-12">

        <ul class="breadcrumb float-md-right">

          <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="zmdi zmdi-home"></i> Home</a></li>

          <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>

          <li class="breadcrumb-item active">All</li>

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

                    <th>Name</th>

                    <th>Email</th>

                    <th>Role</th>

                    <th class="text-center">Since</th>

                    <th class="text-center">Status</th>

                    <th class="text-center">Actions</th>

                  </tr>

                </thead>

                <tbody>

                  @foreach($results as $result)

                  <tr>

                    <td><span class="list-icon"><img class="patients-img" src="{{ url('/getImage/' . $result->image) }}" /></span></td>

                    <td>{{ $result->name }}</td>

                    <td>{{ $result->email }}</td>

                    <td>{{ $result->role }}</td>

                    <td class="text-center">{{ \FormatTime::LongTimeFilter($result->created_at) }}</td>

                    <td class="text-center"><span class="badge badge-success">@if($result->status) active @else inactive @endif</span></td>

                    <td class="text-center">

                      <button type="button" class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round" data-toggle="modal" data-target="#formUserModal" onclick="editUserModal('{{ $result->id }}')"><i class="zmdi zmdi-edit"></i></button>

                    </td>

                  </tr>

                  @endforeach

                </tbody>

              </table>

            </div>

            @else <div class="alert alert-info">Empty data</div> @endif

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

@include('user.form')

@endsection