<?php 
require('conn.php');
sleep(1);
if (isset($_POST)) {
    $username = (string)$_POST['username'];
 
    $result = $conn->query(
        "SELECT * FROM invitacion WHERE email = '$username'"
    );

    
    if ($result->num_rows > 0) {
        $rowCURP = $result->fetch_assoc();
        $curp = $rowCURP['email'];
        echo json_encode(array(
            'curp' => $curp,
        'success' => 1));

    } else {
        echo json_encode(array(
        'success' => 0));
    }
}

?>