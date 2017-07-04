<?php

require 'connect.php';
$pickup_address = $_POST['pickup_address'];
$delivery_address = $_POST['delivery_address'];
$package_type = $_POST['package_type'];
$contact_no = $_POST['contact_no'];
$state_address = $_POST['state_address'];
$note = $_POST['note'];

$sql = "INSERT INTO parcel (pickup_address, delivery_address, package_type, contact_no, state_address, note) 
VALUES ('$pickup_address, $delivery_address, $package_type, $contact_no, $state_address, $note')";
//0 is for no parcels
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}  
?>