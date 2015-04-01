
<?php

$link = $_SERVER['HTTP_HOST'] . preg_replace('/artikels.*$/', '', $_SERVER['REQUEST_URI']);


var_dump($link, $_GET);



function __autoload($className)
{

	include_once 'classes/' . $className . '-class.php';
}



$type = ( isset($_GET['controller']) ) ? $_GET['controller'] : 'overview';
$tabel 		= ( isset($_GET['tabel']) ) ? $_GET['tabel'] : 'bieren';
$id 		= ( isset($_GET['thirdGet']) ) ? $_GET['id'] : 1;


$something 	=	new Bieren($type, $tabel, $id);

?>