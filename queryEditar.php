<?php
// cmd + D es para seleccionar varios del mismo y escribir
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

        echo json_encode(
            array(
            'success'=>1,
            'id'=>$id,
            'nombre'=>$nombre,
            'curp'=>$curp,
            'email'=>$email
        ));
    }
    else{
        echo json_encode(array(
            'success'=>0
        ));
    }

?>