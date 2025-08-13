



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posNeg number</title>
</head>
<body>

<h1>Find wheather the number is positive or negative.</h1> 
 <form action="positiveNeg.php" method="GET">

    <input type="text" name="number" placeholder="give the number..."><br><br>
    <input type="submit" name="Submit" style="color: green;">

</form>

<?php
if(isset($_GET ["Submit"])){
    $x= $_GET["number"];

$result=null;
if( $x>=0){
$result= "$x is a positive number";
    
}else{
   $result= "$x is a negative number"; 
}

echo "<h2>$result .</h2>";

}


?>
</body>
</html>