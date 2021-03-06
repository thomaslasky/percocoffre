<?php
	
	session_start();
	require "vendor/autoload.php";
	
	if(isset($_SESSION['isLog'])) {
		header("Location: admin.php");
	}
	
	if(isset($_POST) && !empty($_POST)) {
		
		$adminManager = new App\AdminManager();
		
		$values = [
			"pseudo"   => $_POST['pseudo'],
			"password" => $_POST['password'],
		];
		
		$admin = new App\Admin($values);
		
		if($adminManager->connexion($admin)) {
			$_SESSION['isLog'] = true;
			header('Location: admin.php');
		} else {
			echo "Pseudo ou Mot de Passe incorrect !";
		}
	}

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
		<link href="assets/css/styleLogin.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="assets/css/FrameWork.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		
		<script src="node_modules/jquery/dist/jquery.min.js"></script>
		<script src="node_modules/materialize-css/dist/js/materialize.js"></script>
	</head>
	
	<body class="row">
		<form method="post" class="col s12 m6 margin-auto">
			<label for="pseudo">Pseudo</label>
			<input id="pseudo" name="pseudo" type="text">
			
			<label for="password">Mot de Passe</label>
			<input id="password" name="password" type="password">
			
			<input class="submit margin-auto" type="submit" value="connexion">
		</form>
	</body>
</html>