@extends('main', [
    'class' => '',
    'elementActive' => 'listaNegra',
    'title' => 'Ceci y Tony'
])

@section('hojaEstilo')
    <link rel="stylesheet" href="{{asset('assets/css/boda-green.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Rouge+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
@endsection

@section('content')
    <div id="reaccionar" style="background-color: rgba(100, 100, 100, 0.5); width: 100%; height: 100%; z-index: 2; position: absolute; z-index: 20; top: 0; display: grid; ">
        <input type="hidden" id="routeMoreLove" value="{{ route('moreLove', 1 ) }}">
        <button id="ilove" class="inLove" style="background-color: transparent; border:none; margin:auto">
            <img class="inLove" src="{{asset('assets/img/MeEncanta.png')}}" alt="">
        </button>
    </div>
    <div class="contenedor" style="z-index: 1; height: 100%;">
        <audio id="audio" loop >
            <source src="{{asset('assets/img/cecy/Marry You Bruno Mars.mp3')}}" type="audio/mp3">
        </audio>
        <div id="header" class="header logo_img" style="background: linear-gradient(to right, rgba(114, 113, 114, 0.5), rgba(114, 113, 114, 0.5)), url('{{ asset('assets/img/cecy/3.jfif') }}') fixed center;">
            <p class="Rouge-text evento">Nuestra boda</p>
            <p class="Rouge-text anfitrion">Ceci y Tony</p>
            <div class="cuenta-div">
                <p class="fecha" >29 de Abril del 2023</p>
                <p class="faltan">Faltan</p>
                <div id="cuenta"></div>
            </div>
        </div>
        <div id="peopleLove">
            <img src="{{asset('assets/img/MeEncanta.png')}}" width="20px" alt="">
            <p>a <span id="numberLove"></span> personas les encanta esto</p>
        </div>
        <div class="frase">
            Somos obra en construcción en manos del mejor arquitecto
        </div>
        <div class="familiares">
            <div class="familiares-borde">
                <h4> Mis papás | Ceci</h4>
                <p>María Esther Cantero Hernandez</p><hr>
                <p>José Carlos Chávez Ballesteros</p>
            </div>
            <div class="familiares-borde">
                <h4> Mis papás | Tony </h4>
                <p>Ma Caridad Mata Ramírez</p><hr>
                <p>Antonio Sánchez Pérez</p>
            </div>
            <div class="familiares-borde">
                <h4>Nuestros padrinos </h4>
                <p>María Angélica González Arellano</p><hr>
                <p>Ernesto Cantero Hernandez</p>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="carousel center-align">
                    <div class="carousel-item">
                    {{--  <h2>2007</h2> --}}
                        <img src="{{asset('assets/img/cecy/1.jfif')}}">
                    </div>
                    <div class="carousel-item">
                    {{--  <h2>Huasteca</h2> --}}
                        <img src="{{asset('assets/img/cecy/2.jfif')}}">
                    </div>
                    <div class="carousel-item">
                    {{--  <h2></h2> --}}
                        <img src="{{asset('assets/img/cecy/3.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/4.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/5.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/6.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/7.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/9.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/10.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/11.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/12.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/13.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/14.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/15.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/16.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/17.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/18.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/19.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/20.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/21.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/23.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/24.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/25.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/26.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/27.jfif')}}">
                    </div>
                    <div class="carousel-item">
                        {{-- <h2>2008</h2> --}}
                        <img src="{{asset('assets/img/cecy/28.jfif')}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="palabras">
            <p>
                El amor es sufrido, es benigno; el amor no tiene envidia, el amor no es jactancioso, no se envanece; no hace nada indebido, no busca lo suyo, no se irrita, no guarda rencor; no se goza de la injusticia, mas se goza de la verdad. Todo lo sufre, todo lo cree, todo lo espera, todo lo soporta. Uno solo puede ser vencido, pero dos pueden resistir. <br>
            </p>
            <br>
            <h4>Queremos compartir contigo la felicidad de nuestra unión </h4>
            <br>
        </div>
        <div class="ubicaciones">
            <div>
                <h2>Templo</h2>
                <p> 16:00 hrs</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.6559650654995!2d-100.83457028575287!3d20.520324910317814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cbaf74fac2619%3A0x7f08e4c66df04ceb!2sTemplo%20Parroquial%20La%20Virgen%20de%20Los%20Pobres!5e0!3m2!1ses-419!2sus!4v1675124456732!5m2!1ses-419!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div>
                <h2>Salón</h2>
                <p> 18:00 hrs</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14948.192406092492!2d-100.82938519218747!3d20.504254300000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cba6562967cc3%3A0x974d002c9a1e963c!2sCasa%20de%20jasso%20Salon%20De%20Fiesta!5e0!3m2!1ses-419!2sus!4v1675124591922!5m2!1ses-419!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
            </div>
        </div>

        <div class="hastag">
            <p> Queremos que te la pases increible y poder recordar estos momentos en bellas fotos, usa el hastag</p>
            <h2>#CwT</h2>
            <p> en tus redes sociales y ayudanos a hacer el album más grande</p>
        </div>

    </div>
@endsection

@push('scripts')
    {{-- contador --}}
    <script src="{{asset('assets/js/simplyCountdown.min.js')}}"> </script>
    <script src="{{asset('/assets/js/countdown.js')}}"> </script>
    <script>
        var vAudio = document.getElementById("divAudio");
        var hasInit = false;
        $( "#ilove" ).click(function() {
                $.ajax({
                type: "GET",
                url: $('#routeMoreLove').val(),
                dataType: "JSON",
                success: function(respu){
                    $('#numberLove').text(respu);
                }
            });

                $('#audio')[0].play();
                $('#reaccionar').addClass('transitionOutFrameLove');
                $('body').css({'overflow-y':'scroll'});
        });
    </script>
@endpush


