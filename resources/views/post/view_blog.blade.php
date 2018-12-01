@extends('layout.master')
@section('title', 'Add Post')
@section('content')
<table class="table table-responsive">
  {{--  code for ensuring that succes token is displayed  --}}
@if (session('status'))
<div class="alert alert-success">
  {{session('status')}}
</div>
@endif
  <thead>
    <tr>
      <th>No</th>
      <th>user_id</th>
      <th>title</th>
      <th>content</th>
      <th>Date created</th>
    </tr>
  </thead>
  <tbody>
    @foreach($post as $post)
    <tr>
      <td>{{$loop->index+1}}</td>
      <td>{{$post->name}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->content}}</td>
      <td>{{$post->created_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
