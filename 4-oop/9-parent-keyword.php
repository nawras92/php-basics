<?php

/*
Title: parent::
Tutorial: Learn PHP
Section: Object Oriented Programming (OOP)
Number: 9

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

    public function __construct($firstname,$lastname,$age,$country){
      $this->firstname = $firstname;
      $this->lastname = $lastname;
      $this->age = $age;
      $this->country = $country;
    }

}

class Student extends User{
  public $school;
  public $fav_subject;

  public function __construct($firstname,$lastname,$age,$country,$school, $fav_subject){
    parent::__construct($firstname, $lastname,$age,$country);
    $this->school = $school;
    $this->fav_subject = $fav_subject;
  }

}


// Create an instance
$student1 = new Student('Ahmed','sth',20,'KSA','ABC','programming');
echo $student1->firstname . ' ' . $student1->lastname .
     ' is ' . $student1->age . ' years old. He is from ' .
     $student1->country . '. He studies in ' . $student1->school .
     '. He loves '  . $student1->fav_subject;
?>
