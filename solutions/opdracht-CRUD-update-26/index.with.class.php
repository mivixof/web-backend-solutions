<?php 




include_once ('class/database.php');





	$message		=	0;
	$deleteConfirm	=	0;
	$deleteId		=	0;
	$edit 			=	0;

try
{
	$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' );



	

	$sql = 'SELECT *
	 		
	 		FROM brouwers';


$statement		=	$db->prepare($sql);
$statement->execute();


		if ( isset( $_POST[ 'confirm' ] ) )
		{
			$deleteConfirm	=	1;
			$deleteId		=	$_POST[ 'confirm' ];
		}

		if ( isset( $_POST[ 'edit' ] ) )
		{
			$edit	=	1;
			$editId		=	$_POST[ 'edit' ];

			$showeditsql 	=	'SELECT *
								from brouwers
								where brouwernr = :brouwernr
								';

			$showeditstatement = $db->prepare( $showeditsql );

			$showeditstatement->bindValue( ':brouwernr', $editId );

			$editorial 	=	$showeditstatement->execute();

			$editar 		=	array();
			while ($rows=$showeditstatement->fetch( PDO::FETCH_ASSOC))
			{
			$editar []		=	$rows;
			}
	var_dump($editar);

		}


		if ( isset( $_POST[ 'confirmedit' ] ) )
		{
			$editsql = 'UPDATE brouwers
						set
							brnaam 		= :brnaam ,
							adres 		= :adres ,
							postcode 	= :postcode ,
							gemeente 	= :gemeente ,
							omzet	 	= :omzet	

						WHERE brouwernr	= :brouwernr
						LIMIT 1';
			$delstatement = $db->prepare( $editsql );

			$delstatement->bindValue( ":brouwernr", $_POST[ 'brouwernr' ] );						
			$delstatement->bindValue( ":brnaam",  	$_POST[ 'brnaam' ] );						
			$delstatement->bindValue( ":adres",  	$_POST[ 'adres' ] );						
			$delstatement->bindValue( ":postcode",  $_POST[ 'postcode' ] );						
			$delstatement->bindValue( ":gemeente",  $_POST[ 'gemeente' ] );						
			$delstatement->bindValue( ":omzet",  	$_POST[ 'omzet' ] );

			$deleted 	=	$delstatement->execute();


			if ($deleted) 
			{
				$message	=	'success';
			}
			else 
			{
				$message	=	"error: didn't edit cus reasons";
			}
		}






if ( isset( $_POST['delete'] ) )
		{

	$delsql = 'DELETE FROM brouwers
			Where brouwernr = :brouwernr
            LIMIT 1';
			$delstatement = $db->prepare( $delsql );

			$delstatement->bindValue( ':brouwernr', $_POST['delete'] );

			$deleted 	=	$delstatement->execute();


			if ($deleted) 
			{
				$message	=	'success';
			}
			else 
			{
				$message	=	"error: didn't delete cus reasons";
			}

		}







$bieren 		=	array();
while ($rows=$statement->fetch( PDO::FETCH_ASSOC))
{
$bieren []		=	$rows;
}


$colnames	=	array();
$colnames[0]	=	'#';


for ( $count = 0; $count < $statement->columnCount(); ++$count )
		{
			$colnames[]	=	$statement->getColumnMeta( $count )['name'];
		}


/*
$colnames	=	array();

foreach( $bieren[0] as $key => $bier )
		{
			$colnames[  ]	=	$key;
		}


*/


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

var_dump($_POST);
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
            .red
            {
            	background-color: #ff0000;
            }
        </style>
 </head>
 <body>
 
	<?php if ( $message ): ?>
		<div > 
			<h2><?= $message?></h2>
		</div>
	<?php endif ?>


<?php if ( $deleteConfirm ): ?>
		<div>
			Are u sure?
			<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

				<button type="submit" name="delete" value="<?= $deleteId ?>">
					Jup!
				</button>

				<button type="submit">
					Nope!
				</button>

			</form>
		</div>
	<?php endif ?>

	<?php if ( $edit ): ?>
		<div>
			Edit:
			<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
				
				<ul>
					<?php foreach ($editar[0] as $key => $value): ?>
						
						<?php if ( $key !== "brouwernr" ): ?>
							<li>
								<label for="<?= $key ?>"><?= $key ?></label>
								<input type="text" id="<?= $key ?>" name="<?= $key ?>" value="<?= $value ?>">
							</li>
						<?php endif; ?>
						
					<?php endforeach; ?>
				</ul>
				<input type="hidden" value="<?= $editar[0]['brouwernr'] ?>" name="brouwernr">
				
				<input type="submit" name="confirmedit" value="Edit">
			</form>
		</div>
	<?php endif; ?>


	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
	<table>
		
		<thead>
			<tr>
				<?php foreach ($colnames as $name): ?>
					<th><?= $name ?></th>
				<?php endforeach; ?>
			</tr>
		</thead>

		<tbody>
		
			<?php foreach ($bieren as $key => $bier): ?>

				<tr class="<?= ( ( $key + 1) %2 == 0 ) ? 'odd' : '' ?><?= ( $bier['brouwernr'] === $deleteId ) ? 'red' : ''  ?>">

					<td><?= ++$key ?></td>

					<?php foreach ($bier as $value): ?>

						<td><?= $value ?></td>

					<?php endforeach ?>

						<td>
							<button type="submit" name="confirm" value="<?= $bier['brouwernr'] ?>" class="delete-button">
							</button>
						</td>
						<td>
							<button type="submit" name="edit" value="<?= $bier['brouwernr'] ?>" class="edit-button">
							</button>
						</td>
				</tr>

			<?php endforeach ?>
			
		</tbody>

	</table>

		</table>
 </body>
 </html>



