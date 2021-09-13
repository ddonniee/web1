<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>To do list for you</title>
<h1>Hi, there</h1>
    <style>
    body {
      background-image:url("welcome.jpg");
      background-color: #D9E5FF;
    }
    </style>

  </head>

  <body>

    <input type="button" value="DarkMode" onclick="
    options.mode.ModeController(this);
     ">

    <br>

    <h2>
    <?php
    if(isset($_GET['id'])) {
       echo ($_GET['id']);
    }
    else {
     echo "Hello Stranger :)";
    }
    ?>
    </h2>
  <ol>

  <li><a href="index.php?id=welcome">welcome</a></li>
  <li><a href="index.php?id=join">join</a></li>
  <li><a href="index.php?id=daily">daily</a></li>
  <li><a href="index.php?id=weekly">weekly</a></li>
  <li><a href="index.php?id=monthly">monthly</a></li>
  <li><a href="index.php?id=bucket_list">bucket_list</a></li>

  </ol>
