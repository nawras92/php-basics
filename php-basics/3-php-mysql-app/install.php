<?php require_once('config.php'); ?>


<?php

$connection = new PDO($dsn,$database_user,$database_user_password,$options);

$sql ="CREATE TABLE  IF NOT EXISTS ideas (
	           id INT UNSIGNED AUTO_INCREMENT,
             title VARCHAR(30) NOT NULL,
             text TEXT NOT NULL,
             PRIMARY KEY(id));" ;

$connection->exec($sql);

echo "You are connected to the database successfully";

 ?>
