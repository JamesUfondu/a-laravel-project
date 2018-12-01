@extends('layout.master')
@section('title','Hyperlinks')
@section('content')
<div class="margin:0 auto; row">
  <div class="panel panel-default">
    <div class="panel-heading">
      {{$post->title}}
    </div>
    <div class="panel-heading">
      {{$post->content}}
    </div>
    <div class="panel-heading">
      {{$post->username}} --- created at {{$post->created_at}}
    </div>
    <div>
      <a href="{{route('edit', $post->id)}}">Edit</a><br><br>
      <a href="{{route('delete', $post->id)}}">Delete</a>
    </div>
 </div>
</div>
{{--  code for displaying coments from a tutorial --}}
<div class="row">
  <div class="col-sm-12 col-md-6 col-md-offset">
    <h3 class="comment-title"><span class="glyphicon glyphicon-comment"></span>{{$post->comments}} Comment</h3>
    @foreach ($post->comment as $key =>$value)
    <div class="comment">
      <div class="row">
        <div class="col-12">
          <div class="author-name">
            <h4>{{$value->name}}</h4>
            <p class="author-time">{{date('F nS, Y - g:iA', strtotime($value->created_at))}}</p>
          </div>
        </div>
      </div>
      <div class="comment-content">
        {{$value->comment}}
      </div>
      <br>
      <br>
    </div>
  </div>
</div>
  </div>
</div>
@endforeach
{{-- code for displaying comments on the page  by Sir segun--}}
{{--  @foreach($post->comment as $comments)
<div class="panel panel-default">
  <div class="panel-body">
    {{$comments->comment}}
  </div>
  <div class="panel-footer">
  <strong>Comment by</strong> {{$comments->name}}
  </div>
</div>
@endforeach  --}}  

{{--  code for checking errors  --}}
@if(count($errors->null) >1)
@foreach ($errors->all() as $error)
<div class="alert alert-danger">
  {{$error}}
</div>
@endforeach
@endif
{{--  code for the post  --}}
<div class="row">
  <form method="POST" action="{{route('mycomments')}}">
    @csrf
  <div class="col-sm-12 col-md-6">
    <label value="Name">Name:</label>
    <input type="text" placeholder="Please Input Your Name Here:" name="name">
  </div>
  <div class="col-sm-12 col-md-6">
    <label value="Email">Email:</label>
    <input type="text" placeholder="Please Input Your Email Here:" name="email">
  </div>
  <div class="col-sm-12 col-md-6">
      <input type="hidden" value="{{$post->id}}" name="post_id">
  </div>
  <div class="col-sm-12 col-md-12">
      <label value="Comments"><strong>Comments:</strong></label>
      <br>
      <textarea type="text" placeholder="Please Input Your Comments Here:" name="comment"></textarea>
      <br>
      <input type="submit" value="submit" style="margin-top:2em;">
    </div>
  </form>
</div>
 @endsection