
<div class="container">
    <h3 class="mt-5"> Listado Grupo de Clientes </h3>
    <hr>
    <div class="row">
      <div class="col-12 col-md-12"> 
          <div class="row">
            <div class="col-md-12">
              <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Nuevo Grupo</button>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <div id="grupoclientes_content"></div>
            </div>
          </div>
      </div>
    </div>
</div>

<!-- Modal Crear -->
<?php include("view/modal/crearGrupoCliente.php");?>
<!-- Modal Actualizar -->
<?php include("view/modal/actualizarGrupoCliente.php");?>