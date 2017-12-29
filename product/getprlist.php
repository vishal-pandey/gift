<?php
	include '../config.php';

	date_default_timezone_set("Asia/Kolkata");

	$json = file_get_contents("php://input");
	if ($json) {
		$obj = json_decode($json);

		$cname = $obj->cname;

		$sql = "select * from category where name = '{$cname}'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		
		$cid = $row['id'];

		$sql = "select * from product where cid = '{$cid}'";
		$result = $conn->query($sql);

		echo "[";
		while($row = $result->fetch_assoc()){
			$pid = $row['id'];
			$cid = $row['cid'];
			$name = $row['name'];
			$price = $row['price'];
			$sprice = $row['sprice'];
			$description = $row['description'];
			$qty = $row['qty'];
	
			echo '{
							"pid: "'.$pid.'"
							"cid: "'.$cid.'"
							"name: "'.$name.'"
							"price: "'.$price.'"
							"sprice: "'.$sprice.'"
							"description: "'.$description.'"
							"qty: "'.$qty.'"
						},';
		}
		echo "{}]";

		// $sql = "insert into review (id, pid, rdate, name, email, comment, rating, status) values ('{$id}','{$pid}','{$rdate}','{$name}','{$email}','{$comment}','{$rating}','{$status}')";

		// if($conn->query($sql)){
		// 	echo "success";
		// }
	}
?>