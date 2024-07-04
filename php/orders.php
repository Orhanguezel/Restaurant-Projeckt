<?php
include 'connect.php';

$sql = "SELECT * FROM orders ORDER BY order_time DESC";
$result = $conn->query($sql);

$orders = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $orders[] = $row;
    }
}

echo json_encode($orders);

$conn->close();
?>
