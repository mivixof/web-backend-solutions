<?php

    $fruit          =   'kokosnoot' ;
    $fruitsize      =    strlen($fruit) ;
    $fruito         =    strpos($fruit, 'o') ;
    $coco           =    $fruit ;

    $fruit          =   'ananas' ;
    $fruitsize2     =    strlen($fruit) ;
    $fruita         =    strrpos($fruit , 'a') ;
    $fruitcaps      =   strtoupper($fruit) ;
    $lettertje      =   'e' ;
    $cijfertje      =   '3' ;
    $langsteWoord   =   'zandzeepsodemineralenwatersteenstralen' ;
    $replace        =   str_replace($lettertje , $cijfertje, $langsteWoord) ;



?>





<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht string extra functions</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht string extra functions: deel 1</h1>

            <ul>
                <li>Maak een variabele <code>$fruit</code> met <?php echo $coco?> als value</li>
                <li>Bereken hoeveel karakters de variabele fruit telt, uiteraard door middel van een PHP-functie: <?php echo $fruitsize ?>.</li>
                <li>Druk <?php echo $coco?> af.</li>
                <li>Bepaal de positie van de eerste 'o' in de variabele <?php echo $coco?>. Druk <?php echo $fruito?> af.</li>
            </ul>
      
            <h1>Opdracht string extra functions: deel 2</h1>

            <ul>
                <li>Maak een variabele <code>fruit</code> met waarde <?php echo $fruit?></li>
                <li>Bepaal de positie van de laatste 'a' in de variabele <?php echo $fruita ?>.</li>
                <li>Druk deze waarde af.</li>
                <li>Zet de value van de <?php echo $fruitcaps?> variable in hoofdletters enkel door gebruik te maken van een PHP-functie.</li>
            </ul>
      
    		<h1>Opdracht string extra functions: deel 3</h1>

    		<ul> 
                <li>Maak een variabele <code>$lettertje</code> met <code>'e'</code> als value</li>
                <li>Maak een variabele <code>$cijfertje</code> met <code>3</code> als value</li>
                <li>Maak een variabele <code>$langsteWoord</code> met <code>'zandzeepsodemineralenwatersteenstralen'</code> als value</li>
                <li>Vervang nu alle e’s in de <code>$langsteWoord</code> variable door 3's. 
                    <p class="remark">Je mag enkel gebruik maken van de variable names. De values  <code>'e'</code>, <code>'3'</code> en <code>'zandzeepsodemineralenwatersteenstralen'</code> mogen in totaal maar één keer in het php-document voorkomen: <?php echo $replace ?>.</p>
                </li>
    		</ul>

        </section>

    </body>
</html>
