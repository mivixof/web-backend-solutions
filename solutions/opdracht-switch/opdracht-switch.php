<?php
$number     =   2 ;




switch ($number) {
    case '1':
        $day = "monday" ;
        break;
    case '2':
        $day = "tuesday" ;
        break;
    case '3':
        $day = "wednesday" ;
        break;
    case '4':
        $day = "thursday" ;
        break;
    case '5':
        $day = "friday" ;
        break;
    case '6':
        $day = "saturday" ;
        break;
    case '7':
        $day = "sunday" ;
        break;

    
    default:
        $day = "please choose a natural number between 1 and 7. Not " . $number . ".";
        break;
}

$day        =   strtolower($day)





?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht switch</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht switch: deel 1</h1>

            <ul>
                <li>Maak een HTML-document met een PHP code-block</li>
                <li>Maak een PHP-script dat aan de hand van een getal ( tussen 1 en 7 ) de bijhorende dag afprint in kleine letters (geen hoofdletters!) zoals <?php echo "$number";?> = <?php echo "$day";?></li>
                <li>Maak gebruik van een switch en probeer alles te herschrijven i.p.v. te kopiëren.</li>
            </ul>  

        </section>

    </body>
</html>
