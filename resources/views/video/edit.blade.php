@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <h2>Editar {{ $video->title }}</h2>
    <form action="{{ route('updateVideo', ['id' => $video->id]) }}" method="post" enctype="multipart/form-data" class="col-lg-7">
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
        <input type="text" class="form-control" name="title" id="title" value="{{ $video->title }}">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" id="description" name="description">{{ $video->description }}</textarea>
      </div>
      <div class="form-group">
        <label for="image">Minuatura</label>
        @if(Storage::disk('images')->has($video->image))
        <div class="video-image-thumb">
          <div class="video-image-mask">
            <img src="{{ url('/miniatura/' . $video->image) }}" class="video-image" />
          </div>
        </div>
        @endif
        <input type="file" class="form-control" id="image" name="image" />
      </div>
      <div class="form-group">
        <label for="video">Archivo de vídeo</label>
        <video controls id="video-player">
          <source src="{{ route('fileVideo', ['filename' => $video->video_path]) }}" />
          Tu navegdaor no es compatible con HTML
        </video>
        <input type="file" class="form-control" id="video" name="video" />
      </div>
      <button type="submit" class="btn btn-primary">Actualizar video</button>
    </form>
  </div>
</div>
@endsection