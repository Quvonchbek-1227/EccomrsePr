<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>

<body>
    {{ View::make('header') }} @yield('content') {{ View::make('footer') }}




    <script src="{{ asset('jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
<style>
    .custom-login {
        height: 500px;
        padding-top: 100px
    }
    
    .slider-img {
        height: 400px!important;
    }
    
    .custom-product {
        height: 600px;
    }
    
    .slider-text {
        background-color: rgba(71, 33, 33, 0.7);
    }
</style>

</html>