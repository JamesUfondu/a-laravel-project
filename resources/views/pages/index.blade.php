@extends('layout.master')
@section('title', 'Home')
@section('content')
<script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '{285579392065056}',
            cookie     : true,
            xfbml      : true,
            version    : '{3.2}'
          });
            
          FB.AppEvents.logPageView();   
            
        };
      
        (function(d, s, id){
           var js, fjs = d.getElementsByTagName(s)[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement(s); js.id = id;
           js.src = "https://connect.facebook.net/en_US/sdk.js";
           fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script>
<div class="container">
<div class="content">
<div class="title">Home Page</div>
<div class="quote">Our Home page!</div>
</div>
</div>
@endsection