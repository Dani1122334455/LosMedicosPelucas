@extends('templates.principal')

@section('contenido')

@include('partials.mensajes')

<script>
    window.onload = function() {
        $('#sidebar, #content').toggleClass('active');
    }

    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    })
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
                <i class="fas fa-exclamation-triangle mr-3 text-primary fa-fw"></i>
                Incidencies
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/alertants') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fa fas fa-tty mr-3 text-primary fa-fw"></i>
                Alertants
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/afectats') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fa fas fa-crutch mr-3 text-primary fa-fw"></i>
                Afectats
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/municipis') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fa fas fa-building mr-3 text-primary fa-fw"></i>
                Municipis
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/comarques') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fa fas fa-route mr-3 text-primary fa-fw"></i>
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
                                    <label for="num_incident" class="col-12 col-form-label">Numero Incidencia</label>
                                        <div class="col-10">
                                            <input type="number" class="form-control" id="num_incident" name="num_incident">
                                        </div>
                                        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Incidence Number">
                                                ?
                                        </button>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <label for="data" class="col-12 col-form-label">Data</label>
                                        <div class="col-10">
                                            <input type="date" class="form-control" id="data" name="data" value="">
                                        </div>
                                        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Hour">
                                                ?
                                        </button>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <label for="hora" class="col-12 col-form-label">Hora</label>
                                        <div class="col-10">
                                            <input type="time" class="form-control" id="hora" name="hora" value="">
                                        </div>
                                        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Hour">
                                                ?
                                        </button>
                                </div>
                            </div> 
                            <div class="col-3">
                                <div class="row">
                                    <label for="telefon_alertant" class="col-12 col-form-label">Telèfon</label>
                                    <div class="col-10">
                                        <input type="number" class="form-control" id="telefon_alertant" name="telefon_alertant"
                                        maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Phone Number">
                                                ?
                                    </button>
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
                                        <div class="col-10">
                                            <input type="text" class="form-control" id="adreca" name="adreca" value="">
                                        </div>
                                        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Home Address">
                                                ?
                                        </button>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <label for="adreca_complement" class="col-12 col-form-label">Adreça complement</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" id="adreca_complement" name="adreca_complement" value="">
                                        </div>
                                        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Complementary Address">
                                                ?
                                        </button>
                                </div>
                            </div> 
                            <div class="col-3">
                                <div class="row">
                                    <label for="alertants_id" class="col-12 col-form-label">Alertant</label>
                                        <div class="col-10">
                                            <select id="alertants_id" class="form-control" name="alertants_id" value = {{ old('alertants_id') }}>
                                                @foreach ($alertants as $alertant)
                                            <option value="{{ $alertant->id }}">{{ $alertant->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Alert">
                                                ?
                                        </button>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <label for="municipis_id" class="col-12 col-form-label">Municipi</label>
                                        <div class="col-10">
                                            <select id="municipis_id" class="form-control" name="municipis_id" value = {{ old('municipis_id') }}>
                                                @foreach ($municipis as $municipi)
                                            <option value="{{ $municipi->id }}">{{ $municipi->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Municipality">
                                                ?
                                        </button>
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
                                    <div class="col-10">
                                    <textarea name="textarea" rows="7" cols="7" class="form-control" placeholder="Escribe tu mensaje" maxlength="200" required></textarea>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Description">
                                                ?
                                    </button>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <label for="nom_metge" class="col-12 col-form-label">Metge</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" id="nom_metge" name="nom_metge" value="">
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Doctor">
                                                ?
                                    </button>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <label for="tipus_incidencies_id" class="col-12 col-form-label">Tipus</label>
                                    <div class="col-10">
                                        <select id="tipus_incidencies_id" class="form-control" name="tipus_incidencies_id" value = {{ old('tipus_incidencies_id') }}>
                                                @foreach ($tipusIncidencia as $tipusIncidencia)
                                            <option value="{{ $tipusIncidencia->id }}">{{ $tipusIncidencia->tipus }}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Type of Incidence">
                                                ?
                                    </button>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <label for="usuaris_id" class="col-12 col-form-label">Usuari</label>
                                    <div class="col-10">
                                        <select id="usuaris_id" class="form-control" name="usuaris_id" value = {{ old('usuaris_id') }}>
                                            @foreach ($usuaris as $usuari)
                                                <option value="{{ $usuari->id }}">{{ $usuari->username }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="User">
                                                ?
                                    </button>
                                    <button type="button" class="btn btn-info float-right"
                                        style="margin-top: 30px; margin-left: 20px;" data-toggle="modal" data-target="#exampleModal">Nou alertant
                                    </button>
                                    <button type="button" class="btn btn-info float-right"
                                        style="margin-top: 30px; margin-left: 50px;" data-toggle="modal" data-target="#exampleModal2">Nou Afectat
                                    </button>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <a href="{{ url('incidencies') }}" class="btn btn-secondary" style="float: right; position: fixed;
                            right: 20px;
                            bottom: 20px;">
                            <i class="fa fa-times" aria-hidden="true"></i> Cancel·lar</a>

                        <button type="submit" class="btn btn-primary" style="float: right; position: fixed;
                            right: 20px;
                            bottom: 20px; margin-right: 120px;">
                            <i class="fa fa-check" aria-hidden="true"></i> Aceptar
                        </button>
                    </div>
                </div>
            </form>
            {{-- Modal del crear alertante --}}

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear nou alertant</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          {{-- Crear alertante --}}

          <div class="card mt-3">
            <div class="card-body">
            <h5 class="card-title font-weight-bold">Nou Alertant</h5>
                <form action="{{ action([App\Http\Controllers\AlertantController::class, 'store']) }}" method="POST">
                    @csrf
                    <div class="form-group row">
                    <label for="telefon" class="col-sm-2 col-form-label">Telèfon</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="telefon" name="telefon"
                        maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nom" name="nom" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cognoms" class="col-sm-2 col-form-label">Cognoms</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cognoms" name="cognoms" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adreca" class="col-sm-2 col-form-label">Adreça</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="adreca" name="adreca" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="municipis_id" class="col-sm-2 col-form-label">Municipi</label>
                        <div class="col-sm-9">
                            <select id="municipis_id" class="form-control" name="municipis_id" value = {{ old('municipis_id') }}>
                                @foreach ($municipis as $municipi)
                                    <option value="{{ $municipi->id }}">{{ $municipi->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tipus_alertants_id" class="col-sm-2 col-form-label">Tipus</label>
                        <div class="col-sm-9">
                            <select id="tipus_alertants_id" class="form-control" name="tipus_alertants_id" value = {{ old('tipus_alertants_id') }}>
                                @foreach ($tipusAlertant as $tipusAlert)
                                    <option value="{{ $tipusAlert->id }}">{{ $tipusAlert->tipus }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"
                            aria-hidden="true"></i> Cancelar</button>
                        <button type="submit" class="btn btn-primary float-right"><i class="fa fa-check"
                            aria-hidden="true"></i> Guardar</button>
                    </div>
                </form>
            </div>
        </div>

          {{-- Fin crear alertante --}}
        </div>

      </div>
    </div>
</div>

{{-- Fin modal crear --}}

{{-- Modal del crear afectat --}}

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear nou afectat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          {{-- Crear alertante --}}

          <div class="card mt-3">
            <div class="card-body">
            <h5 class="card-title font-weight-bold">Nou Afectat</h5>
                <form action="{{ action([App\Http\Controllers\AfectatsController::class, 'store']) }}" method="POST">
                    @csrf
                    <div class="form-group row">
                    <label for="telefon" class="col-sm-2 col-form-label">Telèfon</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="telefon" name="telefon"
                        maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="cip" class="col-sm-2 col-form-label">CIP</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cip" name="cip" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nom" name="nom" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cognoms" class="col-sm-2 col-form-label">Cognoms</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cognoms" name="cognoms" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="edat" class="col-sm-2 col-form-label">Edat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edat" name="edat" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sexes_id" class="col-sm-2 col-form-label">Sexe</label>
                        <div class="col-sm-9">
                            <select id="sexes_id" class="form-control" name="sexes_id" value = {{ old('sexes_id') }}>
                                @foreach ($sexes as $sexe)
                                    <option value="{{ $sexe->id }}">{{ $sexe->sexe }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"
                            aria-hidden="true"></i> Cancelar</button>
                        <button type="button" class="btn btn-primary float-right"><i class="fa fa-check"
                            aria-hidden="true"></i> Guardar</button>
                    </div>
                </form>
            </div>
        </div>

          {{-- Fin crear alertante --}}
        </div>

      </div>
    </div>
</div>

{{-- Fin modal crear --}}

</div>
</div>
</div>



@endsection