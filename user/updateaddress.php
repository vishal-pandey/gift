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
		$address = $obj->address;
		$sql = "update user set address = '{$address}' where id = '{$uid}'";
		$conn->query($sql);


		// Return new token 
		// $sql = "select * from user where uid = '{$uid}'";
		// $result = $conn->query($sql);
		// $row = $result->fetch_assoc();
		// $key = "Vishalisgre8";
		// $token = array(
		// 		"id" => $row['id'],
		//     "name" => $row['name'],
		//     "email" => $row['email'],
		//     "address" =>$row['address'],
		//     "mobile" =>$row['mobile'],
		// );
		// $jwt = JWT::encode($token, $key);
		// echo '{ "key": "success","value": "'.$jwt.'" }';
	}
?>