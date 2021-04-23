@extends('templates.principal')

@section('contenido')

@include('partials.mensajes')

<div class="container-fluid">
    <div class="card mt-3">
        <div class="card-body">
        <h5 class="card-title font-weight-bold">Nova Incidencia</h5>
            <form action="{{ action([App\Http\Controllers\IncidenciesController::class, 'store']) }}" method="POST">
                @csrf
                <div class="form-group row">
                <label for="num_incident" class="col-sm-1 col-form-label">Num incident</label>
                <div class="col-sm-11">
                    <input type="number" class="form-control" id="num_incident" name="num_incident">
                </div>
                </div>
                <div class="form-group row">
                    <label for="data" class="col-sm-1 col-form-label">Data</label>
                    <div class="col-sm-11">
                        <input type="date" class="form-control" id="data" name="data" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hora" class="col-sm-1 col-form-label">Hora</label>
                    <div class="col-sm-11">
                        <input type="time" class="form-control" id="hora" name="hora" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telefon_alertant" class="col-sm-1 col-form-label">Telèfon</label>
                    <div class="col-sm-11">
                        <input type="number" class="form-control" id="telefon_alertant" name="telefon_alertant"
                        maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                    </div>
                    </div>
                <div class="form-group row">
                    <label for="adreca" class="col-sm-1 col-form-label">Adreça</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="adreca" name="adreca" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adreca_complement" class="col-sm-1 col-form-label">Adreça complement</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="adreca_complement" name="adreca_complement" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alertants_id" class="col-sm-1 col-form-label">Alertant</label>
                    <div class="col-sm-11">
                        <select id="alertants_id" class="form-control" name="alertants_id" value = {{ old('alertants_id') }}>
                            @foreach ($alertants as $alertant)
                                <option value="{{ $alertant->id }}">{{ $alertant->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="municipis_id" class="col-sm-1 col-form-label">Municipi</label>
                    <div class="col-sm-11">
                        <select id="municipis_id" class="form-control" name="municipis_id" value = {{ old('municipis_id') }}>
                            @foreach ($municipis as $municipi)
                                <option value="{{ $municipi->id }}">{{ $municipi->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="descripcio" class="col-sm-1 col-form-label">Descripció</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="descripcio" name="descripcio" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nom_metge" class="col-sm-1 col-form-label">Metge</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="nom_metge" name="nom_metge" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tipus_incidencies_id" class="col-sm-1 col-form-label">Tipus</label>
                    <div class="col-sm-11">
                        <select id="tipus_incidencies_id" class="form-control" name="tipus_incidencies_id" value = {{ old('tipus_incidencies_id') }}>
                            @foreach ($tipusIncidencia as $tipusIncidencia)
                                <option value="{{ $tipusIncidencia->id }}">{{ $tipusIncidencia->tipus }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="usuaris_id" class="col-sm-1 col-form-label">Usuari</label>
                    <div class="col-sm-11">
                        <select id="usuaris_id" class="form-control" name="usuaris_id" value = {{ old('usuaris_id') }}>
                            @foreach ($usuaris as $usuari)
                                <option value="{{ $usuari->id }}">{{ $usuari->username }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <a href="{{ url('incidencies') }}" class="btn btn-secondary float-right ml-1"><i class="fa fa-times"
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
