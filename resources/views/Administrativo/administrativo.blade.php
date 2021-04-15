<link rel="stylesheet" href="../../../Cosasdelanterior/links/bootstrap.min.css">
<link href="../../../Cosasdelanterior/FONTAWESOME/fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet">
<script src="../../../Cosasdelanterior//links/bootstrap.bundle.min.js"></script>
<script src="../../../Cosasdelanterior/links/jquery-3.3.1.slim.min.js"></script>
<link rel="stylesheet" href="../../../Cosasdelanterior/style/navbarcss.css">
<script src="../../../Cosasdelanterior/js/navbarjs.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

<script>
    $(document).ready(function () {
        var date_input = $('input[name="date"]'); //our date input has the name "date"
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
    }
</script>

<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center"><img src="..." alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
            <div class="media-body">
                <h4 class="m-0">Juanito</h4>
                <p class="font-weight-light text-muted mb-0">Administrativo</p>
            </div>
        </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Funciones</p>

    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                ..
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
            <form>
            <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                    <input type="button" onclick="mostrar()" class="add-to-cart" value="Formulario" />
                </form>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
               ...
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
                <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                ...
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
                                        <label class="control-label col-sm-2 requiredField" for="date">
                                            Fecha
                                        </label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar">
                                                    </i>
                                                </div>
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
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"></i></span>
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
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"></i></span>
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
                                        <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
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
                                        <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
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
                                <span class="col-md-1 col-md-offset-2 text-center"><i
                                        class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-12">
                                    <input id="Direccion" name="Direccion" type="text" placeholder=""
                                        class="form-control">
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <label class="control-label col-sm-4 requiredField" for="date">
                                    Complemento Direccion
                                </label>
                                <span class="col-md-1 col-md-offset-2 text-center"><i
                                        class="fa fa-phone-square bigicon"></i></span>
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
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"></i></span>
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
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"></i></span>
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
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="Edad" name="Edad" type="text" placeholder=""
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2 requiredField" for="date">
                                            Sexo
                                        </label>
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="Sexo" name="Sexo" type="text" placeholder=" "
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2 requiredField" for="date">
                                           Documento(DNI,TS/NSS)
                                        </label>
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="Documento" name="Documento" type="text" placeholder=" "
                                                class="form-control">
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
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-10">
                                            <input id="Accidente" name="Accidente" type="text" placeholder=""
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label col-sm-8 requiredField" for="date">
                                            Enfermedad sitio publico
                                        </label>
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-10">
                                            <input id="ESP" name="ESP" type="text" placeholder=" "
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label col-sm-8 requiredField" for="date">
                                           Enfermedad domicilio
                                        </label>
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-10">
                                            <input id="ED" name="ED" type="text" placeholder=" "
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label col-sm-8 requiredField" for="date">
                                           Consulta medica
                                        </label>
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"></i></span>
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
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-10">
                                            <input id="Transporte" name="Transporte" type="text" placeholder=""
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label col-sm-8 requiredField" for="date">
                                            Transporte sanitario
                                        </label>
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-10">
                                            <input id="TSanitario" name="TSanitario" type="text" placeholder=" "
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label col-sm-8 requiredField" for="date">
                                           Transporte interno
                                        </label>
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-10">
                                            <input id="TInterno" name="TInterno" type="text" placeholder=" "
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label col-sm-8 requiredField" for="date">
                                          Transporte secundario
                                        </label>
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-10">
                                            <input id="TSecundario" name="TSecundario" type="text" placeholder=" "
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div> 
    </div>
<div>
<a href="#" class="btn-flotante">HelpBox</a>
</div>
