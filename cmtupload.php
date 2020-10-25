<?php
session_start();
//$_SESSION['pid']=$_POST['cmt'];
 ?>
<?php
include ("connection.php");
$pstid=$_SESSION['pid'];
date_default_timezone_set("Asia/Calcutta");
$tim=date("h:i:sa");
$dt=date("Y:m:d");
$tim=substr($tim,0,8);
$cmtid=$dt.":".$tim;
if (isset($_POST['tsub']))
{
  $inputText=$_POST['itxt'];
  $type="t";
  $sql = "INSERT INTO comment (postid, commentid, ctype, cmtinfo) VALUES ('$pstid','$cmtid','$type','$inputText')";
  $connect->query($sql);
}
if (isset($_POST['psub']))
{
  $type="i";
  $inputImage = $_FILES['ipic']['name'];
  $target = "images/".basename($inputImage);
  $sql = "INSERT INTO comment (postid, commentid, ctype, cmtinfo) VALUES ('$pstid','$cmtid','$type','$inputImage')";
  $connect->query($sql);
  move_uploaded_file($_FILES['ipic']['tmp_name'], $target);
}
if (isset($_POST['vsub']))
{
  $type="v";
  $inputVideo = $_FILES['ivid']['name'];
  $target = "images/".basename($inputVideo);
  $sql = "INSERT INTO comment (postid, commentid, ctype, cmtinfo) VALUES ('$pstid','$cmtid','$type','$inputVideo')";
  $connect->query($sql);
  move_uploaded_file($_FILES['ivid']['tmp_name'], $target);
}
if (isset($_POST['lsub']))
{
  $inputLink=$_POST['ilnk'];
  $type="l";
  $sql = "INSERT INTO comment (postid, commentid, ctype, cmtinfo) VALUES ('$pstid','$cmtid','$type','$inputLink')";
  $connect->query($sql);
}
session_destroy();
echo '<script> window.location.href = "show.php";</script>';
 ?>
