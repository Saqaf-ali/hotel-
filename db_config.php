<?php
// database credentials
 $username="root";
    $password="";
    $host="localhost";
    $database="h";
   


    $conn = mysqli_connect($host, $username, $password, $database);

    
// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

