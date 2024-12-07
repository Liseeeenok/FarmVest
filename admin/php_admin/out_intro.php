<?php require_once('../../php/mysqlaut.php'); ?>
<?php session_start(); ?>
<?php
require_once('give_arr_card.php');

if (isset($_POST['text_main_intro'])) {
$text_main_intro = $_POST['text_main_intro'];
$row = "UPDATE intro set main_intro = '$text_main_intro' WHERE id = 1";
mysqli_query($conn, $row);
}

if (isset($_POST['text_description_intro'])) {
$text_description_intro = $_POST['text_description_intro'];
$row = "UPDATE intro set description_intro = '$text_description_intro' WHERE id = 1";
mysqli_query($conn, $row);
}

for($i=1;$i<=$index;$i++){
if(isset($_POST['title_card_' . $i])) {
	$title_card = $_POST['title_card_' . $i];
	$row = "UPDATE intro set main_intro = '$title_card' WHERE id = ($i + 2)";
	mysqli_query($conn, $row);
	}
if(isset($_POST['description_card_' . $i])) {
	$description_card = $_POST['description_card_' . $i];
	$row = "UPDATE intro set description_intro = '$description_card' WHERE id = ($i + 2)";
	mysqli_query($conn, $row);
	}
for($j=1;$j<=4;$j++){
	if(isset($_POST['title_' . $j.'_'.$i])) {
	$description_card = $_POST['title_' . $j.'_'.$i];
	$set = 'title_' . $j;
	$row = "UPDATE card set $set = '$description_card' WHERE id = ($i + 2)";
	mysqli_query($conn, $row);
	}
	if(isset($_POST['description_' . $j.'_'.$i])) {
	$description_card = $_POST['description_' . $j.'_'.$i];
	$set = 'description_' . $j;
	$row = "UPDATE card set $set = '$description_card' WHERE id = ($i + 2)";
	mysqli_query($conn, $row);
	}
}
}

if (isset($_POST['text_main_comments'])) {
$text_main_comments = $_POST['text_main_comments'];
$row = "UPDATE intro set main_intro = '$text_main_comments' WHERE id = 2";
mysqli_query($conn, $row);
}

if (isset($_POST['text_description_comments'])) {
$text_description_comments = $_POST['text_description_comments'];
$row = "UPDATE intro set description_intro = '$text_description_comments' WHERE id = 2";
mysqli_query($conn, $row);
}
//print_r($_POST);
header('Location: ../builder_main.php');