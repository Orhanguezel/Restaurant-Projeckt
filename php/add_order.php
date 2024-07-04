<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $order_details = $_POST['order_details'];

    $sql = "INSERT INTO orders (customer_name, order_details) VALUES ('$customer_name', '$order_details')";

    if ($conn->query($sql) === TRUE) {
        echo "New order placed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
