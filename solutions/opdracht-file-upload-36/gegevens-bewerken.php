<?php 




var_dump($_FILES);



//filter


$name  		=	$_FILES ['profile_picture'] ['name'];
$type  		=	$_FILES ['profile_picture'] ['type'];
$tmp_name  	=	$_FILES ['profile_picture'] ['tmp_name'];
$error  	=	$_FILES ['profile_picture'] ['error'];
$size  		=	$_FILES ['profile_picture'] ['size'];



	if ((($type == 'image/gif' )||( $type == 'image/jpeg') || ($type == 'image/jpg')  || ($type == 'image/jpg')) && $size <= 2000000) 
	{
		$date 		= 	date("Y-m-d H:i:s");
		$explodetype = explode('/', $type);
		$type = $explodetype[1];
		$name = substr_replace($name, "", -4);

		$_FILES ['profile_picture'] ['name'] = $date . '_' . $name . '.' . $type
		
	}
	else
	{

		$_SESSION ['notes'] ['message'] = "apropriate error";
		header('location: gegevens-wijzigen-form.php');
	}








var_dump($_FILES);






 ?>