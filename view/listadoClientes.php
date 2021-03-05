<div class="container">
    <h3 class="mt-5"> Listado Clientes </h3>
    <hr>
    <div class="row">
      <div class="col-12 col-md-12"> 
          <div class="row">
            <div class="col-md-12">
              <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#agregarNuevoCliente">Nuevo Cliente</button>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <div id="clientes_content"></div>
            </div>
          </div>
      </div>
    </div>
</div>

<!-- Modal Crear -->
<?php include("view/modal/crearCliente.php");?>
<!-- Modal Actualizar -->
<?php include("view/modal/actualizarCliente.php");?>
