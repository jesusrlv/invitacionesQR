<?php
    header("Pragma: public");
    header("Expires: 0");
    $filename = "reporte_registrados.xls";
    header("Content-type: application/x-msdownload");
    header('Content-Type: text/html; charset=UTF-8');
    header("Content-Disposition: attachment; filename=$filename");
    header("Pragma: no-cache");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    include('conn.php');

    $sql = "SELECT * FROM invitacion WHERE checkin = 1 ORDER BY id ASC";
    $resultadoSQL = $conn -> query($sql);

    echo'
    <table>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>CURP</th>
            <th>Teléfono</th>
            <th>email</th>
        </tr>
    ';
    $x=0;
    while($rowSQL = $resultadoSQL->fetch_assoc()){
        $x++;
        echo '
        <tr>
            <td>'.$x.'</td>
            <td>'.utf8_decode($rowSQL['nombre']).'</td>
            <td>'.strtoupper($rowSQL['curp']).'</td>
            <td>'.$rowSQL['telefono'].'</td>
            <td>'.$rowSQL['email'].'</td>
        </tr>
        ';
    }

    echo'
    </table>
    ';

?>