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

$displayday =   $day;


$displayday        =   strtoupper($displayday);
$displaydaykappa        =   str_replace('A', 'a', $displayday);
$lasta             =   strrpos($displayday , 'A');
$displaydayreplace        =   substr_replace($displayday , 'a', $lasta , 1); /*looked at the sollutions, why the 1 (will replace all from lasta in day )*/


if (!($number >= 1 && $number <= 7)) 
{
    $displaydaykappa =   'unknown';
    $displaydayreplace='unknown';

}


?>









<!DOCTYPE html>
<html>
<head>
	<title>
		task conditional statements
	</title>
</head>
<body>
<p>If the number = <?php echo "$number" ; ?> than the day is <?php echo $day; ?></p>
<p>If the number = <?php echo "$number" ; ?> than the day is <?php echo $displaydaykappa; ?></p>
<p>If the number = <?php echo "$number" ; ?> than the day is <?php echo $displaydayreplace; ?></p>
</body>
</html>





