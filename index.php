<?php
include_once("php/Couleur.php");

$nom = "Martin Boudreau";
$couleurFond = Couleur::rgbAlea();
$couleurFond2 = Couleur::rgbAlea();
$couleurTexte = Couleur::rgbAlea(true);
$noPhoto = rand(1,3);
$couleurs = [];
for ($i = 0; $i < rand(2, 10000); $i += 1) {
	$couleurs[] = Couleur::rgbAlea();
}
$couleurs = implode(",", $couleurs);
//$degrade = "linear-gradient(to right, $couleurs)";
Couleur::$nbCouleurs = 3000;
$degrade = Couleur::degradeAlea();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title><?php echo $nom; ?></title>
<meta charset="utf-8" />
<style>
body {
	background-color:<?php echo $couleurFond; ?>;
	background-image:<?php echo "linear-gradient(to right bottom, $couleurFond, $couleurFond2)"; ?>;
}
h1 {
	background-image: <?php echo $degrade; ?>;
}
</style>
</head>

<body style="color:<?php echo $couleurTexte; ?>;">
<?php echo Couleur::$nbCouleurs; ?>
	<?php include_once "header.php"; ?>
	<h1>Bonjour, mon nom est<br /><?php echo $nom; ?></h1>
	<p>Voici une de mes photos préférées  :</p>
	<img src="images/photo<?php echo $noPhoto; ?>.jpg" alt=""/>
</body>
</html>