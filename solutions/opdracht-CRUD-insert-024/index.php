<?php 
 define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );


$message	=	'';

if (isset($_SESSION["message"])) 
{
	$message				=		"mqlierubvguikylserg";

	unset($_SESSION["message"]);
}



if (isset($_POST['submit'])) 
{
	$brnaam		=	$_POST['brouwernaam'];
	$adres		=	$_POST['adres'];
	$postcode		=	$_POST['postcode'];
	$gemeente		=	$_POST['gemeente'];
	$omzet		=	$_POST['omzet'];

try
{
	$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' );

	$sql = 'INSERT INTO  brouwers 
						(brnaam, 
						adres, 
						postcode, 
						gemeente, 
						omzet
						)
			VALUES ( 
				:brnaam, 
				:adres, 
				:postcode, 
				:gemeente, 
				:omzet 
				)';


$statement		=	$db->prepare($sql);

	$statement->bindValue( ':brnaam', $brnaam );
	$statement->bindValue( ':adres	', $adres );
	$statement->bindValue( ':postcode', $postcode );
	$statement->bindValue( ':gemeente', $gemeente );
	$statement->bindValue( ':omzet	', $omzet );


$statement->execute();



                var_dump($statement->errorInfo());
}
            
catch ( PDOException $e )
	{
		$message		=	'connection failed.';
	}

    var_dump($_POST);

}










 ?>



 <!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>crud insert</title>

<body>
 
	<?php if ( $message ): ?>
		<div > 
			<h2><?= $message?></h2>
			
		</div>
	<?php endif ?>


	<form action="<?= BASE_URL ?>" method="post">
		<label for="brouwernaam">brnaam</label>	
		<input type="text" name="brouwernaam" value="nope" >

		<label for="adres">adres</label>
		<input type="text" name="adres" value="nope" >

		<label for="postcode">postcode</label>	
		<input type="text" name="postcode" value="nope" >

		<label for="gemeente">gemeente</label>	
		<input type="text" name="gemeente" value="nope" >

		<label for="omzet">omzet</label>	
		<input type="text" name="omzet" value="nope" >





		<input type="submit" name="submit">
	</form>





 </body>
 </html>