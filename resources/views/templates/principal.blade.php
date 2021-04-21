<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Cosasdelanterior/style/iniciarsesion.css') }}">
    <link rel="stylesheet" href="{{ asset('Cosasdelanterior/links/bootstrap.min.css') }}">
    <link href="{{ asset('Cosasdelanterior/FONTAWESOME/fontawesome-free-5.15.1-web') }}" rel="stylesheet">
    <script src="{{ asset('Cosasdelanterior/links/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Cosasdelanterior/links/jquery-3.3.1.slim.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('Cosasdelanterior/links/jquery-3.3.1.slim.min.js') }}">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="{{ asset('Cosasdelanterior/js/navbarjs.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('Cosasdelanterior/style/navbarcss.css') }}">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="{{ asset('Cosasdelanterior/js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('Cosasdelanterior/FONTAWESOME/fontawesome-free-5.15.1-web/css/all.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Cosasdelanterior/links/bootstrap.min.css') }}">
    <!-- Include Date Range Picker -->
    <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />


    <title>Iniciar Sesion</title>
</head>

<body>
    <div>
        @yield('contenido')
    </div>
</body>

<script src="{{ asset('app.js') }}"></script>

</html>
