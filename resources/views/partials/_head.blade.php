<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

@include('partials._meta')

@include('partials._google_schema')

{{-- twitter card --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="Bringing affordable & renewable electricity to Bangladesh">
<meta name="twitter:title" content="The Charge Project | Bringing affordable & renewable electricity to Bangladesh">

@yield('og_meta')
<meta property="og:type" content="website" />

<title>The Charge Project | @yield('title')</title>

<link rel="icon" href="/imgs/favicon.png" type="image/png" sizes="16x16">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">

<!-- Font Awesome FREE version -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- Styles -->
<link rel="stylesheet"  href="/css/app.css">
<link rel="stylesheet"  href="/css/style.css">
@yield('styles')

