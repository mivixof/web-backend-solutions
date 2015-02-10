<?php 

	 define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );

	session_start();


	if ( isset( $_POST['session'] ) )
	{
		if ( $_POST['session']  == 'destroy' )
		{
			unset($_SESSION);
			session_destroy( );
			header(  BASE_URL);
		}
	}


	## make associative array $info ["done/not"][#][string] --> error in slooping
						## $_SESSION[info] [#]  	[done/not] 
						##					[string]

	##add the todo's to the session
	$message = 0 ;
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
			$_SESSION ['info'] []	=  array('done' => 0 , 'string' => $written);
		}
	}


	## change the item from done to not done and vice verca
	## copy over and delete the old one
	if( isset($_POST['toggleTodo']))
	{
		$toggle 		=	$_POST['toggleTodo'];

		($_SESSION ['info'] [$toggle] ['done'] 	==	0 ) ? 	 
			$_SESSION ['info'] [$toggle] ['done'] 	=	1 	: 	
			$_SESSION ['info'] [$toggle] ['done'] 	=	0	; 
	}


		##remove the entity from th session, doing it once for both threw an error
		if( isset($_POST['deleteTodo']))
		{
			$delete 		=	$_POST ['deleteTodo'];

			unset($_SESSION ['info'] [$delete]);
		}


	##  use array in stead of the _SESSION 
	$info 	= 	array();
	$done	=	0;
	$not		=	0;
	if (isset($_SESSION ['info'] )) 
	{
		$info 	=	$_SESSION ['info'] ;

		foreach ($info as $key) 
		{
				($key['done'] == 0) ? ++ $not : ++ $done ;
		}

		## $_SESSION	[info] 	[#]  	[done] 	[1/0]
		##						[string] 	['']
		##			$info		[#]		
		##					$key 	$value
		## display 
		## key = done
		## value = bool/string
	}

 ?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Todo App</title>
        <link rel="stylesheet" href="css/style.css">
    </head>


    <body>

	<?php if ($message !== 0):?>

	 	<div class="modal error">
	            	<p><?= $message ?></p>           
	            </div>

	<?php endif; ?>

   	 <h1>Todo app</h1>

   	 <?php if (($done == 0 ) && ($not == 0) ) : ?>
						
		<p>  You have not added any todos. So litle work? Are you a master planner? </p>

	<?php  else: ?>

		<h2>To do</h2>

			<?php if ($not) : ?>
	
				<ul>
					<?php foreach ($info as $key => $value ) : ?>

						<?php if ($value['done'] == 0): ?>

							<li>								
								<form action="<?= BASE_URL ?>" method="POST">
									<button title="Status wijzigen" name="toggleTodo" value="<?= $key?>" class="status not-done"><?=$value['string']?></button>
									<button title="Verwijderen" name="deleteTodo" value="<?=$key?>">Verwijder</button>
								</form>
							</li>

						<?php endif ?>

					<?php endforeach?>

				</ul>

			<?php else: ?>

				<p>Well done, all done</p>

			<?php endif; ?>

		<h2>Done!</h2>

			<?php if ($done): ?>

				<ul>

					<?php foreach ($info as $key => $value ) : ?>

						<?php if ($value['done']==1): ?>

							<li>								
								<form action="<?= BASE_URL ?>" method="POST">
									<button title="change status" name="toggleTodo" value="<?= $key?>" class="status done"><?=$value['string']?></button>
									<button title="Delete" name="deleteTodo" value="<?=$key?>">Delete</button>
								</form>
							</li>

						<?php endif ?>

					<?php endforeach ;?>

				</ul>

			<?php else: ?>

				<p>Still some work to do.</p>

			<?php endif; ?>

	<?php endif; ?>


	<h1>Add todo</h1>

	<form action="<?= BASE_URL ?>" method="POST">
		<ul> 
			<li>
				<label for="description">Description: </label>				
				<input type="text" id="description" name="description" autofocus>
			</li>
		</ul>
		<input type="submit" name="addTodo" value="Add todo">		
		<button title="reset list" name="session" value="destroy" class=""> Reset list</button> 
	</form>

    </body>

</html>
