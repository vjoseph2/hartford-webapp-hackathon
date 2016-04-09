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
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
            // if (strpos($a, $searchinput) !== false) {
            // $newsearch=$searchinput;
            // }
            ?>
    <form class="form" action="viewIdea.php" method="GET">
        
            <?php
            //  echo "<input type='text' hidden readonly value='".$row['i_id'].">";
            echo "<input type='text' hidden name='searchresult' value='".$row['i_id']."'>";
    //   echo "<tr><td><a onclick='form.submit();' href='#'>".$row['title']."</a></td></tr>
            echo "<button type='button' onclick='submit()' class='btn btn-default'>".$row['title']."</button>";
               
       ?>
</form>
       <?php
    }
} else {
    echo "No matches for <b>$searchinput</b>! Would you like to <a href='#'>create a new idea?</a>";
}

mysqli_close($conn);


?>
