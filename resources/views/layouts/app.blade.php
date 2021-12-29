<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>{{ (!empty($title) ? $title : config('APP.NAME')) }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" media="screen"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/argon.min.css') }}" media="screen"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
</head>
<body class="g-sidenav-show g-sidenav-pinned">

@auth
@include('layouts.partials.sidebar')
@endauth

<div class="main-content" id="panel">

    @auth
    @include('layouts.partials.topbar')
    @include('layouts.partials.header')
    @endauth

    <div class="container @auth mt--6 @endauth">
        @yield('content')
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/argon.min.js') }}"></script>
</body>
</html>
