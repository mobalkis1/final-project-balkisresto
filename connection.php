<?php

$con = mysqli_connect("localhost", "root", "", "food_orders");

if (!$con) {
 
    die("Connection failed: " . mysqli_connect_error());
}


?>
