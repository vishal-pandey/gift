<?php
	include './config.php';
	$sql = "drop table user";
	// $conn->query($sql);

	$sql = "create table user(id varchar(15) primary key, name varchar(250), mobile bigint(10), email varchar(500), address text, password varchar(33))"; 
	// $conn->query($sql);

	$sql = "create table cart(id varchar(15), value text)";
	// $conn->query($sql);

	$sql = "create table order(id varchar(15) primary key, uid varchar(15), odate date, theorder text, cost varchar(10)";
	$conn->query($sql);
?>