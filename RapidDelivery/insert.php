<?php
require 'connect.php';
$sql = "INSERT INTO login (username, password)
VALUES ('newUser', 'password')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}  
?>