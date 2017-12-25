<?php
require './vendor/autoload.php';

use \Firebase\JWT\JWT;

$key = "example_key";
$token = array(
    "iss" => "http://example.org",
    "aud" => "http://example.com",
    "iat" => 1356999524,
    "nbf" => 1357000000
);


$jwt = JWT::encode($token, $key);
$decoded = JWT::decode($jwt, $key, array('HS256'));

print_r($decoded);
print_r($jwt);
/*
 NOTE: This will now be an object instead of an associative array. To get
 an associative array, you will need to cast it as such:
*/

$decoded_array = (array) $decoded;


JWT::$leeway = 60; // $leeway in seconds
$decoded = JWT::decode($jwt, $key, array('HS256'));

?>