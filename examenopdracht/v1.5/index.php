<?php 

	 define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );

	session_start();







var_dump($_POST, $_SESSION);






	if ( isset( $_POST['session'] ) )
    {
        if ( $_POST['session']  == 'destroy' )
        {
            session_destroy( );
            header( $_SERVER[ 'PHP_SELF' ]);
        }
    }



		## make associative array $info ["done/not"][#][string] --> error in slooping
    						## $_SESSION[info] [#]  	[done/not] 
    						##					[string]

		##add the todo's to the session
		if( isset($_POST['addTodo']))
		{
			if ($_POST['description'] == '' ) 
			{
				$message 	=	'pls fill somethng in...';
			}

			else
			{
				## make sure there are no "dangerous " characters in string for HTML (verbetering op voorbeeld)
				$a 		=	array( '<' , '>' , '\\' , '=' , '-' , '/' , '*' ,'!' ); 
				$b 		=	array( '&lt;' ,  '&gt;' ,  '&#92;' ,  '&#61;' , '&#45;' , '&#47;' , '&#42;' , '&#33;'); 
				$written	=	str_replace($a, $b, $_POST['description']); 
				$_SESSION ['info'] []	=  array('done' =>0 , 'string' => $written);
			}
		}


		## change the item from done to not done and vice verca
		## copy over and delete the old one
		if( isset($_POST['toggleTodo']))
		{
			$toggle 		=	$_POST['toggleTodo'];

			if ($_SESSION ['info'] [$toggle] ['done']	 = 	0 )
			{
				$_SESSION ['info'] [$toggle] ['done'] 	=	1;
			}

			elseif ($_SESSION ['info'] [$toggle] ['done']	 = 	1 )
			{
				$_SESSION ['info'] [$toggle] ['done'] 	=	0;
			}
		}


		##remove the entity from th session, doing it once for both threw an error
		if( isset($_POST['deleteTodo']))
		{

			$delete 		=	$_POST['deleteTodo'];

			unset($_SESSION ['info'] [$delete]);


		}


	#set the conditions for the "empty" array messages
	if (isset($_SESSION ['info'] ['not'])) 
	{
		if (count($_SESSION ['info'] ['not']) == 0) 
		{
			unset($_SESSION ['info'] ['not']);
		}
	}

	if (isset($_SESSION ['info'] ['done'])) 
	{
		if (count($_SESSION ['info'] ['done']) == 0) 
		{
			unset($_SESSION ['info'] ['done']);
		}
	}

	##  use array in stead of the _SESSION 
	$info 	= 	array();
	$info 	=	$_SESSION ['info'] ;




	## $_SESSION[info] [#]  	[done/not]  [1/0]
	##					[string] ['']

	## display 
	## key = done
	## value = bool/string

	foreach ($info as $key => $value) 

	{
		
	}









var_dump($_POST, $_SESSION,$info);







 ?>





<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Todo App</title>
        <link rel="stylesheet" href="css/style.css">
    </head>




    <body>


	<?php if (isset($message)):?>


	 	<div class="modal error">


	            	<p><?= $message ?></p>           


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


					<li>

						<form action="<?= BASE_URL ?>" method="POST">

							<button title="Status wijzigen" name="toggleTodo" value="<?=$key?>" class="status done"><?=$value?></button>

							<button title="Verwijderen" name="deleteTodo" value="<?=$key?>">Verwijder</button>

						</form>
					</li>


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
	<form action="<?= BASE_URL ?>" method="POST">
		<button title="reset list" name="session" value="destroy" class=""> reset list</button> 
	</form>

    </body>

</html>
