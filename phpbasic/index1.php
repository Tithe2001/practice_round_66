<?php


echo "hello saima <br>";

print("hello saima  <br>");


$fname= "saima";
$lname= "islam";

echo " {$fname} {$lname} is very nonchalant girl <br>";


// data type
// $name= "Khalid";  //string
// $cost=  2025;  //number integer
// $cost2 = 10.45;  // float, double, fraction
// $isActive = true;
// $studentsList= ["jamal","kamal", "hasan"]; // array
// $student= ["name"=>"jamal", "age"=>25, "address"=> "dhaka"]; //fat arrow, associative array, 
$student= (object) ["name"=>"jamal", "age"=>25, "address"=> "dhaka"]; //object

print_r($studentsList );
echo "<br>";
print_r ($student);
echo "<br>";

print_r (json_encode($student));

echo "<br>";

echo $studentsList["0"];
echo " : ";

// echo $student["address"];

echo "<br>";

printf ("her name is %s %s", strtoupper ($fname), strtolower ($lname));
echo "<br>";

// thin arrow

print_r($student->name);








?>