<?php
    include('conn.php');

    $sql = "SELECT * FROM municipio order by id asc";
    $result = $conn->query($sql);
    echo '
    <option value="" selected>Selecciona municipio ...</option>
    ';
    while($row = $result->fetch_assoc()){
        echo '<option value="'.$row['municipio'].'">'.$row['municipio'].'</option>';
    }

?>