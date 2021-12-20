<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ (!empty($title) ? $title : config('APP.NAME')) }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}" media="screen" />
</head>
<body>
    <div class="container-fluid">
        @yield('content')
    </div>
</body>
</html>
