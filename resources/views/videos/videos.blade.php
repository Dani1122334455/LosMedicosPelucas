@extends('templates.principal')

@section('contenido')

<script>
    function mostrar() {
    var x = document.getElementById('alerta');
    var y = document.getElementById('alerta2');
    var z = document.getElementById('alerta3');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
        y.style.display = 'none';
        z.style.display = 'none';
        }
    };

    function mostrar2() {
    var x = document.getElementById('alerta');
    var y = document.getElementById('alerta2');
    var z = document.getElementById('alerta3');
    if (y.style.display === 'block') {
        y.style.display = 'none';
    } else {
        x.style.display = 'none';
        y.style.display = 'block';
        z.style.display = 'none';
        }
    };

    function mostrar3() {
    var x = document.getElementById('alerta');
    var y = document.getElementById('alerta2');
    var z = document.getElementById('alerta3');
    if (z.style.display === 'block') {
        z.style.display = 'none';
    } else {
        x.style.display = 'none';
        y.style.display = 'none';
        z.style.display = 'block';
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
                <button onclick="mostrar()" style="padding: 0;
                border: none;
                background: none;">Video 1</button>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                <button onclick="mostrar2()" style="padding: 0;
                border: none;
                background: none;">Video 2</button>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                <button onclick="mostrar3()" style="padding: 0;
                border: none;
                background: none;">Video 3</button>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                <button onclick="window.location.href='{{ url('/administrativo') }}'" style="padding: 0;
                border: none;
                background: none;">Atrás</button>
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

{{-- Div videos --}}
<div class="page-content p-5" id="content">
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
    <div id="alerta" style="display:none; text-align: center; margin: 0px auto;">
        <video id="medio" width="720" height="400">
            <source src="{{ asset('videosWenos/clip1.mp4') }}" type="video/mp4">
        </video>
        <nav>
            <input type="button" id="reiniciar" value="reiniciar">
            <input type="button" id="retrasar" value="&laquo;">
            <input type="button" id="play" value="&#9658;">
            <input type="button" id="adelantar" value="&raquo;">
            <input type="button" id="silenciar" value="silenciar">
            <input type="button" id="active_silencio" value="activar volumen">
            <br><br>
            Tiempo actual: <span id="tiempo"></span> || Tiempo total: <span id="tiempoTotal"></span>
            <br>
            <label id="timer" for="progress" role="timer"></label>
            <progress id="progress" max="100" value="0">Progress</progress>
        </nav>
    </div>
    <div id="alerta2" style="display:none; text-align: center; margin: 0px auto;">
        <video id="medio2" width="720" height="400">
            <source src="{{ asset('videosWenos/clip2.mp4') }}" type="video/mp4">
        </video>
        <nav>
            <input type="button" id="reiniciar2" value="reiniciar">
            <input type="button" id="retrasar2" value="&laquo;">
            <input type="button" id="play2" value="&#9658;">
            <input type="button" id="adelantar2" value="&raquo;">
            <input type="button" id="silenciar2" value="silenciar">
            <input type="button" id="active_silencio2" value="activar volumen">
            <br><br>
            Tiempo actual: <span id="tiempo2"></span> || Tiempo total: <span id="tiempoTotal2"></span>
            <br>
            <label id="timer2" for="progress" role="timer"></label>
            <progress id="progress2" max="100" value="0">Progress</progress>
        </nav>
    </div>
    <div id="alerta3" style="display:none; text-align: center; margin: 0px auto;">
        <video id="medio3" width="720" height="400">
            <source src="{{ asset('videosWenos/clip3.mp4') }}" ttype="video/mp4">
        </video>
        <nav>
            <input type="button" id="reiniciar3" value="reiniciar">
            <input type="button" id="retrasar3" value="&laquo;">
            <input type="button" id="play3" value="&#9658;">
            <input type="button" id="adelantar3" value="&raquo;">
            <input type="button" id="silenciar3" value="silenciar">
            <input type="button" id="active_silencio3" value="activar volumen">
            <br><br>
            Tiempo actual: <span id="tiempo3"></span> || Tiempo total: <span id="tiempoTotal3"></span>
            <br>
            <label id="timer3" for="progress" role="timer"></label>
            <progress id="progress3" max="100" value="0">Progress</progress>
        </nav>
    </div>
</div>

<script>
    const progress = document.getElementById("progress");
    const timer = document.getElementById("timer");

    function accionPlay() {
        if (!medio.paused && !medio.ended) {
            medio.pause();
            play.value = '\u25BA'; //\u25BA
            document.body.style.backgroundColor = '#fff';
        }
        else {
            medio.play();
            play.value = '||';
            document.body.style.backgroundColor = 'grey';
        }
    }

    function accionReiniciar() {
        medio.currentTime = 0;
    }
    function accionRetrasar() {
        medio.currentTime = medio.currentTime - 10;
    }
    function accionAdelantar() {
        medio.currentTime = medio.currentTime + 10;
    }
    function accionSilenciar() {
        medio.muted = true;
    }
    function accionDesSilenciar() {
        medio.muted = false;
    }

    function hora(segundos) {
        var d = new Date(segundos * 1000);
        var hora = (d.getHours() == 0) ? 23 : d.getHours() - 1;
        var hora = (hora < 9) ? "0" + hora : hora;
        var minuto = (d.getMinutes() < 9) ? "0" + d.getMinutes() : d.getMinutes();
        var segundo = (d.getSeconds() < 9) ? "0" + d.getSeconds() : d.getSeconds();
        return hora + ":" + minuto + ":" + segundo;
    }


    function iniciar() {

        medio = document.getElementById('medio');
        play = document.getElementById('play');
        reiniciar = document.getElementById('reiniciar');
        retrasar = document.getElementById('retrasar');
        adelantar = document.getElementById('adelantar');
        silenciar = document.getElementById('silenciar');
        active_silencio = document.getElementById('active_silencio');

        play.addEventListener('click', accionPlay);
        reiniciar.addEventListener('click', accionReiniciar);
        retrasar.addEventListener('click', accionRetrasar);
        adelantar.addEventListener('click', accionAdelantar);
        silenciar.addEventListener('click', accionSilenciar);
        active_silencio.addEventListener('click', accionDesSilenciar);

        medio.addEventListener("timeupdate", function (ev) {
            document.getElementById("tiempo").innerHTML = hora(medio.currentTime);
            document.getElementById("tiempoTotal").innerHTML = hora(medio.duration);
        }, true);

        function progressLoop() {
            setInterval(function () {
                var tiempoTotal;
                progress.value = Math.round((medio.currentTime / medio.duration) * 100);
                timer.innerHTML = progress.value + " %";

                if (progress.value < 80) {
                    document.getElementById("tiempo").style.color = "green";
                }
                if (progress.value >= 80) {
                    document.getElementById("tiempo").style.color = "orange";
                }
                if (progress.value >= 90) {
                    document.getElementById("tiempo").style.color = "red";
                }
            });
        }

        medio.addEventListener("play", progressLoop);
    }

    var klk = document.getElementById("sonido");

    medio.onended = function () {
        klk.play();
    };

    window.addEventListener('load', iniciar, false);

    // fin del video 1

    const progress2 = document.getElementById("progress2");
    const timer2 = document.getElementById("timer2");

    function accionPlay2() {
        if (!medio2.paused && !medio2.ended) {
            medio2.pause();
            play2.value = '\u25BA'; //\u25BA
            document.body.style.backgroundColor = '#fff';
        }
        else {
            medio2.play();
            play2.value = '||';
            document.body.style.backgroundColor = 'grey';
        }
    }

    function accionReiniciar2() {
        medio2.currentTime = 0;
    }
    function accionRetrasar2() {
        medio2.currentTime = medio2.currentTime - 10;
    }
    function accionAdelantar2() {
        medio2.currentTime = medio2.currentTime + 10;
    }
    function accionSilenciar2() {
        medio2.muted = true;
    }
    function accionDesSilenciar2() {
        medio2.muted = false;
    }

    function hora2(segundos) {
        var d = new Date(segundos * 1000);
        var hora = (d.getHours() == 0) ? 23 : d.getHours() - 1;
        var hora = (hora < 9) ? "0" + hora : hora;
        var minuto = (d.getMinutes() < 9) ? "0" + d.getMinutes() : d.getMinutes();
        var segundo = (d.getSeconds() < 9) ? "0" + d.getSeconds() : d.getSeconds();
        return hora + ":" + minuto + ":" + segundo;
    }


    function iniciar2() {

        medio2 = document.getElementById('medio2');
        play2 = document.getElementById('play2');
        reiniciar2 = document.getElementById('reiniciar2');
        retrasar2 = document.getElementById('retrasar2');
        adelantar2 = document.getElementById('adelantar2');
        silenciar2 = document.getElementById('silenciar2');
        active_silencio2 = document.getElementById('active_silencio2');

        play2.addEventListener('click', accionPlay2);
        reiniciar2.addEventListener('click', accionReiniciar2);
        retrasar2.addEventListener('click', accionRetrasar2);
        adelantar2.addEventListener('click', accionAdelantar2);
        silenciar2.addEventListener('click', accionSilenciar2);
        active_silencio2.addEventListener('click', accionDesSilenciar2);

        medio2.addEventListener("timeupdate", function (ev) {
            document.getElementById("tiempo2").innerHTML = hora(medio2.currentTime);
            document.getElementById("tiempoTotal2").innerHTML = hora(medio2.duration);
        }, true);

        function progressLoop2() {
            setInterval(function () {
                var tiempoTotal;
                progress2.value = Math.round((medio2.currentTime / medio2.duration) * 100);
                timer2.innerHTML = progress2.value + " %";

                if (progress2.value < 80) {
                    document.getElementById("tiempo2").style.color = "green";
                }
                if (progress2.value >= 80) {
                    document.getElementById("tiempo2").style.color = "orange";
                }
                if (progress2.value >= 90) {
                    document.getElementById("tiempo2").style.color = "red";
                }
            });
        }

        medio2.addEventListener("play", progressLoop2);
    }

    var klk2 = document.getElementById("sonido");

    medio2.onended = function () {
        klk.play();
    };

    window.addEventListener('load', iniciar2, false);

    // fin del video 2

    const progress3 = document.getElementById("progress3");
    const timer3 = document.getElementById("timer3");

    function accionPlay3() {
        if (!medio3.paused && !medio3.ended) {
            medio3.pause();
            play3.value = '\u25BA'; //\u25BA
            document.body.style.backgroundColor = '#fff';
        }
        else {
            medio3.play();
            play3.value = '||';
            document.body.style.backgroundColor = 'grey';
        }
    }

    function accionReiniciar3() {
        medio3.currentTime = 0;
    }
    function accionRetrasar3() {
        medio3.currentTime = medio3.currentTime - 10;
    }
    function accionAdelantar3() {
        medio3.currentTime = medio3.currentTime + 10;
    }
    function accionSilenciar3() {
        medio3.muted = true;
    }
    function accionDesSilenciar3() {
        medio3.muted = false;
    }

    function hora3(segundos) {
        var d = new Date(segundos * 1000);
        var hora = (d.getHours() == 0) ? 23 : d.getHours() - 1;
        var hora = (hora < 9) ? "0" + hora : hora;
        var minuto = (d.getMinutes() < 9) ? "0" + d.getMinutes() : d.getMinutes();
        var segundo = (d.getSeconds() < 9) ? "0" + d.getSeconds() : d.getSeconds();
        return hora + ":" + minuto + ":" + segundo;
    }


    function iniciar3() {

        medio3 = document.getElementById('medio3');
        play3 = document.getElementById('play3');
        reiniciar3 = document.getElementById('reiniciar3');
        retrasar3 = document.getElementById('retrasar3');
        adelantar3 = document.getElementById('adelantar3');
        silenciar3 = document.getElementById('silenciar3');
        active_silencio3 = document.getElementById('active_silencio3');

        play3.addEventListener('click', accionPlay3);
        reiniciar3.addEventListener('click', accionReiniciar3);
        retrasar3.addEventListener('click', accionRetrasar3);
        adelantar3.addEventListener('click', accionAdelantar3);
        silenciar3.addEventListener('click', accionSilenciar3);
        active_silencio3.addEventListener('click', accionDesSilenciar3);

        medio3.addEventListener("timeupdate", function (ev) {
            document.getElementById("tiempo3").innerHTML = hora(medio3.currentTime);
            document.getElementById("tiempoTotal3").innerHTML = hora(medio3.duration);
        }, true);

        function progressLoop3() {
            setInterval(function () {
                var tiempoTotal;
                progress3.value = Math.round((medio3.currentTime / medio3.duration) * 100);
                timer3.innerHTML = progress3.value + " %";

                if (progress3.value < 80) {
                    document.getElementById("tiempo3").style.color = "green";
                }
                if (progress3.value >= 80) {
                    document.getElementById("tiempo3").style.color = "orange";
                }
                if (progress3.value >= 90) {
                    document.getElementById("tiempo3").style.color = "red";
                }
            });
        }

        medio3.addEventListener("play", progressLoop3);
    }

    var klk3 = document.getElementById("sonido");

    medio3.onended = function () {
        klk3.play();
    };

    window.addEventListener('load', iniciar3, false);


</script>
@endsection
