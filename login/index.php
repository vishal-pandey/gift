<?php
	// header('Content-Type: application/json');
	// $data = json_decode(file_get_contents("php://input"));
	$data = file_get_contents("php://input");
	$obh = json_decode($data);
	echo $obh;
	// echo $data['mobile'];
	// echo "string";
	// echo $data['pwd'];
	// echo key($_POST);
?>