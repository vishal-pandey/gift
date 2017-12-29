<?php
	include '../config.php';

	date_default_timezone_set("Asia/Kolkata");

	$json = file_get_contents("php://input");
	if ($json) {
		$obj = json_decode($json);
		
		$pid = $obj->pid;
		$status = 'w';

		$sql = "select * from review where pid = '{$pid}' and status = 'w'";
		$result = $conn->query($sql);

		echo "[";
		while($row = $result->fetch_assoc()){
			$rdate = $row['rdate'];
			$name = $row['name'];
			$comment = $row['comment'];
			$rating = $row['rating'];
			echo '{
							"rdate": "'.$rdate}.'",
							"name": "'.$name.'",
							"comment": "'.$comment.'",
							"rating": "'.$rating.'",
						},';
		}
		echo "{}]";

		// $sql = "insert into review (id, pid, rdate, name, email, comment, rating, status) values ('{$id}','{$pid}','{$rdate}','{$name}','{$email}','{$comment}','{$rating}','{$status}')";

		// if($conn->query($sql)){
		// 	echo "success";
		// }
	}
?>