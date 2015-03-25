<?php 


if (isset($_POST)) 
{
	$filter1 = $_POST ['regex'];

	$string = $_POST ['string'];

	$replace = '<span>#</span>';

	if (isset($_POST['replace'])) 
	{
		$result = preg_replace('/' . $filter1 . '/' , $replace , $string);
	}
	if (isset($_POST['check'])) 
	{
		$result = preg_match_all('/' . $filter1 . '/' , $string,  $matches);

		var_dump( $matches);
	}
 

}
var_dump($_POST , $result);


/*





/[a-du-z]/i

/[colour]{5,}/i

/1\d{3}/

(\d{2}\W){2}\W\d{4}









*/






 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>efkbbiu</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
        <style type="text/css">

        span
        {
        	color: red;
        }



        </style>
 </head>
 <body>
 
                        
        <h1>RegEx tester</h1>

        <form action="index.php" method="post">

        <ul>
            <li>
                <label for="regex">Regular Expression</label>
                <input type="text" name="regex" id="regex" value="<?= (isset($filter1)) ? $filter1 : "" ; ?>">
            </li>
            <li>
                <label for="string">String</label>                            
                <textarea name="string" id="string" cols="30" rows="10" ><?= (isset($string)) ? $string : "" ; ?></textarea>
            </li>
            <li>
            	<input type="submit" name="replace" value="submit">

            	<input type="submit" name="check" value="check">
            </li>
        </ul>

        </form>


    	<?php if (isset($result)): ?>

    		<p>
    			<?= $result ?>
    		</p>
    		
    	<?php endif ?>
    	<?php if (isset($matches)): ?>

    		<ul>

	    		<?php foreach ($matches [0] as $key): ?>

	    			<li>

	    				<?= $key?>

	    			</li>

	    		<?php endforeach ?>

    		</ul>

    	<?php endif ?>








 </body>
 </html>