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
		echo $id;
		$uid = $decoded->id;
		echo $uid;
		$odate = date("Y-m-d H:i:s");
		echo $odate;
		$theorder = $obj->order;
		echo $theorder;
		$cost = $obj->cost;
		echo $cost;
		$sql = "insert into order values ('{$id}','{$uid}','{$odate}','{$theorder}','{$cost}')";
		echo $sql;
		if($conn->query($sql)){
			echo "success";
		}
	}
?>