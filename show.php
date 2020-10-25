<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Show</title>
    <link rel="stylesheet" href="show.css">
  </head>
  <body>
      <?php
      include ("connection.php");
      $sql="SELECT * FROM post";
      $avail=$connect->query($sql);
        while ($row=$avail->fetch_assoc())
        {
          ?>
          <div class="postcontent">
          <?php
          $pid=$row['postid'];
          //echo "post id:".$pid."<br>";
          if($row['ptype']=="t")
          {
            echo $row['pinfo'];
            echo "<br>";
          }
          if($row['ptype']=="i")
          {
            echo "<img src='images/".$row['pinfo']."' >";
            echo "<br>";
          }
          if($row['ptype']=="v")
          {
            ?>
            <video width="320" height="240" controls>
              <source src='images/<?php echo $row['pinfo']?>' type="video/mp4">
            </video>
            <?php
            echo "<br>";

          }
          if($row['ptype']=="l")
          {
            ?>
            <a href="<?php echo $row['pinfo']; ?>">Click here</a>
            <?php
            echo "<br>";
          }
          if($row['ptype']=="c")
          {
            $con=explode("~",$row['pinfo']);
            echo "location ".$con[0]."<br>";
            echo "Time ".$con[1]."<br>";
            echo "Thought ".$con[2]."<br>";
          }
          ?>

        <div class="likess">
          <?php echo "like: ".$row['likes']."<br>"; ?>
          <form action="likes.php" method="post">
            <button type="submit" name="like" value="<?php echo $row['postid']; ?>">Like</button>
          </form>
        </div>

        <?php
        echo "<br><br>";
        ?>
        <div class="addcommentss">
          <form action="cmtoption.php" method="post">
            <button type="submit" name="cmt" value="<?php echo $pid; ?>">Add Comment</button>
          </form>
        </div>
        <?php
        echo "<br>";
        ?>

        <div class="showcmt">
          <?php
          echo "COMMENTS";
          $sql="SELECT * FROM comment WHERE postid='$pid'";
          $cmtdata=$connect->query($sql);
          while ($row=$cmtdata->fetch_assoc())
          {
            ?>
            <div class="cmtcontent">
            <?php
            if($row['ctype']=="t")
            {
              echo $row['cmtinfo'];
              echo "<br>";
            }
            if($row['ctype']=="i")
            {
              echo "<img src='images/".$row['cmtinfo']."' >";
              echo "<br>";
            }
            if($row['ctype']=="v")
            {
              ?>
              <video width="320" height="240" controls>
                <source src='images/<?php echo $row['cmtinfo']?>' type="video/mp4">
              </video>
              <?php
              echo "<br>";

            }
            if($row['ctype']=="l")
            {
              ?>
              <a href="<?php echo $row['cmtinfo']; ?>">Click here</a>
              <?php
              echo "<br>";
            }
            ?>
            </div>
            <?php
          }
          ?>
        </div>
        </div>
        <?php
      }
      ?>
      <br><br>
      <center>
      <button type="button" id="newpost"><?php echo '<a href="option.php">NEW POST</a>'; ?></button><br><br><br>
    </center>
</body>
</html>
