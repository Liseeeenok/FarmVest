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
	<div class="intro">Page management</div>
	<table class="table_pages">
	<tr class="num_title">
		<th><div class="title_pages">Страницы сайта FarmVest</div></th>
	</tr>
	<tr class="num_pages">
		<td><a href="builder_main.php" class="text_pages">Home</a></td>
	</tr>
	<tr class="num_pages">
		<td><a href="" class="text_pages">About</a></td>
	</tr>
	<tr class="num_pages">
		<td><a href="" class="text_pages">Features</a></td>
	</tr>
	<tr class="num_pages">
		<td><a href="" class="text_pages">How it work</a></td>
	</tr>
	<tr class="num_pages">
		<td><a href="" class="text_pages">Дополнительная строка</a></td>
	</tr>
	</table>
</main>
<?php require_once('admin_footer.php'); ?>