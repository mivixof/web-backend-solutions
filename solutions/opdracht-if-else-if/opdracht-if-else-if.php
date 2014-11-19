
<?php
$number     =   21 ;
$lower      =   floor($number / 10 ) ;
$lower      =   $lower * 10 ;
$upper      =   $lower + 10 ;

/*
if ($number <= upper && $number >= lower  ) {
    # code...
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
