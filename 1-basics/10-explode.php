<?php

/*
Title: explode()
Tutorial: Learn PHP
Section: PHP Bascis
Number: 10

Purpose: Educational Tutorial for Youtube
Author: Nawras Ali
Author URL: https://nawrasothman.space
Youtube Link: https://youtube.com/c/LearnWithNaw
*/


$mystring = "Hello everyone here";
$mystringarray = explode(' ', $mystring);
print_r($mystringarray);
echo "<br>";
echo "===============================";
echo "<br>";
echo "===============================";
echo "<br>";
$mystring = "Hello everyone here! tra tra tra";
$mystringarray = explode('!', $mystring);
print_r($mystringarray);

?>
