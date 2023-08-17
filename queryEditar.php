<?php
	require('conn.php');
    $id = $_POST['id'];
    $sql = "SELECT * FROM invitacion WHERE id = '$id'";
	$resultadoSQL = $conn->query($sql);
    $rowSQL = $resultadoSQL->fetch_assoc();
        $id = $rowSQL['id'];
        $nombre = $rowSQL['nombre'];
        $telefono = $rowSQL['telefono'];
        $curp = $rowSQL['curp'];
        $email = $rowSQL['email'];

	if($resultadoSQL){
        
        echo json_encode(array(
            'id' => $id,
            'nombre' => $nombre,
            // 'telefono' => $telefono,
            'curp' => $curp,
            'email' => $email,
            'success' => 1
        ));
    }
    else{
        echo json_encode(array(
            'success' => 0
        ));
    }

?>

<!-- cmd + D es para seleccionar varios del mismo y escribir -->