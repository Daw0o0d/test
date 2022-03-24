<!doctype html>
<html lang="en">
  <head>
    <title>
        @yield('title')
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

</head>
    <body>



        @yield('main')









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('bootstrap/js/jquery-3.5.1.slim.min.js')}}" ></script>
    <script src="{{asset('bootstarp/js/popper.min.js')}}" ></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}" ></script>


    </body>
</html>
