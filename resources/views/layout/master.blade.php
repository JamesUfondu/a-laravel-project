<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0\
/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0\
/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>

  <div>
    @include('layout.navbar')
   	@yield('content')
   </div>
   <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.mi\
n.js"></script>
</body>
</html>
