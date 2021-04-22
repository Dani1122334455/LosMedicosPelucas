@extends('templates.principal')

@section('contenido')

@include('partials.mensajes')

<div class="container-fluid">
    <div class="card mt-2">
        <h5 class="col-sm-1 mt-3 ml-1">Buscar</h5>
        <form action="{{ action([App\Http\Controllers\AlertantController::class, 'index']) }}">
            <div class="card-body">
                <div class="form-row">
                    <label for="cicle" class="col-sm-1 col-form-label">Municipi</label>
                    <div class="col-sm-10">
                        <select id="inputCicles" class="form-control" name="inputCicles">
                            <option selected value="0">Selecciona un municipi</option>
                            @foreach ($municipis as $municipi)
                                <option value={{ $municipi->id }}>{{ $municipi->nom }}</option>
                            @endforeach

                          </select>
                    </div>
                    <div class="col-sm-1" style="float: right">
                        <div class="col-sm-1">
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
                        <td>{{ $alertant->nom }}</td>
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

              {{ $alertants->links() }}

            @else
                <div class="alert alert-light mt-2" role="alert">No hi ha cap alertant per la cerca realitzada</div>
            @endif

        </div>
    </div>

    <a href="{{ url('alertants/create') }}" class="btn btn-primary mt-2 mb-2"  style="float: right"><i class="fa fa-plus-circle"
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

@endsection
