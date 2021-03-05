<?php


if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // Include conexion de la db 
    include("db_connection.php");

    // Seteamos el ID
    $idCliente = $_POST['id'];

    // Eliminar Cliente
    $query = "DELETE FROM cliente WHERE ID_CLIENTE = '$idCliente'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}

?>