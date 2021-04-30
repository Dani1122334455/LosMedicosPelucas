@extends('templates.principal')

@section('titulo', 'Principal Ambulancia')

@section('contenido')

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
</script>

<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center"><img src="{{ asset('logo.png') }}" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
            <div class="media-body">
                <h4 class="m-0">{{ Auth::user()->nom }}</h4>
                <p class="font-weight-light text-muted mb-0">Administrativo</p>
            </div>
        </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Funciones</p>

    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic bg-light">
                <i class="fab fa-youtube mr-3 text-primary fa-fw"></i>
                <button onclick="window.location.href='{{ url('/videos') }}'" class="text-dark font-italic bg-light" style="padding: 0;
                border: none;
                background: none;">Videos</button>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/incidencies/create') }}" class="nav-link text-dark font-italic">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                        <input type="button" class="text-dark font-italic bg-light" value="Nova Incidencia" style="padding: 0;
                        border: none;
                        background: none;"/>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/logout') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fas fa-sign-out-alt mr-3 text-primary fa-fw"></i>
               Cerrar Sesion
            </a>
        </li>
    </ul>
</div>
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content p-5" id="content">
    <!-- Toggle button -->
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
        <div id="alerta" style="display:none;">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
</div>
@endsection
