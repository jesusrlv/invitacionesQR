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
        <span class="badge text-bg-danger"><small><i class="bi bi-x-circle-fill"></i> Usuario registrado anteriormente </small><span>
        ';

    } else {
        echo '
        <span class="badge text-bg-primary"><small><i class="bi bi-check-circle-fill"></i> Usuario no registrado anteriormente</small><span> 
        ';
    }
}

?>