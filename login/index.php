<?php
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
				echo "succes";
			}
		}
		// if ($obj->mobile == "9717130893" && $obj->pwd == "Vishal@123") {
		// 	echo "success";
		// }else{
		// 	echo "fail";
		// }
	}
	
?>