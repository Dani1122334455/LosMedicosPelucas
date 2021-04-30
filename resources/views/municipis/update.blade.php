@extends('templates.principal')

@section('contenido')

@include('partials.mensajes')

<div class="container-fluid">
    <div class="card mt-3">
        <div class="card-body">
        <h5 class="card-title font-weight-bold">Editar Municipi</h5>
            <form action="{{ action([App\Http\Controllers\MunicipisController::class,'update'],['municipi'=>$municipi->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="id" class="col-sm-1 col-form-label">Id</label>
                    <div class="col-sm-11">
                        <input type="number" class="form-control" id="id" name="id" value="{{ $municipi->id }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nom" class="col-sm-1 col-form-label">Nom</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ $municipi->nom }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="comarques_id" class="col-sm-1 col-form-label">Comarca</label>
                    <div class="col-sm-11">
                        <select id="comarques_id" class="form-control" name="comarques_id" value = {{ old('comarques_id') }}>
                            @foreach ($comarques as $comarca)
                                <option value="{{ $comarca->id }}">{{ $comarca->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <a href="{{ url('municipis') }}" class="btn btn-secondary float-right ml-1"><i class="fa fa-times"
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
