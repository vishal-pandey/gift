
<?php

	// header('Access-Control-Allow-Origin: *');
	// header('Access-Control-Allow-Methods: GET, POST, OPTION'); 
	// header('Access-Control-Allow-Headers: *');

	// header('Content-Type: application/json');
	// $data = json_decode(file_get_contents("php://input"));
	$data = file_get_contents("php://input");
	$obh = json_decode($data, TRUE);
	echo $obh;
	// echo $data['mobile'];
	// echo "string";
	// echo $data['pwd'];
	// echo key($_POST);
?>