<?php
	include '../config.php';

	$sql = "select * from category";
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

?>