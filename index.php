<?php
	
	require "vendor/autoload.php";
	
	$texts = new App\SiteContainTextManager();
	$allTexts = $texts->getAllText();

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
		<link href="assets/css/FrameWork.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>
	<body>
		<nav class="white" role="navigation">
			<div class="nav-wrapper container">
				<a id="logo-container" href="#" class="brand-logo"><?= $allTexts->getTitle() ?></a>
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
			<div class="parallax"><img src="assets/img/background1.jpg" alt="Unsplashed background img 1"></div>
		</div>
		
		
		<div class="container">
			<div class="section">
				
				<!--   Icon Section   -->
				<div class="row">
					<div class="col s12 m4">
						<div class="icon-block">
							<h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
							<h5 class="center"><?= $allTexts->getTitlepres1() ?></h5>
							
							<p class="light"><?= $allTexts->getTextpres1() ?></p>
						</div>
					</div>
					
					<div class="col s12 m4">
						<div class="icon-block">
							<h2 class="center brown-text"><i class="material-icons">group</i></h2>
							<h5 class="center"><?= $allTexts->getTitlepres2() ?></h5>
							
							<p class="light"><?= $allTexts->getTextpres2() ?></p>
						</div>
					</div>
					
					<div class="col s12 m4">
						<div class="icon-block">
							<h2 class="center brown-text"><i class="material-icons">settings</i></h2>
							<h5 class="center"><?= $allTexts->getTitlepres3() ?></h5>
							
							<p class="light"><?= $allTexts->getTextpres3() ?></p>
						</div>
					</div>
				</div>
			
			</div>
		</div>
		
		
		<div class="parallax-container valign-wrapper">
			<div class="parallax"><img src="assets/img/background2.jpg" alt="Unsplashed background img 2"></div>
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
				
				<div class="row">
					<div class="col s12 m6 l6 xl6 margin-auto">
						<form method="post" id="sendMail">
							<label for="telephone">Téléphone</label>
							<input id="telephone" name="telephone" type="tel" placeholder="téléphone">
							
							<label for="email">Email</label>
							<input id="email" name="email" type="email" placeholder="email" required>
							
							<label for="message">Votre message</label>
							<textarea style="height: 150px;" id="message" name="message" placeholder="Votre Message...."></textarea>
							
							<input style="display: block; margin-top: 10px !important;" class="margin-auto" type="button" value="Envoyer" onclick="requestSendMail(readDataSendMail)">
						</form>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="parallax-container valign-wrapper">
			<div class="parallax"><img src="assets/img/background3.jpg" alt="Unsplashed background img 3"></div>
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
					Developpé par <a class="brown-text text-lighten-3" href="http://thomastartas.tk" target="_blank">Thomas
					                                                                                                 TARTAS</a>
				</div>
			</div>
		</footer>
		
		
		<!--  Scripts-->
		<script src="node_modules/jquery/dist/jquery.min.js"></script>
		<script src="node_modules/materialize-css/dist/js/materialize.js"></script>
		<script src="assets/js/init.js"></script>
		<script src="ajax/oXHR.js"></script>
		<script src="ajax/ajax.js"></script>
	
	</body>
</html>
