@extends('templates.principal')

@section('contenido')

@include('partials.mensajes')


<div class="container-fluid">
    <div class="card mt-2">
        <h5 class="col-sm-1 mt-3 ml-1">Buscar</h5>
        <form action="{{ action([App\Http\Controllers\ComarquesController::class, 'index']) }}">
            <div class="card-body">
                <div class="form-group row">

                    <label for="cicle" class="col-sm-0 col-form-label">Provincies</label>
                    <div class="col-sm-10">
                        <select id="inputCicles" class="form-control" name="inputCicles">
                            <option selected value="0">Selecciona una provincia</option>
                            @foreach ($provincies as $provincies)
                                <option value={{ $provincies->id }}>{{ $provincies->nom }}</option>
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
            @if (count($comarques)>0)
            <h5 class="card-title">Comarques</h5>
            <table class="table mt-2">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Provincia</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($comarques as $comarca)
                    <tr>
                        <td>{{ $comarca->id }}</td>
                        <td>{{ $comarca->nom }}</td>
                        <td>{{ $comarca->provincies->nom }}</td>
                        <td>
                            <button type="submit" class="btn btn-danger delete float-right ml-1" data-toggle="modal" data-target="#exampleModal"
                            data-sigles="{{ $comarca->nom }}"
                            data-action="{{ action([App\Http\Controllers\ComarquesController::class,'destroy'],['comarque'=>$comarca->id]) }}">
                            <i class="fas fa-trash"></i> Esborrar</button>
                            <form class="float-right "
                                action="{{ action([App\Http\Controllers\ComarquesController::class,'edit'],['comarque'=>$comarca->id]) }}" method="GET" >
                                <button type="submit" class="btn btn-secondary"><i class="fas fa-edit"></i> Editar</button>
                            </form>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

              {{-- {{ $afectats->links() }} --}}

            @else
                <div class="alert alert-light mt-2" role="alert">No hi ha cap afectat per la cerca realitzada</div>
            @endif

        </div>
    </div>

    <a href="{{ url('comarques/create') }}" class="btn btn-primary mt-2 mb-2"  style="float: right"><i class="fa fa-plus-circle"
        aria-hidden="true"></i> Nova Comarca</a>

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
