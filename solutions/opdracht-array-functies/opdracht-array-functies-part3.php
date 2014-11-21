<?php

$numberlist [ ]         =   8 ;
$numberlist [ ]         =   7 ;
$numberlist [ ]         =   8 ;
$numberlist [ ]         =   7 ;
$numberlist [ ]         =   3 ;
$numberlist [ ]         =   2 ;
$numberlist [ ]         =   1 ;
$numberlist [ ]         =   2 ;
$numberlist [ ]         =   4 ;

$norepeat               =   array_unique($numberlist) ;
$sortnorepeat           =   $norepeat;
$sort                   =   sort($sortnorepeat);
/*
var_dump($numberlist);
var_dump($norepeat);
var_dump($sortnorepeat);
*/
?>



<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht array functies</title> 
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">

            <h1 class="extra">Opdracht array functies: deel 3</h1>

            <ul>
                <li>Maak een HTML-document met een PHP code-block</li>

                <li>Maak een array met volgende waarden:
                <ul><?php foreach ($numberlist as $key => $value): ?>
                        <li><?php echo "$value";?></li>
                        <?php endforeach ?>
                    </ul>
                </li>

                <li>Haal de duplicaten uit de array
                    <ul><?php foreach ($norepeat as $key => $value): ?>
                        <li><?php echo "$value";?></li>
                        <?php endforeach ?>
                      
                        
                    </ul>
                </li>

                <li>Sorteer de array van groot naar klein
                    <ul><?php foreach ($sortnorepeat as $key => $value): ?>
                        <li><?php echo "$value";?></li>
                        <?php endforeach ?>
                      
                        
                    </ul>
                </li>

            </ul>

        </section>

    </body>
</html>
