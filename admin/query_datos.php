<?php
include('conn.php');

$sql = "SELECT 
    invitacion.tipoInvitacion, 
    lista_invitados.color as color, 
    SUM(CASE WHEN invitacion.checkin = 1 THEN 1 ELSE 0 END) AS checkin,
    SUM(CASE WHEN invitacion.checkin = 0 THEN 1 ELSE 0 END) AS no_registrados,
    COUNT(*) AS num
FROM invitacion 
INNER JOIN lista_invitados ON invitacion.tipoInvitacion = lista_invitados.nombre 
GROUP BY invitacion.tipoInvitacion, lista_invitados.color";

$result = $conn->query($sql);
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);
$conn->close();
?>