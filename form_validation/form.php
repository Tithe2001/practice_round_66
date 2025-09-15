<!-- php -->

<?php

$errors=[];

if(isset($_POST["btn_submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];


    if($name==""){
       $errors["name"]="please fill the name field"; 
    }
    elseif(!preg_match("/^[a-zA-Z .]{4,}$/",$name)){
        $errors["name"]="invalid name";
    }

    
    if(empty($email)){
       $errors["email"]="please fill the email field";  
    }elseif(!preg_match("/^[a-z0-9_.]{4,}[@][a-z]{2,}[.][a-z]{2,}$/", $email)){
     $errors["email"]="invalid email";
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
    <h1>Information Desk</h1>
<form action="form.php" method="POST">

<label for="n">Give your name:</label>
<input type="text" id="n" name="name"><br><br>

<?php
echo isset($errors["name"]) ? "<p style='color:red'> {$errors["name"]}</p>":""
?>


<label for="E">Email:</label>
<input type="text" name="email" id="email"><br><br>

<?php
echo isset($errors["email"]) ? "<p style='color:red'>{$errors["email"]}</p>" : ""
?>


<label for="g">Gender:</label>
<input type="radio" name="g" id="Female" value="Female"><label >Female</label>
<input type="radio" name="g" id="Male" value="Male"><label >Male</label>
<br><br>

<input type="submit" name="btn_submit">


</form>



</body>
</html>




