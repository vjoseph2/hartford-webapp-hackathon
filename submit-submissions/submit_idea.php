<?php
include('../connect.php');
$name = $_GET['title'];
$description= $_GET['description'];
$suggestions= $_GET['suggestion1'];
$rating= $_GET['rating'];
$img= $_GET['img'];
$category= $_GET['category'];

echo $category."<br>";

$sql3 = "SELECT * FROM gen_categories WHERE category_name='$category'";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
    // output data of each row
    while($row = $result3->fetch_assoc()) {
       $stored_rating= $row['gen_category_rating'];
       $incoming_rating=($stored_rating+$rating)/2;
    } 
} else {
    echo "0 results";
}


$sql = "INSERT INTO existing_ideas (title, description, suggestions, img)
VALUES ('$name', '$description', '$suggestions', '$img')";

if ($conn->query($sql) === TRUE) {
    echo "New record inserted successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$sql2 = "UPDATE gen_categories SET gen_category_rating='$incoming_rating' WHERE category_name='$category'";

if ($conn->query($sql2) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>