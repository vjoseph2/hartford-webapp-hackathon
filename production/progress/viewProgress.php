
<?php
include('../connect.php');
include('../header.html');
$searchresult= $_GET['searchresult'];



$sql = "SELECT * FROM existing_ideas WHERE i_id='$searchresult'";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
      $img=$row['img'];
      $desc=$row['description'];
      $title=$row['title'];
      $percentage_done=$row['percentage_done'];
      $last_comment = $row['lasT_comment'];
      $rating=$row['gen_rating'];
       
    }
?>
<html>
<div class="row">
    <div class="col-sm-12 headerimg">
        </html>
        <?php
        // echo "<img class='header-img' src='$img'>";
        ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <br><br><br>
        <center><h2> <?php echo $title; ?> Progress</h2>
        <img class="progress-icon" src="<?php echo $img; ?>"></center>
    </div>
    <div class="col-sm-4"></div>
</div>
<div class="row">
    <div class="col-sm-12">
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="10"
  aria-valuemin="0" aria-valuemax="100" style="width:20%">
    70%
  </div>
</div>
    </div>
</div>
<center><div class="commentSection"><?php echo $last_comment;?></div></center>


</html>