<?php
session_start();
$_SESSION['pid']=$_POST['cmt'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Comment option</title>
    <style media="screen">
    input
    {
      margin: 10px;
      width: 250px;
      height: 50px;
      border: solid black 5px;
      border-radius: 20px;
      background-color: #73ffa2;
    }
    </style>
  </head>
  <body>
    <center>
    <form action="cmtgetinfo.php" method="post">
      <input type="submit" name="txt" value="Text"><br>
      <input type="submit" name="pic" value="Picture"><br>
      <input type="submit" name="vid" value="Video"><br>
      <input type="submit" name="lnk" value="Link"><br>
    </form>
  </center>
  </body>
</html>
