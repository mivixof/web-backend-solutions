<?php

$year       =   "1999" ;
$leap       =   FALSE ;
$four       =   $year % 4 ;
$century    =   $year % 100 ;
$fourhundred =  $year % 400 ;

if ( ( (  $four == 0 ) && ( $century != 0 ) ) || ( $fourhundred == 0 )  )
    {
        $leap = true ;
    };

if ($leap == false) 
    {
        $printleap = "not " ;
    };

if ($leap == true) 
    {
        $printleap = "" ;
    };

/*or shorthand $printleap     =   ($leap)?    ""  ;   "not ";*/

/*extra*/

$secs       =   221108521;
#amounts
$min        =   60; 
$hour       =   60 * $min ; 
$day        =   24 * $hour ; 
$week       =   7 * $day ; 
$month      =   31 * $day ; 
$year       =   365 * $day ;

$amountmin      =   floor($secs / $min ) ;
$amounthour     =   floor($secs / $hour ) ;
$amountday      =   floor($secs / $day ) ;
$amountweek     =   floor($secs / $week ) ;
$amountmonth    =   floor($secs / $month ) ;
$amountyear     =   floor($secs / $year ) ;





?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht if else</title> 
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht if else: deel 1</h1>

            <ul>
                <li>Maak een PHP-script dat kan bepalen of de variabele 'jaartal' al dan niet een schrikkeljaar is
                    <ul>
                        <li>Een jaar is een schrikkeljaar als het deelbaar is door 4</li>
                        <li>Een jaartal deelbaar door 100 is geen schrikkeljaar</li>
                        <li>Een jaartal deelbaar door 400 is wel een schrikkeljaar</li>
                        <li><?php echo "$year";?> is <?php echo "$printleap";?>a leap year. </li>
                    </ul>
                </li>
            </ul>  

    		<h1 class="extra">Opdracht if else: deel 2</h1>

    		<ul>
                <li>Maak een PHP-script dat achterhaalt hoeveel volledige jaren, maanden, weken, dagen, uren, minuten en seconden er in een gegeven aantal seconden zit (bv. 221108521)</li>

                <li>
                    Ga er van uit dat een maand 31 dagen kent en een jaar 365 dagen. Het resultaat ziet er ongeveer als volgt uit:
                    
                    <div class="facade-minimal" data-url="http://www.app.local/index.php">
                        
                        <h1>Jaren, maanden, weken, dagen, uren, minuten en seconden</h1>

                        <p>in 2 <?php echo "$secs"; ?>seconden</p>

                        <ul>
                            <li>minuten: <?php echo "$amountmin";?></li>
                            <li>uren: <?php echo "$amounthour";?></li>
                            <li>dagen: <?php echo "$amountday";?></li>
                            <li>weken: <?php echo "$amountweek";?></li>
                            <li>maanden (31 dagen): <?php echo "$amountmonth";?></li>
                            <li>jaren (356 dagen): <?php echo "$amountyear";?></li>
                        </ul>
                    </div>

                </li>
    		</ul>

        </section>

    </body>
</html>
