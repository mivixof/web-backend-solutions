<?php  



$ustime         =   mktime(22,35,25,01,21,1904);



$returntime     =   date("D d F Y, g:i:s a" , $ustime);

var_dump($returntime);

/*

setlocale(LC_TIME, "nl_NL");
$date           =   strftime('%d %B %Y, %H:%M:%S %p',  $ustime);
var_dump($date);
*/
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht date</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    </head>
    <body class="web-backend-opdracht">
        <section class="body">
            <h1>Opdracht date: deel 1</h1>

            <ul>
                <li>Maak een geldig HTML document</li> 

                <li>Zet deze datum 22u 35m 25sec 21 januari 1904 om naar een timestamp(<?= $ustime ?>)</li>

                <li>Toon deze timestamp daarna in het volgende formaat: 21 January 1904, 10:35:25 pm</li>
            </ul>

            <h1>Opdracht date: deel 2</h1>

            <ul>
                <li>Zorg dat de benamingen in het Nederlands komen te staan</li>
            </ul>
        </section>
    </body>
</html>
