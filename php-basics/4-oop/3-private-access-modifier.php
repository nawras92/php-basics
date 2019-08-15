<?php

/*
Title: PRIVATE Access Modifier
Tutorial: Learn PHP
Section: Object Oriented Programming (OOP)
Number: 3

Purpose: Educational Tutorial for Youtube
Author: Nawras Ali
Author URL: https://nawrasothman.space
Youtube Link: https://youtube.com/c/LearnWithNaw
*/

// Class User
class User{

    public $firstname;
    public $lastname;
    public $age;
    public $country;
    private $private_name;

    public function canBrowse(){
      echo $this->firstname . ' can browse the website.';
    }
}

// Create instances
$user1 = new User();
$user1->firstname = 'Nawras';
$user1->lastname = 'Ali';
$user1->age = 27;
$user1->country = 'Jordan';

echo $user1->firstname;
echo "<br>";

echo $user1->lastname;
echo "<br>";

echo $user1->age;
echo "<br>";

echo $user1->country;
echo "<br>";

$user1->canBrowse();
echo "<br>";

$user1->private_name = 'VERRRY PRIVATEEEEE';
//Fatal error: Uncaught Error: Cannot access private property User::$private_name


?>
