<?PHP


interface ILogicalTest{
       static function findLargest($num1, $num2, $num3);
          static function Result($number);


}


class LogicalTest implements ILogicalTest{


//1. Largest number

 static function findLargest($num1, $num2, $num3) {
    
        if ($num1 >= $num2 && $num1 >= $num3) {
            return $num1;
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            return $num2;
        } else {
            return $num3;
        }
        return $largest;

    }


//2. Grades

static function result($mark){
$result=null;


 if ($mark=="A+") {
    $result ="Outstanding";
 }else if( $mark=="A") {
    $result = "Very Good";
 } else if( $mark=="B"){
    $result = "Good";
 } else if($mark=="c"){
    $result = "Poor";
 }else{
    $result = "Fail";
 }

   return $result;
}




}

?>