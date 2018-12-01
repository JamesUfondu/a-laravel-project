@extends('layout.master')
@section('title', 'Add Post')
@section('content')
<form method="post">
@csrf
  <div>
    title <input type="text" name="title">
  </div>
  <div>
    content <textarea name="content" id="" rows="4"></textarea>
  </div>
   <input type="Submit">
</form>

@endsection
