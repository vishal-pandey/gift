<?php
	include './config.php';
	$sql = "create table user(id varchar(15), name varchar(250), mobile bigint(10), address text)";
	$conn->query($sql);
?>