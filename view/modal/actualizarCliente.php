<!-- Actualizar Cliente -->
<div class="modal fade" id="actualizarCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
    
        <div class="modal-header">
          <h5 class="modal-title">Actualizar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> 
        
        
        <div class="modal-body">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="update_nombre" value="" class="form-control"/>
          </div>
          <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" id="update_apellido"  class="form-control"/>
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="update_email"  class="form-control"/>
          </div>
          <div class="form-group">
            <label for="grupoCliente">Grupo de Cliente</label>
            <input type="text" id="update_grupoCliente" class="form-control"/>
          </div>
          <div class="form-group">
            <label for="obs">Observaciones</label>
            <textarea  id="update_observacion" class="form-control"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" onclick="ActualizarCliente()" >Guardar Cambios</button>
          <input type="hidden" id="hidden_id">
        </div>
      </div>
    </div>
  </div>