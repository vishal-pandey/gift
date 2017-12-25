<?php
	$json = file_get_contents("php://input");
	if ($json) {
		$obj = json_decode($json);
		if ($obj->mobile == "9717130893" && $obj->pwd == "Vishal@123") {
			echo "success";
		}else{
			echo "fail";
		}
	}
	
?>