@extends('main', [
    'class' => '',
    'elementActive' => 'listaNegra',
    'title' => 'Luz y Angel'
])

@section('hojaEstilo')
    <link rel="stylesheet" href="{{asset('assets/css/terra.css')}}">
@endsection

@section('content')
    <div>
        <div id="principal">
            <p>¡Hay bodorrio!</p>
            <h3 id="anfitriones">
                Luz    y    Angel
            </h3>
            <div class="cuenta-div">
                <p class="fecha" >18 de Noviembre del 2023</p>
                <div id="cuenta"></div>
            </div>
        </div>
        <div class="contenedor">
            <div class="reveal" id="padrinos">
                    <h3>Padrinos</h3>
                    <p>María Araceli Páramo Hernández</p>
                    <hr/>
                    <p>Roberto Ocampo García</p>
            </div>
            <div class="reveal" id="padres">
                <div>
                    <h3>Padres novia</h3>
                    <p>Dulce Maria Pérez Castro</p>
                    <hr/>
                    <p>Miguel Angel López Díaz</p>
                </div>
                <div>
                    <h3>Padres novio</h3>
                    <p>Martha Rocio Yañez Nieto</p>
                    <hr/>
                    <p>José Baltazar Rodriguez Garcia</p>
                </div>
            </div>
        </div>
        <div class="reveal carousel center-align">
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
        </div>
        <div class="reveal" id="evento">
            <div id="ceremonia">
                <h4>Misa</h4>
                <p> San Juan Bosco | 17:00</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.5852629905917!2d-101.35147148575!3d20.686445504753387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842c7fdbf9185e79%3A0x45aef77cdc274605!2sSan%20Juan%20Bosco%2C%20Ni%C3%B1os%20Heroes%2C%2036668%20Irapuato%2C%20Gto.%2C%20M%C3%A9xico!5e0!3m2!1ses-419!2sus!4v1677610171104!5m2!1ses-419!2sus" width="400" height="300" style="border:0; border-radius:15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="festejo">
                <h4>Celebración</h4>
                <p> Quinta Mary | 20:00 </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3737.2508401209757!2d-100.83536448255614!3d20.495940900000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cba4603726d01%3A0xcaacc26dd8b627db!2sQuinta%20Mary!5e0!3m2!1ses-419!2sus!4v1677610410014!5m2!1ses-419!2sus" width="400" height="300" style="border:0; border-radius:15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="reveal cover">
            <h4>Consulta tu mesa</h4>
            <div class="flex-form">
                <label for="from">
                    <i class="ion-location"></i>
                </label>
                <input id="routeGetPases" type="hidden" value="{{ route('getPases') }}">
                <input id="code" style="text-transform:uppercase;" class="codigo-input" type="text" name="codigo" placeholder="Ingresa tu código" value="BDLYA0101">
                <a id="searchCode" >Buscar</a>
            </div>
        </div>
        <div class="reveal contenedor text-justify" style="margin-top:20px; ">
            <p>
                Debido a que la misa es en Irapuato ponemos a disposición <span class="important">2 camiones</span> que tendran salida del salón a las <span class="important">15:50</span> por si se te complica trasladarte y tienes la intención de acompañarnos en la misa, por favor avisanos a los novios para apartar tus lugares. Si vas a llevar tu carro y te sobran lugares ponte de acuerdo con tus amigos o familiares para que seamos la mayoria celebrando esta unión!. El templo cuenta con <span class="important">estacionamiento</span> a un costado sin costo extra, así que durante la misa no tendrás que preocuparte por la seguridad de tu vehiculo.
            </p>
        </div>
        <div class="two contenedor reveal">
            <div id="itinerario">
                <h4>Itinerario</h4>
                <ul>
                    <li>
                        <i class="fas fa-bus fa-lg"></i>
                        <p class="hora" >15:50</p>
                        <p>Salida de los camiones del salón hacia el templo</p>
                    </li>
                    <li>
                        <i class="fas fa-church fa-lg"></i>
                        <p class="hora">17:00</p>
                        <p>Misa</p>
                    </li>
                    <li>
                        <i class="fas fa-bus fa-lg"></i>
                        <p class="hora">18:20</p>
                        <p>Salida de los camiones del templo hacia el salón</p>
                    </li>
                    <li>
                        <i class="fas fa-glass-cheers"></i>
                        <p class="hora">20:00</p>
                        <p>Recepción en salón</p>
                    </li>
                    <li>
                        <i class="fas fa-utensils fa-lg"></i>
                        <p class="hora">21:00</p>
                        <p>Cena</p>
                    </li>
                </ul>
            </div>
            <div id="hospedaje">
                <h4>Hospedaje</h4>
                <p>Te compartimos algunas opciones de hospedaje que consideramos buenas</p>
                <ul>
                    <li>
                        <a class="link" href="https://goo.gl/maps/ktJTnqPH2kSzrhCM9">
                            <i class="fas fa-hotel fa-lg"></i>
                            City Express Parque Celaya
                        </a>
                    </li>
                    <li>
                        <a class="link" href="https://goo.gl/maps/Kop165WnZFx7i8Dr6">
                            <i class="fas fa-hotel fa-lg"></i>
                            Hotel México Plaza Celaya
                        </a>
                    </li>
                    <li>
                        <a class="link" href="https://goo.gl/maps/Kop165WnZFx7i8Dr6">
                            <i class="fas fa-hotel fa-lg"></i>
                            Hotel México Plaza Celaya
                        </a>
                    </li>
                </ul>

                <br>

                <br>
            </div>
        </div>
        <div class="actions">
            <form id="formGoPanel" action="{{ route('panel') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="2">
                <input type="password" name="password">
                <a id="btnGoPanel" class="btn">Ir al panel de anfitrion</a>
            </form>
        </div>
        <br>
    </div>
    @include('modalPases')


