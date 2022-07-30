<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Podsumowanie</title>
</head>
<body>
<?php

$average = $_POST['average'];
$fuel_price = $_POST['fuel-price'];
$distance = $_POST['distance'];

$price_per_100 = (int)$average * (int)$fuel_price;
$price_per_one = $price_per_100 / 100;
$result = (int)$distance * $price_per_one;

?> 
 <div class="content">

    <h1>Podsumowanie:</h1>

 <?php
    echo "<h3>Za paliwo w jedną stronę zapłacisz:</h3> ";
    echo "<h2>$result zł</h2> "; 
?> 
<html>
<form action="summary.php" method="post">
<!--<h3>Obliczyć koszt w dwie strony?</h3>-->
<input value="<?php echo $result?>" type="hidden" name="cash" />
 <input class="button" type="submit" value="Oblicz w dwie strony" />
</div>
</body>
 </html>