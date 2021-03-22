<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/iniciarsesion.css">
    <link rel="stylesheet" href="../links/bootstrap.min.css">
    <link href="../FONTAWESOME/fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet">
    <script src="../links/bootstrap.bundle.min.js"></script>
    <script src="../links/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="../style/navbarcss.css">
    <script src="../js/navbarjs.js"></script>
    <title>Iniciar Sesion</title>
</head>

<body>
 
        <div class="divcard">
            <form class="col-sm-6" style="padding-top: 25%; margin-left:10%" action="../php_controllers/iniciarsesioncontroller.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Usuario" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Contraseña" required>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
    

</body>

</html>