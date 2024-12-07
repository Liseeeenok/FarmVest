<footer class="footer">
	<div class="container3">
		<div class="info_footer">
			<div class="farm">
				<div class="title_footer">
					<img src="images/title_footer.png" alt="" class="img_footer">
					<div class="text_title_footer">FarmVest</div>
				</div>
				<div class="main_farm_footer">
						<span class="regular">High level experience in web design and development knowledge, producing quality work.</span>
				</div>
		   	</div>
			<div class="subscribe" style="<?php if(isset($_SESSION['user'])) echo('display: none;')?>">
				<div class="text_subscribe">
					<span class="regular">Subscribe to stay tuned for new web design and latest updates. Let's do it!</span>
				</div>
				<div class="get_email">
					<input type="email" class="email" id="email" placeholder="Enter your email" name="email">
					<button class="get2">Subscribe</button>
				</div>
			</div>
			<div class="follow">
				<div class="follow_us">
					<div class="title_follow">Follow us</div>
					<div class="icons_follow">
						<i class="fa-brands fa-instagram"></i>
						<i class="fa-brands fa-facebook"></i>
						<i class="fa-brands fa-twitter"></i>
					</div>
				</div>
				<div class="call_us">
					<div class="title_follow">Call us</div>
					<div class="phone">+2349123456789</div>
				</div>
			</div>
		</div>
		<div class="line_footer"></div>
		<div class="podpis">
			<div class="right">
				© 2021 All Rights Reserved
			</div>
			<div class="menu_podpis">
				<a class="point_menu" href="#">Privacy Policy</a>
				<a class="point_menu" href="#">Terms of Use</a>
				<a class="point_menu" href="#">Sales and Refunds</a>
				<a class="point_menu" href="#">Legal</a>
				<a class="point_menu" href="#">Site Map</a>
			</div>
		</div>
	</div>
</footer>
<script src="js/script.js"></script>
</body>
</html>