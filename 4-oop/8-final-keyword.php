<?php

/*
Title: Final Keyword
Tutorial: Learn PHP
Section: Object Oriented Programming (OOP)
Number: 8

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
    //private $private_name;
    protected $private_name;

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

    final public function welcome(){
      echo "Welcome, " . $this->firstname;
    }
}

class Student extends User{
  public $school;

  public function welcome(){
    echo "This is a welcome message for students. ";
  }

}

// Create instances
$user1 = new User();
$user1->firstname = 'Juan';
echo $user1->welcome();

echo "<br>===============<br>";
$student1 = new Student();

$student1->firstname = 'Ali';
$student1->welcome();
//Fatal error: Cannot override final method User::welcome()
echo "<br>";

?>
