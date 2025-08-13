<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>divisible</title>
</head>
<body>
    
<h1>Find wheather the number is divisible by both 3 and 5.</h1> 

<form action="divisible.php" method="GET">

    <input type="text" name="number" placeholder="give the number..."><br><br>
    <input type="submit" name="Submit" style="color: green;">

</form>



<?php
if(isset($_GET["Submit"])){
    $x= $_GET["number"];

divisible( $x);

}

function divisible( $x){

    $res= null;

if($x %3==0 && $x %5==0 ){
 $res= "$x is divisible by both 3 and 5";
}else{
$res= "$x is not divisible by both 3 and 5";
}

echo "<h2>$res .</h2>";

}




?>
</body>
</html>