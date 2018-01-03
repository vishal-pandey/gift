<?php
	include '../config.php';

	date_default_timezone_set("Asia/Kolkata");

	$json = file_get_contents("php://input");
	if ($json) {
		$obj = json_decode($json);

		$cid = $obj->cid;

		$sql = "select * from category where id = '{$cid}'";
		$result = $conn->query($sql);
		echo $sql;

		$row = $result->fetch_assoc();
		echo $row['name'];

		// $sql = "insert into review (id, pid, rdate, name, email, comment, rating, status) values ('{$id}','{$pid}','{$rdate}','{$name}','{$email}','{$comment}','{$rating}','{$status}')";

		// if($conn->query($sql)){
		// 	echo "success";
		// }
	}
?>