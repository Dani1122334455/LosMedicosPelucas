@extends('templates.principal')

@section('contenido')

@include('partials.mensajes')

<div class="container-fluid">
    <div class="card mt-3">
        <div class="card-body">
        <h5 class="card-title font-weight-bold">Nou recurs d'incidencia</h5>
        <form action="{{ action([App\Http\Controllers\AmbulanciaController::class, 'store']) }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="incidencies_id" class="col-sm-1 col-form-label">Id incidencia</label>
                    <div class="col-sm-11">
                        {{-- <input type="number" class="form-control" id="incidencies_id" name="incidencies_id" value=""> --}}
                        <select id="incidencies_id" class="form-control" name="incidencies_id" value = {{ old('incidencies_id') }}>
                            @foreach ($incidencies as $incidencia)
                                <option value="{{ $incidencia->id }}">{{ $incidencia->num_incident }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="recursos_id" class="col-sm-1 col-form-label">Id recurs</label>
                    <div class="col-sm-11">
                        {{-- <input type="number" class="form-control" id="recursos_id" name="recursos_id" value=""> --}}
                        <select id="recursos_id" class="form-control" name="recursos_id" value = {{ old('recursos_id') }}>
                            @foreach ($recursos as $recurs)
                                <option value="{{ $recurs->id }}">{{ $recurs->id }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hora_activacio" class="col-sm-1 col-form-label">Hora activacio</label>
                    <div class="col-sm-2">
                        <input type="datetime-local" class="form-control" id="hora_activacio" name="hora_activacio" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hora_mobilitzacio" class="col-sm-1 col-form-label">Hora mobilitzacio</label>
                    <div class="col-sm-2">
                        <input type="datetime-local" class="form-control" id="hora_mobilitzacio" name="hora_mobilitzacio" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hora_assistencia" class="col-sm-1 col-form-label">Hora assistencia</label>
                    <div class="col-sm-2">
                        <input type="datetime-local" class="form-control" id="hora_assistencia" name="hora_assistencia" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hora_transport" class="col-sm-1 col-form-label">Hora transport</label>
                    <div class="col-sm-2">
                        <input type="datetime-local" class="form-control" id="hora_transport" name="hora_transport" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hora_arribada_hospital" class="col-sm-1 col-form-label">Hora arribada hospital</label>
                    <div class="col-sm-2">
                        <input type="datetime-local" class="form-control" id="hora_arribada_hospital" name="hora_arribada_hospital" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hora_transferencia" class="col-sm-1 col-form-label">Hora transferencia</label>
                    <div class="col-sm-2">
                        <input type="datetime-local" class="form-control" id="hora_transferencia" name="hora_transferencia" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hora_finalitzacio" class="col-sm-1 col-form-label">Hora finalitzacio</label>
                    <div class="col-sm-2">
                        <input type="datetime-local" class="form-control" id="hora_finalitzacio" name="hora_finalitzacio" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prioritat" class="col-sm-1 col-form-label">Prioritat</label>
                    <div class="col-sm-11">
                        <input type="number" class="form-control" id="prioritat" name="prioritat" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="desti" class="col-sm-1 col-form-label">Destí</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="desti" name="desti" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <a href="{{ url('ambulancia') }}" class="btn btn-secondary float-right ml-1"><i class="fa fa-times"
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
