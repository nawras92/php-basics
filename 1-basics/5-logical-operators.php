<?php

/*
Title: Logical Operators
Tutorial: Learn PHP
Section: PHP Bascis
Number: 5

Purpose: Educational Tutorial for Youtube
Author: Nawras Ali
Author URL: https://nawrasothman.space
Youtube Link: https://youtube.com/c/LearnWithNaw
*/

// OR operator
$day = "Sunday";

if ($day == 'Sunday' || $day == 'Monday'){
  echo 'It is a weekday';
}else if($day == 'Friday' || $day == 'Saturday'){
  echo 'It is the weekend';
}else{
  echo "I'm lazy to write the rest";
}

echo "<br>";
echo "===============================";
echo "<br>";
echo "===============================";
echo "<br>";

// NOT operator
$lucky_day = true;

if(!$lucky_day){
  echo "it is not your lucky day";
}else{
  echo "Ok, it is your lucky day";
}

echo "<br>";
echo "===============================";
echo "<br>";
echo "===============================";
echo "<br>";

// AND operator
$lucky_day = true;
$day = "Friday";

if($lucky_day && $day == 'Friday'){
  echo "You are blessed!";
}else{
  echo "Something wrong will happen";
}



?>
