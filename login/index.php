<?php
	$some_name = session_name("some_name");
	session_set_cookie_params(0, '/', 'localhost');
	session_start();
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
				$_SESSION['user'] = $row['name'];
			}else{
				echo "Password Do Not Match";
			}
		}else{
			echo "InValid User Name";
		}
		// if ($obj->mobile == "9717130893" && $obj->pwd == "Vishal@123") {
		// 	echo "success";
		// }else{
		// 	echo "fail";
		// }
	}
	
?>