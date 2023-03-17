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
        <input id="routeGetPases" type="hidden" value="{{ route('getPases') }}" >
        <input id="idEvento" type="hidden" value="{{ $evento->id }}">
        <table>
            <thead>
                <tr>
                    <td>Código</td>
                    <td>Persona</td>
                    <td>Mesa</td>
                    <td>Pases</td>
                    <td>Confirmados</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($pases->sortBy('mesa') as $item)
                    <tr>
                        <td>{{$item->code }}</td>
                        <td>{{$item->persona }}</td>
                        <td>{{$item->mesa }}</td>
                        <td>{{$item->pases}}</td>
                        <td style="{{$item->pases>0 ? 'color:green': 'color:red'}}">{{$item->confirm}}</td>
                        <td>
                            <a href="#" class="btn addPase" action="edit" code="{{ $item->code }}">
                                edit
                            </a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        @include('modalInfoPase')
        <script>
            $( ".addPase" ).click(function() {
                var action = $(this).attr("action");
                switch (action) {
                    case "add":
                            $('#modalInfoPase #action').val('add');
                            $("#modalInfoPase #code" ).prop( "disabled", false );
                            $('#modalInfoPase #code').val('');
                            $('#modalInfoPase #persona').val('');
                            $('#modalInfoPase #mesa').val('');
                            $('#modalInfoPase #pases').val('');
                            $('#modalInfoPase #confirm').val('');
                        break;
                    case "edit":
                        $("#modalInfoPase #code" ).prop( "disabled", true );
                        $.ajax({
                        type: "POST",
                        url: $('#routeGetPases').val(),
                        data: { "_token": "{{ csrf_token() }}",
                                "code": $(this).attr("code")},
                        success: function(respu){
                            if(respu == 0){
                                Swal.fire({
                                    icon: 'error',
                                    timer: "2000",
                                    showCancelButton: false,
                                    showConfirmButton: false,
                                    title: 'Oops...',
                                    text: 'Algo salió mal, intenta más tarde'
                                });
                            }else{
                                $('#modalInfoPase #action').val('edit');
                                $('#modalInfoPase #code').val(respu['code']);
                                $('#modalInfoPase #persona').val(respu['persona']);
                                $('#modalInfoPase #mesa').val(respu['mesa']);
                                $('#modalInfoPase #pases').val(respu['pases']);
                                $('#modalInfoPase #confirm').val(respu['confirm']);
                                $("#modalInfoPase #confirm").prop('max',respu['pases']);
                            }
                        }
                    });
                    break;
                    default:
                        break;
                    }
                     //si los pases cambian y los confirmados son mayores, actualizarlos a los pases dados
                    $("#modalInfoPase #pases").keyup(function() {
                        $('#modalInfoPase #confirm').val('');
                        $("#modalInfoPase #confirm").prop('max',$("#modalInfoPase #pases").val());
                    });
                    //si confirm cambia verificar que no supere los pases
                    $("#modalInfoPase #confirm" ).keyup(function() {
                        if($("#modalInfoPase #confirm" ).val()>$("#modalInfoPase #pases" ).val()){
                            $('#modalInfoPase #confirm').val($("#modalInfoPase #pases").val());
                        }
                    });
                    $('#modalInfoPase').modal('open');
            });
        </script>

    </div>
@endsection

@section('footer')
    Te esperamos
@endsection

