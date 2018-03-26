<!-- Modal -->
<div class="modal fade" id="ModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Confirmar Datos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿ Seguro que quiere almacenar los siguientes datos ?</p>
                <p>Foto</p>
                <div id="previewModal" class="previewModal"></div>
                <p>Coordenadas</p>
                <p><strong>Latitud</strong>: <span id="latModal">&nbsp;</span> </p>
                <p><strong>Longitud:</strong> <span id="lngModal">&nbsp;</span></p>
                <p><strong>Codigo cliente:&nbsp;</strong><span id="codClienteModal">&nbsp;</span></p>
                <p><strong>Orden de trabajo:&nbsp;</strong><span id="ordTrabajoModal">&nbsp;</span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button id="btn-register"  type="submit" class="btn btn-primary">Registrar Datos</button>
            </div>
        </div>
    </div>
</div>