<?php 

session_start();











 ?>





 <!DOCTYPE html>
 <html>
 <head>
 	<title>iehhbguyref</title>
 </head>
 <body>
 
<?php if (isset($_SESSION ['notes'] ['message'])): ?>
	<?= $_SESSION ['notes'] ['message'] ?>
<?php endif ?>




    <a href="">Terug naar de gallerij</a>

    <h1>Foto uploaden</h1>

    <form method="post" action="photo-upload.php" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="username">Bestand uploaden</label>
                <input type="file" id="file" name="file">
            </li>
            <li>
                <label for="title">Titel</label>
                <input type="text" id="title" name="title">
            </li>
            <li>
                <label for="description">Beschrijving</label>
                <input type="text" id="description" name="description">
            </li>
        </ul>
        <input type="submit" name="submit">
    </form>







 </body>
 </html>