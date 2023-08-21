<?php
    include('conn.php');

    $nombre = $_POST['nombre'];
    $curp = $_POST['curp'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $evento = 1;
    $checkin = 0;

    $sql = "INSERT INTO invitacion (
        nombre,
        curp,
        telefono,
        email,
        evento,
        checkin) 
        VALUES (
            '$nombre',
            '$curp',
            '$telefono',
            '$email',
            '$evento',
            '$checkin'
        )";
    $resultado = $conn->query($sql);
    
    if($resultado){
        echo json_encode(array('success'=>1));
    }
    else{
        echo json_encode(array('success'=>0));
    }
?>