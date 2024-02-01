<?php
$user = "dwess1234";
$password = "test1234.";
$server = "remotehost.es";
$database = "dwesdatabase";

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}
