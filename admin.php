<?php
	
	session_start();
	require "vendor/autoload.php";
	
	if(!isset($_SESSION['isLog'])) {
		header('Location: login.php');
	}
	
	$texts = new App\SiteContainTextManager();
	
	if(isset($_POST) && !empty($_POST)) {
		
		$contain = [];
		
		foreach($_POST as $key => $value) {
			$contain[$key] = $value;
		}
		
		$siteText = new App\SiteContainText($contain);
		
		if($texts->AcBlockManager($siteText)) {
			$script = "<script>M.toast({html: 'Site Mit à Jour !'});</script>";
			echo $script;
		} else {
			$script = "<script>M.toast({html: 'Une erreur est survenu, Reessayez !'});</script>";
			echo $script;
		}
	}
	
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
		<link href="assets/css/styleAdmin.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="assets/css/FrameWork.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>
	<body>
		<form method="post">
			<div id="index-banner" class="parallax-container">
				<div class="section no-pad-bot">
					<div class="container">
						<br><br>
						<h1 class="header center teal-text text-lighten-2">
							<label for="title">Modifier le Titre</label>
							<input style="color: white" id="title" name="title" type="text" value="<?= $allTexts->getTitle() ?>">
						</h1>
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
								<h5 class="center">
									<label for="titlepres1">Modifier le Titre</label>
									<input id="titlepres1" name="titlepres1" type="text"
									       value="<?= $allTexts->getTitlepres1() ?>">
								</h5>
								
								
								<label for="textpres1">Modifier le Texte</label>
								<input style="height: 150px;" id="textpres1" name="textpres1" type="text" value="<?= $allTexts->getTextpres1() ?>">
							</div>
						</div>
						
						<div class="col s12 m4">
							<div class="icon-block">
								<h2 class="center brown-text"><i class="material-icons">group</i></h2>
								<h5 class="center">
									<label for="titlepres2">Modifier le Titre</label>
									<input id="titlepres2" name="titlepres2" type="text"
									       value="<?= $allTexts->getTitlepres2() ?>">
								</h5>
								
								
								<label for="textpres2">Modifier le Texte</label>
								<input style="height: 150px;" id="textpres2" name="textpres2" type="text" value="<?= $allTexts->getTextpres2() ?>">
							</div>
						</div>
						
						<div class="col s12 m4">
							<div class="icon-block">
								<h2 class="center brown-text"><i class="material-icons">settings</i></h2>
								<h5 class="center">
									<label for="titlepres3">Modifier le Titre</label>
									<input id="titlepres3" name="titlepres3" type="text"
									       value="<?= $allTexts->getTitlepres3() ?>">
								</h5>
								
								
								<label for="textpres3">Modifier le Texte</label>
								<input style="height: 150px;" id="textpres3" name="textpres3" type="text" value="<?= $allTexts->getTextpres3() ?>">
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
							<label for="contactus">Modifier le Texte</label>
							<input style="height: 150px;" id="contactus" name="contactus" type="text" value="<?= $allTexts->getContactus() ?>">
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
							<label for="bio">Modifier le Texte</label>
							<input style="height: 150px; color: white;" id="bio" name="bio" type="text" value="<?= $allTexts->getBio() ?>">
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						Developpé par <a class="brown-text text-lighten-3" href="http://thomastartas.tk"
						                 target="_blank">Thomas
						                                 TARTAS</a>
					</div>
				</div>
			</footer>
			
			
			<div class="fixed-action-btn">
				<input type="submit" value="Modifier le Site"/>
			</div>
		
		</form>
		
		<!--  Scripts-->
		<script src="node_modules/jquery/dist/jquery.min.js"></script>
		<script src="node_modules/materialize-css/dist/js/materialize.js"></script>
		<script src="assets/js/init.js"></script>
		<script src="ajax/oXHR.js"></script>
		<script src="ajax/ajax.js"></script>
	
	</body>
</html>
