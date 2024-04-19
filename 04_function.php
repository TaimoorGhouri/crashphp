<?php

function registerUser($email){
    echo  $email .' registered';
}
// sum
function sum($n1, $n2){
    return $n1+$n2; 
}

registerUser('brad');


$fruits = ['apple','orange','pear'];
//Get Lenght
echo '<br>'. count ($fruits);
//search
var_dump(in_array('apple',$fruits));

// add to array 
array_push($fruits, 'blueberry');
array_unshift($fruits, 'mango');

//remove from array
//array_pop($fruits);
//array_shift($fruits);
//unset($fruits[2]);

//split in two

//$chunk= array_chunk($fruits,3);
//print_r($chunk);

$arr1=[1,2,3,4];
$arr2=[5,6,8,9];

$arr3=array_merge($arr1,$arr2);

$a=['green','red','yellow'];
$b=['avacado','banana','apple'];
$c=array_combine($a,$b);

//print_r($c);

$keys = array_keys($c);
//print_r($keys);

$flip=array_flip($c);
//print_r($flip);
$numbers= range(1,20);
$newNumbers = array_map(function($number){
    return "number ${number}";
},$numbers);
//  print_r($newNumbers);

$lessthan10 =array_filter($numbers,fn($number)=> $number <=5);
// print_r($lessthan10);
$sum = array_reduce($numbers,fn($carry , $number)=> $carry + $number);

var_dump($sum);