<?php require_once "blocks/header.php"; ?>
<?php
	require_once('admin/php_admin/give_arr_card.php');
?>
<header class="header" id="header">
	<div class="container">
		<div class="intro" id="intro">
			<div class="intro_logo">
				<?=$arr_intro['main_intro'];?>
			</div>
			<div class="description_intro">
				<?=$arr_intro['description_intro'];?>
			</div>
		</div>
		<div class="get_email" style="<?php if(isset($_SESSION['user'])) echo('display: none;')?>">
			<input type="email" class="email" id="email" placeholder="Enter your email" name="email">
			<button class="get2">Get Started</button>
		</div>				
	</div>
</header>
<main class="main" id="main">
	<div class="container2">
		<div class="company">
			<img class="MarketWatch" src="images/MarketWatch.png"  alt="Упс">
			<img class="Forbes" src="images/Forbes.png"  alt="Упс">
			<img class="BusinessIns" src="images/BusinessInsider.png"  alt="Упс">
			<img class="Fidelity" src="images/Fidelity.png"  alt="Упс">
			<img class="Wired" src="images/Wired.png"  alt="Упс">
		</div>
		<div class="card_1" id="card_1">
			<div class="info_1">
				<div class="head_info_1">
					<?=$arr_card_1['main_intro'];?>
				</div>
				<div class="main_info_1">
					<?=$arr_card_1['description_intro'];?>
				</div>
				<div class="cards_info_1">
					<div class="card_1_info_1">
						<img src="css/image/phone.png" alt="" class="phone_1">
						<div class="text">
							<span class="bold"><?=$arr_card_1['title_1'];?></span>
							<span class="regular"><?=$arr_card_1['description_1'];?></span>
						</div>
					</div>
					<div class="card_1_info_1">
						<img src="css/image/human.png" alt="" class="phone_1">
						<div class="text">
							<span class="bold"><?=$arr_card_1['title_2'];?></span>
							<span class="regular"><?=$arr_card_1['description_2'];?></span>
						</div>
					</div>
					<div class="card_1_info_1">
						<img src="css/image/home.png" alt="" class="phone_1">
						<div class="text">
							<span class="bold"><?=$arr_card_1['title_3'];?></span>
							<span class="regular"><?=$arr_card_1['description_3'];?></span>
						</div>
					</div>
					<div class="card_1_info_1">
						<img src="css/image/dol.png" alt="Упс" class="phone_1">
						<div class="text">
							<span class="bold"><?=$arr_card_1['title_4'];?></span>
							<span class="regular"><?=$arr_card_1['description_4'];?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="image_1">
				<img src="images/Human_1.png" alt="Упс" class="Human_1">
			</div>
		</div>
		<div class="card_2" id="card_2">
			<div class="image_2">
				<img src="images/Human_2.png" alt="Упс" class="Human_2">
			</div>
				<div class="info_2">
				<div class="head_info_2">
					<?=$arr_card_2['main_intro'];?>
				</div>
				<div class="main_info_2">
					<?=$arr_card_2['description_intro'];?>
				</div>
				<div class="card_1_info_2">
					<details class="akkor_1" id="ac_1">
    					<summary class="akkor_2"><?=$arr_card_2['title_1'];?><span class="akkor_p" id="ac_p_1">+</span></summary>
    					<p class="regular_2"><?=$arr_card_2['description_1'];?></p>
					</details>
					<details class="akkor_1" id="ac_2">
    					<summary class="akkor_3"><?=$arr_card_2['title_2'];?><span class="akkor_p" id="ac_p_2">+</span></summary>
    					<p class="regular_2"><?=$arr_card_2['description_2'];?></p>
					</details>
					<details class="akkor_1" id="ac_3">
    					<summary class="akkor_3"><?=$arr_card_2['title_3'];?><span class="akkor_p" id="ac_p_3">+</span></summary>
    					<p class="regular_2"><?=$arr_card_2['description_3'];?></p>
					</details>
				</div>
			</div>
		</div>
		<div class="card_3" id="card_3">
			<div class="info_3" id="info_3">
				<div class="head_info_3">
					<?=$arr_card_3['main_intro'];?>
				</div>
				<div class="main_info_3">
					<?=$arr_card_3['description_intro'];?>
				</div>
				<div class="cards_info_3">
					<div class="card_1_info_3">
						<div class="number">1</div>
						<div class="text_2"><?=$arr_card_3['title_1'];?></div>
					</div>
					<div class="card_1_info_3">
						<div class="number">2</div>
						<div class="text_2"><?=$arr_card_3['title_2'];?></div>
					</div>
					<div class="card_1_info_3">
						<div class="number">3</div>
						<div class="text_2"><?=$arr_card_3['title_3'];?></div>
					</div>
					<div class="card_1_info_3">
						<div class="number">4</div>
						<div class="text_2"><?=$arr_card_3['title_4'];?></div>
					</div>
				</div>
				<div class="learn_2">
					<button class="learn">Learn More</button>
				</div>
			</div>
			<div class="image_3">
				<img src="images/Human_3.png" alt="" class="Human_3">
			</div>	
		</div>
		<div class="card_4" id="card_4">
			<div class="info_4" id="info_4">
				<div class="head_info_4">
					<?=$arr_comments['main_intro'];?>
				</div>
				<div class="main_info_4">
					<?=$arr_comments['description_intro'];?>
				</div>
			</div>
			<div class="slideshow-container" id="slid">
				<div class="cards_info_4" id="track">
				<?php
					$query = "SELECT * from `comments` WHERE condit = '1'";
					$result = mysqli_query($conn, $query);
					while($arr = mysqli_fetch_assoc($result)) {
						require('php/comment.php');
					}
				?>	
				</div>
			</div>
			<div class="view_all">
				<button class="learn" id="btn_prev">Previous</button>
				<button class="learn" style="margin-left: 1vw;" id="btn_next">Next</button>
			</div>
		</div>
		<div class="card_5">
			<div class="download">
				<div class="circle_download">
					<img class="circle_3"src="images/Ellipse 126.png" alt="">
					<img class="circle_4"src="images/Ellipse 125.png" alt="">
				</div>
				<div class="download_info">
						Download <span class="invest">FarmVest app</span> and invest in your future
				</div>
				<div class="download_icon">
					<div class="download_icon_1">
							<a href="#" title="Google Play"><img src="images/appstore.png" alt="" class="appstore"></a>
					</div>
					<div class="download_icon_1">
							<a href="#" title="Google Play"><img src="images/google.png" alt="" class="google_play"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
	require_once "blocks/footer.php";
?>