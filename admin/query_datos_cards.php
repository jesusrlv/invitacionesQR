<?php
include('conn.php');

$sql = "SELECT 
            (SELECT COUNT(*) FROM invitacion) AS total_invitaciones,
            (SELECT COUNT(*) FROM invitacion WHERE checkin = 1) AS total_checkin,
            (SELECT COUNT(*) FROM invitacion WHERE checkin = 0) AS total_no_registrados
        ";
$result = $conn->query($sql);
$data = array();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $data[] = array(
        'total_invitaciones' => $row['total_invitaciones'],
        'total_checkin' => $row['total_checkin'],
        'total_no_registrados' => $row['total_no_registrados']
    );
}
echo json_encode($data);
$conn->close();
?>