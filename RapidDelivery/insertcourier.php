<?php

require 'connect.php';
$uname = $_POST['username'];
$pss = $_POST['password'];
$email = $_POST['email'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];
$sql = "INSERT INTO courier (id, username, password, parcel_ID) 
VALUES ('1','prasangacourier', '1111', '2')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}  
?>