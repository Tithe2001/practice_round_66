<?php
// $mark= 50;
$result= null;

if(isset($_GET["btn_submit"])){
    $mark= $_GET["score"];

if ($mark >= 80 && $mark <= 100 ){
$result="A+";
}
else if ($mark >= 70 && $mark <= 79 ){
$result="A";
}
else if ($mark >= 60 && $mark <= 69){
$result="A-";
}
else if ($mark >= 50 && $mark <= 59 ){
$result="B";
}
else if($mark>50){
$result="Fail";
}

}



// echo "$result";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>

    <style>
        .red{
            color: red;
        }
        .green{
            color: green;
        }
    </style>
</head>
<body>

<h1 style="color:blue">Give your obtained marks</h1>

<form  action="result.php" method="GET">
    <label for="t">Obtained Mark :</label>
    <input type="text" id="t" name="score" ><br><br>

    <button style="color:brown" type="submit" name="btn_submit">Submit</button>

</form>

<h2>your result is: <?php echo "$result "; ?></h2>


<!-- <?php
if($result =="Fail"){
echo "<h2>your result is:<h2 class='red'> $result </h2></h2>";}
else{
    echo "<h2>your result is:<h2 class='green'> $result </h2></h2>";
}
?> -->
    
</body>
</html>