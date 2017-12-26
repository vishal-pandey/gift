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
		$rpassword = $obj->rpassword;

		$sql1 = "select * from user where mobile = '{$mobile}'";
		$sql2 = "select * from user where email = '{$email}'";

		$result1 = $conn->query($sql1);
		$result2 = $conn->query($sql2);
		if (strlen($mobile) != 10) {
			echo "Enter a valid 10 digit mobile no";
		}
		else if ($result1->num_rows >0) {
			echo "This mobile is already registered";
		}else if ($result2->num_rows >0) {
			echo "This email is already registered";
		}else if($password != $rpassword){
			echo "Password Do not match";
		}else{
			$sql = "insert into user (id, name, mobile, email, password) VALUES ('{$id}','{$name}','{$mobile}','{$email}','{$password}')";
			if($conn->query($sql)){
				$sql = "insert into cart values('{$id}', '{}')";
				if($conn->query($sql)){
					echo "success";
				}
			}
		}
	}
?>