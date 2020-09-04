@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="container">

      <div class="col-md-4">
        <h2>Búsqueda: {{ $search }}</h2>
        <br />
      </div>

      <div class="col-md-8">

        <form class="col-md-4 pull-right" action="{{ url('/buscar/' . $search) }}" method="get">
          <label for="filter">Ordenar</label>
          <select class="form-control" name="filter" id="filter">
            <option value="new">Mas nuevo primero</option>
            <option value="old">Mas antiguos primero</option>
            <option value="alfa">De la A la Z</option>
          </select>
          <input type="submit" value="Ordenar" class="btn-filter btn btn-sm btn-default">
        </form>
      </div>
      <div class="clearfix"></div>
      @include('video.videosList')

    </div>

  </div>
</div>
@endsection