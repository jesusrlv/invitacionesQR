<?php 
require('conn.php');
sleep(1);
if (isset($_POST)) {
    $username = (string)$_POST['username'];
 
    $result = $conn->query(
        "SELECT * FROM invitacion WHERE curp = '$username'"
    );
    
    if ($result->num_rows > 0) {
        echo '
        <span><small class="text-danger">Usuario registrado anteriormente </small><span>
        ';

    } else {
        echo '
        <span><small class="text-primary">Usuario válido</small><span>
        ';
    }
}

?>