<?php
require_once '../model/BDD_Manager.php';

$message_erreur = '';

if(isset($_POST['btnSignup'])) {


	if(isset($_POST['nom']) && $_POST['nom'] != '' &&
		isset($_POST['motdepasse']) && $_POST['motdepasse'] != '') {


		ajouteUtilisateur($_POST['nom'], $_POST['motdepasse']);
		connecteUtilisateur($_POST['nom'], $_POST['motdepasse']);
		

		header('Location: roulette.php');
	} else {
		$message_erreur = 'Il faut remplir les champs!';
	}
}
	
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Inscription</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="../public/style.css" />
</head>
<body>
<header id="head">
	<h2 class="alert alert-warning">Inscription</h2>
</header>
<br>
<?php if($message_erreur != '')
		echo "<div class=\"alert alert-danger errorMessage\">$message_erreur</div>";
?>

<form method="post" action="index.php?page=inscription">
	<table id="inscriptionTable">
		<tr>
			<td colspan="2"><input type="text" name="nom" placeholder="Identifiant" /></td>
		</tr>

		<tr>
			<td colspan="2"><input type="password" name="motdepasse" placeholder="Mot de passe" /></td>
		</tr>

		<tr>
			<td><br><a href="index.php?page=connexion"><div class="btn btn-info">Retour à la connexion</div></a></td>
			<td><br><input class="btn btn-primary" name="btnSignup" type="submit" value="S'inscrire" /></td>
		</tr> 
	</table>
</form>


</body>
</html>