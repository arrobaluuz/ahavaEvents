<div id="modalInfoPase" class="modal">
    <input id="routeSavePase" type="hidden" value="{{ route('savePase') }}">
    <div class="modal-content">
        <input id="action" type="hidden">
        <div>
            <p>código</p>
            <input id="code" type="text">
        </div>
        <div>
            <p>invitado</p>
            <input id="persona" type="text">
        </div>
        <div>
            <p>mesa</p>
            <input id="mesa" type="text">
        </div>
        <div>
            <p>pases</p>
            <input id="pases" type="number">
        </div>
        <div>
            <p>confirmados</p>
            <input id="confirm" type="number">
        </div>
    </div>
    <div class="modal-footer">
        <a id="btnSave" class="btn-flat">Guardar</a>
        <a class="modal-close btn-flat">cerrar</a>
    </div>
</div>
<script>
    $("#modalInfoPase #btnSave" ).click(function() {
        $.ajax({
            type: "POST",
            url: $('#routeSavePase').val(),
            data: { "_token": "{{ csrf_token() }}",
                    "idEvento": $('#idEvento').val(),
                    "action": $('#action').val(),
                    "code": $('#code').val(),
                    "persona": $('#persona').val(),
                    "mesa": $('#mesa').val(),
                    "pases": $('#pases').val(),
                    "confirm": $('#confirm').val()
                },
            success: function(respu){

                if(respu['status'] == 0){
                    Swal.fire({
                        icon: 'error',
                        timer: "2000",
                        showCancelButton: false,
                        showConfirmButton: false,
                        title: 'Oops...',
                        text: respu['msg']
                    });
                }
                if(respu['status'] == 1){
                    $('#modalInfoPase').modal('close');
                    Swal.fire({
                        icon: 'success',
                        timer: "2000",
                        showCancelButton: false,
                        showConfirmButton: false,
                        title: 'Pase guardado',
                        text: 'Recuerda avisarle a tu invitado si haz cambiado los pases'
                    });
                    setTimeout(function(){
                        window.location.reload();
                    }, 2000);
                }
            }
        });
    });
</script>

