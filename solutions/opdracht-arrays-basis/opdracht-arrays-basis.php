<?php

$animals        = array('animal1' , 'animal2' , 'animal3' , 'animal4' , 'animal5' , 'animal6' , 'animal7' , 'animal8' , 'animal9' , 'animal0' );


$animals2[0]     =   "animal 0";
$animals2[1]     =   "animal 1";
$animals2[2]     =   "animal 2";
$animals2[3]     =   "animal 3";
$animals2[4]     =   "animal 4";
$animals2[5]     =   "animal 5";
$animals2[6]     =   "animal 6";
$animals2[7]     =   "animal 7";
$animals2[8]     =   "animal 8";
$animals2[9]     =   "animal 9";

$vehicles       =   array("on land" => array("car" , "tank") , "in water" =>array("ship" , "jetski") , "in air " => array("airbus"));

$vehicles2["on land"]       =  array("car" , "tank") ;
$vehicles2["in water"]       =  array("ship" , "jetski")  ;
$vehicles2["in air"]       =  array("airbus") ;


$numbers        = array('1' , '2' , '3' , '4' , '5' );
$multi          =   array_product($numbers);
$arraylength    =  count ( $numbers );
$reverse        =  array_reverse( $numbers );


foreach ($numbers as $value ) 
{
    if ($value % 2 != 0) 
    {
            $odd[]      =   $value;
    }

}


foreach ($numbers as $key => $value) 
{
    if ( isset( $reverse[ $key ] ))
      {
         $sums[ $key ]  =  $reverse[ $key ] + $value;
      }
}





var_dump( $animals2) ;
var_dump( $animals2) ;
var_dump($vehicles) ;
var_dump($vehicles2) ;
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht arrays basis</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht arrays basis: deel 1</h1>

            <ul>

                <li>Maak een array waarin je 10 dieren opslaat( doe dit op 2 verschillende manieren )</li>

                <li>Maak een nieuwe array met daarin 5 voertuigen, zorg er voor dat je kan bepalen om welke categorie van voertuig het gaat ( 2-dimensionele array), zoals 'landvoertuigen', 'watervoertuigen', 'luchtvoertuigen'. 
                <p>Wanneer je een <code>var_dump</code> van deze array doet, ziet het resultaat er ongeveer als volgt uit:</p>
                    
                    <ul class="array-notation pre">
                        <li>
                            [ 'landvoertuigen' ] => 
                            <ul>
                                <li>[ 0 ] => 'Vespa'</li>
                                <li>[ 1 ] => 'fiets'</li>
                            </ul>
                        </li>
                        <li>
                            [ 'watervoertuigen' ] => 
                            <ul>
                                <li>[ 0 ] => 'surfplank'</li>
                                <li>[ 1 ] => 'vlot'</li>
                                <li>[ 2 ] => 'schoener'</li>
                                <li>[ 3 ] => 'driemaster'</li>
                            </ul>
                        </li>
                        <li>
                            [ 'luchtvoertuigen' ] => 
                            <ul>
                                <li>[ 0 ] => 'luchtballon'</li>
                                <li>[ 1 ] => 'helicopter'</li>
                                <li>[ 2 ] => 'B52'</li>
                            </ul>
                        </li>
                    </ul>

                </li>

            </ul> 

            <h1 class="extra">Opdracht arrays basis: deel 2</h1>

            <ul>
                <li>Maak een array waarin je de getallen 1, 2, 3, 4, 5 in plaatst
                    <ul><?php foreach ($numbers as $key => $value): ?>
                        <li>[ <?php echo "$key";?> ] -- <?php echo "$value";?></li>
                    <?php endforeach?>
                    </ul>
                </li>

                <li>Vermenigvuldig alle getallen met elkaar en druk af naar het scherm <?php echo "$multi";?></li>

                <li>Druk de oneven getallen af (controle in script, niet zelf selecteren welke je afdrukt)
                    <ul><?php foreach ($odd as $key => $value): ?>
                        <li>[ <?php echo "$key";?> ] -- <?php echo "$value";?></li>
                    <?php endforeach?>
                    </ul>
                </li>

                <li>Maak een tweede array waarin je de getallen 5, 4, 3, 2, 1 in plaatst
                    <ul><?php foreach ($reverse as $key => $value): ?>
                        <li>[ <?php echo "$key";?> ] -- <?php echo "$value";?></li>
                    <?php endforeach?>
                    </ul>
                </li>

                <li>Tel de getallen uit beide arrays met dezelfde index met elkaar op
                    <ul><?php foreach ($sums as $key => $value): ?>
                        <li>[ <?php echo "$key";?> ] -- <?php echo "$value";?></li>
                    <?php endforeach?>
                    </ul>
                </li>
            </ul>
        
        </section>

    </body>
</html>
