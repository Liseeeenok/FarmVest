<?php require_once('../php/mysqlaut.php'); ?>
<?php session_start(); ?>
<?php
if(!isset($_SESSION['user'])) {
	header('Location: ../index.php');
} 
else {
	if($_SESSION['user']['level'] == 0)
		header('Location: ../index.php');
	}
?>
<?php require_once('admin_heder.php'); ?>
<main class="container_main">
	<div class="intro">It's Users pages</div>
</main>
<?php require_once('admin_footer.php'); ?>