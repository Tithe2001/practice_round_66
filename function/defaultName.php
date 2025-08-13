<?php

$person= "Tithe";




function greet($person){
$x= $person ? $person : "Guest";

echo "Hello $x";
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
    <h1>Assign default name using ternary</h1> 

<form action="defaultName.php" method="GET">

    <input type="text" name="name" placeholder="give your name..."><br><br>
    <input type="submit" name="btn_submit" style="color: green;">

</form>
</body>
</html>