<?php
// cmd + D es para seleccionar varios del mismo y escribir
	require('conn.php');
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $curp = $_POST['curp'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "UPDATE invitacion SET nombre = '$nombre', curp = '$curp', email ='$email', telefono = '$telefono' WHERE id = '$id'";
	$resultadoSQL = $conn->query($sql);

	if($resultadoSQL){
        echo json_encode(
            array(
            'success'=>1
        ));
    }
    else{
        echo json_encode(array(
            'success'=>0
        ));
    }

?>