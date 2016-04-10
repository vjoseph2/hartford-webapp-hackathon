<?php 
include('../header.html');
include('../connect.php');
?>
<html>
    <script>
        $(document).ready(function(){

        });
    </script>
    
    <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->
    
    <!-- Modal -->
    <!--<div id="myModal" class="modal fade" role="dialog">-->
    <!--  <div class="modal-dialog">-->
    
        <!-- Modal content-->
    <!--    <div class="modal-content">-->
    <!--      <div class="modal-header">-->
    <!--        <button type="button" class="close" data-dismiss="modal">&times;</button>-->
    <!--        <h4 class="modal-title">Hey! Looks like someone else was thinking the same thing...</h4>-->
    <!--      </div>-->
    <!--      <div class="modal-body">-->
    <!--        <p>Want to build off of theirs, or continue your own?</p>-->
    <!--      </div>-->
    <!--      <div class="modal-footer">-->
    <!--        <button type="button" class="btn btn-danger" data-dismiss="modal">No thanks, I'll continue my own</button>-->
    <!--        <button type="button" class="btn btn-primary" data-dismiss="modal">Sure! Let's see their idea</button>-->
    <!--      </div>-->
    <!--    </div>-->
    
    <!--  </div>-->
    <!--</div>-->
    <br><br><br><br>
    <div class="container">
  <div class="jumbotron">
    <h2>Search for ideas relating to your idea: </h2> 
    <form class="form" method="POST" action="search.php">
        <input type="text" name="search" placeholder="search..."> <input class="btn btn-success" type="submit" value="Go">
    </form>
  </div>
</div>
<h5> Or view recently created ideas:</h5>
<?php
$sql = "SELECT * FROM existing_ideas WHERE title LIKE '%".$searchinput."%' OR description LIKE '%".$searchinput."% '";
$result = mysqli_query($conn, $sql);
?>

<?php

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
            // if (strpos($a, $searchinput) !== false) {
            // $newsearch=$searchinput;
            // }
            ?>
</div>
    <form class="search-form" action="viewIdea.php" method="GET">
            <?php
            //  echo "<input type='text' hidden readonly value='".$row['i_id'].">";
            echo "<input type='text' class='hide' name='searchresult' value='".$row['i_id']."'>";
    //   echo "<tr><td><a onclick='form.submit();' href='#'>".$row['title']."</a></td></tr>
            // echo "<button type='button' onclick='submit()' class='btn btn-default'>".$row['title']."</button>";
            echo "<div class='card'>
            <img class='card-img' src=".$row['img'].">
            <div class='card-title'><h4>".$row['title']."</h4></div>
            <div class='card-description'><h5><small>".$row['description']."</small></h5></div>
            ";
            echo  "<center><button type='button' width='100%' onclick='submit()' class='btn btn-primary '>".$row['title']."</button></center></div>";
               
       ?>
</form>
       <?php
    }
} else {
    echo "No matches for <b>$searchinput</b>! Would you like to <a href='#'>create a new idea?</a>";
}

mysqli_close($conn);
?>
</html>