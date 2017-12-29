<?php
	include '../config.php';

	date_default_timezone_set("Asia/Kolkata");

	$json = file_get_contents("php://input");
	if ($json) {
		$obj = json_decode($json);
		
		$id = uniqid("r_");
		$pid = $obj->pid;
		$rdate = date("Y-m-d H:i:s");
		$name = $obj->name;
		$email = $obj->email;
		$comment = $obj->comment;
		$rating = $obj->rating;
		$status = "w";

		$sql = "insert into review (id, pid, rdate, name, email, comment, rating, status) values ('{$id}','{$pid}','{$rdate}','{$name}','{$email}','{$comment}','{$rating}','{$status}')";

		echo $sql;

		if($conn->query($sql)){
			echo "success";
		}
	}
?>