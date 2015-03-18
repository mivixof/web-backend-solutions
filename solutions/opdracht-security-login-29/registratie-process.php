<?php 


	function __autoload( $classname )
	{
		require_once( $classname . '.php' );
	}






session_start();

define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );


function generatePassword ($caps, $num, $sigh, $len)
{
	$numbers 	= 	'';
	$capitals 	= 	'';
	$signs		=	'';


	if ($caps == 1) 
	{
		$capitals	= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	}
	if ($caps == 2) 
	{
		$capitals 	= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	}
	if ($caps == 3) 
	{
		$capitals 	= 'abcdefghijklmnopqrstuvwxyz';
	}
	if ($num == 1) 
	{
		$numbers 	= '0123456789';
	}
	if ($sigh == 1) 
	{
		$signs 		= '!@#$%^&*()_+-=[]{}\\|';
	}

	$total			=	$numbers . $capitals . $signs;

	return substr(str_shuffle($total), 0, $len);

}

if (isset($_POST ['generatePassword']) && ($_POST ['generatePassword'] == 'Generate password')) 
{
	$_SESSION ['password'] = generatePassword(2, 1, 1, 10);
						$_SESSION ['clear'] = 'clear';
						header('location: registratie-form.php');
}




try 
{
	$db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root', ''); 

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
			header('location: registratie-form.php');
		}
	}

	if (isset($_POST ['submit'] )) 
	{
		$_SESSION['email'] 		= $_POST ['email'];
		$_SESSION['password'] 	= $_POST ['password'];

		if ($_POST ['password'] == '' || $_POST ['email'] == '') 
		{
			$_SESSION ['notes']['type'] = 'error';
			$_SESSION ['notes']['message'] = 'password and/or email are not filled in';

			header('location: registratie-form.php');

		}
		else
		{
			/*
			##manual


			$pattern 	=	'/[\w!#$%&\'*+\/=?^_`{|}~-]+(?:\.[\w!#$%&\'\*+\/=?\^_`{|}~-]+)*@(?:[\w]*\.)+(?:\w{2}|com|org|net|gov|mil|biz|info|mobi|name|aero|jobs|museum)\b/';

			$check 	=	preg_match($pattern, $_SESSION['email'] );

			*/
			$check	=	filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL);


			if (!$check) 
			{
				$_SESSION ['notes']['type'] = 'error';
				$_SESSION ['notes']['message'] = 'email not correct';
				header('location: registratie-form.php');
			} 
			else 
			{

				$emailcheck	=	$db->query(	'SELECT email 
											FROM users 
											WHERE email = :email',
											array(':email' => $_SESSION['email']));



				if ( isset( $emailcheck[ 0 ] ) )
				{
					$_SESSION ['notes']['type'] 		= 'error';
					$_SESSION ['notes']['message'] 	= $_SESSION['email'] . ' is taken';
					header('location: registratie-form.php');
				}
				else 
				{
					$date 		= 	date("Y-m-d H:i:s");

					$salt		=	generatePassword (2, 1, 1, 22);

					$hash 		= 	hash('sha256', $salt . $_SESSION['password']);

					$statemant2 	=	'INSERT INTO users 
													(email, 
													salt, 
													hashed_password, 
													last_login_time) 
													VALUES (
															:email,
															:salt,
															:hashed_password,
															:last_login_time)';
					$denom2 		=	array(
												    ':email' 			=> $_SESSION['email'],
												    ':salt'				=> $salt,
													':hashed_password'	=> $hash,
													':last_login_time'	=> $date
												    );
					$emailadd	=	$db->query(	$statemant2 , $denom2);

					if ($emailadd)
					{

						$_SESSION ['notes']['type'] 	= 'error';
						$_SESSION ['notes']['message'] 	= 'internal error';
						header('location: registratie-form.php');
					}
					else 
					{
						
						unset($_SESSION ['notes']);


						$rev	=	$db->query(	'SELECT email, hashed_password
												FROM users 
												WHERE email = :email',
												array(':email' => $_SESSION['email']));

						#var_dump($rev);

						$value = $rev[ 0 ] ['email'] . ',' . $rev[ 0 ] ['hashed_password'] ;
						setcookie("login", $value, time()+2592000);
						session_destroy();

						header('location: dashboard.php');
					}
				}
			}
		}
	}
} 
catch (Exception $e) 
{
	$_SESSION ['notes']['type'] 		= 'error';
	$_SESSION ['notes']['message'] 		= 'non connect';
}


#var_dump($_POST);
#var_dump($_SESSION);

#include_once 'registratie-form.php';


//header('location: login-form.php');


#unset(			$_SESSION ['notes'] );






 ?>