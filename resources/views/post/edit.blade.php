@extends('layout.master')
@section('title', 'Update')
@section('content')
<div class="card uper">
  <div class="card-header">
    Edit Post
  </div>
      <form method="post">
        @csrf
        <div class="form-group">
          <label for="price">Post title</label>
          <input type="text" class="form-control" name="title" value="{{$post->title}}" />
        </div>
        <div class="form-group">
          <label for="quantity">Post content</label>
          <input  class="form-control" name="content" value="{{$post->content}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection
