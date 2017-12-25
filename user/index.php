<?php
	session_start();
	$_SESSION['user']="vishal";
	if (isset($_SESSION['user'])) {
		echo $_SESSION['user'];
	}else{
		echo "notlogged";
	}
?>