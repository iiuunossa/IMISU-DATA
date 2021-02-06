<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{url('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/font-awesome/css/fontawesome.min.css')}}">
    
    <title>@yield('title')</title>
</head>
<body>      
    @yield('content')

    <footer>
        @yield('footer')
    </footer>
</body>

<!-- <script src="{{url('/js/jquery-3.4.0.min.js') }}"></script>
<script src="{{url('/js/popper.min.js')}}"></script> -->
<script src= "{{url('/bootstrap/js/bootstrap.min.js')}}"></script>
</html>