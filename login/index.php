<?php
	use \Firebase\JWT\JWT;
	require '../vendor/autoload.php';
	include '../config.php';
	
	$json = file_get_contents("php://input");
	if ($json) {
		$obj = json_decode($json);
		$mobile = $obj->mobile;
		$password = $obj->password;
		$sql = "select * from user where mobile = '{$mobile}'";
		$result = $conn->query($sql);
		if ($result->num_rows >0) {
			$row = $result->fetch_assoc();
			if ($row['password'] == $password) {
				echo "success";
				$key = "Vishalisgre8";
				$token = array(
				    "name" => $row['name'],
				    "email" => $row['email'],
				    "address" =>$row['address']
				);
					$jwt = JWT::encode($token, $key);

				echo "{key: 'success',value: '{$jwt}'}";


				// $decoded = JWT::decode($jwt, $key, array('HS256'));
				// print_r($jwt);
			}else{
				echo "{key: 'Password Do Not match','value': 'null'}";
			}
		}else{
			echo "{key: 'InValid UserName',value: 'null'}";
		}
	}
?>