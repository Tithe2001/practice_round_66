<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oddEven</title>
</head>
<body>

<h1>Find wheather the number is odd or even.</h1> 

<form action="oddEven.php" method="GET">

    <input type="text" name="number" placeholder="give the number..."><br><br>
    <input type="submit" name="Submit" style="color: green;">

</form>



    


<?php

if(isset($_GET["Submit"])){
    $x = $_GET["number"];

$res= null;
if($x%2==0){
   $res= "$x is a even number";

}else{
   $res= "$x is a odd number"; 
}

echo "<h2>$res .</h2>";
}

?>
</body>
</html>