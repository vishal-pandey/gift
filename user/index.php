<?php
	$some_name = session_name("some_name");
	session_set_cookie_params(0, '/', 'localhost:4200');
	session_start();
	// $_SESSION['user']="vishal";
	if (isset($_SESSION['user'])) {
		echo $_SESSION['user'];
	}else{
		echo "notlogged";
	}
?>