<?php 


session_start()
			$_SESSION ['notes']['type'] = 'ok';
			$_SESSION ['notes']['message'] = 'You are now logged out. Cya.';






















 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Logout</title>
 </head>
 <body>
 <h1>
You are now logged out. Cya.
</h1>

 <script>setTimeout(function(){window.location.href='login-form.php'},5000);</script>
 </body>
 </html>