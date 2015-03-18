<?php 
session_start()



  

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>all artickle</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
 </head>
 <body>
 <?php if (isset($_SESSION ['notes']['message'])): ?>
    <p> <?= $_SESSION ['notes']['message'] ?> </p>
<?php endif ?>
                        
	<p><a href="dashboard.php">Terug naar dashboard</a> | Ingelogd als <?= $_SESSION ['email']?> | <a href="logout.php">uitloggen</a></p>   

    <p><a href="">Terug naar overzicht</a></p>    

    <h1>Artikel toevoegen</h1>

    <form action="artikel-toevoegen-process.php" method="post" >
        
        <ul>
            <li>
                <label for="titel">Titel</label>
                <input type="text" id="titel" name="titel">
            </li>

            <li>
                <label for="artikel">Artikel</label>
                <textarea id="artikel" name="artikel"></textarea>
            </li>

            <li>
                <label for="kernwoorden">Kernwoorden</label>
                <input type="text" id="kernwoorden" name="kernwoorden">
            </li>

            <li>
                <label for="datum">Datum (dd-mm-jjjj)</label>
                <input type="text" id="datum" name="datum">
            </li>

            <input type="submit" value="Artikel toevoegen">
        </ul>

    </form>

 </body>
 </html>