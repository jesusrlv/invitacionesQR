<?php
    include('conn.php');

    $nombre = $_POST['nombre'];
    $curp = $_POST['curp'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO invitacion (
        nombre,
        curp,
        telefono,
        email) 
        VALUES (
            '$nombre',
            '$curp',
            '$telefono',
            '$email'
        )";
    $resultado = $conn->query($sql);
    
    if($resultado){
        echo json_encode(array('success'=>1));
    }
    else{
        echo json_encode(array('success'=>0));
    }
?>