<?php
	require('conn.php');
	$x = 0;
	$sql = "SELECT * FROM invitacion ORDER BY curp ASC";
	$resultadoSQL = $conn->query($sql);
	while($rowSQL=$resultadoSQL->fetch_assoc()){
		$x++;
		echo '
		<tr>
            <td>'.$x.'</td>
            <td>'.$rowSQL['nombre'].'</td>
            <td>'.strtoupper($rowSQL['curp']).'</td>
            <td>'.$rowSQL['telefono'].'</td>
            <td>'.$rowSQL['email'].'</td>
            <td><a onclick= "editarDatos('.$rowSQL['id'].')" type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editarInformacion"><small><i class="bi bi-pencil-square"></i> Editar</small></a></td>
            <td><a onclick= "eliminarRegistro('.$rowSQL['id'].')" type="button" class="btn btn-danger btn-sm"><small><i class="bi bi-trash3"></i> Eliminar</small></a></td>
            
        </tr>';
	}

?>

<!-- cmd + D es para seleccionar varios del mismo y escribir -->