<?php
    $servername = "localhost";
    $username = "vjoseph2";
    $password = "";
    $dbname = "idea_database";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>