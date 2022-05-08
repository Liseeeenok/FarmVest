<?php require_once "php/mysqlaut.php"; ?>
<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>FarmVest</title>
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Spartan:wght@400;600;700&display=swap" rel="stylesheet">
	<link href="fontawesome/css/all.css" rel="stylesheet">
</head>
<body>
<header class="header" id="header">
	<div class="container">
		<nav class="nav" id="nav">
			<a class="title" id="title" href="index.php">FarmVest</a>
			<div class="burger" id="burger">
				<span></span>
			</div>
			<div class="menu" id="menu">
				<a class="link" href="index.php">Home</a>
				<a class="link" href="about.php">About</a>
				<a class="link" href="features.php">Features</a>
				<a class="link" href="howitworks.php">How it works</a>
			</div>
			<div class="authorization" id="author">
				<?php
				if(!isset($_SESSION['user'])) 
				{
					require_once "sign_get.php";
				} else {
					require_once "user_ex.php";
				}
				?>
			</div>
		</nav>
		<div class="design">
			<div class="circle"></div>
			<div class="circle2"></div>
		</div>			
	</div>
</header>
