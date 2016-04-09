<?php
include('header.html');
include('connect.php');
$searchinput= $_POST['search'];

echo "Hi, $searchinput <br>";
$sql = "SELECT * FROM existing_ideas WHERE EXISTS '$searchinput'";
$result = mysqli_query($conn, $sql);
?>
<html>
    <table class="table">
</html>
<?php

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       echo "<tr><td>".$row['title']."</tr></td>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);


?>
</table>