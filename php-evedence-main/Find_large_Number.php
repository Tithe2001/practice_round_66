<?php
include_once "LogicalTest.php";
$number1=null;
$number2=null;
$number3=null;
$largest=null;

if (isset($_GET["btn_submit"])){
    $number1=$_GET["number1"];
    $number2=$_GET["number2"];
    $number3=$_GET["number3"];


    $largest= LogicalTest::large($number1,$number2,$number3);
 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .red{
            color:red;
            
        }
    </style>
</head>
<body>
   
    <form action="" method="GET" class="center">
        <label for="m">Input a number1 </label><br>
        <input type="number" name="number1" value=""><br><br>
        <label for="m">Input a number2 </label><br>
        <input type="number" name="number2" value=""><br><br>
        <label for="m">Input a number3 </label><br>
        <input type="number" name="number3" value=""><br><br>
        <button type="submit" name="btn_submit"> Submit</button>
    </form>

      <?php
    
    echo "<h1 class= 'red'> $largest is largest number  among $number1, $number2, $number3</h1>";
    
    ?>
</body>
</html>