<?php
/*
Title: Form Action and Method attributes
Tutorial: Learn PHP
Section: Forms
Number: 2

Purpose: Educational Tutorial for Youtube
Author: Nawras Ali
Author URL: https://nawrasothman.space
Youtube Link: https://youtube.com/c/LearnWithNaw
*/
?>

<?php
  $page_title = 'Basic Form';
  $page_heading = 'My Form';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
  </head>
  <body>
    <h1> <?php echo $page_heading; ?> </h1>
    <form action="index.php" method="GET">
      <label for="title">Idea Title</label>
      <input type="text" name="title" value="Idea Title">

      <label for="text"> Idea Text</label>
      <textarea name="text" rows="8" cols="80">Idea Text</textarea>

      <input type="submit" name="submit" value="Save your idea">
    </form>

  </body>
</html>
