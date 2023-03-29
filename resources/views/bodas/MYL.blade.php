@extends('main', [
    'class' => '',
    'elementActive' => 'listaNegra',
    'title' => 'Mafer y Beto'
])

@section('hojaEstilo')
    <link rel="stylesheet" href="{{asset('assets/css/mexicana.css')}}">
@endsection

@section('content')
    <div>

        <div>
            <div class="circular--landscape" id="propuesta">
                <img src="{{ asset('assets/img/MYL/MYL.jpeg') }}" alt="" style="">
            </div>
        </div>

       {{--  <div id="principal">
            <p style="font-size: 20pt">¡Nos casamos!</p>
            <h3 id="anfitriones">
                María Fernanda Herrera Rico
                <br>
                y
                <br>
                Luis Alberto Anaya Galván
            </h3>
            <div class="cuenta-div">
                <p class="fecha" style="font-size: 20pt" >sábado 29 de abril 2023</p>
            </div>
        </div> --}}
        <div class="contenedor" id="cards-p">
            <div class="card-p item-b" id="padrinos" style="transform:rotate(358deg);">
                <h3>Padres novia</h3>
                <p>Ma. del Pilar Rico Sandoval</p>
                <hr style="max-width: 100%;"/>
                <p>Francisco Javier Herrera Lara</p>
            </div>
            <div class="card-p item-a"  id="padrinos" style="transform:rotate(2deg);">
                <h3>Padrinos</h3>
                <p>María Teresa Gasca Ortiz</p>
                <hr style="max-width: 100%;"/>
                <p>Eduardo Rico Sandoval</p>
            </div>
            <div class="card-p item-c" id="padrinos" style="transform:rotate(-3.312717379751713deg);">
                <h3>Padres novio</h3>
                <p>Ma. Dolores Galván Ramírez</p>
                <hr style="max-width: 100%;"/>
                <p>Agustín Anaya González</p>
            </div>
        </div>
        <div class="reveal carousel center-align">
            <div class="carousel-item">
                {{--  <h2>2007</h2> --}}
                <img src="{{asset('assets/img/MYL/1.jpeg')}}">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/MYL/3.jpeg')}}">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/MYL/4.jpeg')}}">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/MYL/5.jpeg')}}">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/MYL/6.jpeg')}}">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/MYL/7.jpeg')}}">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/MYL/8.jpeg')}}">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/MYL/9.jpeg')}}">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/MYL/10.jpeg')}}">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/MYL/11.jpeg')}}">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/MYL/12.jpeg')}}">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/MYL/13.jpeg')}}">
            </div>
        </div>
        <div class="two reveal tc">
            <div id="ceremonia" style="background-color: #f8efe0">
                <h4>Misa</h4>
                <p> Santuario de Guadalupe | 13:00 hrs</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.4638378476075!2d-100.81396698575273!3d20.528194310055035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cba900268dae5%3A0x708fdb8ea610059d!2sSantuario%20de%20Guadalupe!5e0!3m2!1ses-419!2smx!4v1680031421518!5m2!1ses-419!2smx" width="400" height="300" style="border:0; border-radius:15px;margin-top:10px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="box festejo">
                <h4>Celebración</h4>
                <p> Jardín Quinta Santa Ana | 15:00 hrs</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.866926454111!2d-100.8790545!3d20.552624999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cbb4e02095e53%3A0x4c11a868231ce9f2!2sJardin%20Quinta%20Santa%20Ana!5e0!3m2!1ses-419!2smx!4v1680031463447!5m2!1ses-419!2smx" width="400" height="300" style="border:0;border-radius:15px;margin-top:10px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="reveal contenedor box" style="margin-top:50px;text-align: center;">
            <p>Hagamos este album más grande</p>
            <p id="hastag">#MYLgotMARRIED!</p>
            <p>comparte en tus redes sociales las fotos/videos/tiktoks que hayas tomado en la boda y agregales este hastag para poder verlos todos! </p>
        </div>
        <div class="two reveal">
            <div class="box">
                <h4>LLuvia de sobres</h4>
                <p> Sus buenos deseos son suficientes para nosotros y en caso de querer hacernos un regalito, este puede ser en efectivo, lo colocarás en un sobre que se encontrará en la recepción del salón
                </p>
            </div>
            <div class="box" >
                <h4>Ey!</h4>
                <p>
                    Para una mejor experiencia para todos los presentes, hemos decidido celebrar este momento
                    <span class="important">sin niños</span>.
                    <br>
                    Deseamos que esta decisión no les impida asistir a nuestra celebración.
                </p>
                <br>
            </div>
        </div>
        <br>
    </div>
@endsection

