<?php
 include "../config.php";
 $json = file_get_contents("php://input");
 if ($json) {
		$obj = json_decode($json);
		$id = uniqid("u_");
		$name = $obj->name;
		$mobile = $obj->mobile;
		$email = $obj->email;
		$password = $obj->password;
		$sql = "insert into user (id, name, mobile, email, password) VALUES ('{$id}','{$name}','{$mobile}','{$email}','{$password}')";
		if($conn->query($sql)){
			echo "success";
		}
	}
?>