<?php
	use \Firebase\JWT\JWT;
	require '../vendor/autoload.php';
	include '../config.php';

	date_default_timezone_set("Asia/Kolkata");

	$json = file_get_contents("php://input");
	if ($json) {
		$obj = json_decode($json);
		$key = "Vishalisgre8";
		$jwt = $obj->token;
		$decoded = JWT::decode($jwt, $key, array('HS256'));

		$id = uniqid("o_");
		$uid = $decoded->id;
		$odate = date("Y-m-d H:i:s");
		$theorder = $obj->order;
		$cost = $obj->cost;
		$sql = "insert into order values ('{$id}','{$uid}','{$odate}','{$theorder}','{$cost}')";
		if($conn->query($sql)){
			echo "success";
		}
	}
?>