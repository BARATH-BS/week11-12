<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload</title>
    <style media="screen">
    button
    {
      margin: 10px;
      width: 250px;
      height: 50px;
      border: solid black 5px;
      border-radius: 20px;
      background-color: #73ffa2;
    }
    a
    {
      text-decoration: none;
      color: black;
    }
    </style>
  </head>
  <body>

      <?php
      include ("connection.php");
      if (isset($_POST['tsub']))
      {
        $inputText=$_POST['itxt'];
        $type="t";
        $sql = "INSERT INTO post (ptype,pinfo) VALUES ('$type','$inputText')";
        $connect->query($sql);
      }
      if (isset($_POST['psub']))
      {
        $type="i";
        $inputImage = $_FILES['ipic']['name'];
        $target = "images/".basename($inputImage);
        $sql = "INSERT INTO post (ptype,pinfo) VALUES ('$type','$inputImage')";
        $connect->query($sql);
        move_uploaded_file($_FILES['ipic']['tmp_name'], $target);
      }
      if (isset($_POST['vsub']))
      {
        $type="v";
        $inputVideo = $_FILES['ivid']['name'];
        $target = "images/".basename($inputVideo);
        $sql = "INSERT INTO post (ptype,pinfo) VALUES ('$type','$inputVideo')";
        $connect->query($sql);
        move_uploaded_file($_FILES['ivid']['tmp_name'], $target);
      }
      if (isset($_POST['lsub']))
      {
        $inputLink=$_POST['ilnk'];
        $type="l";
        $sql = "INSERT INTO post (ptype,pinfo) VALUES ('$type','$inputLink')";
        $connect->query($sql);
      }
      if (isset($_POST['csub']))
      {
        $loc=$_POST['location'];
        $time=$_POST['time'];
        $thoughts=$_POST['rand'];
        $all=$loc."~".$time."~".$thoughts;
        $type="c";
        $sql = "INSERT INTO post (ptype,pinfo) VALUES ('$type','$all')";
        $connect->query($sql);
      }
       ?>
       <center>
      <button type="button"><?php echo '<a href="show.php">View Your Post</a>'; ?></button><br><br><br>
    </center>

    </body>
  </html>
