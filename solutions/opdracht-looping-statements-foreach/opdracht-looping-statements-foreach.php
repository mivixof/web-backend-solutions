<?php

/*
get file
text to array for each character
reverse sort
sort
count uniques
count repeats for uniques
count full lenth

*/



#get file
$text               =   file_get_contents("text-file.txt");

$textchars          =   array();

$length             =   strlen( $text );


#text to array for each character
for ($counter = 0; $counter < $length; ++$counter )
{
    $textchars[]   =   substr( $text, $counter, 1 );
}


#reverse sort (z-a)
$revsortchars       =   $textchars;

rsort($revsortchars) ;

#sort (a-z)
$sortchars          =   $textchars ;

sort($sortchars) ;


#count repeats for uniques
$uniquecount        =   array_count_values($sortchars) ;


#count uniques
$variety            =   count($uniquecount);


#count full lenth

$lowtext            =   strtolower($text); 

$uniquecount        =   array_count_values($sortchars) ;




##==================================================================================



#filter letters from non letters and restarted


$filtered           =   preg_replace("/[^a-z]/" , '' , $lowtext);

$filtertextchars          =   array();

$filterlength             =   strlen( $filtered);

for ($counter = 0; $counter < $filterlength; ++$counter )
{
    $filtertextchars[]   =   substr( $filtered, $counter, 1 );
}



$filteruniquecount        =   array_count_values($filtertextchars) ;


#count uniques
$filtervariety            =   count($filteruniquecount);


/*

1. reg expres

if (preg_replace("/[^a-z]/",'') {
  echo "Match was found <br />";
  echo $matches[0];
}

$filter             =   "/[a-z]/";
$textchars2          =   array();
if (preg_match($filter, $text) == 1) 
{
    for ($counter = 0; $counter < $length; ++$counter )
{
    $textchars2[]   =   substr( $lowtext, $counter, 1 );
}
}
*/

var_dump($length);
var_dump($filtertextchars);
# var_dump($uniquecount) ;
#var_dump($variety) ;

?>






<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht foreach</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht foreach: deel 1</h1>

            <ul>
                <li>Maak een HTML-document met een PHP code-block</li> 

                <li>
                    Lees de tekst (text-file.txt) in en stop de tekst in een variabele <code>$text</code>
                    <span class="tip">Misschien helpt de functie <code>file_get_contents</code></span>
                </li>

                <li>Splits de tekst op per karakter en sla deze op in een array <code>$textChars</code> ( dus een array die bestaat uit waarden van maximum 1 karakter)</li>

                <li>Zorg ervoor dat deze array gesorteerd wordt van Z naar A</li>

                <li>Draai nu de volgorde van de array volledig om</li>

                <li>Zorg er nu voor dat je via een for-lus alle karakters van de tekst overloopt en bijhoudt hoeveel keer elk karakter voorkomt. Toon een lijst met:
                    <ul>
                        <li>Hoeveel verschillende karakters er in totaal voorkomen <?= $variety ; ?></li>
                        <li>Hoeveel elk karakter voorkomt.
                            <pre><?php var_dump($uniquecount)?></pre></li>
                    </ul>
                </li>
            </ul>

            <h1 class="extra">Opdracht foreach: deel 2</h1>

            <ul>
                <li>Maak een HTML-document met een PHP code-block</li> 

                <li>Maak een variabele <code>$tekst</code> met waarde (volledige inhoud van text-file.txt)</li>

                <li>Analyseer hoe vaak elke letter van het alfabet voorkomt in de tekst (enkel de letters uit het alfabet, geen onderscheid tussen hoofdletters en kleine letters)</li>

                <li>Toon de resultaten op het scherm, bv.
                    
                    <div class="facade-minimal" data-url="http://www.app.local/index.php">
                        
                        <ul>
                            <li>E x 265</li>
                            <li>A x 245</li>
                            <li>...</li>
                        </ul>

                    </div>
                    
                    <p class="tip">Doe wat opzoekingswerk vooraleer je aan deze opdracht begint.</p>
                </li>
            </ul> 

        </section>
      

    </body>
</html>
