<?php

/*
Title: array_slice
Tutorial: Learn PHP
Section: PHP Bascis
Number: 8

Purpose: Educational Tutorial for Youtube
Author: Nawras Ali
Author URL: https://nawrasothman.space
Youtube Link: https://youtube.com/c/LearnWithNaw
*/


$first_array = array('item0','item1','item2','item3','item4');
$second_array = array($first_array[2],$first_array[3]);
print_r($first_array);
echo "<br>";
print_r($second_array);

echo "<br>";
echo "===============================";
echo "<br>";
echo "===============================";
echo "<br>";

$first_array = array('item0','item1','item2','item3','item4');
$second_array = array_slice($first_array,2,2,false);
print_r($second_array);
echo "<br>";
$second_array = array_slice($first_array,2,2, true);
print_r($second_array);



?>
