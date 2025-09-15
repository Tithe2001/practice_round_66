<?php
session_start();

if(!$_SESSION["username"] ){
   header("location:login.php");
}




include_once ("product.class.php");


if(isset($_POST["btn_submit"])){
 $id=$_POST["id"];
 $name=$_POST["name"];
 $price=$_POST["price"];
 $offer_price=$_POST["offer_price"];


$product= new Product($id,$name,$price,$offer_price);
$save= $product->save();

if($save){
echo $save;
unset($_POST["id"]);
unset($_POST["name"]);
unset($_POST["price"]);
unset($_POST["offer_price"]);
  }
}


// delete
if(isset($_GET["DeleteId"])){
    $id= $_GET["DeleteId"];

   Product :: delete($id);    
}


// update
if(isset($_POST["btn_update"])){
$id=$_POST["id"];
$name=$_POST["name"];
$price=$_POST["price"];
$offer_price=$_POST["offer_price"];

// print_r($_POST);

$product= new Product($id,$name,$price,$offer_price);
$update= $product->update();

if($update){
echo $update;
unset($_POST["id"]);
unset($_POST["name"]);
unset($_POST["price"]);
unset($_POST["offer_price"]);
  }
}

// search

$edit_product=null;
if(isset($_GET["editId"])){
   $id=  $_GET["editId"];
    $edit_product= Product::edit($id);
}


if(isset($_GET['logout'])){
    $logout= $_GET['logout'];
    if($logout){
  
  session_unset();
  session_destroy();
  header("location:login.php");
    }
  }



//   $worker= ["id"=>1, "name"=>"Hasan" , "age"=>25];
//   echo "<pre>";
//   print_r( $worker);
//   echo "</pre>";

//   unset($worker['age']);

//    echo "<pre>";
//   print_r( $worker);
//   echo "</pre>";
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>

<style>
body{
    display: flex;
    gap: 20px;
}

table,th,td{
border-collapse: collapse;
border: 1px solid black;
padding: 10px;
}

tr:nth-child(even){
 background-color: lightgrey;
}

</style>
</head>

<body>  

<h1>Welcome <?php echo $_SESSION["username"] ??  "User" ; ?></h1>
<a href="index.php?logout=1">Logout</a>


<div>
    <h1>Product Table</h1>
    <a href="index.php">New Product</a>



    <!-- php -->
    <?php
    echo Product:: showProduct();
    ?>
</div>



<?php
if(is_null($edit_product)){

?>



<div>
<h1>New Product</h1>

<form action="" method="POST">

<label for="n">ID</label><br>
<input type="text" name="id" id="id"><br><br>

<label for="n">Name</label><br>
<input type="text" name="name" id="name"><br><br>

<label for="n">Price</label><br>
<input type="text" name="price" id="price"><br><br>

<label for="n">Offer Price</label><br>
<input type="text" name="offer_price" id="offer_price"><br><br>

<input type="submit" name="btn_submit">

</form>
</div>



<?php
}else{
?>




<div>
<h1>Update Product</h1>

<form action="" method="POST">

<label for="n">ID</label><br>
<input type="text" name="id" id="id" value="<?php echo $edit_product["id"]  ?>"><br><br>

<label for="n">Name</label><br>
<input type="text" name="name" id="name" value="<?php echo $edit_product["name"]  ?>"><br><br>

<label for="n">Price</label><br>
<input type="text" name="price" id="price" value="<?php echo $edit_product["price"]  ?>"><br><br>

<label for="n">Offer Price</label><br>
<input type="text" name="offer_price" id="offer_price" value="<?php echo $edit_product["offer_price"]  ?>"><br><br>

<input type="submit" name="btn_update" value="Update">

</form>
</div>



<?php
}
?>


</body>
</html>