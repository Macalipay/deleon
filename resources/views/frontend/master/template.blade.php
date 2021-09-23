<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
<title>Deleon's Best</title>
<link rel="icon" href="{{ asset('img/Logo.png') }}" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Archivo:400,600,700%7CMuli:400">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('opimac/landing/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('opimac/landing/css/fonts.css') }}">
<link rel="stylesheet" href="{{ asset('opimac/landing/css/style.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link href="{{ asset('css/global.css') }}" rel="stylesheet"> 

<link rel="stylesheet" href="{{ asset('css/frontend.css') }}">

@yield('style')
</head>
<body>
<div class="preloader">
  <div class="preloader-body">
    <div class="cssload-container"><span></span><span></span><span></span><span></span> </div>
  </div>
</div>
<div class="page">
  @include('frontend.pages.header')
  @include('frontend.pages.services')
  @include('frontend.pages.product')
  @include('frontend.pages.support')
  @include('frontend.pages.footer')
</div>
<script src="{{ asset('opimac/landing/js/core.min.js') }}"></script>
<script src="{{ asset('opimac/landing/js/script.js') }}"></script>
</body>
</html>
