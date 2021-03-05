  <!-- Modal - Nuevo Cliente -->
  <div class="modal fade" id="agregarNuevoCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
    
        <div class="modal-header">
          <h5 class="modal-title">Nuevo Cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input  type="text" id="nombre" value="" placeholder="Ingrese el Nombre"  class="form-control"/>
          </div>
          <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" value="" placeholder="Ingrese el Apellido"   class="form-control"/>
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email"  placeholder="Ingrese el E-mail" class="form-control" value=""/>
          </div>
          <div class="form-group">
            <label for="grupoCliente">Grupo de Cliente</label>
            
            <select class="form-control" name="grupoCliente" id="grupoCliente">
            <?
              foreach($this->$clientes as $grupo){
                
            ?>
            <option value="0" selected >Seleccione una opcion</option>
            <option value="<? echo $grupo[id]; ?>"><? echo $grupo[nombre]; ?></option>
            <?}?>
            </select>
            
          </div>
          <div class="form-group">
            <label for="observacion">Observacion</label>
            <textarea  id="observacion" class="form-control"></textarea>
            <!--<input type="text" id="obs" class="form-control"/>--> 
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" onclick="addCliente()">Crear</button>
        </div>
      </div>
    </div>
  </div>