<?PHP
include_once "LogicalTest.php";

$num1= null;
$num2= null;
$num3= null;

$largest= null;

if (isset($_GET['btn_submit'])) {
    $num1 = $_GET['number1'];
    $num2 = $_GET['number2'];
    $num3 = $_GET['number3'];

    $largest= LogicalTest::findLargest($num1, $num2, $num3);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Number</title>
</head>
<body>
<h1>Find The Largest Number</h1>

<form action="" method="get">

<label for="Num1">Number 1:</label>
<input type="text" name="number1"  value="<?php echo $num1; ?>" /> <br><br>

<label for="Num2">Number 2:</label>
<input type="text" name="number2" value="<?php echo $num2; ?>" /> <br><br>

<label for="Num3">Number 3:</label>
<input type="text" name="number3"  value="<?php echo $num3; ?>" /> <br><br>

<button type="submit" name="btn_submit">Submit</button>

</form>


<?php
    
    echo "<h2>Largest number among {$num1}, {$num2}, {$num3} is: $largest</h2>";

?>

</body>
</html>