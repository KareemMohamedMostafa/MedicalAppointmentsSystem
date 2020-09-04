@extends('layouts.app')

@section('content')
<div class="col-md-11 col-md-offset-1">
  <h2>{{ $video->title }}</h2>
  <hr />

  <div class="col-md-8">
    <video controls id="video-player">
      <source src="{{ route('fileVideo', ['filename' => $video->video_path]) }}" />
      Tu navegdaor no es compatible con HTML
    </video>
    <div class="panel panel-default video-data">
      <div class="panel-heading">
        <div class="panel-title">
          Subido por: <strong><a href="{{ route('channel', ['id' => $video->user_id]) }}">{{ $video->user->name }}</a></strong> {{ \FormatTime::LongTimeFilter($video->created_at) }}
        </div>
      </div>
      <div class="panel-body">
        {{ $video->description }}
      </div>
    </div>

    @include('video.comments')

  </div>
</div>

@endsection