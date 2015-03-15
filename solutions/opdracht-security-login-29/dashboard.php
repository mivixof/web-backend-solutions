<?php 

	function __autoload( $classname )
	{
		require_once( $classname . '.php' );
	}


session_start();
session_destroy();

define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );






try {

$db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root', ''); 

    $db =   new Database( $db );










if (isset($_COOKIE ['login'])) 
{
	$cookie 		= 	explode(',', $_COOKIE ['login']);

	$red	=	$db->query(	'SELECT email, hashed_password
										FROM users 
										WHERE email = :email',
										array(':email' => $cookie [0]));


}



if ($cookie [ 1 ]  == $red[ 0 ] ['hashed_password']) 
{
	$displaypage = 1;
	return;
} 
else 
{
	setcookie("login", 0, 0);
	header('location: login-form.php');
}





} 
catch (Exception $e) 
{
	$message = 'non connect';
}


var_dump($cookie [ 1 ], $red[ 0 ] ['hashed_password']);
















 ?>





 <!DOCTYPE html>
 <html>
 <head>
 	<title>dashboard</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
 </head>
 <body>
	<?php if (isset($displaypage)): ?>


 		<h1>Dashboard</h1>

  		<a href="logout.php">Logout</a>


    <?php endif ?>

</body>
</html>
 </body>
 </html>