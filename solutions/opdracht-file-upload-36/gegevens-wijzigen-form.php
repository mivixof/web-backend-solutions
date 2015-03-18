<?php 








var_dump( $_FILES)

 ?>



 <!DOCTYPE html>
 <html>
 <head>
     <title>
         ekjgbueigf
     </title>
 </head>
 <body>
 
    <p><a href="">Terug naar dashboard</a> | Ingelogd als test@test.be | <a href="">uitloggen</a></p>   
    
    <h1>Gegevens wijzigen</h1>
    
    <form enctype="multipart/form-data" method="post" action="gegevens-bewerken.php">
        
        <ul>
            
            <li>
                <label for="profile_picture">Profielfoto
                    <img class="profile-picture" src="http://web-backend.local/img/elon-musk-koraynergiz.jpg" alt="Profielfoto">
                </label>
                
                <input type="file" id="profile_picture" name="profile_picture">
            </li>

            <li>
                <label for="email">e-mail</label>
                <input type="text" id="email" name="email" value="test@test.be">
            </li>

        </ul>

        <input type="submit" value="Gegevens wijzigen">
    </form>






 </body>
 </html>