<?php
	// Include conexion de la db 
	include("db_connection.php");

	// Header de la tabla
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>Nro</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>E-mail</th>
							<th>Grupo de Cliente</th>
							<th>Acciones</th>
						</tr>';

	// Traer los datos de la tabla
	$query = "SELECT * FROM cliente";

	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // Si hay valores en la tabla, los mostramos
    if(mysqli_num_rows($result) > 0)
    {
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .= '<tr>
				<td>'.$row['ID_CLIENTE'].'</td>
				<td>'.$row['nombre'].'</td>
				<td>'.$row['apellido'].'</td>
				<td>'.$row['email'].'</td>
				<td>'.$row['FK_GRUPO_CLIENTE'].'</td>
				<td>
					<button onclick="ObtenerCliente('.$row['ID_CLIENTE'].')" class="btn btn-warning"><i class="fas fa-edit"></i></button>
					<button onclick="DeleteUser('.$row['ID_CLIENTE'].')" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
				</td>
    		</tr>';
    	}
    }
    else
    {
    	// Si no hay registros
    	$data .= '<tr><td colspan="5">No hay registros!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>