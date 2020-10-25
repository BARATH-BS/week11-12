<?php
		$connect = mysqli_connect("localhost", "root" , "", "week11");
    if(! $connect )
    {
      die('Could not connect: ' . mysql_error());
    }
?>
