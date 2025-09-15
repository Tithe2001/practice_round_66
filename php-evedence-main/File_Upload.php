<?php
include_once "LogicalTest.php";
$name=null;
if (isset($_POST['btn_submit'])) {
    $myfile = $_FILES['myfile'];
    print_r($myfile);
    $name= LogicalTest::fileUpload($myfile);
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
</head>
<body>
    <h2>Upload a File</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile" >
        <button type="submit" name="btn_submit">Upload</button>
    </form>
      

     <!-- <img src="uploads/<?php //echo $name ?>" alt="" srcset=""> -->
     <embed src="uploads/<?php echo $name ?>" type="" width="300" height="500">

</body>
</html>