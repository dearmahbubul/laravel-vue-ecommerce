@extends('master')
@section('content')
    <invoice-component :orderid="{{$orderId}}"></invoice-component>
@endsection
{{--
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    --}}
{{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}{{--

    <script !src="">
        let orderid = '{{$orderId}}'
    </script>
</head>
<body>
    <div id="app">
        <invoice-component></invoice-component>
    </div>
    <script src="{{URL::asset('js/app.js')}}"></script>
</body>
</html>
--}}
