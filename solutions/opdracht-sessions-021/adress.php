<<<<<<< HEAD
<?php 






=======
 <?php 

session_start();

	$email			= (isset($_SESSION["register"]["email"])) ? $_SESSION["register"]["email"] : " ";
	$nicname		=	(isset($_SESSION["register"]["nicname"])) ? $_SESSION["register"]["nicname"] : " ";

if (isset($_POST["submit"])) 
{
	$_SESSION["register"]["email"]			=	$_POST["email"];
	$_SESSION["register"]["nicname"]		=	$_POST["nicname"];
}



$straat			=	" ";
$nummer			=	" ";
$gemeente		=	" ";
$postcode		=	" ";
>>>>>>> af4535d6ced418828aad08a36cd0609f09aab1f1




<<<<<<< HEAD




 ?>
=======
var_dump($_POST);


/*

<label for="straat">straat</label>
            <input type="text" id="straat" name="straat">
        </li>
        <li>
            <label for="nummer">nummer</label>
            <input type="number" id="nummer" name="nummer">
        </li>
        <li>
            <label for="gemeente">gemeente</label>
            <input type="text" id="gemeente" name="gemeente">
        </li>
        <li>
            <label for="postcode">postcode</label>
            <input type="text" id="postcode" name="postcode">
        </li>
    </ul>
    <input type="submit" value="Volgende" name="submit">
</form>

*/
>>>>>>> af4535d6ced418828aad08a36cd0609f09aab1f1










<<<<<<< HEAD
 <!doctype html>
=======



  ?><!doctype html>
>>>>>>> af4535d6ced418828aad08a36cd0609f09aab1f1
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
        <title>Opdracht sessions</title>
=======
        <title>adress</title>
>>>>>>> af4535d6ced418828aad08a36cd0609f09aab1f1
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    </head>
    <body class="web-backend-opdracht">
        
        <h1>Opdracht sessions: deel 1</h1>

<<<<<<< HEAD
        <ul>
            <li>

                <h2>Registratiepagina</h2>

                <ul>

                    <li>Maak een formulier dat er als volgt uitziet:
                        
                        <div class="facade-minimal" data-url="http://www.app.local/opdracht-sessions-pagina-01-registratie.php">
                            <h1>Deel 1: registratiegegevens</h1>
                            <form action="" >
                                <ul>
                                    <li>
                                        <label for="email">e-mail</label>
                                        <input type="text" id="email">
                                    </li>
                                    <li>
                                        <label for="nickname">nickname</label>
                                        <input type="text" id="nickname">
                                    </li>
                                </ul>
                                <input type="submit" value="Next">
=======
       
            
            
                <h2>Adrespagina</h2>

                <ul>
                    <li>Toon het emailadres en de nickname onder een titel "Registratiegegevens"</li>
                    <li>Maak opnieuw een formulier zodat de adrespagina er als volgt uitziet:
                        
                        <div class="facade-minimal" data-url="http://www.app.local/opdracht-sessions-pagina-02-adres.php">
                        
                            <h1>Registratiegegevens</h1>

                            <ul>
                                <li>e-mail: richard@piedpiper.com</li>
                                <li>nickname: The Puppet Master</li>
                            </ul>

                            <h1>Deel 2: adres</h1>
                            <form method="post" action="overview.php">
                                <ul>
                                    <li>
                                        <label for="straat">straat</label>
                                        <input type="text" id="straat" name="straat">
                                    </li>
                                    <li>
                                        <label for="nummer">nummer</label>
                                        <input type="number" id="nummer" name="nummer">
                                    </li>
                                    <li>
                                        <label for="gemeente">gemeente</label>
                                        <input type="text" id="gemeente" name="gemeente">
                                    </li>
                                    <li>
                                        <label for="postcode">postcode</label>
                                        <input type="text" id="postcode" name="postcode">
                                    </li>
                                </ul>
                                <input type="submit" value="Volgende" name="submit">
>>>>>>> af4535d6ced418828aad08a36cd0609f09aab1f1
                            </form>
                        </div>

                    </li>
<<<<<<< HEAD
                    <li>Werk via een POST-methode</li>
                    <li>De action is ingesteld op de adresgegevens pagina</li>
                    <li>Wanneer er op volgende wordt gedrukt moeten de values van de input elementen opgeslagen worden in de session.</li>


                </ul>
            </li>

        </ul>
=======
                    <li>Zorg er nu voor, dat wanneer de pagina gefresht wordt door middel van <kbd>F5</kbd> / <kbd>⌘-R</kbd> de ingevulde informatie in de invulvelden blijft staan.</li>
                    <li>Zorg ook voor een link waarmee je de sessie kan vernietigen (zodat alle informatie in de sessie verwijderd wordt). Dit kan je gebruiken om beter te testen ipv manueel je session-id te moeten verwijderen.</li>
                     <li>Werk via een POST-methode</li>
                    <li>De action is ingesteld op de overzichtspagina</li>
                    <li>Wanneer er op volgende wordt gedrukt moeten de values van de input elementen opgeslagen worden in de session.</li>
                </ul>

                
       
>>>>>>> af4535d6ced418828aad08a36cd0609f09aab1f1
        
    </body>
</html>
