<?php
// Step 1: Connect to the Database
$servername = "localhost"; // Change if necessary
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$dbname = "food_orders"; // Change to the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Retrieve Form Data


if (isset($_POST['name'] ) and isset($_POST['number'] ) and isset($_POST['order'] ) and isset($_POST['af'] ) and isset($_POST['quantity'] ) and isset($_POST['dt'] ) and isset($_POST['add'] ) and isset($_POST['msg'] ) ) {
//if (isset($_POST['name'] )) {
    $name = $_POST['name'];
$phone_number = $_POST['number'];
$order_name = $_POST['order'];
$additional_food = $_POST['af'];
$quantity = $_POST['quantity'];
$date_time = $_POST['dt'];
$address = $_POST['add'];
$message = $_POST['msg'];


// Step 3: Sanitize Data
$name = mysqli_real_escape_string($conn, $name);
$phone_number = mysqli_real_escape_string($conn, $phone_number);
$order_name = mysqli_real_escape_string($conn, $order_name);
$additional_food = mysqli_real_escape_string($conn, $additional_food);
$quantity = mysqli_real_escape_string($conn, $quantity);
$date_time = mysqli_real_escape_string($conn, $date_time);
$address = mysqli_real_escape_string($conn, $address);
$message = mysqli_real_escape_string($conn, $message);

// Step 4: Insert Data into Database
$sql = "INSERT INTO orders (name, phone_number, order_name, additional_food, quantity, date_time, address, message)
        VALUES ('$name', '$phone_number', '$order_name', '$additional_food', '$quantity', '$date_time', '$address', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
// Step 5: Close the Connection
$conn->close();

?>
