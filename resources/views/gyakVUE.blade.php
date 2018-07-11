<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <title></title>
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css">
    <style type="text/css">body{padding-top: 40px;}</style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    {{--<div id="app" class="container">--}}
        {{--<message title="Hello World" body="Valami szöveg"></message>--}}

    {{--</div>--}}


    <div id="app">
        <div class="container">
            <articles></articles>
        </div>
    </div>

    {{--<script src="https://unpkg.com/vue@2.5.16/dist/vue.js"></script>--}}
    <script src="{{asset('js/app.js')}}"></script>


</body>
</html>