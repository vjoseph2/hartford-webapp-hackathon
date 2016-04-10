
<?php
include('../header.html');
include('../connect.php');
$searchinput= $_POST['search'];

// echo "Hi, $searchinput <br>";
$sql = "SELECT * FROM existing_ideas WHERE title LIKE '%".$searchinput."%' OR description LIKE '%".$searchinput."% '";
$result = mysqli_query($conn, $sql);
?>

<?php

if (mysqli_num_rows($result) > 0) {
    echo "<br><br><br> <h1>Showing results for $searchinput</h1>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
            // if (strpos($a, $searchinput) !== false) {
            // $newsearch=$searchinput;
            // }
            ?>
    <form class="form" action="viewIdea.php" method="GET">
            <?php
            //  echo "<input type='text' hidden readonly value='".$row['i_id'].">";
            echo "<input type='text' class='hide' name='searchresult' value='".$row['i_id']."'>";
    //   echo "<tr><td><a onclick='form.submit();' href='#'>".$row['title']."</a></td></tr>
            echo "<button type='button' onclick='submit()' class='btn btn-default'>".$row['title']."</button>";
            echo "<div class='card'><img class='card-img' src=".$row['img']."><div class='card-title'><h4>".$row['title']."</h4></div>
            <div class='card-description'><h5><small>".$row['description']."</small></h5></div>
            <button type='button' onclick='submit()' class='btn btn-primary'>".$row['title']."</button>";
               
       ?>
</form>
       <?php
    }
} else {
    echo "No matches for <b>$searchinput</b>! Would you like to <a href='#'>create a new idea?</a>";
}

mysqli_close($conn);


?>
