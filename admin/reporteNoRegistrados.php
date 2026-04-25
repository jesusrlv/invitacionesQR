<?php
    header("Pragma: public");
    header("Expires: 0");
    $filename = "reporte_no_registrados.xls";
    header("Content-type: application/x-msdownload");
    header('Content-Type: text/html; charset=UTF-8');
    header("Content-Disposition: attachment; filename=$filename");
    header("Pragma: no-cache");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    include('conn.php');

    $sql = "SELECT * FROM invitacion WHERE checkin IS NULL OR checkin = '' OR checkin = 0 ORDER BY id ASC";
    $resultadoSQL = $conn -> query($sql);

    echo'
    <table>
        <tr>
           <th>#</th>
            <th>Nombre</th>
            <th>Tipo invitación</th>
            <th>municipio</th>
            <th>Edad</th>
            <th>Email</th>
        </tr>
    ';
    $x=0;
    while($rowSQL = $resultadoSQL->fetch_assoc()){
        $x++;
        echo '
        <tr>
            <td>'.$x.'</td>
            <td>'.$rowSQL['nombre'].'</td>
            <td>'.strtoupper($rowSQL['tipoInvitacion']).'</td>
            <td>'.$rowSQL['municipio'].'</td>
            <td>'.$rowSQL['edad'].'</td>
            <td>'.$rowSQL['email'].'</td>
        </tr>
        ';
    }

    echo'
    </table>
    ';

?>