@extends('layout.master')
@section('title', 'Hyperlinks')
@section('content')
<div style="panel panel-default">
@foreach($posts as $post)
  <div class="media media-default">
    <div class="media-heading">
      <a href="{{route('details',$post->id)}}">{{$post->title}}</a>
    </div>
  </div>
  @endforeach
</div>
@endsection
