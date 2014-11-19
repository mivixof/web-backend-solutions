
<?php
$number     =   21 ;
$lower      =   floor($number / 10 ) ;
$lower      =   $lower * 10 ;
$upper      =   $lower + 10 ;

/*
if ($number <= 10 && $number >= 20  ) {
    $lower      =   10 ;
    $upper      =   10 + $lower ;
}

elseif ($number <= 20 && $number >= 30  ) {
    $lower      =   20 ;
    $upper      =   10 + $lower ;
}

elseif ($number <= 30 && $number >= 40  ) {
    $lower      =   30 ;
    $upper      =   10 + $lower ;
}
elseif ($number <= 40 && $number >= 50  ) {
    $lower      =   40 ;
    $upper      =   10 + $lower ;
}
elseif ($number <= 50 && $number >= 60  ) {
    $lower      =   50 ;
    $upper      =   10 + $lower ;
}
elseif ($number <= 60 && $number >= 70  ) {
    $lower      =   60 ;
    $upper      =   10 + $lower ;
}
elseif ($number <= 70 && $number >= 80  ) {
    $lower      =   70 ;
    $upper      =   10 + $lower ;
}
elseif ($number <= 80 && $number >= 90  ) {
    $lower      =   80 ;
    $upper      =   10 + $lower ;
}
elseif ($number <= 90 && $number >= 100  ) {
    $lower      =   90 ;
    $upper      =   10 + $lower ;
}

else
{
    $text       =   $number . "does not lie between 0 and 100"
}
*/


if ($number >  100) 
{
    $text       =   $number . " Serious? I don't work above 100";
}
elseif ($number < 0 ) 
{
    $text       =   $number . " Don't be so negative";
}
else 
{
    $text       =   'the number ' . $number . ' lies between ' . $lower . ' and ' .$upper;
}


$reversetext    =   strrev($text);





?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht if else if</title> 
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht if else if: deel 1</h1>

            <ul>
                <li>Maak een getal met een waarde tussen 1-100</li>
                <li>Zorg ervoor dat het script kan zeggen tussen welke tientallen het getal ligt, bv '<?php echo "$text";?>'.</li>
                <li>Zorg er vervolgens voor dat de boodschap omgekeerd afgedrukt wordt, bv '<?php echo "$reversetext";?>'.</li>
            </ul>  
        
        </section>

    </body>
</html>
