<?php 
session_start();
if (isset($_COOKIE ['login'])) 
{
    header('location: login-process.php');
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
<body>
    <h1>Inloggen</h1>


<?php if (isset($_SESSION ['notes'])): ?>


	<p> <?= $_SESSION ['notes']['message'] ?> </p>


<?php endif ?>


    <form action="login-process.php" method="post">
        <ul>
            <li>
                <label for="email">e-mail</label>
                <input type="text" name="email" id="email" value="<?= (isset($_SESSION['email'] )) ? $_SESSION['email']  : '' ; ?>">
            </li>
            <li>
                <label for="password">pasword</label>
                <input type="password" name="password" id="password">
            </li>
        </ul>
        <input type="submit" name="submit" value="Inloggen">
    </form>

    <p>Don't have an account yet? Make one on our <a href="registratie-form.php">registration page</a>.</p>

</body>
</html>