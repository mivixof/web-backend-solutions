<?php 


 define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );


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


$selection 	=	1;
if (isset($_GET["brouwernr"])) 
{
	$selection 	=	$_GET["brouwernr"];
}

	$sql	=	'SELECT naam
				FROM bieren 
				WHERE brouwernr = :brouwernr';

	$statement = $db->prepare( $sql );

	$statement->bindValue( ':brouwernr', $selection );

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


	<form action="<?= BASE_URL ?>" method="GET">
		
		<select name="brouwernr">
			<?php foreach ($brouwers as $brouwer): ?>
				<option value="<?= $brouwer['brouwernr'] ?>" <?= ( $selection === $brouwer['brouwernr'] ) ? 'selected' : '' ?>><?= $brouwer['brnaam'] ?></option>
			<?php endforeach ?>
		</select>
		<input type="submit" value="submit">
	</form>







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