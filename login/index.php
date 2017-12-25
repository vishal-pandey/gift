<?php
	// header('Content-Type: application/json');
	$_POST = json_decode(file_get_contents("php://input"));
	echo $_POST['mobile'];
	echo "string";
	echo $_POST['pwd'];
	echo key($_POST);
?>