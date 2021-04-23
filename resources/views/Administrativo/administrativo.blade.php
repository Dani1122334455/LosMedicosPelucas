@extends('templates.principal')

@section('titulo', 'Principal Ambulancia')

@section('contenido')

<script>
    $(document).ready(function () {
        var date_input = $('input[name="date"]');
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    });

    function mostrar() {
    var x = document.getElementById('alerta');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
        }
    };
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
            <a href="#" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                <button onclick="window.location.href='{{ url('/videos') }}'" class="text-dark font-italic bg-light" style="padding: 0;
                border: none;
                background: none;">Videos</button>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
            <form>
            <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                    <input type="button" onclick="mostrar()" class="text-dark font-italic bg-light" value="Formulario" style="padding: 0;
                    border: none;
                    background: none;"/>
                </form>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/logout') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
               Cerrar Sesion
            </a>
        </li>
    </ul>

    <!-- <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Ayudas</p>

    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
                <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                ...
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
                <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                ...
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
                <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                ...
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
                <i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>
                ...
            </a>
        </li>
    </ul> -->
</div>
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content p-5" id="content">
    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
    <div id="alerta" style="display:none;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="well well-sm">
                        <form class="form-horizontal" method="post">
                            <fieldset>
                                <div class="col-md-3 col-sm-6 col-xs-12 mt-4">
                                    <form class="form-horizontal" method="post">
                                        <div class="form-group ">
                                            <label class="control-label requiredField" for="date">
                                                Fecha
                                            </label>
                                            <div class="">
                                                <div class="input-group">
                                                    <input class="form-control" id="date" name="date"
                                                        placeholder="MM/DD/YYYY" type="text" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        </div>
                                    </form>
                                </div>

                                <div class="row mt-4">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2 requiredField" for="date">
                                                Alertante
                                            </label>
                                            <div class="col-md-6">
                                                <input id="Alertante" name="Alertante" type="text" placeholder=""
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2 requiredField" for="date">
                                                *Telefono
                                            </label>
                                            <div class="col-md-6">
                                                <input id="Telefono" name="Telefono" type="text" placeholder=""
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <label class="control-label col-sm-2 requiredField" for="date">
                                            Provincia
                                        </label>
                                        <div class="col-6">

                                            <select class="form-select" id="inlineFormSelectPref">
                                              <option selected>Choose...</option>
                                              <option value="1">One</option>
                                              <option value="2">Two</option>
                                              <option value="3">Three</option>
                                            </select>
                                          </div>
                                    </div>
                                    <div class="col">
                                        <label class="control-label col-sm-2 requiredField" for="date">
                                            Municipio
                                        </label>
                                        <div class="col-6">

                                            <select class="form-select" id="inlineFormSelectPref">
                                              <option selected>Choose...</option>
                                              <option value="1">One</option>
                                              <option value="2">Two</option>
                                              <option value="3">Three</option>
                                            </select>
                                          </div>
                                    </div>
                                </div>



                                <div class="form-group mt-4">
                                    <label class="control-label col-sm-2 requiredField" for="date">
                                        Direccion
                                    </label>
                                    <div class="col-md-12">
                                        <input id="Direccion" name="Direccion" type="text" placeholder=""
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="form-group mt-4">
                                    <label class="control-label col-sm-4 requiredField" for="date">
                                        Complemento Direccion
                                    </label>
                                    <div class="col-md-12">
                                        <input id="CDireccion" name="CDireccion" type="text" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2 requiredField" for="date">
                                                Nombre
                                            </label>
                                            <div class="col-md-6">
                                                <input id="Nombre" name="Nombre" type="text" placeholder=""
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2 requiredField" for="date">
                                               Apellidos
                                            </label>
                                            <div class="col-md-6">
                                                <input id="Apellidos" name="Apellidos" type="text" placeholder=" "
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2 requiredField" for="date">
                                                Edad
                                            </label>
                                            <div class="col-md-6">
                                                <input id="Edad" name="Edad" type="text" placeholder=""
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2 requiredField" for="date">
                                               Documento(DNI,TS/NSS)
                                            </label>
                                            <div class="col-md-6">
                                                <input id="Documento" name="Documento" type="text" placeholder=" "
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-4">
                                    <div class="form-group">
                                        <label class="control-label requiredField" for="date">
                                            Sexo
                                        </label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Niño</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Hombre</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio3">Mujer</label>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2 requiredField" for="date">
                                                Accidente
                                            </label>
                                            <div class="col-md-10">
                                                <input id="Accidente" name="Accidente" type="text" placeholder=""
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label col-sm-10 requiredField" for="date">
                                                Enfermedad sitio publico
                                            </label>
                                            <div class="col-md-10">
                                                <input id="ESP" name="ESP" type="text" placeholder=" "
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label col-sm-10 requiredField" for="date">
                                               Enfermedad domicilio
                                            </label>
                                            <div class="col-md-10">
                                                <input id="ED" name="ED" type="text" placeholder=" "
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label col-sm-10 requiredField" for="date">
                                               Consulta medica
                                            </label>
                                            <div class="col-md-10">
                                                <input id="Consulta" name="Consulta" type="text" placeholder=" "
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2 requiredField" for="date">
                                                Transporte
                                            </label>
                                            <div class="col-md-10">
                                                <input id="Transporte" name="Transporte" type="text" placeholder=""
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label col-sm-10 requiredField" for="date">
                                                Transporte sanitario
                                            </label>
                                            <div class="col-md-10">
                                                <input id="TSanitario" name="TSanitario" type="text" placeholder=" "
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label col-sm-10 requiredField" for="date">
                                               Transporte interno
                                            </label>
                                            <div class="col-md-10">
                                                <input id="TInterno" name="TInterno" type="text" placeholder=" "
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label col-sm-10 requiredField" for="date">
                                              Transporte secundario
                                            </label>
                                            <div class="col-md-10">
                                                <input id="TSecundario" name="TSecundario" type="text" placeholder=" "
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                   <div class="col mt-4 text-center">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>


                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn-flotante" data-toggle="modal" data-target="#exampleModalCenter">
    HelpBox
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">HelpBox</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            <i style="#BFBFBF">(¿Cómo te llamas?)</i>
            <p>What is your name?</p>

            <i style="#BFBFBF">(¿Cuántos años tienes?)</i>
            <p>How old are you?</p>

            <i style="#BFBFBF">(¿Eres un hombre una mujer o un niño?)</i>
            <p>Are you a man, woman or child?</p>

            <i style="#BFBFBF">(Dime tu documento de identidad, por favor)</i>
            <p>Tell me your identity card, please</p>

            <i style="#BFBFBF">(¿Me podrías decir un numero de teléfono?)</i>
            <p>Could your give me a phone number?</p>

            <i style="#BFBFBF">(¿En que municipio te encuentras?)</i>
            <p>In what municipality are you located?</p>

            <i style="#BFBFBF">(¿Cuál es la dirección?)</i>
            <p>What is the address?</p>

            <i style="#BFBFBF">(¿Qué ha pasado?)</i>
            <p>What happened?</p>

            <i style="#BFBFBF">(¿Cómo están las personas afectadas?)</i>
            <p>How are the affected people?</p>

            <i style="#BFBFBF">(¿Cuántos heridos hay?)</i>
            <p>How many injured are there?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>

</div>
@endsection
