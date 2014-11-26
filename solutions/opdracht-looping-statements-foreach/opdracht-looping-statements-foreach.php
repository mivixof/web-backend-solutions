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

#$textchars          =   str_split($text)

#reverse sort (z-a)
$revsortchars       =   $textchars;

rsort($revsortchars) ;

#sort (a-z)

#$sortchars          =   array_reverse($textchars)

$sortchars          =   $textchars ;

sort($sortchars) ;


#count repeats for uniques
$uniquecount        =   array_count_values($sortchars) ;


#count uniques
$variety            =   count($uniquecount);


#count full lenth

$lowtext            =   strtolower($text); 




##==================================================================================



#filter letters from non letters and restarted


$filtered           =   preg_replace("/[^a-z]/" , '' , $lowtext);

$filtertextchars          =   array();

$filterlength             =   strlen( $filtered);

for ($counter = 0; $counter < $filterlength; ++$counter )
{
    $filtertextchars[]   =   substr( $filtered, $counter, 1 );
}

sort($filtertextchars);

$filteruniquecount        =   array_count_values($filtertextchars) ;

$filtervariety            =   count($filteruniquecount);




/*
or

$filtervariety      =   count_chars($lowtext );
$alfabet            =   array ();


for ($charnum = 65; $charnum  <= 90 ; ++ $charnum ) 
{ 
    
    if (isset($filtervariety [$charnum] ) ) 
    {
        
    $charord        =   chr($charnum);
    
    $alfabet  [$char]    =   $filtervariety [$charnum];

}


}
*/


/*

1. reg expres

if (preg_replace("/[^a-z]/",'',$text) {
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


suggestion


$counter = 0;
$lorem = preg_split('//', $intext, -1, PREG_SPLIT_NO_EMPTY);

foreach($chars as $character)
{
if (preg_match($character))
 $counter++
}
*/

#var_dump($length);
#var_dump($filteruniquecount );
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
                        
                            <?php foreach ($filteruniquecount as $key => $value): ?>
                            <li> <?php echo "$key";?>  x <?php echo "$value";?></li>
                            <?php endforeach?>

                        </ul>

                    </div>
                    
                    <p class="tip">Doe wat opzoekingswerk vooraleer je aan deze opdracht begint.</p>
                </li>
            </ul> 

        </section>
      

    </body>
</html>
