<?php

/*
Title: Setters & Getters
Tutorial: Learn PHP
Section: Object Oriented Programming (OOP)
Number: 4

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

    // private_name setter
    public function setPrivateName($private_name){
      $this->private_name = $private_name;
    }

    // private_name getter
    public function getPrivateName(){
      return $this->private_name;
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
echo "<br>=======================<br>";

// Set the private_name for the instance $user1 using a setter
$user1->setPrivateName('Nawras\' private name');

// Get the value of the private_name for the instance $user2 using a getter
echo $user1->getPrivateName();

?>
