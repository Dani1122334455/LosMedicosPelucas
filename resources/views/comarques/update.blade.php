@extends('templates.principal')

@section('contenido')

@include('partials.mensajes')

<div class="container-fluid">
    <div class="card mt-3">
        <div class="card-body">
        <h5 class="card-title font-weight-bold">Editar Comarca</h5>
            <form action="{{ action([App\Http\Controllers\ComarquesController::class,'update'],['comarque'=>$comarque->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="nom" class="col-sm-1 col-form-label">Nom</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ $comarque->nom }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="provincies_id" class="col-sm-1 col-form-label">Provincia</label>
                    <div class="col-sm-11">
                        <select id="provincies_id" class="form-control" name="provincies_id" value = {{ old('provincies_id') }}>
                            @foreach ($provincies as $provincies)
                                <option value="{{ $provincies->id }}">{{ $provincies->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <a href="{{ url('comarques') }}" class="btn btn-secondary float-right ml-1"><i class="fa fa-times"
                            aria-hidden="true"></i> Cancel·lar</a>
                        <button type="submit" class="btn btn-primary float-right"><i class="fa fa-check"
                            aria-hidden="true"></i> Aceptar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
