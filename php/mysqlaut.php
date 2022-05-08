<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'farmvest_user';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection faild: " .mysqli_connect_error());
}

else
	//echo "Connection succesfully!";

?>