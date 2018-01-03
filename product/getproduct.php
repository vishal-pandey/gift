<?php
	include '../config.php';

	date_default_timezone_set("Asia/Kolkata");

	$json = file_get_contents("php://input");
	if ($json) {
		$obj = json_decode($json);

		$cid = $obj->cid;

		$sql = "select * from category where id = {$cid}";
		$result = $conn->query($sql);

		echo "[";
			while($row = $result->fetch_assoc()){
				$id = $row['id'];
				$name = $row['name'];
				echo '{
								"id": "'.$id.'",
								"name": "'.$name.'"
							},';
			}
		echo "{}]";

		// $sql = "insert into review (id, pid, rdate, name, email, comment, rating, status) values ('{$id}','{$pid}','{$rdate}','{$name}','{$email}','{$comment}','{$rating}','{$status}')";

		// if($conn->query($sql)){
		// 	echo "success";
		// }
	}
?>