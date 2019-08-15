<?php
/*
Title: GET METHOD
Tutorial: Learn PHP
Section: Forms
Number: 3

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
    <form action="" method="GET">
      <label for="title">Idea Title</label>
      <input type="text" name="title" value="Idea Title">

      <label for="text"> Idea Text</label>
      <textarea name="text" rows="8" cols="80">Idea Text</textarea>

      <input type="submit" name="submit" value="Save your idea">
    </form>

    <?php print_r($_GET); ?>
    <?php echo "<br>"; ?>
      <?php if (isset($_GET['title'])): ?>
        <?php echo $_GET['title'] . "<br>"; ?>
      <?php endif; ?>
      <?php if (isset($_GET['text'])): ?>
        <?php echo $_GET['text'] . "<br>"; ?>
      <?php endif; ?>
  </body>
</html>
