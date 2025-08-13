<?php
$name= "Afrin Akther Tithe";

// print_r($_GET);
if(isset($_GET["btn_name"])){
    $name= $_GET["name"];

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Personal Information</h1>

    <form action="form.php" method="GET">
    <label for="a">Give your full name:</label>
    <input type="text" name="name" id="a"><br><br>

    <input type="submit" name="btn_name">




    </form>


    <h2>My name is <?php echo "$name";  ?>. </h2>




</body>
</html>