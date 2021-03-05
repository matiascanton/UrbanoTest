<?php

include("db_connection.php");

if(isset($_POST))
{
    $id = $_POST['id'];
	$nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $grupoCliente=$_POST['grupoCliente'];
    $obs = $_POST['obs'];

    $query = "UPDATE cliente SET nombre='$nombre', apellido='$apellido', email='$email', FK_GRUPO_CLIENTE='$grupoCliente' observaciones = '$obs' WHERE ID_CLIENTE = '$id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}