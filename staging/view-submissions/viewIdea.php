
<head>
<style>
.navbar{
    
    position: absolute;
    z-index:999;
}
.headerimg{
    margin-top:-100px;
}
.header-img{
    width:100%;  
    position: absolute;
    z-index:2;
}
.idea-main{
    position: absolute;
    z-index:2;
    margin-top:250px;
    height:100%;
    background-color:white;
}
.ratings{
      float: none;
    font-size:40px;
    color:#ffc34d;
}
</style>
</head>
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
        <center><figure class="ratings center-block"><?php
        function stars($rating){
            if($rating==0){
                echo "&#9734;&#9734;&#9734;&#9734;&#9734;";
            }elseif($rating==1){
                echo "&#8902;&#9734;&#9734;&#9734;&#9734;";
            }elseif($rating==2){
               echo "&#8902;&#8902;&#9734;&#9734;&#9734;"; 
               
            }elseif($rating==3){
               echo "&#8902;&#8902;&#8902;&#9734;&#9734;"; 
            }elseif($rating==4){
                echo "&#8902;&#8902;&#8902;&#8902;;&#9734;";
            }elseif($rating==5){
                echo "&#8902;&#8902;&#8902;&#8902;&#8902;";
            }else {
                echo "There was an error with the rating system";
                }
        }
        stars($rating);
        ?></figure></center>
        <p> <?php echo $desc;?></p>
        <html>
    </div>
</div>


</html>