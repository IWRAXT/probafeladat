<!DOCTYPE html>
<html lang="en">
<head>
    <title>Proba feladat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url("css/proba.css")}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

@include('layouts.navbar')


@if (session('success'))
    <div class="col-mg-6 alert alert-success">
        {{session('success')}}
    </div>
@endif

<div class="container">
        @yield('content')
</div>

@include('layouts.footer')



</body>
</html>
