
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
 <div class="container">
  <div class="jumbotron"> 
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <br><br><br>
      <h2> <?php echo $title; ?> Progress</h2>
       <center><img class="progress-icon" src="<?php echo $img; ?>"></center> </div></div>
    </div>
    <div class="col-sm-4"></div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="container">
  <div class="jumbotron">
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="10"
  aria-valuemin="0" aria-valuemax="100" style="width:20%">
    20%
  </div> 
</div><center><i>Creating Wireframes and Templates- 2015-4-1 <br>Project Taken: staffing 2015-4-1 </i></center>
    </div>
    </div>
    </div>
</div>
<center><div class="commentSection"><i>Createing wireframes and templates</i></div>
</div>
</div></center>


</html>