@extends('main', [
    'class' => '',
    'elementActive' => 'listaNegra',
    'title' => 'Panel Anfitrion'
])
@section('hojaEstilo')
    <link rel="stylesheet" href="{{asset('assets/css/terra.css')}}">
@endsection

@section('content')
    <div class="contenedor">
        <p>Hola! Aqui puedes ver tus invitados y las confirmaciones de pases</p>
        <div style="display: flex; justify-content: flex-end;">
            <a href="#" class="btn addPase" action="add">Agregar persona</a>
        </div>

        <table>
            <thead>
                <tr>
                    <td>Persona</td>
                    <td>Pases</td>
                    <td>Confirmados</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($pases as $item)
                    <tr>
                        <td>{{ $item->persona }}</td>
                        <td>{{$item->pases}}</td>
                        <td style="{{$item->pases>0 ? 'color:green': 'color:red'}}">{{$item->confirm}}</td>
                        <td>
                            <a href="#" class="btn addPase" action="edit">Editar</a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <script>
            $( ".addPase" ).click(function() {
                var action = $(this).attr("action");
                console.log(action);


                /* if($('#code').val().length > 0){
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
                        }
                    });
                } */
            });
        </script>

    </div>
@endsection

@section('footer')
    Te esperamos
@endsection

