<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

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
                            

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
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
    })
</script>