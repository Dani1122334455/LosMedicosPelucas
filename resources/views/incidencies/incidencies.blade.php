@extends('templates.principal')

@section('titulo', 'Incidencies')

@section('contenido')

<script>
    window.onload = function() {
        $('#sidebar, #content').toggleClass('active');
    }
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
            <a href="{{ url('/incidencies') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Incidencies
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/alertants') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Alertants
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/afectats') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Afectats
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/municipis') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Municipis
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/comarques') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Comarques
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

<div class="page-content p-6" id="content">
<div class="container-fluid">
<button id="sidebarCollapse" type="button" style="margin-top: 10px;" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-2"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
    <div class="card mt-2">
        <h5 class="col-sm-2 mt-3 ml-1">Cercar per...</h5>
        <form action="{{ action([App\Http\Controllers\IncidenciesController::class, 'index']) }}">
            <div class="card-body">
                <div class="form-row">
                    <label for="cicle" class="col-sm-2 col-form-label">Municipi</label>
                    <div class="col-sm-8">
                        <select id="inputCicles" class="form-control" name="inputCicles">
                            <option selected value="0">Selecciona un municipi</option>
                            @foreach ($municipis as $municipi)
                                <option value={{ $municipi->id }}>{{ $municipi->nom }}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="col-sm-2">
                            <button type="submit" class="btn btn-secondary float-right"><i class="fas fa-search"></i> Cercar</button>
                    </div> 
                </div>
            </form>
        </div>
    </div>
    <div class="card mt-2 mb-1">
        <div class="card-body">
            @if (count($incidencies)>0)
            <h5 class="card-title">Incidencies</h5>
            <table class="table mt-2">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Municipi</th>
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Adreça</th>
                    <th scope="col">Tipus</th>
                    <th scope="col">Alertant</th>
                    <th scope="col">Usuari</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($incidencies as $incidencia)
                    <tr>
                        <td>{{ $incidencia->id }}</td>
                        <td>{{ $incidencia->num_incident }}</td>
                        <td>{{ $incidencia->municipis->nom }}</td>
                        <td>{{ $incidencia->data }}</td>
                        <td>{{ $incidencia->hora }}</td>
                        <td>{{ $incidencia->adreca }}</td>
                        <td>{{ $incidencia->tipusIncidencia->tipus }}</td>
                        <td>{{ $incidencia->alertant->nom }}</td>
                        <td>{{ $incidencia->usuaris->username }}</td>
                        <td>
                            <button type="submit" class="btn btn-danger delete float-right ml-1" data-toggle="modal" data-target="#exampleModal"
                            data-sigles="{{ $incidencia->num_incident }}" data-action="{{ action([App\Http\Controllers\IncidenciesController::class,'destroy'],['incidency'=>$incidencia->id]) }}">
                            <i class="fas fa-trash"></i> Esborrar</button>
                            <form class="float-right " action="{{ action([App\Http\Controllers\IncidenciesController::class,'edit'],['incidency'=>$incidencia->id]) }}" method="GET" >
                                <button type="submit" class="btn btn-secondary" style="padding-left: 26px;"><i class="fas fa-edit"></i> Editar</button>
                            </form>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

              {{ $incidencies->links() }}

            @else
                <div class="alert alert-light mt-2" role="alert">No hi ha cap incidencia per la cerca realitzada</div>
            @endif

        </div>
    </div>

    <a href="{{ url('incidencies/create') }}" class="btn btn-primary mt-2 mb-2" style="float: right; position: fixed;
    right: 20px;
    bottom: 20px;"><i class="fa fa-plus-circle"
        aria-hidden="true"></i> Nova incidencia</a>

    {{-- Modal del borrar --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Esborrar Incidencia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Estas segur que vols esborrar l'alertant</p>
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

@endsection
