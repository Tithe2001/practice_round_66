<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>display "adult", "child", "middle aged"</h1> 

<form action="age.php" method="GET">

    <input type="text" name="age" placeholder="give the number..."><br><br>
    <input type="submit" name="Submit" style="color: green;">

</form>

<?php
if(isset($_GET["Submit"])){
    $x= $_GET["age"];

$res= null;
    if($x>=18 && $x<=45 ){
     $res= "$x is an adult";   

    } else if($x>=0 && $x<=17 ){
    $res= "$x is an child"; 
    }else if($x>45 && $x<=65){
    $res= "$x is an middle aged"; 
    }else{
        $res= "give an valid age";
    }

    echo "<h2>$res .</h2>";
}

?>


</body>
</html>