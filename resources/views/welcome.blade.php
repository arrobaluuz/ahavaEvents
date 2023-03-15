<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahava </title>
    <!-- font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--scss-->
    <link rel="stylesheet/less" type="text/css" href="{{asset('css/ahava.sass')}}" />
    <script src="https://cdn.jsdelivr.net/npm/less@4.1.1" ></script>
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rouge+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <!--favicon-->
    <link rel="icon" href="{{asset('img/icons/ahava.ico')}}">
    <!--materialize-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>
    <div id="logo">
        <img width="150px" src="{{ asset('img/ahava.png') }}" alt="">
    </div>
    <div id="promo" >
        <h3>Febrero</h3>
        <p>Estamos estrenando página!</p>
        <p>Por ello <span>-20%</span> en tus invitaciones digitales</p>
        <img src="{{ asset('img/stock/celu.png') }}" alt="">
    </div>
    <div>
        <p class="title">Conoce nuestros productos</p>
        <div id="productos">
            <div class="product">
                <h4>Invitaciones</h4>
                <p>Un diseño unico para tu evento</p>
                <button>Dime más</button>
            </div>
            <div class="product">
                <h4>Recuerdos vivos</h4>
                <p>Suculentas en macetas que llenaran de vida los hogares de tus invitados</p>
                <button>Dime más</button>
            </div>
            <div class="product">
                <h4>Invitaciones</h4>
                <p>Un diseño unico para tu evento</p>
                <button>Dime más</button>
            </div>
            <div class="product">
                <h4>Recuerdos vivos</h4>
                <p>Suculentas en macetas que llenaran de vida los hogares de tus invitados</p>
                <button>Dime más</button>
            </div>
             <div class="product">
                <h4>Invitaciones</h4>
                <p>Un diseño unico para tu evento</p>
                <button>Dime más</button>
            </div>
            <div class="product">
                <h4>Recuerdos vivos</h4>
                <p>Suculentas en macetas que llenaran de vida los hogares de tus invitados</p>
                <button>Dime más</button>
            </div>
        </div>
    </div>

    <div class="menu" onclick="this.classList.toggle('open')">
        <div class="button">
            <img width="30px" src="{{ asset('img/icons/letter.png') }}" alt="">
        </div>
        <div class="button">
            <img width="30px" src="{{ asset('img/icons/plant.png') }}" alt="">
        </div>

    </div>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <!--materialize-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
