<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>

   Access to...
  <ol>
  <li><a href="index.php?id=welcome">welcome</a></li>
  <li><a href="index.php?id=java">java</a></li>
  <li><a href="index.php?id=CSS">CSS</a></li>
  <li><a href="index.php?id=javascript">javascript</a></li>
  <li><a href="index.php?id=HTML">HTML</a></li>
  <li><a href="index.php?id=Analystic.google">Analystic.google</a></li>
  <li><a href="index.php?id=function">function</a></li>
</ol>
<h2>
  <?php
    if(isset($_GET['id'])) {
      echo $_GET['id'];
    }
    else {
      echo "Hello Stranger :\)";
    }
?>
</h2>
<?php
    if(isset($_GET['id'])) {
    echo file_get_contents("data/".$_GET['id']);
    }
    else {
      echo "Why don't you be one of us?";
    }
?>

  </body>
</html>
