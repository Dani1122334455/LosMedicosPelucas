@extends('templates.principal')

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

        window.onload = function() {
            $('#sidebar, #content').toggleClass('active');
        }
</script>

<body>
<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center"><img src="{{ asset('logo.png') }}" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
            <div class="media-body">
                <h4 class="m-0">{{ Auth::user()->nom }}</h4>
                <p class="font-weight-light text-muted mb-0">Ambulancia</p>
            </div>
        </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Funciones</p>

    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
            <form>
            <i class="fa fab fa-youtube mr-3 text-primary fa-fw"></i>
                    <input type="button" onclick="mostrar()" class="add-to-cart  text-dark font-italic bg-light" value="Formulario" style="padding: 0;
                    border: none;
                    background: none;"/>
                </form>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/logout') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fas fa-sign-out-alt mr-3 text-primary fa-fw"></i>
               Cerrar Sesion
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
<div class="page-content p-6" id="content">
    <div class="container-fluid">
    <button id="sidebarCollapse" type="button" style="margin-top: 10px;" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-2"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
        <div class="card mt-2">
            <h5 class="col-sm-2 mt-3 ml-1">Cercar per...</h5>
            {{-- <form action="{{ action([App\Http\Controllers\MunicipisController::class, 'index']) }}"> --}}
                <div class="card-body">
                    <div class="form-row">
                        <label for="cicle" class="col-sm-2 col-form-label">Comarca</label>
                        <div class="col-sm-8">
                            <select id="inputCicles" class="form-control" name="inputCicles">
                                {{-- <option selected value="0">Selecciona una comarca</option>
                                @foreach ($comarques as $comarca)
                                    <option value={{ $comarca->id }}>{{ $comarca->nom }}</option>
                                @endforeach --}}
                            </select>
                        </div>

                        {{-- <label for="cicle" class="col-sm-0 col-form-label mt-2">Tipus</label>
                        <div class="col-sm-11">
                            <select id="inputCicles2" class="form-control mt-2" name="inputCicles2">
                                <option selected value="0">Selecciona un tipus</option>
                                @foreach ($tipusAlertant as $tipusAlert)
                                    <option value={{ $tipusAlert->id }}>{{ $tipusAlert->tipus }}</option>
                                @endforeach
                            </select>
                        </div> --}}

                        <div class="col-sm-2">
                                <button type="submit" class="btn btn-secondary float-right"><i class="fas fa-search"></i> Cercar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card mt-2 mb-1">
            <div class="card-body">
                @if (count($ambulancia)>0)
                <h5 class="card-title">Recursos de les incidencies</h5>
                <table class="table mt-2">
                    <thead>
                        <tr>
                        <th scope="col">Id incidencia</th>
                        <th scope="col">Id recurs</th>
                        <th scope="col">Hora activació</th>
                        <th scope="col">Hora mobilitzacio</th>
                        <th scope="col">Hora assistencia</th>
                        <th scope="col">Hora transport</th>
                        <th scope="col">Hora arribada hospital</th>
                        <th scope="col">Hora transferencia</th>
                        <th scope="col">Hora finalitzacio</th>
                        <th scope="col">Prioritat</th>
                        <th scope="col">Desti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ambulancia as $ambu)
                        <tr>
                            <td>{{ $ambu->incidencies->id }}</td>
                            <td>{{ $ambu->recursos->id }}</td>
                            <td>{{ $ambu->hora_activacio }} </td>
                            <td>{{ $ambu->hora_mobilitzacio }} </td>
                            <td>{{ $ambu->hora_assistencia }} </td>
                            <td>{{ $ambu->hora_transport }} </td>
                            <td>{{ $ambu->hora_arribada_hospital }} </td>
                            <td>{{ $ambu->hora_transferencia }} </td>
                            <td>{{ $ambu->hora_finalitzacio }} </td>
                            <td>{{ $ambu->prioritat }} </td>
                            <td>{{ $ambu->desti }} </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {{-- {{ $municipis->links() }} --}}
                    </div>

                @else
                    <div class="alert alert-light mt-2" role="alert">No hi ha cap recurs d'incidencia per la cerca realitzada</div>
                @endif

            </div>

        </div>

        <a href="{{ url('ambulancia/create') }}" class="btn btn-primary mt-2 mb-2" style="float: right; position: fixed;
        right: 20px;
        bottom: 20px;"><i class="fa fa-plus-circle"
            aria-hidden="true"></i> Nou recurs</a>

        {{-- Modal del borrar --}}

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Esborrar Recurs</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Estas segur que vols esborrar el recurs amb id </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Tancar</button>
                    <form class="delete-form" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Esborrar</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
