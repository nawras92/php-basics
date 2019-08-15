<?php

/*
Title: Arrays Sorting
Tutorial: Learn PHP
Section: PHP Bascis
Number: 9

Purpose: Educational Tutorial for Youtube
Author: Nawras Ali
Author URL: https://nawrasothman.space
Youtube Link: https://youtube.com/c/LearnWithNaw
*/

echo "Sorting using sort(): <br><br>";
$nums = array(1,6,3,5,2,4);
print_r($nums);

echo "<br>";
sort($nums);
print_r($nums);

echo "<br>";
echo "===============================";
echo "<br>";
echo "===============================";
echo "<br>";

echo "Sorting using rsort(): <br><br>";
$nums = array(1,6,3,5,2,4);
print_r($nums);

echo "<br>";
rsort($nums);
print_r($nums);

echo "<br>";
echo "===============================";
echo "<br>";
echo "===============================";
echo "<br>";

echo "Sorting using asort(): <br><br>";
$things = array(
            'item1' => 'table',
            'item2' => 'chair',
            'item3' => 'spoon',
            'item4' => 'phone');

print_r($things);

echo "<br>";
asort($things);
print_r($things);

echo "<br>";
echo "===============================";
echo "<br>";
echo "===============================";
echo "<br>";

echo "Sorting using arsort(): <br><br>";
$things = array(
            'item1' => 'table',
            'item2' => 'chair',
            'item3' => 'spoon',
            'item4' => 'phone');

print_r($things);

echo "<br>";
arsort($things);
print_r($things);


echo "<br>";
echo "===============================";
echo "<br>";
echo "===============================";
echo "<br>";

echo "Sorting using ksort(): <br><br>";
$things = array(
            'item1' => 'table',
            'item3' => 'chair',
            'item4' => 'spoon',
            'item2' => 'phone');

print_r($things);

echo "<br>";
ksort($things);
print_r($things);

echo "<br>";
echo "===============================";
echo "<br>";
echo "===============================";
echo "<br>";


echo "Sorting using krsort(): <br><br>";
$things = array(
            'item1' => 'table',
            'item3' => 'chair',
            'item4' => 'spoon',
            'item2' => 'phone');

print_r($things);

echo "<br>";
krsort($things);
print_r($things);




?>
