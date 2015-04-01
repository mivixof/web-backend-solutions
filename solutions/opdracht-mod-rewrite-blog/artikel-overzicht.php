

<?php 


session_start();





























 ?>






<!DOCTYPE html>
<html>
<head>
    <title>add</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
<body>



     <form class="query-content">
        <label for="query-content">Zoeken in artikels:</label>
        <input type="text" name="query-content" id="query-content">
        <input type="submit" value="Zoeken">
    </form>

    <form class="query-date">
        <label for="query-date">Zoeken op datum:</label>
        <select name="query-date" id="query-date">
            
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            
        </select>
        <input type="submit" value="Zoeken">
    </form>

    <h1>Artikels overzicht</h1>                         

    <a href="">Artikel toevoegen</a>


    <?php foreach ($variable as $key => $value): ?>
        

        <article>
            <h2>Kantar: Apple On Track For 'Record Quarter' As iPhone 6 Sales Bump Up Its Market Share Vs. Android | 2014-12-04</h2>
            <p>Apple has been seeing its smartphone market share erode over the last several years as its simple-and-small line up of iPhones competed against model after model of low-priced, big-screened, fancy-featured Android-based handsets. But it looks like its latest iPhone 6 models — with their larger faces, 4G compatibility and Apple Pay support — may be helping it turn the tide a bit.</p>
            <p>Keywords: Computers, Consumer Electronics, Hardware + Software</p>
        </article>

        
    <?php endforeach ?>

            




</body>
</html>