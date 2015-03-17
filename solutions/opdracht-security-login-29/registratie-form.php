<?php 


session_start();
var_dump($_SESSION);

 ?>





 <!DOCTYPE html>
<html>
<head>
	<title>unititted</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
<body>
 <h1>Registreren</h1>
<?php if (isset($_SESSION ['notes']['message'])): ?>
	<p> <?= $_SESSION ['notes']['message'] ?> </p>
<?php endif ?>

    <form action="registratie-process.php" method="post">
        <ul>
            <li>
                <label for="email">e-mail</label>
                <input type="text" name="email" id="email" value="<?= (isset($_SESSION['email'] )) ? $_SESSION['email']  : '' ; ?>">
            </li>
            <li>
                <label for="password">paswoord</label>
                <input <?= (isset($_SESSION ['clear']))? 'type="text"' : 'type="password"'; ?>type="text" name="password" id="password" value="<?= (isset($_SESSION['password'])) ? $_SESSION['password'] : '' ; ?>">

                <input type="submit" name="generatePassword" value="Generate password">
            </li>
        </ul>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>