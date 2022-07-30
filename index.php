<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Kalkulator kosztów paliwa</title>
</head>
<body>
    <div class="content">
<h1>Oblicz koszt paliwa</h1>
<form action="route.php" method="post">
<h3>Wpisz średnie spalanie</h3> 
<input type="text" name="average" />
 <br>
 <h3>Cena za litr:</h3> 
 <input type="text" name="fuel-price" />
 <br>
 <h3>Liczba kilometrów do celu:</h3>
 <input type="text" name="distance" />
 <br> 
<br>
 <input class="button" type="submit" value="Policz"/>
</div>

    
</body>
</html>