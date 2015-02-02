<?php 


 define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );

session_start();




switch (isset($_POST) )
	{

		##add the todo's to the session
		case isset($_POST['addTodo']):



			if ($_POST['description'] == '' ) 
			{
				$message 	=	'Ahh, damn. Lege todos zijn niet toegestaan...';
			}

			else
			{
				$_SESSION['not'][]	= 	$_POST['description'];	
			}

		break;
		
		## change the item from done to not done and vice verca
		case isset($_POST['toggleTodo']):

			$toggle 		=	$_POST['toggleTodo'];

			if (isset($_SESSION['not'][$toggle] )) 
			{
				$_SESSION['done'][$toggle] 	=	$_SESSION['not'][$toggle] ;

				unset($_SESSION['not'][$toggle]);
			}

			elseif (isset($_SESSION['done'][$toggle] ))
			{
				$_SESSION['not'][$toggle] 	=	$_SESSION['done'][$toggle] ;

				unset($_SESSION['done'][$toggle]);
			}


		break;

		case isset($_POST['deleteTodo']):

			$delete 		=	$_POST['deleteTodo'];

			if (isset($_SESSION['not'][$delete] )) 
			{
				unset($_SESSION['not'][$delete]);
			}

			elseif (isset($_SESSION['done'][$delete] ))
			{
				unset($_SESSION['done'][$delete]);
			}

		break;

		default: break;
	}


if (isset($_SESSION['not'])) 
{
	if (count($_SESSION['not']) == 0) 
	{
		unset($_SESSION['not']);
	}
}

if (isset($_SESSION['done'])) 
{
	if (count($_SESSION['done']) == 0) 
	{
		unset($_SESSION['done']);
	}
}


$info 	= array();
$info 	=	$_SESSION;


var_dump($_POST)

 ?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <title>Todo App</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>




	<?php if (isset($message)):?>

	 	<div class="modal error">
	            	<h2><?= $message ?></h2>           
	            </div>

                <?php endif ?>

















   	 <h1>Todo app</h1>


   	 <?php if ((isset($info['not'])) ||  (isset($info['done'])) ) :?>
						
		<h2>Nog te doen</h2>


			<?php if (isset($info['not'])): ?>

						
				<ul>

					<?php foreach ($info['not'] as $key => $value) : ?>

						<li>
							
							<form action="<?= BASE_URL ?>" method="POST">

								<button title="Status wijzigen" name="toggleTodo" value="<?=$key?>" class="status not-done"><?=$value?></button>

								<button title="Verwijderen" name="deleteTodo" value="<?=$key?>">Verwijder</button>
							</form>

						</li>


					<?php endforeach?>


				</ul>
		

			<?php else: ?>


				<p>Schouderklopje, alles is gedaan!</p>


			<?php endif; ?>


		<h2>Done and done!</h2>


			<?php if (isset($info['done'])): ?>

				<ul>

					<?php foreach ($info['done'] as $key => $value):?>



						<form action="<?= BASE_URL ?>" method="POST">
							<button title="Status wijzigen" name="toggleTodo" value="<?=$key?>" class="status done"><?=$value?></button>
							
							<button title="Verwijderen" name="deleteTodo" value="<?=$key?>">Verwijder</button>
						</form>



					<?php  endforeach?>

				</ul>



			<?php else: ?>


				<p>Werk aan de winkel...</p>


			<?php endif; ?>

	
	<?php  else: ?>


		<p>  Je hebt nog geen TODO's toegevoegd. Zo weinig werk of meesterplanner? </p>


	<?php endif; ?>


		
		
	<h1>Todo toevoegen</h1>

	<form action="<?= BASE_URL ?>" method="POST">

		<ul> 
			<li>
				<label for="description">Beschrijving: </label>
				<input type="text" id="description" name="description" autofocus>
			</li>
		</ul>

		<input type="submit" name="addTodo" value="Toevoegen">

	</form>
    </body>
</html>
