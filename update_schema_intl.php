<?php
include 'db_connect.php';

$sql = "ALTER TABLE players ADD COLUMN intl_stats VARCHAR(255) DEFAULT 'N/A' AFTER position";

if ($conn->query($sql) === TRUE) {
    echo "Table 'players' updated successfully with 'intl_stats' column.";
} else {
    echo "Error updating table: " . $conn->error;
}

$conn->close();
?>