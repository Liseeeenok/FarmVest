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
<?php
	require_once('php_admin/give_arr_card.php');
?>
<?php require_once('admin_heder.php'); ?>
<main class="container_main">
	<div class="intro_builder">Home page</div>
	<div class="accordion_body">
		<div class="accordion">
			<form action="php_admin/out_intro.php" class="text_main_intro" method="post">
				<div class="container_ac">
					<div class="label">Intro</div>
					<div class="content">
						<hr>
						<div class="main_intro">
							<div class="text_main">Main Intro:</div>
							<textarea name="text_main_intro" id="main_inf" type="text" cols="115" rows="5">
								<?=$arr_intro['main_intro'];?>
							</textarea>
						<hr>
							<div class="text_main">Description Intro:</div>
							<textarea name="text_description_intro" id="description" type="text" cols="115" rows="5">
								<?=$arr_intro['description_intro'];?>
							</textarea>

							<input type="submit" class="otpr" value="Save changes">
						</div>
					</div>
				</div>
			<hr>
				<?php
					for ($i=1;$i<=$index;$i++){
						require('php_admin/card.php');
					}
				?>
				<div class="container_ac">
					<div class="label">Comments</div>
					<div class="content">
						<hr>
						<div class="main_intro">
							<div class="text_main">Main Comments:</div>
							<textarea name="text_main_comments" id="main_inf" type="text" cols="115" rows="5">
								<?=$arr_comments['main_intro'];?>
							</textarea>
						<hr>
							<div class="text_main">Description Comments:</div>
							<textarea name="text_description_comments" id="description" type="text" cols="115" rows="5">
								<?=$arr_comments['description_intro'];?>
							</textarea>

							<input type="submit" class="otpr" value="Save changes">
						</div>
					</div>
				</div>
				<!--<input type="submit" class="otpr" value="Save all changes">-->
			</form>
		</div>
	</div>
	<div style="margin-top: 2vw;"></div>
</main>
<script src="../js/tinymce/js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
<script src="js_admin/script_tiny.js"></script>
<script src="js_admin/script_builder_main.js"></script>
<?php require_once('admin_footer.php'); ?>