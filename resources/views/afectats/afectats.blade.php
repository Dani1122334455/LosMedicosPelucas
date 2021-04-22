@extends('templates.principal')

@section('contenido')

@include('partials.mensajes')

<div class="container-fluid">
    <div class="card mt-2">
        <h5 class="col-sm-1 mt-3 ml-1">Buscar</h5>
        <form action="{{ action([App\Http\Controllers\AfectatsController::class, 'index']) }}">
            <div class="card-body">
                <div class="form-group row">

                    <label for="cicle" class="col-sm-1 col-form-label">CIP</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="cip" name="cip">
                        </div>

                    <label for="nom" class="col-sm-1 col-form-label">Nom</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="nom" name="nom">
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
            @if (count($afectats)>0)
            <h5 class="card-title">Afectats</h5>
            <table class="table mt-2">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">CIP</th>
                    <th scope="col">Nom i cognoms</th>
                    <th scope="col">Edat</th>
                    <th scope="col">Sexe</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($afectats as $afectat)
                    <tr>
                        <td>{{ $afectat->id }}</td>
                        <td>{{ $afectat->telefon }}</td>
                        <td>{{ $afectat->cip }}</td>
                        <td>{{ $afectat->nom }}</td>
                        <td>{{ $afectat->edat }}</td>
                        <td>{{ $afectat->sexes->sexe }}</td>
                        <td>
                            <button type="submit" class="btn btn-danger delete float-right ml-1" data-toggle="modal" data-target="#exampleModal"
                            data-sigles="{{ $afectat->nom }}"
                            data-action="{{ action([App\Http\Controllers\AfectatsController::class,'destroy'],['afectat'=>$afectat->id]) }}">
                            <i class="fas fa-trash"></i> Esborrar</button>
                            <form class="float-right "
                                action="{{ action([App\Http\Controllers\AfectatsController::class,'edit'],['afectat'=>$afectat->id]) }}" method="GET" >
                                <button type="submit" class="btn btn-secondary"><i class="fas fa-edit"></i> Editar</button>
                            </form>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

              {{ $afectats->links() }}

            @else
                <div class="alert alert-light mt-2" role="alert">No hi ha cap afectat per la cerca realitzada</div>
            @endif

        </div>
    </div>

    <a href="{{ url('afectats/create') }}" class="btn btn-primary mt-2 mb-2"  style="float: right"><i class="fa fa-plus-circle"
        aria-hidden="true"></i> Nou afectat</a>

    {{-- Modal del borrar --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Esborrar Afectat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Estas segur que vols esborrar l'afectat</p>
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
