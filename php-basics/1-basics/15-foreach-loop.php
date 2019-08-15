<?php

/*
Title: foreach Loop
Tutorial: Learn PHP
Section: PHP Bascis
Number: 15

Purpose: Educational Tutorial for Youtube
Author: Nawras Ali
Author URL: https://nawrasothman.space
Youtube Link: https://youtube.com/c/LearnWithNaw
*/


$days = array('Friday','Saturday','Sunday',
              'Monday','Tuesday','Wednesday','Thursday');

foreach($days as $day){
  $day = "Welcome " . "$day";
  echo $day . "<br>";
}

echo "<br>";
print_r($days);

echo "<br>";
echo "===============================";
echo "<br>";
echo "===============================";
echo "<br>";

$items = array(
            'item1' => 'table',
            'item2' => 'chair',
            'item3' => 'spoon',
            'item4' => 'phone');

foreach($items as $key => $value){
  echo $key . " : " . $value . "<br>";
}


?>
