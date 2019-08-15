<?php

/*
Title: Create a basic class
Tutorial: Learn PHP
Section: Object Oriented Programming (OOP)
Number: 1

Purpose: Educational Tutorial for Youtube
Author: Nawras Ali
Author URL: https://nawrasothman.space
Youtube Link: https://youtube.com/c/LearnWithNaw
*/


// Create a new class
class User{

    public $firstname;
    public $lastname;
    public $age;
    public $country;

    public function canBrowse(){
      echo 'The user can browse the website';
    }
}

// Create an instance
$user1 = new User();

$user1->firstname = 'Nawras';
echo $user1->firstname;

echo "<br>";

$user1->lastname = 'Ali';
echo $user1->lastname;

echo "<br>";

$user1->age = 27;
echo $user1->age;

echo "<br>";

$user1->country = 'Jordan';
echo $user1->country;

echo "<br>";

$user1->canBrowse();

echo "<br>=====================<br>";
// Create another instance
$user2 = new User();

$user2->firstname = 'Juan';
$user2->lastname = 'Lopez';
$user2->age = 30;
$user2->country = 'Colombia';

echo $user2->firstname . ' '    .
     $user2->lastname  . ' is '  .
     $user2->age .' years old. And he is from ' .
     $user2->country;

echo "<br>";
$user2->canBrowse();

?>
