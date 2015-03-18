<?php 

	function __autoload( $classname )
	{
		require_once( $classname . '.php' );
	}


define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );

session_start();

if (isset($_GET ['log'])) 
{
	setcookie("login", 0, time()-420);
	header('location: login-form.php');
}






try {

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
		$_SESSION ['display'] 		=  	1;
		$_SESSION ['email'] 		=	$cookie[ 0 ];
	} 
	else 
	{
		setcookie("login", 0, time()-360);
		header('location: login-form.php');
	}

}
else
{
	header('location: login-form.php');
}







} 
catch (Exception $e) 
{
	$_SESSION ['notes']['type'] 		= 'error';
	$_SESSION ['notes']['message'] 		= 'non connect';
}


var_dump($cookie [ 1 ], $red[ 0 ] ['hashed_password']);
var_dump($_COOKIE, $_SESSION);




 ?>





 <!DOCTYPE html>
 <html>
 <head>
 	<title>dashboard</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
 </head>
 <body>
<?php if (isset($_SESSION ['notes']['message'])): ?>
	<p> <?= $_SESSION ['notes']['message'] ?> </p>
<?php endif ?>
	<?php if (isset($_SESSION ['display'])): ?>



		<p><a href="dashboard.php">Terug naar dashboard</a> | Ingelogd als <?= $_SESSION ['email'] ?> | <a href="<?= BASE_URL . '?log=' ?>">Logout</a>/p>   


 		<h1>Dashboard</h1>

            <ul>
                <li><a href="artikel-overzicht.php">Artikels</a></li>
            </ul>

    <?php endif ?>

</body>
</html>
 </body>
 </html>