<?php

/*
Title: Arrays
Tutorial: Learn PHP
Section: PHP Bascis
Number: 6

Purpose: Educational Tutorial for Youtube
Author: Nawras Ali
Author URL: https://nawrasothman.space
Youtube Link: https://youtube.com/c/LearnWithNaw
*/


$days = array('Friday','Saturday','Sunday',
              'Monday','Tuesday','Wednesday','Thursday');

//echo $days;
//Notice: Array to string conversion

print_r($days);

// Delete an item
unset($days[2]);

//echo $days[2];
//Notice: Undefined offset: 2

// add an item
$days[2] = 'Sunday';

print_r($days);

echo "<br>";
echo "===============================";
echo "<br>";
echo "===============================";
echo "<br>";


$nums = [1,2,3,4,5];

array_push($nums, 6,7,8,9,10,11,12);

print_r($nums);
echo $nums[10];




?>
