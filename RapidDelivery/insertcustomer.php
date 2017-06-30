<?php

require 'connect.php';
$uname = $_POST['uname'];
$pss = $_POST['pss'];
$email = $_POST['email'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];
$sql = "INSERT INTO customer (username, password, email, address, tel)
VALUES ('$uname', '$pss', '$email', '$address', '$telephone')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}  
?>