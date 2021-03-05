<?php
	if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['grupocliente']) && isset($_POST['observacion']))
	{
		// Include conexion de la bd
		include("db_connection.php");

		// Seteamos los valores
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$email = $_POST['email'];
		$grupoCliente = $_POST['grupocliente'];
		$obs = strtoupper($_POST['observacion']);

		// Insertamos en la bd
		$query = "INSERT INTO cliente(nombre, apellido, email, grupocliente, observacion) VALUES('$nombre', '$apellido', '$email', '$grupoCliente', '$obs')";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "Cliente Creado!";
	}
?>