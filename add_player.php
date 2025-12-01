<?php
require_once 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $position = trim($_POST['position']);
    $club = trim($_POST['club']);
    $nationality = trim($_POST['nationality']);

    if (empty($name) || empty($position)) {
        $error = "Name and Position are required.";
    } else {
        $stmt = $conn->prepare("INSERT INTO players (name, position, club, nationality) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $position, $club, $nationality);

        if ($stmt->execute()) {
            $success = "Player added successfully!";
        } else {
            $error = "Error: " . $stmt->error;
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Player - LionSport Agency</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .form-container {
            max-width: 500px;
            margin: 3rem auto;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-submit {
            background: #006442;
            color: white;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 1rem;
        }

        .alert {
            padding: 0.8rem;
            margin-bottom: 1rem;
            border-radius: 5px;
        }

        .alert-success {
            background: #e8f5e9;
            color: #2e7d32;
        }

        .alert-error {
            background: #ffebee;
            color: #c62828;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo">LionSport</div>
        <div class="nav-links">
            <a href="dashboard.php">Dashboard</a>
            <a href="logout.php">Logout</a>
        </div>
    </nav>

    <div class="form-container">
        <h2 style="color: #006442; margin-bottom: 1.5rem; text-align: center;">Add New Player</h2>

        <?php if ($error): ?>
            <div class="alert alert-error"><?php echo $error; ?></div>
        <?php endif; ?>
        <?php if ($success): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" id="position" name="position" required placeholder="e.g. Striker, Midfielder">
            </div>
            <div class="form-group">
                <label for="club">Current Club</label>
                <input type="text" id="club" name="club">
            </div>
            <div class="form-group">
                <label for="nationality">Nationality</label>
                <input type="text" id="nationality" name="nationality">
            </div>
            <button type="submit" class="btn-submit">Add Player</button>
        </form>
        <div style="text-align: center; margin-top: 1rem;">
            <a href="dashboard.php" style="color: #666;">Back to Dashboard</a>
        </div>
    </div>
</body>

</html>