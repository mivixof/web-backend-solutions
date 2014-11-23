<?php

$animals[]      =   "labrador";
$animals[]      =   "pug";
$animals[]      =   "fish";
$animals[]      =   "dog";
$animals[]      =   "cat";


$amount         =   count($animals);

$search         =   "pug";

$found          =   in_array($search , $animals );

if ($found = true) 
{
    $text       =   $search . " was found";
} else {
    $text       =   $search . " was not found";
}


var_dump($animals);
$animalssorted  =   $animals;

$sort           =   sort($animalssorted);


var_dump($animals);
var_dump($animalssorted);


$mamels []      =   "cats";
$mamels []      =   "dogs";
$mamels []      =   "wales";

$merged         =   array_merge($animals , $mamels);

var_dump($merged);




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
            
            <h1>Opdracht array functies: deel 1</h1>

            <ul>
                <li>Maak een array waarin je meer dan 5 dieren plaatst</li>

                <li>Laat het script berekenen hoeveel elementen er in de array zitten en druk af naar het scherm</li>

                <li>Maak het mogelijk om met een variabele <code>$teZoekenDier</code> een dier te zoeken in de array, druk tevens een gepaste boodschap af <?php echo "$text";?>.</li>

            </ul> 

            <h1 class="extra">Opdracht array functies: deel 2</h1>

            <ul>
                <li>Ga verder op deel 1 (maar maak een aparte kopie voor, overschrijf het origineel niet!)</li>

                <li>Zorg ervoor dat de array volgens het alfabet gesorteerd wordt ( A -> Z )
                Maak een array <code>$zoogdieren</code> en plaats hier 3 dieren in, voeg vervolgens de 2 arrays met dieren samen in de array <code>$dierenLijst</code>
                    
                    <ul><?php foreach ($merged as $key => $value): ?>
                        <li><?php echo "$value";?></li>
                        <?php endforeach ?>
                      
                        
                    </ul>
                </li>
            </ul>


            <h1 class="extra">Opdracht array functies: deel 3</h1>

            <ul>
                <li>Maak een HTML-document met een PHP code-block</li>

                <li>Maak een array met volgende waarden:
                    <p>8, 7, 8, 7, 3, 2, 1, 2, 4</p>
                </li>

                <li>Haal de duplicaten uit de array</li>

                <li>Sorteer de array van groot naar klein</li>

                <li></li>

            </ul>

        </section>

    </body>
</html>