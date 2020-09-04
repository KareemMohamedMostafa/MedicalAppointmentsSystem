@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <h2>Crear nuevo video</h2>
    <form action="{{ route('saveVideo') }}" method="post" enctype="multipart/form-data" class="col-lg-7">
      {!! csrf_field() !!}

      @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" id="description" name="description">{{ old('description') }}</textarea>
      </div>
      <div class="form-group">
        <label for="image">Minuatura</label>
        <input type="file" class="form-control" id="image" name="image">
      </div>
      <div class="form-group">
        <label for="video">Archivo de vídeo</label>
        <input type="file" class="form-control" id="video" name="video">
      </div>
      <button type="submit" class="btn btn-primary">Crear video</button>
    </form>
  </div>
</div>
@endsection