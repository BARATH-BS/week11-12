<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Get post info</title>
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
      if(isset($_POST['txt']))
      {
        ?>
        <form action="upload.php" method="post">
          <textarea id="con" name="itxt" rows="8" cols="80" placeholder="What's in your mind"></textarea><br>
          <input id="sub" type="submit" name="tsub" value="upload"><br>
        </form>
        <?php
      }
      if(isset($_POST['pic']))
      {
        ?>
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <input id="con" type="file" name="ipic" value="Choose a picture"><br>
          <input id="sub" type="submit" name="psub" value="Upload"><br>
        </form>
        <?php
      }
      if(isset($_POST['vid']))
      {
        ?>
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <input id="con" type="file" name="ivid" value="Choose a video"><br>
          <input id="sub" type="submit" name="vsub" value="Upload"><br>
        </form>
        <?php
      }
      if(isset($_POST['lnk']))
      {
        ?>
        <form action="upload.php" method="post">
          <textarea id="con" name="ilnk" rows="8" cols="80" placeholder="Link"></textarea><br>
          <input id="sub" type="submit" name="lsub" value="Upload"><br>
        </form>
        <?php
      }

      if(isset($_POST['chkin']))
      {
        ?>
        <form  action="upload.php" method="post">
          <input id="con" type="text" name="location" placeholder="Enter location"><br><br>
          <input id="con" type="text" name="time" placeholder="Enter Time"><br><br>
          <input  id="con" type="text" name="rand" placeholder="Your thought"><br><br>
          <input id="sub" type="submit" name="csub" value="Upload"><br>
        </form>
        <?php
      }
       ?>
     </center>
</body>
</html>
