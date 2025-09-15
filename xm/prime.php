<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime number</title>
</head>
<body>
    

<h1>Find wheather the number is prime or not.</h1> 

<form action="prime.php" method="GET">

    <input type="text" name="number" placeholder="give the number..."><br><br>
    <input type="submit" name="Submit" >

</form>


<?php

if(isset($_GET["Submit"])){
$n= $_GET["number"];

$result=null;
for($i=2; $i<=$n; $i++){

    if($n % $i ===0){
        $result= "$n is a prime number";
    }else {
    $result= "$n is  not a prime number";
}
}
echo "<h2>$result</h2>";
}
    





?>


</body>
</html>