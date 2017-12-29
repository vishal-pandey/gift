<?php
	include './config.php';
	$sql = "drop table user";
	// $conn->query($sql);

	$sql = "create table user(id varchar(15) primary key, name varchar(250), mobile bigint(10), email varchar(500), address text, password varchar(33))"; 
	// $conn->query($sql);

	$sql = "create table cart(id varchar(15), value text)";
	// $conn->query($sql);

	$sql = "create table orders(id varchar(15) primary key, uid varchar(15), odate datetime, theorder text, cost varchar(10), address text, status varchar(200))";
	// $conn->query($sql);

	$sql = "create table review(id varchar(15), pid varchar(500), rdate datetime, name varchar(500), email varchar(500), comment text, rating int(5), status varchar(50))";
	$conn->query($sql);



	// Category and Product setup
	$sql = "create table category(id varchar(15) primary key, name varchar(800))";
	$conn->query($sql);

	$sql = "create table product(id varchar(15) primary key, cid varchar(15), name varchar(800), price int(6), sprice int(6), description text, qty int(6), varient text)";
	$conn->query($sql);
	

?>