<!DOCTYPE html>
<html>
<head>
	<title>Aupair-Germany</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="header-top">
			<div class="mycontainer">
				<div class="row">
					<div class="col-lg-3">
						<div class="contact-info">
							<ul>
								<li><i class="flaticon-mail"></i><a href="#">info@edu.com</a></li>
								<li><i class="flaticon-telephone"></i><a href="#">+977 9819442667</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="header-highlight">
							<p><marquee>Lorem ipsum dolor sit amet, consectetur</marquee></p>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="social-icons">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube-square"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar">
			<div class="mycontainer">
				<div class="row">
					<div class="col-lg-3">
						<div class="logo">
							<a href="index.html"><img src="http://localhost/aupair/wp-content/uploads/2019/05/logo.png" alt="logo"></a>
						</div>
					</div>
					<div class="col-lg-9">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</div>
				</div>
			</div>
		</div>
	</header>