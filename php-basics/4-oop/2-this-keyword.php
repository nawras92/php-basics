<?php

/*
Title: THIS Keyword
Tutorial: Learn PHP
Section: Object Oriented Programming (OOP)
Number: 2

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

    public function canBrowse(){
      echo $this->firstname . ' can browse the website.';
    }
}

// Create instances
$user1 = new User();
$user1->firstname = 'Nawras';
$user1->canBrowse();

echo "<br>";

$user2 = new User();
$user2->firstname = 'Juan';
$user2->canBrowse();

echo "<br>";

$user3 = new User();
$user3->firstname = 'Ali';
$user3->canBrowse();

?>
