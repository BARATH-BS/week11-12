<?php
include ("connection.php");
$pid=$_POST['like'];
$sql="SELECT * FROM post WHERE postid='$pid'";
$avail=$connect->query($sql);
while ($row=$avail->fetch_assoc())
{
  $oldlikes=(int)$row['likes'];
  $newlikes=$oldlikes+1;
  $update_sql="UPDATE post SET likes='$newlikes' WHERE postid='$pid'";
  $connect->query($update_sql);
}
echo '<script> window.location.href = "show.php";</script>';
 ?>
