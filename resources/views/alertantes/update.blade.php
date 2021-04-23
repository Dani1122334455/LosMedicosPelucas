@extends('templates.principal')

@section('contenido')

@include('partials.mensajes')

<div class="container-fluid">
    <div class="card mt-3">
        <div class="card-body">
        <h5 class="card-title font-weight-bold">Editar Alertant</h5>
            <form action="{{ action([App\Http\Controllers\AlertantController::class,'update'],['alertant'=>$alertant->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                <label for="telefon" class="col-sm-1 col-form-label">Telèfon</label>
                <div class="col-sm-11">
                    <input type="number" class="form-control" id="telefon" name="telefon"
                    maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                    value="{{ $alertant->telefon }}">
                </div>
                </div>
                <div class="form-group row">
                    <label for="nom" class="col-sm-1 col-form-label">Nom</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ $alertant->nom }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cognoms" class="col-sm-1 col-form-label">Cognoms</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="cognoms" name="cognoms" value="{{ $alertant->cognoms }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adreca" class="col-sm-1 col-form-label">Adreça</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="adreca" name="adreca" value="{{ $alertant->adreca }}">
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
                    <label for="tipus_alertants_id" class="col-sm-1 col-form-label">Tipus</label>
                    <div class="col-sm-11">
                        <select id="tipus_alertants_id" class="form-control" name="tipus_alertants_id" value = {{ old('tipus_alertants_id') }}>
                            @foreach ($tipusAlertant as $tipusAlert)
                                <option value="{{ $tipusAlert->id }}">{{ $tipusAlert->tipus }}</option>
                            @endforeach

                            {{-- @foreach ($tipusAlertant as $tipusAlert)
                                @if ($alertant->id== $tipusAlert->id)
                                <option selected value="{{ $tipusAlert->id }}">{{ $tipusAlert->tipus }}</option>
                                @endif
                            <option value="{{ $tipusAlert->id }}">{{ $tipusAlert->tipus }}</option>
                            @endforeach --}}

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <a href="{{ url('alertants') }}" class="btn btn-secondary float-right ml-1"><i class="fa fa-times"
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
