<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/ico" href="{{asset('/images/logo/'. $setting->favicon)}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
      <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <title>Quiz</title>

    <!-- Styles -->
    @yield('head')
</head>
<body>
    <div id="app">
        @yield('top_bar')
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
