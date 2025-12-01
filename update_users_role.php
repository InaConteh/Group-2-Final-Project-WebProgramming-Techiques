<?php
require_once 'db.php';

$sql = "ALTER TABLE users ADD COLUMN role ENUM('admin', 'user') DEFAULT 'user' AFTER password";

if ($conn->query($sql) === TRUE) {
    echo "Column 'role' added successfully.";
} else {
    echo "Error adding column: " . $conn->error;
}

$conn->close();
?>