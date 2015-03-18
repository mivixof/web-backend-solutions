<?php 

session_start()


unset($_SESSION ['notes']);

  function __autoload( $classname )
    {
        require_once( $classname . '.php' );
    }

try {
    

    $db = new PDO('mysql:host=localhost;dbname=opdracht-cms', 'root', ''); 

    $db =   new Database( $db );


	$statement     =   'INSERT INTO artikels 
                                    (titel , 
                                    artikel , 
                                    kernwoorden , 
                                    datum) 
                                    VALUES (
                                            :titel,
                                            :artikel,
                                            :kernwoorden ,
                                            :datum)';
    $add         =   array(
                                    ':titel'            => $_POST ['titel'];,
                                    ':artikel'          => $_POST ['artikel'];	
                                    ':kernwoorden '  	=> $_POST ['kernwoorden'];	
                                    ':datum'  			=> $_POST ['datum)'];	
                                    );
    $result   =   $db->query( $statement , $add);


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