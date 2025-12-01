<?php
require_once 'db.php';

$password = password_hash('password123', PASSWORD_DEFAULT);

$users = [
    ['admin1', 'admin1@gmail.com', $password, 'admin'],
    ['admin2', 'admin2@gmail.com', $password, 'admin'],
    ['user1', 'user1@gmail.com', $password, 'user'],
    ['user2', 'user2@gmail.com', $password, 'user']
];

foreach ($users as $user) {
    $username = $user[0];
    $email = $user[1];
    $pass = $user[2];
    $role = $user[3];

    // Check if user exists
    $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows == 0) {
        $stmt = $conn->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $email, $pass, $role);

        if ($stmt->execute()) {
            echo "Created $role: $username ($email)<br>";
        } else {
            echo "Error creating $username: " . $stmt->error . "<br>";
        }
        $stmt->close();
    } else {
        echo "User $email already exists.<br>";
    }
    $check->close();
}

$conn->close();
?>