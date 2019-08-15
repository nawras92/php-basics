<?php require_once('config.php'); ?>
<?php $page_title = 'Update an idea'; ?>
<?php $page_heading = 'Idea Updating'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>

  </head>
  <body>
    <h1> <?php echo $page_heading; ?> </h1>
    <p> <a href="index.php">Go back to the homepage</a> </p>

    <?php if(isset($_GET['id'])): ?>
      <?php $id=$_GET['id']; ?>
      <div style="background:#eee;padding:10px;">
        <p>You are updating the idea #<?php echo $id; ?></p>
      </div>

      <br>
      <hr><hr>
      <br>

      <?php $connection = new PDO($dsn,$database_user,$database_user_password,$options); ?>
      <?php $sql = "SELECT * FROM ideas where id=:id"; ?>
      <?php $statement = $connection->prepare($sql); ?>
      <?php $statement->bindValue(":id",$id); ?>
      <?php $statement->execute(); ?>
      <?php $idea = $statement->fetch(PDO::FETCH_ASSOC); ?>



      <?php if (isset($_POST['submit'])): ?>
      <?php $idea = array('id'=> $_POST['id'],
            'title' => $_POST['title'],
            'text' => $_POST['text']);
      ?>

      <?php $connection = new PDO($dsn,$database_user,$database_user_password,$options); ?>
      <?php $sql = "UPDATE ideas SET title=:title, text=:text WHERE id=:id"; ?>
      <?php $statement = $connection->prepare($sql); ?>
      <?php $statement->execute($idea); ?>

      <div style="background:green;color:white;padding:10px;">
        <p>Your have updated your idea succesfully</p>
      </div>
      <br>
      <?php endif; ?>

      <form method="post">
        <?php foreach($idea as $key=>$value): ?>
        <label for="<?php echo $key; ?>"><?php echo $key; ?></label>
        <?php if ($key == 'text'): ?>
          <textarea name="<?php echo $key; ?>" rows="8" cols="80"><?php echo $value; ?></textarea>
        <?php else: ?>
          <input type="text" name="<?php echo $key; ?>"
                             value="<?php echo $value; ?>"
                             id="<?php echo $key; ?>"
                            <?php if($key == 'id'){echo 'readonly';} ?>>
        <?php endif; ?>
        <br>
        <br>
      <?php endforeach; ?>
      <input type="submit" name="submit" value="Update your idea">
      </form>

    <?php endif; ?>

  </body>
</html>
