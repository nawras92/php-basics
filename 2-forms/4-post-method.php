<?php
/*
Title: POST METHOD
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
    <form action="" method="POST">
      <label for="title">Idea Title</label>
      <input type="text" name="title" value="Idea Title">

      <label for="text"> Idea Text</label>
      <textarea name="text" rows="8" cols="80">Idea Text</textarea>

      <input type="submit" name="submit" value="Save your idea">
    </form>

    <?php print_r($_POST); ?>
    <?php echo "<br>"; ?>
      <?php if (isset($_POST['title'])): ?>
        <?php echo $_POST['title'] . "<br>"; ?>
      <?php endif; ?>
      <?php if (isset($_POST['text'])): ?>
        <?php echo $_POST['text'] . "<br>"; ?>
      <?php endif; ?>
  </body>
</html>
