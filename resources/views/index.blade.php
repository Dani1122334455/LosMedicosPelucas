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
    <script src="{{ asset('Cosasdelanterior/js/navbarjs.js') }}"></script>
    <title>Iniciar Sesion</title>
</head>

<body>
        <div class="divcard">
            <form class="col-sm-6" style="padding-top: 30%; margin-left:10%" action="{{action([App\Http\Controllers\UsuariController::class,'login'])}}" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="text" class="form-control" id="username"  placeholder="Usuario" value="{{ old('usuari')}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Contraseña" value="{{ old('contrasenya')}}" required>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
</body>

</html>
