<?php
	include '../config.php';

	date_default_timezone_set("Asia/Kolkata");

	$json = file_get_contents("php://input");
	if ($json) {
		$obj = json_decode($json);

		$pname = $obj->pname;

		$sql = "select * from product where name = '{$pname}'";
		$result = $conn->query($sql);

		$row = $result->fetch_assoc();

		
		$pid = $row['id'];
		$cid = $row['cid'];
		$name = $row['name'];
		$price = $row['price'];
		$sprice = $row['sprice'];
		$description = $row['description'];
		$qty = $row['qty'];
	
		// echo "[";
			echo '{
							"pid": "'.$pid.'",
							"cid": "'.$cid.'",
							"name": "'.$name.'",
							"price": "'.$price.'",
							"sprice": "'.$sprice.'",
							"description": "'.$description.'",
							"qty": "'.$qty.'"
						}';
		// echo "]";
	}
?>