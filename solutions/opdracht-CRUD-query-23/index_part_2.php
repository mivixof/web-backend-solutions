<?php 

$message	=	'';
$selection 		=	'';

try
{
	$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'xivimmivix' );

	$sql = 'SELECT  brnaam, brouwernr	 		
	 		FROM brouwers';


$statement		=	$db->prepare($sql);
$statement->execute();




$brouwers 		=	array();
while ($rows=$statement->fetch( PDO::FETCH_ASSOC))
{
$brouwers []		=	$rows;
}



if (isset($_GET["nr"])) 
{
	$selection 	=	$_GET["nr"];


	$sql	=	'SELECT naam
				FROM bieren 
				WHERE bieren.brouwernr = brouwernr';

	$statement = $db->prepare( $sql );

	$statement->bind_value( 'brouwernr', $_GET[ 'nr' ] );

}
 else
{
	$sql 		=	'SELECT naam
					FROM bieren '; 


			$statement = $db->prepare( $sql );
}

$statement->execute();


$header	=	array();
$header[]	=	'Aantal';

for ($colnr = 0; $colnr  < $statement->columnCount( );  ++$colnr) 
{ 
	$bierenHeader[] = $statement->getColumnMeta( $colnr )['name'];
}

$bieren	=	array();

while( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
{
	$bieren[ ]	=	$row[ 'naam' ];
}



}

catch ( PDOException $e )
	{
		$message		=	'connection failed.';
	}


/*
var_dump($statement);
var_dump($bieren);
var_dump($colnames);
*/
 ?>







 <!DOCTYPE html>
 <html>
 <head>
 	<title>crud query 2</title>
 	        <style>

            table
            {
                font-size:12px;
                overflow:auto;
            }

            table th,
            table td
            {
                padding:4px;
            }

            table th
            {
                background: #DFDFDF;
                text-align:center;
            }

            table tr
            {
                transition: all 0.2s ease-out;
            }

            table tr:hover
            {
                background-color:lightgreen;
            }

            .odd
            {
                background: #F1F1F1;
            }
        </style>
 </head>
 <body>
 
	<?php if ( $message ): ?>
		<div > 
			<h2><?= $message?></h2>
			
		</div>
	<?php endif ?>


	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
		
			<?php foreach ($brouwers as $key => $brouwer): ?>
			<?= $brouwer['nr'] ?>
			<?php endforeach ?>
		
		<input type="submit" value="submit">
	</form>







<!--
	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
		
		<select name="brouwernr">
			<?php foreach ($brouwers as $key => $brouwer): ?>
				<option value="<?= $brouwer['nr'] ?>" <?= ( $selection === $brouwer['nr'] ) ? 'selected' : '' ?>><?= $brouwer['brnaam'] ?></option>
			<?php endforeach ?>
		</select>
		<input type="submit" value="submit">
	</form>
-->





	<table>
		
		<thead>
			<tr>
				<?php foreach ($header as $name): ?>
					<th><?= $name ?></th>
				<?php endforeach ?>
			</tr>
		</thead>

		<tbody>
		
			<?php foreach ($bieren as $key => $bier): ?>

				<tr class="<?= ( ( $key + 1) %2 == 0 ) ? 'odd' : '' ?>">

					<td><?= ($key + 1) ?></td>
					<td><?= $bier ?></td>


				</tr>

			<?php endforeach ?>
			
		</tbody>

	</table>





 </body>
 </html>