@endsection
@push('scripts')
    {{-- contador --}}
    <script src="{{asset('assets/js/simplyCountdown.min.js')}}"> </script>
    <script src="{{asset('assets/js/countdownLYA.js')}}"> </script>
    <script>
        $( "#btnGoPanel" ).click(function() {
            $( "#formGoPanel" ).submit();
        });



        $( "#searchCode" ).click(function() {
            if($('#code').val().length > 0){
                $.ajax({
                    type: "POST",
                    url: $('#routeGetPases').val(),
                    data: { "_token": "{{ csrf_token() }}",
                            "code": $('#code').val()},
                    success: function(respu){
                        if(respu == 0){
                            Swal.fire({
                                icon: 'error',
                                timer: "2000",
                                showCancelButton: false,
                                showConfirmButton: false,
                                title: 'Oops...',
                                text: 'Ingresa un código válido'
                            });
                        }else{
                            $('#invitado').text(respu['persona']);
                            $('#pases').text('Pases: '+respu['pases']);
                            $('#mesa').text('Mesa: '+respu['mesa']);
                            if(respu['confirm']!=null){
                                $('#confirm').val(respu['confirm']);
                            }else{
                                $('#confirm').val(respu['pases']);
                            }
                            $("#confirm").prop('max',respu['pases']);
                            $("#confirm" ).keyup(function() {
                                if($("#confirm" ).val()>respu['pases']){
                                    $("#confirm" ).val(respu['pases'])
                                }
                            });
                            $('#modalPases').modal('open');
                        }
                    },
                    error: function (error) {
                        Swal.fire({
                            icon: 'error',
                            timer: "2000",
                            showCancelButton: false,
                            showConfirmButton: false,
                            title: 'Oops...',
                            text: 'Ingresa un código válido'
                        });
                    }
                });
            }else{
                Swal.fire({
                icon: 'error',
                timer: "2000",
                showCancelButton: false,
                showConfirmButton: false,
                title: 'Oops...',
                text: 'Ingresa un código'
                })
            }
        });
        ScrollReveal().reveal('.reveal',{ delay: 800,duration: 800,reset: true });
    </script>
@endpush

