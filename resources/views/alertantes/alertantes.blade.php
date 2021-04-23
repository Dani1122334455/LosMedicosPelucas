@extends('templates.principal')

@section('titulo', 'Alertants')

@section('contenido')

<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center"><img src="{{ asset('logo.png') }}" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
            <div class="media-body">
                <h4 class="m-0">{{ Auth::user()->nom }}</h4>
                <p class="font-weight-light text-muted mb-0">Administrador</p>
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
            <a href="{{ url('/afectats') }}" class="nav-link text-dark font-italic">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Afectats
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/municipis') }}" class="nav-link text-dark font-italic">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Municipis
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                <button onclick="window.location.href='{{ url('/admin') }}'" class="text-dark font-italic bg-light" style="padding: 0;
                border: none;
                background: none;">Atrás</button>
            </a>
        </li>
    </ul>
</div>
<!-- End vertical navbar -->

<div class="page-content p-6" id="content">
<div class="container-fluid">

    <div class="card mt-2">
        <h5 class="col-sm-2 mt-3 ml-1">Buscar</h5>
        <form action="{{ action([App\Http\Controllers\AlertantController::class, 'index']) }}">
            <div class="card-body">
                <div class="form-row">
                    <label for="cicle" class="col-sm-0 col-form-label">Municipi</label>
                    <div class="col-sm-10">
                        <select id="inputCicles" class="form-control" name="inputCicles">
                            <option selected value="0">Selecciona un municipi</option>
                            @foreach ($municipis as $municipi)
                                <option value={{ $municipi->id }}>{{ $municipi->nom }}</option>
                            @endforeach
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

                    <div class="col-sm-1" style="float: right">
                        <div class="col-sm-0">
                            <button type="submit" class="btn btn-secondary"><i class="fas fa-search"> Buscar</i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card mt-2 mb-1">
        <div class="card-body">
            @if (count($alertants)>0)
            <h5 class="card-title">Alertants</h5>
            <table class="table mt-2">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">Nom i cognoms</th>
                    <th scope="col">Adreça</th>
                    <th scope="col">Municipi</th>
                    <th scope="col">Tipus alertant</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($alertants as $alertant)
                    <tr>
                        <td>{{ $alertant->id }}</td>
                        <td>{{ $alertant->telefon }}</td>
                        <td>{{ $alertant->nom }} </td>
                        <td>{{ $alertant->adreca }}</td>
                        <td>{{ $alertant->municipis->nom }}</td>
                        <td>{{ $alertant->tipusAlertant->tipus }}</td>
                        <td>
                            <button type="submit" class="btn btn-danger delete float-right ml-1" data-toggle="modal" data-target="#exampleModal"
                            data-sigles="{{ $alertant->nom }}" data-action="{{ action([App\Http\Controllers\AlertantController::class,'destroy'],['alertant'=>$alertant->id]) }}">
                            <i class="fas fa-trash"></i> Esborrar</button>
                            <form class="float-right " action="{{ action([App\Http\Controllers\AlertantController::class,'edit'],['alertant'=>$alertant->id]) }}" method="GET" >
                                <button type="submit" class="btn btn-secondary"><i class="fas fa-edit"></i> Editar</button>
                            </form>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

                <div class="d-flex justify-content-center">
                    {{ $alertants->links() }}
                </div>

            @else
                <div class="alert alert-light mt-2" role="alert">No hi ha cap municipi per la cerca realitzada</div>
            @endif

        </div>

    </div>

    <a href="{{ url('alertants/create') }}" class="btn btn-primary mt-2 mb-2" style="float: right; position: fixed;
    right: 20px;
    bottom: 20px;"><i class="fa fa-plus-circle"
        aria-hidden="true"></i> Nou alertant</a>

    {{-- Modal del borrar --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Esborrar Curs</h5>
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
</div>

@endsection
