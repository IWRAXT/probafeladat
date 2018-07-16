<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <title></title>
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css">
    <style type="text/css">body{padding-top: 40px;}</style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
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


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

    {{--<script src="https://unpkg.com/vue@2.5.16/dist/vue.js"></script>--}}
    <script src="{{asset('js/app.js')}}"></script>


</body>
</html>