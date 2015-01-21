<?php 

$message	=	'';

try
{
	$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'xivimmivix' );

	$sql = 'SELECT *
	 		
	 		FROM brouwers
	 			INNER JOIN bieren
	 			ON bieren.brouwernr = brouwers.brouwernr
	 		
	 		WHERE bieren.naam LIKE "Du%"
	 			AND brouwers.brnaam like "%a%"';


$statement		=	$db->prepare($sql);
$statement->execute();







$bieren 		=	array();
while ($rows=$statement->fetch( PDO::FETCH_ASSOC))
{
$bieren []		=	$rows;
}







$colnames	=	array();
$colnames[]	=	'nr';

foreach( $bieren[0] as $key => $bier )
		{
			$colnames[  ]	=	$key;
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
 	<title>crud query</title>
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
	<table>
		
		<thead>
			<tr>
				<?php foreach ($colnames as $name): ?>
					<th><?= $name ?></th>
				<?php endforeach ?>
			</tr>
		</thead>

		<tbody>
		
			<?php foreach ($bieren as $key => $bier): ?>

				<tr class="<?= ( ( $key + 1) %2 == 0 ) ? 'odd' : '' ?>">

					<td><?= ($key + 1) ?></td>

					<?php foreach ($bier as $value): ?>

						<td><?= $value ?></td>


					<?php endforeach ?>

				</tr>

			<?php endforeach ?>
			
		</tbody>

	</table>





 </body>
 </html>