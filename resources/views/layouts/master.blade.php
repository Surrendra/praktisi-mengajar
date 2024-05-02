<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{ config('app.name') }} | @yield('title')
    </title>
    {{-- bootstrap-5.0.2 --}}
    <link href="{!! asset('vendors/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
</head>
<body>
@yield('content')
<script src="{!! asset('vendors/jquery/jquery-3.7.1.min.js') !!}"></script>
<script src="{!! asset('vendors/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
</body>
</html>