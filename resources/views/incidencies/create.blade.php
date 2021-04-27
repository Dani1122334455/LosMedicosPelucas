@extends('templates.principal')

@section('contenido')

@include('partials.mensajes')

<script>
    window.onload = function() {
        $('#sidebar, #content').toggleClass('active');
    }
</script>

<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center"><img src="{{ asset('logo.png') }}" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
            <div class="media-body">
                <h4 class="m-0">{{ Auth::user()->nom }}</h4>
                <p class="font-weight-light text-muted mb-0">Administrativo</p>
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
            <a href="{{ url('/alertants') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Alertants
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/afectats') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Afectats
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/municipis') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Municipis
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/comarques') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Comarques
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/logout') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fas fa-sign-out-alt mr-3 text-primary fa-fw"></i>
               Cerrar Sesion
            </a>
        </li>
    </ul>
</div>
<!-- End vertical navbar -->

<div class="page-content p-6" id="content">
<div class="container-fluid">
<button id="sidebarCollapse" type="button" style="margin-top: 10px;" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-2"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
    <div class="card mt-3">
        <div class="card-body">
        <h5 class="card-title font-weight-bold">Nova Incidencia</h5>
            <form action="{{ action([App\Http\Controllers\IncidenciesController::class, 'store']) }}" method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3">
                                <div class="row">
                                    <label for="num_incident" class="col-12 col-form-label">Numero</label>
                                        <div class="col-12">
                                            <input type="number" class="form-control" id="num_incident" name="num_incident">
                                        </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <label for="data" class="col-12 col-form-label">Data</label>
                                        <div class="col-12">
                                            <input type="date" class="form-control" id="data" name="data" value="">
                                        </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <label for="hora" class="col-12 col-form-label">Hora</label>
                                        <div class="col-12">
                                            <input type="time" class="form-control" id="hora" name="hora" value="">
                                        </div>
                                </div>
                            </div> 
                            <div class="col-3">
                                <div class="row">
                                    <label for="telefon_alertant" class="col-12 col-form-label">Telèfon</label>
                                    <div class="col-12">
                                        <input type="number" class="form-control" id="telefon_alertant" name="telefon_alertant"
                                        maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3">
                                <div class="row">
                                    <label for="adreca" class="col-12 col-form-label">Adreça</label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="adreca" name="adreca" value="">
                                        </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <label for="adreca_complement" class="col-12 col-form-label">Adreça complement</label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="adreca_complement" name="adreca_complement" value="">
                                        </div>
                                </div>
                            </div> 
                            <div class="col-3">
                                <div class="row">
                                    <label for="alertants_id" class="col-12 col-form-label">Alertant</label>
                                        <div class="col-12">
                                            <select id="alertants_id" class="form-control" name="alertants_id" value = {{ old('alertants_id') }}>
                                                @foreach ($alertants as $alertant)
                                            <option value="{{ $alertant->id }}">{{ $alertant->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <label for="municipis_id" class="col-12 col-form-label">Municipi</label>
                                        <div class="col-12">
                                            <select id="municipis_id" class="form-control" name="municipis_id" value = {{ old('municipis_id') }}>
                                                @foreach ($municipis as $municipi)
                                            <option value="{{ $municipi->id }}">{{ $municipi->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3">
                                <div class="row">
                                    <label for="descripcio" class="col-12 col-form-label">Descripció</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="descripcio" name="descripcio" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <label for="nom_metge" class="col-12 col-form-label">Metge</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="nom_metge" name="nom_metge" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <label for="tipus_incidencies_id" class="col-12 col-form-label">Tipus</label>
                                    <div class="col-12">
                                        <select id="tipus_incidencies_id" class="form-control" name="tipus_incidencies_id" value = {{ old('tipus_incidencies_id') }}>
                                                @foreach ($tipusIncidencia as $tipusIncidencia)
                                            <option value="{{ $tipusIncidencia->id }}">{{ $tipusIncidencia->tipus }}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <label for="usuaris_id" class="col-12 col-form-label">Usuari</label>
                                    <div class="col-12">
                                        <select id="usuaris_id" class="form-control" name="usuaris_id" value = {{ old('usuaris_id') }}>
                                            @foreach ($usuaris as $usuari)
                                                <option value="{{ $usuari->id }}">{{ $usuari->username }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>  
                        </div>
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
