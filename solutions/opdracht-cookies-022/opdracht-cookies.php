<?php 


$logindata          =    file_get_contents("text.txt");

$loginar            =   explode(",", $logindata); 

var_dump($loginar);




$username           =   isset($_POST ["username"]);
if ($username) 
{
    $name               =   $_POST ["username"];
}
    
$password           =   isset($_POST ["password"]);
if ($password) 
{
    $pass               =   $_POST ["password"];
}
    
$submit             =   isset($_POST ["submit"]);
    
$remember           =   isset($_POST ["remember"]);
    
$forget             =   isset($_GET ["forget"]);
    
$cookremember       =   isset($_COOKIE ["login"]);
if ($cookremember) 
{
    $name               =   $_COOKIE ["login"];
}




## test for small array (non repeted usernames or passwords like 0123456789 or password)
$message            =   "" ;

$loginuser          =   array_search($username , $loginar);
$loginpass          =   array_search($password , $loginar);

if ($loginuser !==false && $loginpass !==false ) 
{
    setcookie("login", $name , time() + 360);

    $message        =   "welcome " . $name; 

    header('location: opdracht-cookies.php');

    if ($remember)
    {  
        setcookie("login", $name , time() + 2592000); 

        header('location: opdracht-cookies.php');
    }
}
else
{
    $message            =   "please enter a correct password and username" ;
}


if ($forget) 
{   
    setcookie("login", $name , time() - 2592000); 
    header('location: opdracht-cookies.php');
}



//var_dump($_COOKIE ["login"]);



/*                    

<h1>Inloggen</h1>


                    <div class="modal error">
                        <?=$message;?>
                    </div>



                    <form action="opdracht-cookies.php" method="post">
                        <ul>
                            <li>
                                <label for="username">username</label>
                                <input type="text" id="username" name="username">
                            </li>
                            <li>
                                <label for="password">password</label>
                                <input type="text" id="password" name="password">
                            </li>
                            <li>
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">Mij onthouden</label>
                            </li>
                        </ul>
                        <input type="submit" name="submit">
                    </form>





                    
                    <p>U bent ingelogd.</p>
                    <p><a href="opdracht-cookies.php?forget=true">Uitloggen</a></p>




*/




 ?>



 <!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht cookies</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    </head>
    <body class="web-backend-opdracht">
    
    <section class="body">
        





<h1>Inloggen</h1>

                <?php if (!$cookremember): ?>
                    
                
                    <h2>
                        <?=$message;?>
                    </h2>

<?php endif ?>


                    <?php if ($cookremember == true): ?>


                    <p><?= $name?>, you are now logged in.</p>
                    <p><a href="opdracht-cookies.php?forget=true">Log out</a></p>



                <?php else: ?>


                    <form action="opdracht-cookies.php" method="post">
                        <ul>
                            <li>
                                <label for="username">username</label>
                                <input type="text" id="username" name="username">
                            </li>
                            <li>
                                <label for="password">password</label>
                                <input type="text" id="password" name="password">
                            </li>
                            <li>
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">Mij onthouden</label>
                            </li>
                        </ul>
                        <input type="submit" name="submit">
                    </form>

                        
                    <?php endif ?>




         <h1 class="extra">Opdracht cookies: deel 4</h1>
         
         <ul>
             <li>Voeg meerdere gebruikers en paswoorden toe aan het .txt bestand.</li>
             <li>Zorg er nu voor dat je met meerdere gebruikers kan inloggen.</li>
         </ul>
    </section>
    </body>
</html>



