@extends('templates.principal')

@section('contenido')

@include('partials.mensajes')

<div class="container-fluid">
    <div class="card mt-3">
        <div class="card-body">
        <h5 class="card-title font-weight-bold">Editar Afectat</h5>
            <form action="{{ action([App\Http\Controllers\AfectatsController::class,'update'],['afectat'=>$afectat->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="telefon" class="col-sm-1 col-form-label">Telèfon</label>
                    <div class="col-sm-11">
                        <input type="number" class="form-control" id="telefon" name="telefon"
                        maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        value="{{ $afectat->telefon }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cip" class="col-sm-1 col-form-label">CIP</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="cip" name="cip" value="{{ $afectat->cip }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nom" class="col-sm-1 col-form-label">Nom</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ $afectat->nom }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cognoms" class="col-sm-1 col-form-label">Cognoms</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="cognoms" name="cognoms" value="{{ $afectat->cognoms }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="edat" class="col-sm-1 col-form-label">Edat</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="edat" name="edat" value="{{ $afectat->edat }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sexes_id" class="col-sm-1 col-form-label">Sexe</label>
                    <div class="col-sm-11">
                        <select id="sexes_id" class="form-control" name="sexes_id">
                            @foreach ($sexes as $sexe)
                                <option value="{{ $sexe->id }}">{{ $sexe->sexe }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <a href="{{ url('afectats') }}" class="btn btn-secondary float-right ml-1"><i class="fa fa-times"
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
