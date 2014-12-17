 <?php 


























  ?><!doctype html>
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
                            <form>
                                <ul>
                                    <li>
                                        <label for="straat">straat</label>
                                        <input type="text" id="straat">
                                    </li>
                                    <li>
                                        <label for="nummer">nummer</label>
                                        <input type="number" id="nummer">
                                    </li>
                                    <li>
                                        <label for="gemeente">gemeente</label>
                                        <input type="text" id="gemeente">
                                    </li>
                                    <li>
                                        <label for="postcode">postcode</label>
                                        <input type="text" id="postcode">
                                    </li>
                                </ul>
                                <input type="submit" value="Volgende">
                            </form>
                        </div>

                    </li>
                    <li>Zorg er nu voor, dat wanneer de pagina gefresht wordt door middel van <kbd>F5</kbd> / <kbd>⌘-R</kbd> de ingevulde informatie in de invulvelden blijft staan.</li>
                    <li>Zorg ook voor een link waarmee je de sessie kan vernietigen (zodat alle informatie in de sessie verwijderd wordt). Dit kan je gebruiken om beter te testen ipv manueel je session-id te moeten verwijderen.</li>
                     <li>Werk via een POST-methode</li>
                    <li>De action is ingesteld op de overzichtspagina</li>
                    <li>Wanneer er op volgende wordt gedrukt moeten de values van de input elementen opgeslagen worden in de session.</li>
                </ul>

                
       
        
    </body>
</html>
