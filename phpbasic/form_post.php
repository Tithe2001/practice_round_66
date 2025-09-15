<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Information Desk</h1>

    <form action="" method="POST">
    <label for="nam" >Give your name</label>
    <input type="text" id="nam" name="name" >
    <input type="submit" value="submit" name="btn_submit">

    </form>

  
    
</body>
</html>




<?PHP

$x=null;

if(isset($_POST["btn_submit"])){
    $x= $_POST["name"];
echo "<h2> welcome $x </h2>";

}


?>