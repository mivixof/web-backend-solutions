<?php 

session_start();

define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );

$db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root', ''); 

$db =   new Database( $db );


if (isset($_POST ['submit'] )) 
{
	$_SESSION['email'] = $_POST ['email'];
	$_SESSION['password'] = $_POST ['password'];

	if ($_POST ['password'] == '' || $_POST ['email'] == '') 
	{
		$message = 'password and/or email are not filled in';
	}
	else
	{
		/*
		##manual


		$pattern 	=	'/[\w!#$%&\'*+\/=?^_`{|}~-]+(?:\.[\w!#$%&\'\*+\/=?\^_`{|}~-]+)*@(?:[\w]*\.)+(?:\w{2}|com|org|net|gov|mil|biz|info|mobi|name|aero|jobs|museum)\b/';

		$check 	=	preg_match($pattern, $_SESSION['password'] );

		*/
		$check	:	filter_var($_SESSION['password'], FILTER_VALIDATE_EMAIL);


		if (!$check) 
		{
			$_SESSION ['type'] = 'error';
			$_SESSION ['message'] = 'email not correct';
		} 
		else 
		{
			$emailcheck	=	$db->query(	'SELECT email FROM users WHERE email = :email', 
										array(':email' => $_SESSION['email'] ) );


			if ( isset( $emailcheck['data'][ 0 ] ) )
			{
				$_SESSION ['type'] 		= 'error';
				$_SESSION ['message'] 	= $_SESSION['email'] ' taken';
			}
			else 
			{
				$emailadd	=	$db->query(	'INSERT INTO opdracht-security-login.users (index, email, salt, hashed_password, last_login_time) 
				VALUES (
						:email,
						:salt,
						:hashed_password,
						:last_login_time
				    );'

			}
		}
		
	}
}







array_search($_SESSION['password'], haystack)














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
	$passwordValue = generatePassword(2, 1, 1, 10);
}

var_dump($_POST);
var_dump($_SESSION);

















include_once 'index.php';








/*



'INSERT INTO `opdracht-security-login`.`users` (`index`, `email`, `salt`, `hashed_password`, `last_login_time`) VALUES ('1', 'mivixof@gmail.com', 'wsxdrcfvgbhnrdfgbh', 'grxdhcfvgjybhjnlijk,k', '2015-03-03');'








 $editBrouwerString  =   'UPDATE brouwers
                                    SET brnaam = :brnaam,
                                            adres = :adres,
                                            postcode = :postcode,
                                            gemeente = :gemeente,
                                            omzet = :omzet
                                    WHERE brouwernr = :brouwernr';

        $editBrouwerPlaceholders = array( 
                                    ':brnaam' => $_POST[ 'brnaam' ],
                                    ':adres' => $_POST[ 'adres' ],
                                    ':postcode' => $_POST[ 'postcode' ],
                                    ':gemeente' => $_POST[ 'gemeente' ],
                                    ':omzet' => $_POST[ 'omzet' ],
                                    ':brouwernr' => $editBrouwerId 
                                );

        $dbInstanceTemp->query( $editBrouwerString, $editBrouwerPlaceholders );



*/





 ?>