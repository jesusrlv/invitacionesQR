<?php
include('conn.php');
session_start();

$usuario=$_POST['usr'];
$pwd=$_POST['pwd'];
$query="SELECT * FROM usr WHERE user='$usuario' AND pwd='$pwd'";
$proceso=$conn->query($query);
$filas = $proceso->num_rows;

if ($filas == 1) {
            $row = $proceso->fetch_assoc();
            $_SESSION['id']=$row['id'];
            $_SESSION['usr']=$row['user'];
            $_SESSION['privilegio']=$row['perfil'];
            echo json_encode(array(
                'success' => 1,
                'perfil' => $row['perfil']
            ));
        }      
    else if ($filas == 0){
        echo json_encode(array(
            'success' => 0,
            'error' => $conn->error
        ));
    }
?>