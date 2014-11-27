<?php

$md5HashKey         =   'd1fa402db91a7a93c4f414b8278ce073' ;

$num1               =   2;
$num2               =   8;
$num3               =   "a" ;

function    md5h1($num , $md5h)
{
   $md5hsize =  strlen( $md5h );

    $numsize = substr_count ( $md5h, $num );

    $percent = ( $numsize / $md5hsize ) * 100;

    return $percent;
}
$type1                =   md5h1($num1 , $md5HashKey );



function    md5h2($num)
{
    global $md5HashKey;

    $md5hsize =  strlen( $md5HashKey );

    $numsize = substr_count ( $md5HashKey, $num );

    $percent = ( $numsize / $md5hsize ) * 100;

    return $percent;
}
$type2               =   md5h2($num2);



function    md5h3($num )
{
    $md5h = $GLOBALS['md5HashKey'];

    $md5hsize    =  strlen( $md5h );

    $numsize    = substr_count ( $md5h, $num );

    $percent    = ( $numsize / $md5hsize ) * 100;

    return $percent;
}
$type3            =   md5h3($num3);



##==============================================================================================



$pigHealth          =   5 ;
$maximumThrows      =   8 ;


function calculateHit( )
{
    $percent        =   rand(1, 5);

    $hitpercent     = ($percent <= 2) ? 1 : 0 ;


    return $hitpercent;
}


var_dump(calculateHit(5 ));


function    launchAngryBird($health , $shots )
{
    $fired          =   0 ;



    $data           =   array();

    while ( $shots >=0 && $health >0) 
    {
       $hitpercent = calculateHit( );
       $health         = ($hitpercent == 1) ? -- $health : $health;
       $hits = ($hitpercent == 1) ? "Hit, " : "Miss, " ;
       $data[ $shots ] =  $hits . "only " . $health . " pigs left.";
       
       -- $shots ;
    }    
    foreach ($data as $key => $value) 
    {
       if ($shots < 0) 
       {
           $data[$shots]    =   "We lost";
       }
        elseif ($health === 2) 
       {
           $data[$shots] = $hits . "only " . $health . " pig left";
       } 

       elseif ($health < 1) 
       {
           $data[$shots]    =   "We won";
       } 

       {
           # code...
       }
    }
    
return $data;
}
$data1      =   launchAngryBird($pigHealth , $maximumThrows );





var_dump(launchAngryBird($pigHealth , $maximumThrows ));
var_dump($data1);






/*

if (strpos(0 , $value) !== false) {
    # code...
} else {
    # code...
}




for ($i=0; $i < $shots ; $i++) 
{ 
    calculateHit($health , $shots)

    $fired          =   ++ $fired;

}



($health == 1) ? "Hit, only " . $health . "piggies left"  : "Hit, only " . $health . "piggie left" ;

($health == 1) ? "Miss, only " . $health . "piggies left"  : "Miss, only " . $health . "piggie left" ;

($health == 0) ? "stop" : "repete" ;

($fired == (++$shots)) ? "We lost" : "We won" ;


                        <ul>

                        <?php foreach( $data1 as $key => $value ): ?>
                        <li><?= $resultaat ?></li>

<?php if (strpos(0 , $value): ?>

html code to run if condition is true

<?php else: ?>

html code to run if condition is false

<?php endif ?>





                        <?php endforeach ?>


                        </ul>

*/



?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht functies gevorderd</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht functies gevorderd: deel 1</h1>

            <ul>
                <li>Maak een global variable <code>$md5HashKey</code> met als value <code>'d1fa402db91a7a93c4f414b8278ce073'</code></li>

                <li>Maak drie verschillende functies die de global variable <code>$md5HashKey</code> telkens op een andere manier aanspreken. </li>

                <li>Het doel van deze functie is altijd hetzelfde: tellen hoeveel procent een bepaalde parameter voorkomt in <code>$md5HashKey</code>.</li>

                <li>Spreek elke functie één keer aan, telkens met een ander argument:
                    <ul>
                        <li>Argument Functie 1: <code>'2'</code></li>
                        <li>Argument Functie 2: <code>'8'</code></li>
                        <li>Argument Functie 3: <code>'a'</code></li>
                    </ul>
                </li>

                <li>
                    Zorg ervoor dat het volgende wordt weergegeven: 

                    <div class="facade-minimal" data-url="http://www.app.local/index.php">
                        <p>Functie 1: De needle '<?= $num1 ;?>' komt <?= $type1 ?>% voor in de hash key '<?= $md5HashKey ;?>'</p>
                        <p>Functie 2: De needle '<?= $num2 ;?>' komt <?= $type2 ?>% voor in de hash key '<?= $md5HashKey ;?>'</p>
                        <p>Functie 3: De needle '<?= $num3 ;?>' komt <?= $type3 ?>% voor in de hash key '<?= $md5HashKey ;?>'</p>
                    </div>
                </li>

            </ul>

            <h1 class="extra">Opdracht functies gevorderd: deel 2 (Angry Birds)</h1>

            <ul>
               
                <li>De bedoeling is om een versimpelde tekstversie van Angry Birds te maken (<a href="http://chrome.angrybirds.com/" target="_blank">http://chrome.angrybirds.com/</a>)</li>

                <li>Maak een global variable <code>$pigHealth</code> met value <code>5</code> en een global variable <code>$maximumThrows</code> met value <code>8</code></li>

                <li>Maak een functie <code>calculateHit</code>. Deze functie staat in voor:
                    <ul>
                        <li>Het berekenen van de raakkans (40%). Gebruik hiervoor de functie <code>rand</code>.

                        <li>Het verminderen van de <code>$pigHealth</code> variable met één van zodra er raak is geschoten.

                        <li>Het teruggeven van de string <code>'Raak! Er zijn nog maar xxx varkens over.'</code> of <code>'Mis! Nog xxx varkens in het team.'</code> naargelang het resultaat van het willekeurige getal. De xxx moet vervangen worden door het effectieve getal.
                    </li>
                </li>

                <li>Maak een functie <code>launchAngryBird</code>. Deze functie staat in voor:
                    <ul>
                        <li>Deze functie bevat een static variable om bij te houden hoeveel keer de functie reeds is aangeroepen.

                        <li>Zolang deze static variable kleiner is dan het aantal <code>$maximumThrows</code> wordt de static variable met één vermeerderd en spreekt de functie <code>launchAngryBird</code> zichzelf weer aan.

                        <li>Van zodra de static variabele gelijk is de <code>$maximumThrows</code> wordt er gekeken of het <code>$pigHealth</code> gelijk is aan nul. Als dit het geval is moet de boodschap <code>'Gewonnen!'</code> verschijnen. Is de variable pigHealth groter dan nul verschijnt de boodschap <code>'Verloren!'</code>
                        </li>
                    </ul>
                </li>


                <li>Je mag de functie <code>launchAngryBird</code> maximum één keer aanroepen in het document.</li>

                <li>
                    Het eindresultaat moet er ongeveer als volgt uitzien:

                    <div class="facade-minimal" data-url="http://www.app.local/index.php">

                    </div>
                </li>

                <li class="extension">Zorg ervoor dat de tekst grammatisch correct is wanneer <code>$pigHealth</code> gelijk is aan 1</li>

                <li class="extension">Zorg ervoor dat de functie automatisch stopt wanneer <code>$pigHealth</code> gelijk is aan 0</li>

            </ul>
        </section>

    </body>
</html>
