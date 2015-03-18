<?php 

session_start();

define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );

	function __autoload( $classname )
	{
		require_once( $classname . '.php' );
	}

try 
{

	$db = new PDO('mysql:host=localhost;dbname=opdracht-cms', 'root', ''); 

    $db =   new Database( $db );


	if (isset($_COOKIE ['login'])) 
	{
	
		$cookie 		= 	explode(',', $_COOKIE ['login']);

		$red	=	$db->query(	'SELECT email, hashed_password
											FROM users 
											WHERE email = :email',
											array(':email' => $cookie [0]));

		if ($cookie [ 1 ]  == $red[ 0 ] ['hashed_password']) 
		{
			$_SESSION ['display'] 		=  1;
			header('location: dashboard.php');
		} 
		else 
		{
			setcookie("login", 0, time()-360);
			header('location: login-form.php');
		}
	}

	if (isset($_POST ['password']) && isset($_POST ['email'])) 
	{

		$password 		=	$_POST ['password'];
		$email			=	$_POST ['email'];


		$_SESSION ['password']		=			$_POST ['password'];
		$_SESSION ['email']			=			$_POST ['email'];


		$rev	=	$db->query(	'SELECT email, hashed_password, salt
								FROM users 
								WHERE email = :email',
								array(':email' => $_SESSION['email']));


		$wassword 		= 	hash('sha256', $rev[ 0 ] ['salt'] . $_SESSION['password']);
		$dbpass 		=	$rev[ 0 ] ['hashed_password'];

		if ($wassword == $dbpass)
		{
			$value = $rev[ 0 ] ['email'] . ',' . $rev[ 0 ] ['hashed_password'];

			setcookie("login", $value, time()+2592000);
			header('location: dashboard.php');
		} 
		else 
		{
			$_SESSION ['notes']['type'] 		= 'error';
			$_SESSION ['notes']['message'] 	= 'wrong email or password';
			header('location: login-form.php');
		}
	}


} 
catch (Exception $e) 
{
	$_SESSION ['notes']['type'] 		= 'error';
	$_SESSION ['notes']['message'] 		= 'non connect';
}
header('location: login-form.php');
 ?>