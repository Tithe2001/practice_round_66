<?php
//1 Print the name, age, and PI using echo
$name= "Afrin Akther Tithe";
$age= "25";
echo "Name: $name, Age: $age";

echo "<br>";
echo "<br>";


//2 Arithmetic Operators
$a = 10;
$b = 3;

echo "Add:", ($a + $b);
echo "<br>";

echo "substract:", ($a - $b);
echo "<br>";

echo "multiplication:", ($a * $b);
echo "<br>";

echo "division:", ($a / $b);
echo "<br>";

echo "modulus:", ($a % $b);
echo "<br>";
echo "<br>";

//3 Assignment Operators

$num = 5;

$num += 3;
echo "Assignment: $num ";
echo "<br>";


$num -= 3;
echo "Assignment: $num ";
echo "<br>";

$num *= 3;
echo "Assignment: $num ";
echo "<br>";
$num /= 3;
echo "Assignment: $num ";
echo "<br>";

$num %= 3;
echo "Assignment: $num ";
echo "<br>";
echo "<br>";


//4 Comparison Operators
$x = 10;
$y = "10";

if($x===$y){
    echo "$x is equal to $y";
}elseif ($x != $y) {
    echo "$x is not equal to $y";
} elseif ($x >= $y){
    echo "$x is greater than $y";
} elseif ($x <= $y){
    echo "$x is less than $y";
}else{
    echo "$x are not comparable $y";
}

echo "<br>";
echo "<br>";


//5 Type Casting
// Cast to integer and float, print both

$val = "15.7";

$intval = (int) $val;
$floatval = (float) $val;

var_dump($val, $intval, $floatval);
echo "<br>";
echo "<br>";

//6 die
// die ("Stopping here!");

//7  Use sprintf and printf to format "Name: John Doe"

$fname= "John";
$lname="Doe";
printf(" Name: %s %s", $fname , $lname);
echo "<br>";
echo "<br>";
//8 print_r()

$fruits= ["Apple", "Banana", "Mango"];

print_r($fruits);
echo "<br>";
print_r(json_encode($fruits));
echo "<br>";
echo "<br>";


//9 Echo a sentence about you with HTML formatting

//10 Use print to output a string

//11 Comparison Practice
$m = 20;
$n = 15;

if ($m > $n) {
   echo "True";
}
//  Check if $m > $n and echo true/false























?>