<?php 
session_start()

session_start()


unset($_SESSION ['notes']);

  function __autoload( $classname )
    {
        require_once( $classname . '.php' );
    }

try {
    

    $db = new PDO('mysql:host=localhost;dbname=opdracht-cms', 'root', ''); 

    $db =   new Database( $db );



$red	=	$db->query(	'	SELECT 
									titel , 
	                                artikel , 
	                                kernwoorden , 
	                                datum
							FROM 	
									artikels',
											'';


    if ($result)
	{

		$_SESSION ['notes']['type'] 	= 'error';
		$_SESSION ['notes']['message'] 	= 'did not add article.';

		header('location: artikel-toevoegen-form.php');
	}
	else 
	{
		$_SESSION ['notes']['type'] 	= 'ok';
		$_SESSION ['notes']['message'] 	= 'article added';

		header('location: artikel-toevoegen-form.php');
	}
    


} 
catch (Exception $e) 
{
    $_SESSION ['notes']['type']         = 'error';
    $_SESSION ['notes']['message']      = 'non connect';
}





 ?>




 <!DOCTYPE html>
 <html>
 <head>
 	<title>artikels overzicht</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
 </head>
 <body>
 <?php if (isset($_SESSION ['notes']['message'])): ?>
	<p> <?= $_SESSION ['notes']['message'] ?> </p>
<?php endif ?>
                        
                        <p><a href="dashboard.php">Terug naar dashboard</a> | Ingelogd als <?= $_SESSION ['email']?> | <a href="logout.php">uitloggen</a></p>   
                        
                        <h1>Overzicht van de artikels</h1>
                        
                        <p>Geen artikels gevonden</p>

                        <p><a href="artikel-toevoegen-form.php">Voeg een artikel toe</a></p>


 </body>
 </html>