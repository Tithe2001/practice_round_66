<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication</title>
</head>
<body>
    <form action="multiplicationTable.php" method="GET">

    <input type="text" name="number" placeholder="give the number..."><br><br>
    <input type="submit" name="Submit" style="color: green;">

    </form>



<?php
if( isset ($_GET["Submit"])){
    $multiply= $_GET["number"];

$html= "<ul>";

for($i= 1; $i<=10; $i++ ){
$result= $multiply * $i;

$html .= "<li> {$multiply} x {$i} = {$result} </li> ";

}

$html .= "</ul>";

echo "$html";

}

?>




</body>
</html>