<?php
// sql_injection_protection.php

require 'db_connect.php';

$userId = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo $row['name'];
}

$stmt->close();
$conn->close();
?>
