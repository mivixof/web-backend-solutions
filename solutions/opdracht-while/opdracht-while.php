<?php
  
$numbers            =   array();
 /* 
for ($hundred=0; $hundred <101 ; ++$hundred) 
{ 
    $numbers[] = $hundred;
}
*/

$hundred = 0;
while ($hundred <101) 
{
    $numbers [] = $hundred;
    ++$hundred;
}





#40-80 d3
#var_dump($numbers);
/*
$tris               =   array();
for ($hundreds=0; $hundreds <101 ; ++$hundreds) 
{ 
    if ($hundreds % 3 ==0 && $hundreds <80 && $hundreds>40) 
    {
        $tris[] = $hundreds;
    }

}
*/

$tris               =   array();
$hundreds           =   0;
while ($hundreds <101)
{ 
    if ($hundreds % 3 ==0 && $hundreds <80 && $hundreds>40) 
    {
        $tris[] = $hundreds;
    }
    ++$hundreds;
}
#var_dump($tris);



                
$row                =   0;
$col                =   0;


/*

#did shorthand in html( line )
while ($row <= 10) 
{
    $col                =   1;
    while ( $col <= 10) 
    {
        $tables[] = $row * $col;
        ++$col;
    }
    ++$row;
}


var_dump($tables);
*/

?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht while</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
        <style type="text/css">.green {background-color: green; color: white;}
        .blue {background-color: blue; color: white;}</style>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">  
        
        <h1>Opdracht while: deel 1</h1>

        <ul>

            <li>Druk alle getallen af van 0 tot 100 afgescheiden door een komma en 
            een spatie ' , '. Zoals

            <?php foreach ($numbers as $value): ?>
                <?= $value . ", " ;?>
            <?php endforeach ?> .

            </li>


            <li>Op een volgende lijn druk je alle getallen af die deelbaar zijn door 3 én groter zijn dan 40 mààr kleiner zijn dan 80. Oplossing: 

            <?php foreach ($tris as $value): ?>
                <?= $value . ", " ;?>
            <?php endforeach ?>

            </li>

        </ul>

        <h1>Opdracht while: deel 2</h1>

        <ul>

            <li>Maak een tabel met daarin de tafels van 1 tot 10 naast elkaar.

                <div class="facade-minimal" data-url="http://www.app.local/index.php">
                    
                    <h1>Tafels</h1>

                    <table>
                        <tr>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>4</td>
                            <td>6</td>
                            <td>8</td>
                            <td>10</td>
                            <td>12</td>
                            <td>14</td>
                            <td>16</td>
                            <td>18</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>6</td>
                            <td>9</td>
                            <td>12</td>
                            <td>15</td>
                            <td>18</td>
                            <td>21</td>
                            <td>24</td>
                            <td>27</td>
                            <td>30</td>
                        </tr>
                    </table>
                </div>
            
            </li>

            <li>Zorg er nu voor dat de cellen met even getallen een groene achtergrond krijgen, maak hiervoor gebruik van een css klasse en geen inline styles. <span class="tip">Werk met een shorthand if-statement</span>


            </li>
            <li>
                <table>
                


                <?php while ($row <= 10):?>
                    <tr>
                        <?php $col = 0?>
                        <?php while ( $col <= 10) : ?>
                            <td class="<?php echo (($col * $row) % 2 == 0) ? "green" : "blue" ?>">
                        <?php echo $tables[] = $row * $col; ?>
                        <?php ++$col ?>
                            </td>
                        <?php endwhile?>
                        <?php ++$row ?>
                    </tr>
                <?php endwhile?>

                </table>
            </li>
        </ul> 

    </body>
</html>
