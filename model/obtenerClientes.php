<?php
	// Include conexion de la db 
	include("../ajax/db_connection.php");


	// Traer los datos de la tabla
	$query = "SELECT * FROM grupo_cliente";

	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // Si hay valores en la tabla, los mostramos
    if(mysqli_num_rows($result) > 0)
    {
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$clienteArray[] = $row;
    	}
    }
    else
    {
    	// Si no hay registros
    	echo "No hay registros";
    }

    echo json_encode($clienteArray);
?>