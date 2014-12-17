<?php 














 ?>










 <!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht sessions</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    </head>
    <body class="web-backend-opdracht">
        
        <h1>Opdracht sessions: deel 1</h1>

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
                            </form>
                        </div>

                    </li>
                    <li>Werk via een POST-methode</li>
                    <li>De action is ingesteld op de adresgegevens pagina</li>
                    <li>Wanneer er op volgende wordt gedrukt moeten de values van de input elementen opgeslagen worden in de session.</li>


                </ul>
            </li>

        </ul>
        
    </body>
</html>
