<?php 





 if (isset($_GET["search"])) 
{
    $search = $_GET["search"];
}
elseif (isset($_GET["link"])) 
{
    $link = $_GET["link"];
}




/*
$path = realpath('../../');
foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path)) as $filename)
{
       $filename\n;
}

*/

switch ($link) {
    case "cursusreference-guide":
        $showlink =    file_get_contents("..\..\..\cursus\public\cursus\web-backend-cursus.pdf");
;
        break;
    case "voorbeelden":
        $showlink =   realpath("..\..\..\cursus\public\cursus\voorbeelden");

        break;
    case "oplossingen":
        $showlink =  realpath("..");
        break;

    default:
        $showlink = "";
        break;
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
                            <input type="text" name="search" id="search" placeholder="Quarry">

                            <input type="submit">

                        </form>




                        <iframe src="">




                            <?php if ($link == "voorbeelden" || $link == "oplossingen"): ?>

                            <ul>

                            <?php  foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($showlink)) as $filename): ?>

                            <li>

                                <a href="<?= $filename?>"><?= $filename?></a>

                            </li>

                            <?php endforeach ?>

                            </ul>

                        <?php elseif ($link == "cursusreference-guide"): ?>

                        <?= $showlink ?>

                        <?php endif ?>

                        </iframe>





        </section>

    </body>
</html>



