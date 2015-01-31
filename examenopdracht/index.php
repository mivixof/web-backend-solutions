<?php 

















 ?>















<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Todo App</title>
        <link rel="stylesheet" href="global.css">
    </head>
    <body>

    <h1>Todo app</h1>

						
			<h2>Nog te doen</h2>

							
				<ul>
			









				</ul>
			
			<h2>Done and done!</h2>

									
				<p>Werk aan de winkel...</p>



				<ul>






				</ul>

								
			
		
		<h1>Todo toevoegen</h1>

		<form action="/syntra/examen-web-backend-01/index.php" method="POST">

			<ul>
				<li>
					<label for="description">Beschrijving: </label>
					<input type="text" id="description" name="description">
				</li>
			</ul>

			<input type="submit" name="addTodo" value="Toevoegen">

		</form>
    </body>
</html>
