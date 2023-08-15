<?php 
require('conn.php');
    $curp = $_POST['curp'];
    $result = $conn->query(
        "SELECT * FROM invitacion WHERE curp = '$curp'"
    );
    
    if ($result->num_rows > 0) {
        echo json_encode(array(
            'success' => 1
        ));

    } else {
        echo json_encode(array(
            'success' => 0
        ));
    }

?>