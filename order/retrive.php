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

		$uid = $decoded->id;
		
		$sql = "select * from orders where uid = '{$uid}'";
		$result = $conn->query($sql);
		echo "[";
		while ($row = $result->fetch_assoc()) {
			$oid = $row['id'];
			$date = $row['odate'];
			$order = $row['theorder'];
			$cost = $row['cost'];
			$address = $row['address'];
			echo '{
							"oid": "'.$oid.'",
							"date": "'.$date.'",
							"order": "'.$order.'",
							"cost": "'.$cost.'",
							"address": "'.$address.'"
						},';
		}
		echo "]";
	}
?>