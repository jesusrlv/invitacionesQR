<?php
	require('conn.php');
	$reg = $_POST['reg'];
	$sql = "DELETE FROM invitacion WHERE id = '$reg'";
	$resultadoSQL = $conn->query($sql);

	if($resultadoSQL){
		echo json_encode(array(
			'success' => 1
		));
	}
	else{
		json_encode(array(
			'success' => 0
		));
	}
	

?>