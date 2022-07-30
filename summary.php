<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Koszt podróży</title>
</head>
<body>
<div class="content">
<?php 
$result = $_POST['cash'];
$turn_back = $result * 2;
?>
<html>

<?php 
echo "<h1>Twój koszt to:</h1>";
echo "<h2>$turn_back zł</h2>";

?>
</h2>
</div>
</html>