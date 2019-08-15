<?php

/*
Title: Functions
Tutorial: Learn PHP
Section: PHP Bascis
Number: 16

Purpose: Educational Tutorial for Youtube
Author: Nawras Ali
Author URL: https://nawrasothman.space
Youtube Link: https://youtube.com/c/LearnWithNaw
*/


function hello_user($name){
  echo "Hello " . $name;
}

hello_user("Ali");

echo "<br>";
echo "===============================";
echo "<br>";
echo "===============================";
echo "<br>";

function sum_numbers($num1,$num2,$num3,$num4){
  return $num1 + $num2 + $num3 + $num4;
}

$result = sum_numbers(1,2,3,4);
echo $result;


?>
