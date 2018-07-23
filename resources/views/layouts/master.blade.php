<!DOCTYPE html>
<html lang="en">
<head>
    <title>Proba feladat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{csrf_token()}}">
    {{--Syles--}}

    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/proba.css")}}">
    <link href="{{ asset('../css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>

@include('layouts.navbar')


@if (session('success'))
    <div class="col-mg-6 alert alert-success">
        {{session('success')}}
    </div>
@endif

<div class="container">
    <div class="row">

            @yield('content')
        </div>
    </div>
</div>

@include('layouts.footer')



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('../js/bootstrap.min.js') }}"></script>

</body>
</html>
