<?php

$num1               =   5;
$num2               =   7;
       

function    somation($num1 , $num2)
{
    $solutionp   =   $num1   +   $num2;
    return $solutionp;
}
$som                =   somation($num1 , $num2);



function    multiply($num1 , $num2)
{
    $solutionm   =   $num1   *   $num2;
    return $solutionm;
}
$mult               =   multiply($num1 , $num2);



function    even($num1 )
{
    if ($num1   %  2 == 0) 
    {
        return  true;
    }
    return  false;
}
$youeven            =   even($num1 );


$string             =   "blablabla and so on";
function    solar($string)
{
    $results["uppercase"]    =   strtoupper($string);
    $results["length"]    =   strlen($string);
    return      $results;
}
$finalresults    =   solar( $string );



##=============================================================================



$thishtml =   '<html><head><title>Dit is een test</title></head><body>Tekst</body></html>';
$lorumarray    =   array(    'Cola' => 'Zero',
                        'Melk' => 'not' );


function        printar($array)
{
    $datarr          =   array();
    foreach ($array as $key => $value) {

        $datarr[]     =   "[ " . $key . " ] has as value " . $value ;
    }
    return  $datarr ;
}
$printarr            =   printar($lorumarray);




function        htmlcheck($html)
{
    $strat          =   "<html>";
    $send           =   "</html>";

    if (strripos($html, $strat) === 0) 
    {
        $thinkpos = strlen( $html ) - strlen( $send );
        if (strripos($html, $send) == $thinkpos) 
        {
            $state     =   array(1 => 1);
        } 
        else
        {
            $state     =   array(1 => 0);
        }
    }


    else 
    {
                $thinkpos = strlen( $html ) - strlen( $send );
        if (strripos($html, $send) == $thinkpos) 
        {
            $state     =   array(0 => 1);
        } 
        else
        {
            $state     =   array(1 => 0);
        }
    }
        return $state;
}
$state1         =   htmlcheck($thishtml);
#return $states [start 1/0] end1/0


?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht functies</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht functies: deel 1</h1>

            <ul>

                <li>Maak een functie <code>berekenSom</code> die 2 parameters heeft, <code>$getal1 = <?= $num1?></code> en <code>$getal2  = <?= $num2?></code>

                    <ul>
                        <li>Zorg ervoor dat in deze functie de som van de twee getallen wordt berekend.</li>
                        <li>Deze functie returnt het resultaat: <?= $som?></li>
                        <li>
                            <p class="remark">Zorg ervoor dat de functie enkel een waarde returnt. Het afdrukken moet buiten de functie gebeuren. 
                                Het combineren van meerdere functionaliteiten in één functie vermindert de herbruikbaarheid van de functie. Probeer vanaf nu te vermijden dat een functie meerdere dingen doet (zoals berekenen én afdrukken), ook al lijkt dit in het begin meer werk.</p>
                        </li>
                    </ul>
                </li>


                <li>Maak een functie <code>vermenigvuldig</code> die 2 parameters heeft, <code>$getal1 = <?= $num1?></code> en <code>$getal2 = <?= $num2?></code>

                    <ul>
                        <li>Zorg ervoor dat in deze functie het product wordt berekend.</li>
                        <li>Deze functie returnt het resultaat: <?= $mult?></li>
                    </ul>
                </li>

                <li>Maak een functie <code>isEven</code> met 1 parameter <code>$getal = <?= $num1?></code>

                    <ul>
                        <li>Zorg ervoor dat in deze functie een boolean returnt die afhankelijk is van het gegeven getal : <?= $youeven1 = ($youeven == true) ? "even" : "uneven" ;?></li>
                    </ul>
                </li>

                <li>Voer al deze functies uit en zorg ervoor dat de resultaten op het scherm verschijnen</li>

                <li class="extension">Maak een functie aan die de lengte én de uppercase-versie van een string <code>"blablabla and so on"</code> returnt. Druk daarna de lengte en de uppercase-versie van de string af buiten de functie. <span class="tip">return een array.</span>
                    <ul>
                   
                        <?php foreach( $finalresults as $key => $value ): ?>
                        <li><?php echo $key ?>: <?php echo $value ?></li>
                        <?php endforeach ?>


                    </ul>
                </li>

            </ul>

            <h1 class="extra">Opdracht functies: deel 2</h1>

            <ul>
                <li>Maak een functie <code>drukArrayAf</code> die 1 parameter heeft, <code>$array</code></li>

                <li>Deze <code>$array</code> bevat enkele waarden die je zelf mag kiezen</li>

                <li>Zorg ervoor dat je uiteindelijk tot dit resultaat komt:

                    <ul>
                        <li>
                            <div class="facade-minimal" data-url="http://www.app.local/index.php">
                                
                                <h1>Opdracht functies</h1>
                                
                                <ul>
                   
                                    <?php foreach($printarr as $key => $value ): ?>
                                    <li><?php echo $key ?>: <?php echo $value ?></li>
                                    <?php endforeach ?>


                                </ul>
                            
                            </div>
                            
                        </li>

                        <li>De naam van de array afdrukken is niet zo belangerijk (mag hardcoded of via een andere inventieve manier)</li>
                        
                        <li class="extension">Zorg ervoor dat je ook meerdimensionale arrays kan afdrukken op dezelfde manier</li>
                    </ul>
                </li>

                <li>Maak een functie <code>validateHtmlTag</code> die 1 parameter heeft, <code>$html</code>

                    <ul>
                        <li>Zorg ervoor dat deze functie kan valideren of er een correcte &lt;html&gt;&lt;/html&gt; tag aanwezig is in de gegeven string <code>$html</code></li>


                            <?php foreach($state1 as $key => $value ): ?>
                                <li>this document has 


                             <?= $res1 = ($key == true) ? " a " : " no " ;?> valid starting html tag and <?= $res2 = ($value == true) ? " a " : " no " ;?> valid ending html tag.</li>

                                <?php endforeach ?>


                    </ul>
                </li>

                <li>Voer al deze functies uit en zorg ervoor dat de resultaten op het scherm verschijnen</li>

            </ul>

        </section>

    </body>
</html>
