

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mon formulaire HTML wallah</title>
</head>
<body>

	<?php

	require 'Instanciation.php';
	require 'game.php';




	$dommage = Game($_POST, $joueur1, $joueur2);


	switch ($_POST) {
		case (isset($_POST['joueur1Attack'])) : //joueur1 attack
		$_SESSION['player2']['life'] = $joueur2->Defense($dommage);
		$_SESSION['player2']['life'] = $joueur2->setLife($_SESSION['player2']['life']);
		$_SESSION['player1']['counter'] -=1;
		break;

		case (isset($_POST['joueur1Potion'])) : //joueur1 se régénère
		$_SESSION['player1']['life'] = $joueur1->Potion();
		$_SESSION['player1']['life'] = $joueur2->setLife($_SESSION['player1']['life']);
		$_SESSION['player1']['counter'] -=1;
		break;

		case (isset($_POST['joueur2Attack'])) : //joueur2 attack
		$_SESSION['player1']['life'] = $joueur1->Defense($dommage);
		$_SESSION['player1']['life'] = $joueur2->setLife($_SESSION['player1']['life']);
		$_SESSION['player2']['counter'] -=1;
		break;

		case (isset($_POST['joueur2Potion'])) : //joueur2 se régénère
		$_SESSION['player2']['life'] = $joueur2->Potion();
		$_SESSION['player2']['life'] = $joueur2->setLife($_SESSION['player2']['life']);
		$_SESSION['player2']['counter'] -=1;
		break;
	}



	?>

</body>
</html>
