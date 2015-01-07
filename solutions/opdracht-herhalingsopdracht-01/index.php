<?php 


    $referenceGuide =   false;
    $voorbeelden    =   false;
    $oplossingen    =   false;
    $search         =   false;
    $showlink       =    "";
$search = "";
 if (isset($_GET["search"])) 
{
    $search = $_GET["search"];
}



/*
$path = realpath('../../');
foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path)) as $filename)
{
       $filename\n;
}

*/
$link = "";
if (isset($_GET["link"])) 
{
    $link = $_GET["link"];

switch ($link) 
    {
        case "cursusreference-guide":
            $referenceGuide     =   true;
    
            break;

        case "voorbeelden":
            $showlink =   realpath("..\..\..\cursus\public\cursus");
            $voorbeelden    =   true;

            break;

        case "oplossingen":
            $showlink =  realpath("..");
            $oplossingen    =   true;
            break;

        default:
            $showlink = "";
            break;
    }
}

/*

                        <ul>
                            <li><a href="index.php?link=cursusreference-guide">Cursus</a></li>
                            <li><a href="index.php?link=voorbeelden">Voorbeelden</a></li>
                            <li><a href="index.php?link=oplossingen">Oplossingen</a></li>
                        </ul>



*/


var_dump($showlink);






 ?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht herhalingsopdracht 01</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">





        <style type="text/css">

        iframe
        {
            width: 1000px;
            height: 750px;
        }

        </style>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">





                        <ul>
                            <li><a href="index.php?link=cursusreference-guide">Cursus</a></li>
                            <li><a href="index.php?link=voorbeelden">Voorbeelden</a></li>
                            <li><a href="index.php?link=oplossingen">Oplossingen</a></li>
                        </ul>





                        <form action="index.php" method="GET">

                            <label id="search">search for:</label>
                            <input type="text" name="search" id="search" placeholder="query">

                            <input type="submit">

                        </form>




                        




                            <?php if ($link == "voorbeelden" || $link == "oplossingen"): ?>

                            <ul>

                            <?php  foreach (new RecursiveDirectoryIterator($showlink) as $filename): ?>

                            <li>

                                <a href="<?= $filename?>"><?= $filename?></a>

                            </li>

                            <?php endforeach ?>

                            </ul>
                        <?php endif ?>
                        <?php if ($link == "cursusreference-guide"): ?>
                        <iframe src="..\..\..\cursus\public\cursus\web-backend-cursus.pdf">
                        </iframe>
                        <?php endif ?>

                        





        </section>

    </body>
</html>



