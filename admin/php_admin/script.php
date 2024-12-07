<?php
	require_once('../../php/mysqlaut.php');
	if (isset($_POST['check' . $_GET['id']])){
		$testov = '1';
	} else {
		$testov = '0';
	}
	$id = $_GET['id'];
	$row = "UPDATE comments set condit = '$testov' WHERE id = '$id'";
	mysqli_query($conn, $row);