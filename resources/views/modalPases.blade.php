<div id="modalPases" class="modal">
    <div class="modal-content">
        <h4 id="invitado"></h4>
        <br>
        <div id="dist">
            <p id="pases"></p>
            <p id="mesa"></p>
        </div>
        <div id="confirmacion">
          <input id="confirm" type="number" min="0">
          <input id="routeConfirm" type="hidden" value="{{route('routeConfirm')}}">
          <a id="btnConfirm" class="btn">Confirmar pases</a>
        </div>
        <p style="font-size: 11pt; margin-top:10px">Recuerda que tienes hasta el <span>15 de Octubre</span> para confirmar tus pases</p>
    </div>
    <div class="modal-footer">
        <a  class="modal-close btn-flat">cerrar</a>
    </div>
</div>
<script>
    $( "#btnConfirm" ).click(function() {
        $.ajax({
            type: "POST",
            url: $('#routeConfirm').val(),
            data: { "_token": "{{ csrf_token() }}",
                    "code": $('#code').val(),
                    "pases": $('#confirm').val()},
            success: function(respu){
                if(respu == 0){
                    Swal.fire({
                        icon: 'error',
                        timer: "2000",
                        showCancelButton: false,
                        showConfirmButton: false,
                        title: 'Oops...',
                        text: 'Algo va mal, vuelve más tarde'
                    });
                }
                if(respu ==1){
                    Swal.fire({
                        icon: 'success',
                        timer: "2000",
                        showCancelButton: false,
                        showConfirmButton: false,
                        title: 'Pases confirmados',
                        text: 'Avisaremos a Luz y Angel tu respuesta'
                    });
                }
            },
            error: function (error) {
                Swal.fire({
                    icon: 'error',
                    timer: "2000",
                    showCancelButton: false,
                    showConfirmButton: false,
                    title: 'Oops...',
                    text: 'Algo va mal, vuelve más taIngresa un código válido'
                });
            }
        });
    });
</script>


