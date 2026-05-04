<?php
    require('conn.php');

    $texto = $_POST['id'];
    $sql = "SELECT COUNT(*) AS total FROM invitacion WHERE tipoInvitacion = '$texto'";
    $resultado = $conn->query($sql);
    $row = $resultado->fetch_assoc();
    $total = $row['total'];


    $sql2 = "SELECT * FROM lista_invitados WHERE nombre = '$texto'";
    $resultado2 = $conn->query($sql2);
    $row2 = $resultado2->fetch_assoc();
    $limite = $row2['cantidad'];

    if($total >= $limite){
        echo json_encode(array('success' => 1));
    }
    else{
        $num = $limite - $total;
        echo json_encode(array(
            'success' => 0,
            'num' => $num
        ));
    }
?>