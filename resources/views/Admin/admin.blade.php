<html>
<head>
<title>Admin</title>
<link rel="stylesheet" href="../../../Cosasdelanterior/links/bootstrap.min.css">
<link href="../../../Cosasdelanterior/FONTAWESOME/fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet">
<script src="../../../Cosasdelanterior//links/bootstrap.bundle.min.js"></script>
<script src="../../../Cosasdelanterior/links/jquery-3.3.1.slim.min.js"></script>
<link rel="stylesheet" href="../../../Cosasdelanterior/style/navbarcss.css">
<script src="../../../Cosasdelanterior/js/navbarjs.js"></script>
<script src="../../../Cosasdelanterior/js/bootstrap.min.js">></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

<script>
    $(document).ready(function () {
        var date_input = $('input[name="date"]');
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    });

    function mostrar() {
    var x = document.getElementById('alerta');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
        }
    };
</script>
</head>
<body>
<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center"><img src="..." alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
            <div class="media-body">
                <h4 class="m-0">{{ Auth::user()->nom }}</h4>
                <p class="font-weight-light text-muted mb-0">Administrador</p>
            </div>
        </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Funciones</p>

    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Formulario Ambulancia
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
            <form>
            <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                    <input type="button" onclick="mostrar()" class="add-to-cart" value="Formulario Administrativo" />
                </form>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
               Administrar Recursos
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
                <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                ...
            </a>
        </li>
    </ul>

    <!-- <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Ayudas</p>

    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
                <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                ...
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
                <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                ...
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
                <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                ...
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
                <i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>
                ...
            </a>
        </li>
    </ul> -->
</div>
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content p-5" id="content">
    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
    <div id="alerta" style="display:none;">
        <p>admin</p>
    </div>
</div>
</body>
</html>
