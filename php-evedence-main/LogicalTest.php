<?php


interface ILogicalTest{
   static function facterial($number);
   static function IsPrime($number);
   // static function MinMax($number);
   // static function Result($number);
   // static function FileUpload($number);
}




//factorial_Number
class LogicalTest implements ILogicalTest{

static function facterial($number){
 $result = 1;

  for($i=1; $i<=$number; $i++){
     $result *=$i;
  }
  return $result;
}

//Prime_Number
static function IsPrime($number){

  if($number < 2){return false;} 
  for($i=2; $i< $number; $i++){
    if($number%$i == 0){
       return false;
    }
  }
  return true;
}

//END_Prime_Number

//Find_Large_Number
static function large($number1,$number2,$number3){
if ($number1>= $number2 && $number1>= $number3) {
    return  $number1;
}elseif ($number2>= $number1 && $number2>= $number3) {
    return  $number2;
} else{
   return  $number3;
}
 }



// Get_Result

static function result($number){
 $result= null;
 
   $mark=$number;

 if ($mark >= 80 && $mark <= 100) {
    $result ="A+";
 }else if( $mark >= 70 && $mark <= 80) {
    $result = "A";
 } else if( $mark >= 60 && $mark <= 69){
    $result = "B";
 } else {
    $result = "Fail";
 };

   return $result;
}




//File_upload(pdf/jpg)

static function fileUpload($file) {


      //    print_r( $_FILES);
      //  $file = $_FILES[$file];   // Original file 
       $name=$file['name'];         //   file name 
       $fileTmp =$file["tmp_name"]; //   Temporary location
       $fileSize = $file["size"];   //   file size
       $fileType = $file["type"];   //   file type
       $folder   = "uploads/";      //   upload folder
       
       $allowsize= 2*1024*1024;     //   convert to byte 

       $allowedMimeType =[
        'image/jpeg',
        'image/webp',
        'image/png',
        'image/gif',
        'application/pdf',
        "application/msword"
      ];
       
       $ext = pathinfo($name, PATHINFO_EXTENSION); // file extention
       $newName = uniqid("pic_", true) . "." . $ext;
      
    // Make sure folder exists
    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    // // Move file to folder

    if( $fileSize > $allowsize){
         die("File is too large. Max allowed: " . ($allowsize / 1024 / 1024) . " MB");
    }

    if(!in_array($fileType,  $allowedMimeType)){
        die("Invalid file type (MIME not allowed): " .$fileType);
    }


    if (move_uploaded_file($fileTmp, $folder . $name)) {
        echo " File uploaded successfully: " . $name;
        return  $name;
    } else {
        echo "Failed to upload file.";
    }
}



}


// echo LogicalTest::result(50);




?>