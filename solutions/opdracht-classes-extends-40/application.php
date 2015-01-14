<?php
	

	function __autoload( $className )
	 {
	    include_once 'classes/' . $className . '.php';
	}


	$kikker		=	new Animal('Kermit', 'male', 100);
	$kat		=	new Animal('Dikkie', 'male', 100);
	$kat->changeHealth(-10);
	$dolfijn	=	new Animal('Flipper', 'female', 100);
	$dolfijn->changeHealth(-20);
	$simba 		= 	new Lion('Simba', 'male', 100, 'Congo lion');
	$scar 		= 	new Lion('Scar', 'female', 100, 'Kenia lion');
	$zeke 		= 	new Zebra('Zeke', 'male', 120, 'Quagga');
	$zana 		= 	new Zebra('Zana', 'female', 100, 'Selous');



?>


<!DOCTYPE html>
<html>
<head>
	<title>app</title>
</head>

<body>

	<h1>instances</h1>
	<p>name: <?= $kikker->getName() ?>, sex: <?= $kikker->getSex() ?> , <?= $kikker->getHealth() ?> hp</p>

	<p>name: <?= $kat->getName() ?>, sex: <?= $kat->getSex() ?> , <?= $kat->getHealth() ?> hp</p>

	<p>name: <?= $dolfijn->getName() ?>, sex: <?= $dolfijn->getSex() ?> , <?= $dolfijn->getHealth() ?> hp</p>

	<h1>Specifieke dierenklassen die gebaseerd zijn op de Animal class</h1>

    <h2>Leeuwen</h2>
    <p>De speciale move van <?= $simba->getName() ?> (soort: <?= $simba->getSpecies() ?>): <?= $simba->doSpecialMove() ?></p>
    <p>De speciale move van <?= $scar->getName() ?> (soort: <?= $scar->getSpecies() ?>): <?= $scar->doSpecialMove() ?></p>

    <h2>Zebra's</h2>
    <p>De speciale move van <?= $zeke->getName() ?> (soort: <?= $zeke->getSpecies() ?>): <?= $zeke->doSpecialMove() ?></p>
    <p>De speciale move van <?= $zana->getName() ?> (soort: <?= $zana->getSpecies() ?>): <?= $zana->doSpecialMove() ?></p>






</body>
</html>