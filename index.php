<?php
require('src/Nombre.php');
use Compteur\Nombre;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8" />
	<meta name="application-name" content="Compteur"/>
	<title>Compteur</title>
    <meta name="Appli web qui affiche les chiffres de 0 à 100 sur une seule page, les uns au dessous des autres." />
    <link rel="stylesheet" type="text/css" href="web/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
</head>
<body>

	<section>
			<h1>Compteur</h1>
			<p id="description">Appli web qui affiche les chiffres de 0 à 100 sur une seule page, les uns au dessous des autres.</p>
			<p>ℹ️ Survolez les éléments en bleu pour connaitre le nombre.</p>
			<div id="containerNbr">

				<?php
					for ($i=Nombre::NBR_MIN; $i <= Nombre::NBR_MAX; $i++) { 
						?>
						<p><?php Nombre::afficher($i); ?></p>
						<?php
					}
				?>
			</div>
	</section>

	<footer>
		Ahmadi Abasse - 2016 -
	</footer>

</body>
</html>