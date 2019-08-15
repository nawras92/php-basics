<?php

/*
Title: Constructors
Tutorial: Learn PHP
Section: Object Oriented Programming (OOP)
Number: 5

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

    public function __construct($first_name,$last_name,$user_age,$user_country){
      $this->firstname = $first_name;
      $this->lastname = $last_name;
      $this->age = $user_age;
      $this->country = $user_country;
    }

}


// Create an instance

$user1 = new User($first_name='Nawras',$last_name='Ali',$user_age=27,$user_country='Jordan');

echo $user1->firstname;
echo "<br>";

echo $user1->lastname;
echo "<br>";

echo $user1->age;
echo "<br>";

echo $user1->country;
echo "<br>";

?>
