@extends('layout.master')
@section('title','Hyperlinks')
@section('content')
@if($errors->all())
@foreach($errors->all() as $error)
<div class="alert alert-danger">
      {{ $error }}
</div>
@endforeach
@endif

@if(session('status'))
<div>
    {{session('status')}}
</div>
@endif
<form method="POST" action="{{route('upload.profile')}}" enctype="multipart/form-data">
  @csrf
  <input type="file" name="profile_picture">
  <input type="submit" class="btn btn-default">
</form>
<img src="/storage/upload/{{Auth::user()->profile_picture}}" alt="profile">

@endsection