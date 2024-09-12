<?php 
require('conn.php');
// sleep(1);
if (isset($_POST)) {
    $username = (string)$_POST['username'];
 
    $result = $conn->query(
        "SELECT * FROM invitacion WHERE email = '$username'"
    );
    
    if ($result->num_rows > 0) {
        echo '
        <span class="badge text-bg-danger"><small><i class="bi bi-x-circle-fill"></i> Usuario registrado anteriormente </small><span>
        <script>
            document.getElementById("registroBtn").disabled=true;
           Swal.fire({
                icon: \'error\',
                title: \'Error\',
                html: \'Usuario registrado anteriormente\',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
        ';

    } else {
        echo '
        <span class="badge text-bg-primary"><small><i class="bi bi-check-circle-fill"></i> Usuario disponible</small><span> 
        <script>
            document.getElementById("registroBtn").disabled=false;
            Swal.fire({
                icon: \'success\',
                title: \'Disponible\',
                html: \'Usuario disponible\',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
        ';
    }
}

?>