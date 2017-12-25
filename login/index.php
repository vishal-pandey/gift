<?php 
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST'); 
	header('Access-Control-Allow-Headers: X-PINGARUNER');
?>
<?php
	session_start();
	echo $_POST['mobile'];
	echo $_POST['pwd'];
?>
{
	"mobile": 9717130893,
	"pwd": "thisisPassword"
}
