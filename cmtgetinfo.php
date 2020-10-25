<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Get comment info</title>
    <style media="screen">
    #sub
    {
      margin: 10px;
      width: 250px;
      height: 50px;
      border: solid black 5px;
      border-radius: 20px;
      background-color: #73ffa2;
    }
    #con
    {
      border: dashed #adffb3 3px;
    }
    </style>
  </head>
  <body>
    <center>
      <?php
      session_start();
      //$_SESSION['pid']=$_POST['cmt'];
       ?>
      <?php
      if(isset($_POST['txt']))
      {
        ?>
        <form action="cmtupload.php" method="post">
          <textarea id="con" name="itxt" rows="8" cols="80" placeholder="Add your comment here"></textarea><br>
          <input id="sub" type="submit" name="tsub" value="Add comment"><br>
        </form>
        <?php
      }
      if(isset($_POST['pic']))
      {
        ?>
        <form action="cmtupload.php" method="post" enctype="multipart/form-data">
          <input id="con" type="file" name="ipic" value="Choose a picture"><br>
          <input id="sub" type="submit" name="psub" value="Add comment"><br>
        </form>
        <?php
      }
      if(isset($_POST['vid']))
      {
        ?>
        <form action="cmtupload.php" method="post" enctype="multipart/form-data">
          <input id="con" type="file" name="ivid" value="Choose a video"><br>
          <input id="sub" type="submit" name="vsub" value="Add comment"><br>
        </form>
        <?php
      }
      if(isset($_POST['lnk']))
      {
        ?>
        <form action="cmtupload.php" method="post">
          <textarea id="con" name="ilnk" rows="8" cols="80" placeholder="Link"></textarea><br>
          <input id="sub" type="submit" name="lsub" value="Add comment"><br>
        </form>
        <?php
      }
      ?>
    </center>
    </body>
  </html>
