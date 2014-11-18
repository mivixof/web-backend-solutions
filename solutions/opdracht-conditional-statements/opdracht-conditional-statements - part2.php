<?php

$number 	= 	1; 
$day 		=	'onbekende dag';


      
if ( $number == 1 ) 
{ 
    $day = 'maandag'; 
} 
  
if ( $number == 2 ) 
{ 
    $day = 'dinsdag'; 
} 
  
if ( $number == 3 ) 
{ 
    $day = 'woensdag'; 
} 
  
if ( $number == 4 ) 
{ 
    $day = 'donderdag'; 
} 
  
if ( $number == 5 ) 
{ 
    $day = 'vrijdag'; 
} 
  
if ( $number == 6 ) 
{ 
    $day = 'zaterdag'; 
} 
  
if ( $number == 7 ) 
{ 
    $day = 'zondag'; 
} 

$day        =   strtoupper($day);
$day        =   str_replace('A', 'a', $day);
$lasta      =   strrpos($day , 'a');
$day        =   substr_replace($day , 'a', $lasta , 1); /*looked at the sollutions, why the 1 */

?>









<!DOCTYPE html>
<html>
<head>
	<title>
		task conditional statements
	</title>
</head>
<body>
<p>If the number = 1 than the day is <?php echo $day; ?></p>
</body>
</html>





