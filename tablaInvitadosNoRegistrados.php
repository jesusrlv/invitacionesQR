<?php
	require('conn.php');
	$x = 0;
	$sql = "SELECT * FROM invitacion WHERE checkin IS NULL OR checkin = '' OR checkin = 0 ORDER BY curp ASC";
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
            <td><i class="bi bi-x-circle-fill"></i></td>
            
        </tr>';
	}

?>

<!-- cmd + D es para seleccionar varios del mismo y escribir -->