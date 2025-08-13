
<?php

$fac= 1;
$number= null;

if(isset($_GET["btn_submit"])){
    $number= $_GET["num"];

    for($i=1; $i<=$number; $i++ ){
        $fac*=$i;
    }
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



   <h1>Find The Factorial</h1>

    <form action="factorial.php"  method="$_GET">

        <label for="n">Give the number: </label><br>
        <input type="text" id="n" name="num" value="<?php echo "$number";  ?>"><br><br>

        <button type="submit" name="btn_submit">Submit</button>
    </form>




    <?php

    $fac= $fac > 1 ? $fac: "";  //If $fac is greater than 1, then keep its value. Otherwise, set $fac to an empty string ("").

    echo "<h1>Factorial of $number is : $fac </h1>";
    ?>

</body>
</html>


