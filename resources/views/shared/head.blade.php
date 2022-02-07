<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="topnav">
  <a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('index') }}">Features</a>
  <a class="{{ request()->is('catalog*') ? 'active' : '' }}" href="{{ route('catalog')}}">Our Catalog</a>
</div>

@yield('content')

</body>
</html>
