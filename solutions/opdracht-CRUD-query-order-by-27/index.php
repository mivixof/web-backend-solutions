


<?php 

define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );

	$message		=	0;
	$deleteConfirm	=	0;
	$deleteId		=	0;
	$edit 			=	0;

try
{

	$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' );
	$setter = array();

	if (isset($_GET['order'])) 
	{

		$setter = explode('-', $_GET['order']);



				$sql = 'SELECT 
				bieren.biernr ,
				 bieren.naam, 
				 brouwers.brnaam, 
				 soorten.soort, 
				 bieren.alcohol
		 		
		 		FROM bieren
		 		INNER JOIN brouwers 
		 		ON bieren.brouwernr = brouwers.brouwernr
		 		INNER JOIN soorten  
		 		ON soorten.soortnr = bieren.soortnr
		 		ORDER BY '. $setter[ 0 ] .' '. $setter[ 1 ];
	}
	else 
	{
		$sql = $sql = 'SELECT 
				bieren.biernr ,
				 bieren.naam, 
				 brouwers.brnaam, 
				 soorten.soort, 
				 bieren.alcohol
		 		
		 		FROM bieren
		 		INNER JOIN brouwers 
		 		ON bieren.brouwernr = brouwers.brouwernr
		 		INNER JOIN soorten  
		 		ON soorten.soortnr = bieren.soortnr
		 		ORDER BY bieren.naam ASC';
	}

	$statement		=	$db->prepare($sql);

	var_dump($sql);
	var_dump($setter);

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

			$showeditsql 	=	'SELECT 
				bieren.biernr ,
				bieren.naam, 
				brouwers.brnaam, 
				soorten.soort, 
				bieren.alcohol
		 		
		 		FROM bieren
		 		INNER JOIN brouwers 
		 		ON bieren.brouwernr = brouwers.brouwernr
		 		INNER JOIN soorten  
		 		ON soorten.soortnr = bieren.soortnr
								where biernr = :biernr
								';

			$showeditstatement = $db->prepare( $showeditsql );

			$showeditstatement->bindValue( ':biernr', $editId );

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
			$editsql = 'UPDATE bieren
				 		INNER JOIN soorten  
				 		ON soorten.soortnr = bieren.soortnr
				 		INNER JOIN brouwers 
				 		ON bieren.brouwernr = brouwers.brouwernr
						set
								alcohol	 	= :alcohol,
								naam	 	= :naam	,
								brnaam 		= :brnaam ,
								soort 		= :soort 

						where 	biernr 		= :biernr ';


			$editstatement = $db->prepare( $editsql );

			$editstatement->bindValue( ":biernr", $_POST[ 'biernr' ] );						
			$editstatement->bindValue( ":brnaam",  	$_POST[ 'brnaam' ] );
			$editstatement->bindValue( ":alcohol",  	$_POST[ 'alcohol' ] );
			$editstatement->bindValue( ":naam",  	$_POST[ 'naam' ] );		
			$editstatement->bindValue( ":soort",  $_POST[ 'soort' ] );	

			$deleted 	=	$editstatement->execute();


			if ($deleted) 
			{
				$message	=	'success';
			}
			else 
			{
				$message	=	"error: didn't edit cus reasons";
			}
			var_dump($editsql, $editstatement);
		}






if ( isset( $_POST['delete'] ) )
		{

	$delsql = 'DELETE FROM bieren
				INNER JOIN soorten  
		 		ON soorten.soortnr = bieren.soortnr
		 		INNER JOIN brouwers 
		 		ON bieren.brouwernr = brouwers.brouwernr
				Where biernr = :biernr';


			$delstatement = $db->prepare( $delsql );

			$delstatement->bindValue( ':biernr', $_POST['delete'] );

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
            	background-color: #ffffff;
            	color: #000000;
            }
            .voorbeeld-query-01 
            {

            }
            .voorbeeld-query-01 table
            {
                font-size:12px;
                overflow:auto;
            }

            .voorbeeld-query-01 table th,
            .voorbeeld-query-01 table td
            {
                padding:4px;
            }

            .voorbeeld-query-01 table th
            {
                background: #DFDFDF;
                text-align:center;
            }

            .voorbeeld-query-01 table tr
            {
                transition: all 0.2s ease-out;
            }

            .voorbeeld-query-01 table tr:hover
            {
                background-color:lightgreen;
            }

            .voorbeeld-query-01 .odd
            {
                background: #F1F1F1;
            }

            .deletion
            {
                color: #b94a48;
                background-color: #f2dede;
            }

            .input-icon-button
            {
                border: none;
                background-color:transparent;
                cursor:pointer;
                text-indent:-1000px;
                width:16px;
                height:16px;
            }

            .delete-button
            {
                background: url("http://web-backend.local/img/icon-delete.png") no-repeat;
            }

            .edit-button
            {
                background: url("http://web-backend.local/img/icon-edit.png") no-repeat;
            }

            .order a
            {
                padding-right:20px;
            }

            .ascending a
            {
                background: no-repeat url('http://web-backend.local/img/icon-asc.png') right ;
            }

            .descending a
            {
                background: no-repeat url('http://web-backend.local/img/icon-desc.png') right;
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
						
						<?php if ( $key !== "biernr" ): ?>
							<li>
								<label for="<?= $key ?>"><?= $key ?></label>
								<input type="text" id="<?= $key ?>" name="<?= $key ?>" value="<?= $value ?>">
							</li>
						<?php endif; ?>
						
					<?php endforeach; ?>
				</ul>
				<input type="hidden" value="<?= $editar[0]['biernr'] ?>" name="biernr">
				
				<input type="submit" name="confirmedit" value="Edit">
			</form>
		</div>
	<?php endif; ?>


	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
	<table>
		
		<thead>
			<tr>
				<?php foreach ($colnames as $name): ?>
					<th class=" order <?= (isset($_GET[ 'order' ])&&( $_GET[ 'order' ] == $name  . '-desc' ) ) ?  'ascending': 'descending' ;?>">
					<a href="<?= $_SERVER['PHP_SELF']?><?= (isset($_GET[ 'order' ])&&( $_GET[ 'order' ] == $name  . '-desc' ) ) ?  '?order=' . $name  . '-asc' : '?order=' . $name  . '-desc' ;?>" title="<?= $name ?>"><?= $name ?></a></th>
				<?php endforeach; ?>
			</tr>
		</thead>

		<tbody>
		
			<?php foreach ($bieren as $key => $bier): ?>

				<tr class="<?= ( ( $key + 1) %2 == 0 ) ? 'odd' : '' ?><?= ( $bier['biernr'] === $deleteId ) ? 'red' : ''  ?>">

					<td><?= ++$key ?></td>

					<?php foreach ($bier as $value): ?>

						<td><?= $value ?></td>

					<?php endforeach ?>

						<td>
							<button type="submit" name="confirm" value="<?= $bier['biernr'] ?>" class="input-icon-button delete-button">
							</button>
						</td>
						<td>
							<button type="submit" name="edit" value="<?= $bier['biernr'] ?>" class="input-icon-button edit-button">
							</button>
						</td>
				</tr>

			<?php endforeach ?>
			
		</tbody>

	</table>

		</table>
 </body>
 </html>

