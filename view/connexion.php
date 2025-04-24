<?php
require_once '../model/BDD_Manager.php';

$message_erreur = '';


if(isset($_POST['btnConnect'])) {


	if(isset($_POST['nom']) && $_POST['nom'] != '' &&
		isset($_POST['motdepasse']) && $_POST['motdepasse'] != '') {
		$message_erreur = connecteUtilisateur($_POST['nom'], $_POST['motdepasse']);
		if($message_erreur == '') {

		}header('Location: roulette.php');
	}else {
		$message_erreur = 'Il faut remplir les champs!';
	}
}	
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Connexion</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="../public/style.css" />
</head>
<body>
<header id="head">
	<h2 class="alert alert-warning">Connexion</h2>
</header>
<br>
<?php if($message_erreur != '')
	echo "<div class=\"alert alert-danger errorMessage\">$message_erreur</div>";
?>

<form method="post" action="index.php?page=connexion">
	<table id="connexionTable">
		<tr>
			<td colspan="3"><input type="text" name="nom" placeholder="Identifiant" /></td>
		</tr>

		<tr>
			<td colspan="3"><input type="password" name="motdepasse" placeholder="Mot de passe" /></td>
		</tr>

		<tr>
			<td><br><a href="#"><input class="btn btn-warning" name="btnErase" type="reset" value="Effacer" /></a></td>
			<td><br><a href="index.php?page=inscription"><div class="btn btn-info">S'inscrire</div></a></td>
			<td><br><input class="btn btn-primary" name="btnConnect" type="submit" value="Jouer" /></td>
		</tr> 
	</table>
</form>
<br><br>



</body>
</html>