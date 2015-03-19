<?php 

    session_start();

    function relocate( $url )
    {
        header('location: ' . $url );
    }

    function my_autoloader($class) {
        include 'classes/' . $class . '.php';
    }

    spl_autoload_register( 'my_autoloader' );

    define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );
    define( 'HOST', dirname( BASE_URL ) . '/');
    
    $message    =   false;

    if ( Message::hasMessage() )
    {
        $message = Message::getMessage();

        Message::remove();
    }


    $db = new PDO('mysql:host=localhost;dbname=opdracht-cms', 'root', ''); // Connectie maken

    $databaseWrapper    =   new Database( $db );

    $user = new User( $databaseWrapper );

    if ( !$user->validate() )
    {
        new Message( "U moet eerst inloggen", "error" );
        relocate("oplossing-security-login-login-form.php");
    }


    //===============================================================================


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
                                    ':titel'            => $_POST ['titel'],
                                    ':artikel'          => $_POST ['artikel'],	
                                    ':kernwoorden '  	=> $_POST ['kernwoorden'],	
                                    ':datum'  			=> $_POST ['datum)']
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