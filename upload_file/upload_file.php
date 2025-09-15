<?php
$name= null;
if (isset($_POST["btnSubmit"])){
    $file= $_FILES["myfile"];

    // print_r( $file);

   $name= $file ["name"];
   $fileTmp= $file ["tmp_name"];
   $folder= "uploads/";
   $ext= pathinfo($name, PATHINFO_EXTENSION);


   //if folder is not created creat a folder

   if(!is_dir($folder)){
    mkdir($folder, 0777, true);
   }


   //move file to folder

   if(move_uploaded_file($fileTmp, $folder. $name)){
    echo "File uploaded successfully:" . $name ;
   }
   else{
    echo "Failed to upload file.";
   }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>

    <br>
    <h2 style="color: purple;">Upload a File Here</h2>

    <form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="myfile">
    <button type="submit" name="btnSubmit" style="color: red;">Upload</button>

    </form>
    <br>

    <img src="uploads/<?php echo $name ?>" alt="">


</body>
</html>


