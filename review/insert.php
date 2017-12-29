<?php
	include '../config.php';

	date_default_timezone_set("Asia/Kolkata");

	$json = file_get_contents("php://input");
	if ($json) {
		$obj = json_decode($json);
		
		$id = uniqid("r_");
		$pid = $decoded->pid;
		$rdate = date("Y-m-d H:i:s");
		$name = $decoded->name;
		$email = $decoded->email;
		$comment = $decoded->comment;
		$rating = $decoded->rating;
		$status = "w";

		$sql = "insert into review values ('{$id}','{$pid}','{$rdate}','{$name}','{$name}','{$email}','{$comment}','{$rating}','{$status}')";
		if($conn->query($sql)){
			echo "success";
		}
	}
?>