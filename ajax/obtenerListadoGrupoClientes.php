<?php
	// Include conexion de la db 
	include("db_connection.php");

	// Header de la tabla
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>Nro</th>
							<th>Nombre</th>
							<th>Acciones</th>
						</tr>';

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
    		$data .= '<tr>
				<td>'.$row['ID_GRUPOCLIENTE'].'</td>
				<td>'.$row['nombre'].'</td>
				<td>
					<button onclick="obtenerCliente('.$row['ID_GRUPOCLIENTE'].')" class="btn btn-warning"><i class="fas fa-edit"></i></button>
					<button onclick="eliminarCliente('.$row['ID_GRUPOCLIENTE'].')" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
				</td>
    		</tr>';
    	}
    }
    else
    {
    	// Si no hay registros
    	$data .= '<tr><td colspan="3">No hay registros!</td></tr>';
    }

    $data .= '</table>';
    echo $data;
?>