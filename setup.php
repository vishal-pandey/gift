<?php
	include './config.php';
	$sql = "drop table user";
	$conn->query($sql);

	$sql = "create table user(id varchar(15) primary key, name varchar(250), mobile bigint(10), email varchar(500), address text)"; 
	$conn->query($sql);
?>