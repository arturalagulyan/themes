<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/' . $theme . '/main.css') }}">
</head>
<body>
    @include('layout.navbar')
    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>
