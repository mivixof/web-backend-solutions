<?php

$money          =   100000 ;
$raise          =   0.08 ;
$years          =   10 ;
$start          =   1 ;
$dump           =       array();


function        intrest( $number , $up , $time , $counter , $dump)
{
    $upeam      =       $up     *    $number ;

    $total      =       $upeam  +    $number; 

        $dump[] =   $up . " up " . $total . " total " . $upeam ;



    if ($counter < $time) 
    {
        ++$counter;
        return intrest( $total , $up , $time , $counter , $dump);
    } 

    return      $dump;


}


$hans   =   intrest($money, $raise, $years , $start, $dump);
var_dump($hans);












?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht recursive</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">

            <style>
                img
                {
                    display:block;
                    padding:6px;
                    margin:24px auto;
                }
            </style>
        
            <h1>Opdracht recursive: deel 1</h1>

            <ul>
                <li>Een old school vraagstuk!</p>
                </li>

                <li>Hans heeft 100 000€ geërfd. Hij kan zijn geld aan de bank geven tegen een rentevoet van 8%. Als hij dat doet is hij wel verplicht om zijn geld 10 jaar op de bank te laten staan. Hans wil weten hoeveel geld hij na 10 jaar zal overhouden.</li>

                <li>Maak gebruik van een recursieve functie om te berekenen hoeveel geld Hans na 10 jaar zal overhouden</li>

                <li>Zorg er ook voor dat Hans kan zien hoeveel zijn geld na elk jaar waard is. Rond daarbij alle getallen af naar beneden.</li>

            </ul>

        </section>

    </body>
</html>
