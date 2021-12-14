<?php
    $name = $_GET["name"];
    $email = $_GET["email"];    
    $location = $_GET["location"];
    $message = $_GET["message"];
    
    $server = "sql112.epizy.com";
    $userid = "epiz_29695091";
    $pw = "VQJYzQ2XKDw";
    $db= "epiz_29695091_Final";


    $conn = new mysqli($server, $userid, $pw );
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $conn->select_db($db);
    
    $sql = "insert INTO Feedback (Name, Email, Location, Message) VALUES
    ('$name', '$email', '$location', '$message')";
        
    $conn->query($sql);
    $conn->close();
?>
