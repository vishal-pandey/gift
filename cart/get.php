<?php
	use \Firebase\JWT\JWT;
	require '../vendor/autoload.php';
	include '../config.php';


	$json = file_get_contents("php://input");
	if ($json) {
		$obj = json_decode($json);
		$key = "Vishalisgre8";
		$jwt = $obj->token;
		$decoded = JWT::decode($jwt, $key, array('HS256'));
		$uid = $decoded->id;
		$sql = "select value from cart where id = '{$uid}'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		echo $row['value'];
	}
?>