<!DOCTYPE html>
<html lang="id"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Departemen Misi Nasional Gereja Sidang Jemaat Allah Indonesia">
    <meta name="author" content="DMN GSJA">
    <link rel="icon" href="{{ asset('/favicon.ico') }}">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/dashboard.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="{{ asset('/js/jquery-1.11.2.min.js') }}"></script> <!-- loaded first to be able to use $(window).load -->
  </head>

  <body>

    @section('navbar')

      @if(Auth::guest())
        @include('guest-nav')
      @else
        @include('user-nav')
      @endif

    @show

    @yield('content')

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('/js/ie10-viewport-bug-workaround.js') }}"></script>
    <script src="{{ asset('/js/jquery.ba-floatingscrollbar.min.js') }}"></script> <!-- Ben Alman's jQuery Floating Scrollbar v0.5 for the table's horizontal scrolling -->

</body></html>