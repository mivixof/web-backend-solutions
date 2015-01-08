<?php
	

	function __autoload( $className )
	 {
	    include 'classes/' . $className . '.php';
	}


	$kikker	=	new Animal('Kermit', 'male', 100);
	$kat		=	new Animal('Dikkie', 'male', 100);
	$dolfijn	=	new Animal('Flipper', 'female', 80);



?>


<!DOCTYPE html>
<html>
<head>
	<title>app</title>
</head>

<body>
<p>name: <?= $kikker->getName() ?>, sex: <?= $kikker->getSex() ?> , <?= $kikker->getHealth() ?> hp</p>

<p>name: <?= $kat->getName() ?>, sex: <?= $kat->getSex() ?> , <?= $kat->getHealth() ?> hp</p>

<p>name: <?= $dolfijn->getName() ?>, sex: <?= $dolfijn->getSex() ?> , <?= $dolfijn->getHealth() ?> hp</p>



</body>
</html>