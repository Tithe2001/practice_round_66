
<?php
include_once "LogicalTest.php";
$number=null;
$result=null;
if (isset($_GET['btn_submit'])) {
    $number = $_GET['number'];
    $result= LogicalTest::result($number);
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
    
    

<form action="result.php" method="GET">
<label for="m"> Inter your Mark</label><br>
<input type="text" name="number"> <br><br>
<button type="submit" name="btn_submit"> Submit</button>
<h1> Result is <?php echo $result ?></h1>


</form>
</body>
</html>