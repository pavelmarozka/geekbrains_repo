<?php
declare(strict_types=1);

ini_set('error_reporting', (string)E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

$h1 = "New Automation Tool for Your";
$title = "Главная страница";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> <?php $title ?> </title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<!-- меню -->
	
	<div class="top">
		<div class="container nav">
			<div>
				<a class="nav_item" href="index.html"><img src="img/nav_switch.svg" alt="nav"></a>
			</div>
			<div>
				<a class="nav_item" href="contacts.html"><img src="img/nav_p.svg" alt="contacts"></a>
			</div>
		</div>
		<div class="container top_box">
			<div class="top_info">
				<h1 class="top_heading"> <?php $h1 ?></h1>
				<p class="paragraf top_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus tristique vulputate ultrices ut mauris tellus at. Posuere sollicitudin odio tellus elit.</p>
				<a href="#" class="top_button">See Our Project</a>
			</div>
		</div>
	</div>
		
	<div class="what-we-do container">
		<h3 class="title_three">What we do to help our client grow in digital era</h3>
		<div class="card_section">
			<div class="card">
				<img class="img_card" src="img/card_one.png" alt="card_one">
				<h4 class="title_four">Make Your business To Be Better Famous In Internet</h4>
				<p class="paragraf">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="#" class="card_link">Learn more</a>
					<img class="arrow" src="img/arrow.svg" alt="arrow">
			</div>
			<div class="card">
				<img class="img_card" src="img/card_two.png" alt="card_two">
				<h4 class="title_four">Bring Technology To Your Comfrotable Home</h4>
					<p class="paragraf">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="#" class="card_link">Learn more</a>
					<img class="arrow" src="img/arrow.svg" alt="arrow">
			</div>
			<div class="card">
				<img class="img_card" src="img/card_three.png" alt="card_three">
				<h4 class="title_four">Build Your Digital Product That Suitable For Your Need</h4>
					<p class="paragraf">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="#" class="card_link">Learn more</a>
					<img class="arrow" src="img/arrow.svg" alt="arrow">
			</div>
		</div>
	</div>
	<div class="project container">
		<h3 class="title_three">Our Finished Project</h3>
		<p class="paragraf text_project">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
		<div class="project_item">
			<img class="project_img" src="img/project_one.jpg" alt="photo">
			<p class="project_text project_text_right">Smart Home Installation</p>
		</div>
		<div class="project_parents">
			<div class="project_item project_item_marg">
				<img class="project_img" src="img/project_two.jpg" alt="photo">
				<p class="project_text project_text_left">Sparklite App</p>
			</div>
			<div class="project_item">
				<img class="project_img" src="img/project_three.jpg" alt="photo">
				<p class="project_text project_text_left">Car-Rapetition App</p>
			</div>
		</div>
	</div>

<!-- футер -->
	<footer>
		<div class="footer_top container">
			<div class="footer_info">
				<h3 class="title_three title_three_footer">Intersted to woek <br>with our team?</h3>
				<p class="paragraf text_footer">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
			</div>
			<div class="footer_button">
				<a href="#" class="button_footer">Let’s Talk</a>
			</div>
		</div>
		<div class="footer_hr"></div>
		<div class="container">
			<div class="footer_list">
				<div class="paragraf adress footer_list_item ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
				<div class="paragraf phone footer_list_item">+7-812-7313-4321</div>
				<div class="paragraf email footer_list_item">hello.site@gmail.com</div>
			</div>
			<p class="paragraf copyright">&copy; 2021 All rights reserved.</p>
		</div>
	</footer>
</body>
</html>