// Funcion Agregar Cliente
function addCliente() {

    // Obtenemos los valores de los input
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var email = $("#email").val();
    var grupoCliente = $("#grupoCliente").val();
    var observacion = $("#observacion").val();

    // Agregamos el cliente
    $.post("ajax/addCliente.php", {
        nombre: nombre,
        apellido: apellido,
        email: email,
        grupoCliente: grupoCliente,
        observacion: observacion
    }, function (data, status) {
        // Cerramos el modal
        $("#agregarNuevoCliente").modal("hide");

        // Leemos los registros
        obtenerListadoClientes();

        // Vaciamos los campos del modal
        $("#nombre").val("");
        $("#apellido").val("");
        $("#email").val("");
        $("#grupoCliente").val("");
        $("#observacion").val("");
    });
}

// Funciones listar Clientes
function obtenerListadoClientes() {
    $.get("ajax/obtenerListadoClientes.php", {}, function (data, status) {
        $("#clientes_content").html(data);
    });
}
// Funciones listar Clientes
function obtenerListadoGrupoClientes() {
    $.get("ajax/obtenerListadoGrupoClientes.php", {}, function (data, status) {
        $("#grupoclientes_content").html(data);
    });
}


function eliminarCliente(id) {
    var conf = confirm("¿Está seguro que desea eliminar el registro?");
    if (conf == true) {
        $.post("ajax/eliminarCliente.php", {
            id: id
        },
            function (data, status) {
                obtenerListadoClientes();
            }
        );
    }
}

function ObtenerCliente(id) {

    $("#hidden_id").val(id);
    $.post("ajax/obtenerCliente.php", {
        id: id
    },
        function (data, status) {
            var cliente = JSON.parse(data);
            // Asignamos los valores a los input
            $("#update_nombre").val(cliente.nombre);
            $("#update_apellido").val(cliente.apellido);
            $("#update_email").val(cliente.email);
            $("#update_grupoCliente").val(cliente.grupoCliente);
            $("#update_observacion").val(cliente.observacion);
        }
    );

    $("#actualizarCliente").modal("show");
}

function ActualizarCliente() {
    // obtener valores del input
    var nombre = $("#update_nombre").val();
    var apellido = $("#update_apellido").val();
    var email = $("#update_email").val();
    var grupoCliente = $("#update_grupoCliente").val();
    var obs = $("#update_observacion").val();
    var id = $("#hidden_id").val();

    // Actualizamos
    $.post("ajax/actualizarCliente.php", {
        id: id,
        nombre: nombre,
        apellido: apellido,
        email: email,
        grupoCliente: grupoCliente,
        obs: obs
    },
        function (data, status) {
            $("#actualizarCliente").modal("hide");
            obtenerListadoClientes();
        }
    );
}

$(document).ready(function () {

    obtenerListadoClientes();
    obtenerListadoGrupoClientes();
});