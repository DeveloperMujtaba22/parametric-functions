<?php 

echo "<h1>Welcome To PHP</h1>";
echo "<button>Submit</button> <br>";

$name = "Mudassir";
$age = 6980;
$weight = 60.5;
$isRegular = true;

echo $name."<br>";
echo $age."<br>";
echo $weight."<br>";
echo $isRegular;

var_dump($name);
var_dump($age);
var_dump($weight);
var_dump($isRegular);

$fruits = array('Mango' , 'Apple' , 'Grapes' , 'Peach' , 'Orange' , 'Banana');
echo $fruits[0]." ";
echo $fruits[1]." ";
echo $fruits[2]." ";
echo $fruits[3]." ";
echo $fruits[4]." ";
// print_r($fruits);

// LOOP
// for($i=0; $i<count($fruits); $i++){
//     // echo $i;
//     echo "<br>".$fruits[$i];
// }

// foreach($fruits as $k){
//     echo "<br>".$k;
// }


// function greet(){
//     echo "Hello World";
// }

// greet();

// function greet($name){
//     if($name == "yousuf"){
//         echo "Mr".$name."You are going to 11:30 Am";
//     }
//     else{
//         echo "Mr ".$name."Welcome";
//     }
// }

// greet("Najiullah");
// greet("Mudassir");
// greet("yousuf");


// function sum($m1 , $m2 , $m3 ){
//     return $m1+ $m2 + $m3;
// }

// echo(sum(50,90,10));
// echo(sum(40,50,10));


// $age = 8;
// if($age >= 18){
//     echo "<br> You can drive";
// }else{
//     echo "<br> You can't drive";
// }


// $per = 600;
// if($per >= 80 && $per<=100){
//     echo "A+";
// }
// else if($per >= 70 && $per<80){
//     echo "A";
// }
// else if($per >= 60 && $per<70){
//     echo "B";
// }
// else if($per >= 50 && $per<60){
//     echo "C";
// }
// else if($per >= 40 && $per<50){
//     echo "D";
// }else if($per>100){
//     echo "Invalid Per";
// }
// else{
//     echo "Failed";
// }



?>