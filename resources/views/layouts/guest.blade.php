<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/morris.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>
<body>
<div class="min-vh-100 d-flex justify-content-center align-items-center">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-10">
            <div class="row g-0 auth-row">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>
