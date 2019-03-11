<?php
	
	require "vendor/autoload.php";
	
	$texts = new App\SiteContainTextManager();
	$allTexts = $texts->getAllText();
	
	var_dump($allTexts);

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Percocoffre</title>
		
		<!-- CSS  -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="node_modules/materialize-css/dist/css/materialize.css" type="text/css" rel="stylesheet"
		      media="screen,projection"/>
		<link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>
	<body>
		<nav class="white" role="navigation">
			<div class="nav-wrapper container">
				<a id="logo-container" href="#" class="brand-logo">Logo</a>
				<ul class="right hide-on-med-and-down">
					<li><a href="#contact">Contact</a></li>
				</ul>
				
				<ul id="nav-mobile" class="sidenav">
					<li><a href="#contact">Contact</a></li>
				</ul>
				<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			</div>
		</nav>
		
		<div id="index-banner" class="parallax-container">
			<div class="section no-pad-bot">
				<div class="container">
					<br><br>
					<h1 class="header center teal-text text-lighten-2"><?= $allTexts->getTitle() ?></h1>
					<div class="row center">
						<a href="#contact" id="download-button"
						   class="btn-large waves-effect waves-light teal lighten-1">Contact</a>
					</div>
					<br><br>
				
				</div>
			</div>
			<div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
		</div>
		
		
		<div class="container">
			<div class="section">
				
				<!--   Icon Section   -->
				<div class="row">
					<div class="col s12 m4">
						<div class="icon-block">
							<h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
							<h5 class="center">Speeds up development</h5>
							
							<p class="light"><?= $allTexts->getTextpres1() ?></p>
						</div>
					</div>
					
					<div class="col s12 m4">
						<div class="icon-block">
							<h2 class="center brown-text"><i class="material-icons">group</i></h2>
							<h5 class="center">User Experience Focused</h5>
							
							<p class="light"><?= $allTexts->getTextpres2() ?></p>
						</div>
					</div>
					
					<div class="col s12 m4">
						<div class="icon-block">
							<h2 class="center brown-text"><i class="material-icons">settings</i></h2>
							<h5 class="center">Easy to work with</h5>
							
							<p class="light"><?= $allTexts->getTextpres3() ?></p>
						</div>
					</div>
				</div>
			
			</div>
		</div>
		
		
		<div class="parallax-container valign-wrapper">
			<div class="section no-pad-bot">
				<div class="container">
					<div class="row center">
						<h5 class="header col s12 light">A modern responsive front-end framework based on Material
						                                 Design</h5>
					</div>
				</div>
			</div>
			<div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
		</div>
		
		<div class="container" id="contact">
			<div class="section">
				<div class="row">
					<div class="col s12 center">
						<h3><i class="mdi-content-send brown-text"></i></h3>
						<h4>Contact</h4>
						<p class="left-align light"><?= $allTexts->getContactus() ?></p>
					</div>
				</div>
			
			</div>
		</div>
		
		
		<div class="parallax-container valign-wrapper"><!--
			<div class="section no-pad-bot">
				<div class="container">
					<div class="row center">
						<h5 class="header col s12 light">A modern responsive front-end framework based on Material
						                                 Design</h5>
					</div>
				</div>
			</div>-->
			<div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
		</div>
		
		<footer class="page-footer teal">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">Company Bio</h5>
						<p class="grey-text text-lighten-4"><?= $allTexts->getBio() ?></p>
					
					
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					Made by <a class="brown-text text-lighten-3" href="http://thomastartas.tk">Thomas TARTAS</a>
				</div>
			</div>
		</footer>
		
		
		<!--  Scripts-->
		<script src="node_modules/jquery/dist/jquery.min.js"></script>
		<script src="node_modules/materialize-css/dist/js/materialize.js"></script>
		<script src="assets/js/init.js"></script>
	
	</body>
</html>
