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

$query = "SELECT * from `comments`";
$result = mysqli_query($conn, $query);

?>
<?php require_once('admin_heder.php'); ?>
<main class="container_main">
	<div class="intro_com">Managing Comments</div>
	<form id="ajax_form">
		<table class="table_pages">
		<tr class="num_title">
			<th><div class="title_com">Condition</div></th>
			<th><div class="title_com">Name</div></th>
			<th><div class="title_com">Comment</div></th>
		</tr>
		<?php 
			while($arr = mysqli_fetch_assoc($result)) {
				require('php_admin/comment.php');
			}
		?>
		
		</table>
	</form>
</main>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="js_admin/script_comment.js"></script>
<?php require_once('admin_footer.php'); ?>