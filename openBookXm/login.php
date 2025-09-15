<?php
session_start();

$_username= "Afrin";
$_password="1111";




if(isset($_POST["btn_login"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $message=[];

    if($_username==$username && $_password==($password)){
        $message=["login"=>"Welcome $username" ];
        $_SESSION["username"]=$username;
        header("location : product.class.php");
    }else{
        $message=["login"=>"Incorrect user name or password !"];
    }
    echo $message["login"];
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


    <style>
        .f{
            text-align: center;
            background-color: gray;
        }

        body{
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

    </style>
</head>
<body>

<fieldset style="width: 300px;" class="f">
    <h1>Please Login First</h1><br>
<form action="login.php" method="$_POST" >
        <label for="username">Username</label><br>
        <input type="text" id="username"  name="username"><br><br>

        <label for="password">Password</label><br>
        <input type="passwprd" id="passwprd"  name="passwprd"><br><br>

        
        <input type="submit" value="login" name="btn_login" style="background-color: green;" >
        
        
    </form>
</fieldset>
    
</body>
</html>