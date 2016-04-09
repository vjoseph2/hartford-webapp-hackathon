<?php
include('../header.html');
include('../connect.php');
$searchresult= $_GET['searchresult'];


$sql = "SELECT * FROM existing_ideas WHERE i_id='$searchresult'";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
      $img=$row['img'];
      $desc=$row['description'];
      $title=$row['title'];
      $rating=$row['gen_rating'];
       
    }
?>
<html>
<div class="row">
    <div class="col-sm-12 headerimg">
        </html>
        <?php
        echo "<img class='header-img' src='$img'>";
        ?>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 idea-main">
        <h1>
        </html>
        <?php echo $title;?>
        </h1>
        <p> <?php echo $desc;?></p>
        <html>
    </div>
</div>


</html>