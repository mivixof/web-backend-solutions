<?php 

session_start();




if (isset($_POST ['file']) && isset($_POST ['description']) && isset($_POST ['title'])) 
{
	if (isset($_$FILES)) 
	{
		$return = uploadCheck(100 , 100 );	
		if (!$return) {
			# code...
		}
	}
}
else 
{
	$_SESSION ['notes'] ['message'] = "error, something not filled in"
}




## dim = 100*100




function uploadCheck($tarw, $tarh)
{

	/**
	*info
	*/
	$name  		=	$_FILES ['file'] ['name'];
	$type  		=	$_FILES ['file'] ['type'];
	$tmp_name  	=	$_FILES ['file'] ['tmp_name'];
	$error  	=	$_FILES ['file'] ['error'];
	$size  		=	$_FILES ['file'] ['size'];


	/**
	*type validation
	*/


	if ((($type == 'image/gif' )||( $type == 'image/jpeg') || ($type == 'image/png')  || ($type == 'image/jpg')) && $size <= 2000000) 
	{

		/**
		*move original to /img
		*/

		$date 			= 	date("Y,m,d+H.i.s");
		$explodetype 	= 	explode('/', $type);
		$type 			= 	$explodetype[1];
		$name 			= 	substr_replace($name, "", -4);
		$extra 			= 	'ntx' . mt_rand(1000,9999);

		$fileloc 		= 	realpath('img') . '\\' . $date . $extra . '_' . $name . '.' . $type;

		move_uploaded_file($tmp_name, $fileloc);

		var_dump($fileloc);





##===================================================================

		function MakeSquare($fileloc, $type, $width, $height)
		{
					

		/**
		*create editable temp
		*/


		switch ($type)
		{
			case ('jpg'):
			case ('jpeg'):
				$source 	= 	imagecreatefromjpeg($fileloc);
				$newloc 			= 	substr_replace($fileloc, "", -5);
				break;
				
			case ('png'):
				$source 	=	imagecreatefrompng($fileloc);
				$newloc 			= 	substr_replace($fileloc, "", -4);
				break;

			case ('gif'):
				$source 	=	imagecreatefromgif($fileloc);
				$newloc 			= 	substr_replace($fileloc, "", -4);
				break;
		}





			list($width, $height) = getimagesize($fileloc);

			$xstart = 0;
			$ystart = 0;

			if ($width > $height) 
			{
				$xstart = round(( $width - $height )/2);
				$width = $height;
			}
			elseif ($width < $height)
			{
				$ystart = round(( $height - $width )/2);
				$height = $width;
			}


			$cropinfo = array(	'x' => $xstart,  
								'y' => $ystart,  
								'width' => $width, 
								'height'=> $height);

		/**
		*crop
		*/

	$croppedimg = imagecrop($source, $cropinfo);

	imagejpeg($croppedimg, (str_replace(realpath('img') . '\\', realpath('img') . '\\crop-', $newloc). '.jpg'), 100);



var_dump($croppedimg);
	return $cropper = array(	0 =>$croppedimg ,
								 1 => $width); 





		}

##==================================================================================
		list($width, $height) = getimagesize($fileloc);


		if ($tarw == $tarh) 
		{
			list($croppedimg , $width) = MakeSquare($fileloc, $type, $width, $height);
			$height = $width;
		}


var_dump($croppedimg);

		$thumb 	=	imagecreatetruecolor($tarw, $tarh);

		$thumbloc = realpath('img') . '\\thumb-' . $date . $extra . '_' . $name . '.jpg';


		imagecopyresized($thumb, $croppedimg, 0, 0, 0, 0, $tarw, $tarh, $width +1, $height +1);
		
		imagejpeg($thumb, $thumbloc , 100);

		return $thumbloc;

	}
	else 
	{
		return 0;
	}
}

































 ?>