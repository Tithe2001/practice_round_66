



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Number</title>
</head>
<body>
    
<h1>Find The Largest Number</h1>

    <form action="largestNum.php" method="$_GET">
      <label for="Num1">Number 1:</label>
      <input type="text" name="number1" id="Num1" /> <br><br>

      <label for="Num2">Number 2:</label>
      <input type="text" name="number2" id="Num2" /> <br><br>

      <label for="Num3">Number 3:</label>
      <input type="text" name="number3" id="Num3" /> <br><br>

      <button type="submit" name="btn_submit">Submit</button>
    </form>


  <?php
$number1= null;
$number2= null;
$number3= null;

$max= null;

if(isset($_GET["btn_submit"])){
  $number1=$_GET["number1"];
  $number2=$_GET["number2"];
  $number3=$_GET["number3"];


 larger($number1, $number2, $number3);

}


function larger($number1, $number2, $number3){
if($number1> $number2 && $number1> $number3){
  $max= $number1;
}
elseif ($number2> $number1 && $number2> $number3 ){
   $max= $number2;

}else{
   $max= $number3;
}

echo "<h1 class= '' > The largest number is  $max among $number1, $number2, $number3 </h1>";
}


?>


</body>
</html>