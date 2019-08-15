<?php

/*
Title: Inheritance
Tutorial: Learn PHP
Section: Object Oriented Programming (OOP)
Number: 6

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

class Student extends User{
  public $school;
}

// Create instances
$user1 = new User();
$user1->firstname = 'Juan';
echo $user1->firstname;

echo "<br>===============<br>";
$student1 = new Student();

$student1->firstname = 'Ali';
echo $student1->firstname;

echo "<br>";
$student1->school = 'ABC';
echo $student1->school;

?>
