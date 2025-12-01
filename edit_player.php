<?php
require_once 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (!isset($_GET['id'])) {
    header("Location: dashboard.php");
    exit();
}

$id = $_GET['id'];
$error = '';
$success = '';

// Fetch existing data
$stmt = $conn->prepare("SELECT * FROM players WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$player = $result->fetch_assoc();

if (!$player) {
    die("Player not found.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $position = trim($_POST['position']);
    $club = trim($_POST['club']);
    $nationality = trim($_POST['nationality']);

    if (empty($name) || empty($position)) {
        $error = "Name and Position are required.";
    } else {
        $update_stmt = $conn->prepare("UPDATE players SET name = ?, position = ?, club = ?, nationality = ? WHERE id = ?");
        $update_stmt->bind_param("ssssi", $name, $position, $club, $nationality, $id);

        if ($update_stmt->execute()) {
            $success = "Player updated successfully!";
            // Refresh data
            $player['name'] = $name;
            $player['position'] = $position;
            $player['club'] = $club;
            $player['nationality'] = $nationality;
        } else {
            $error = "Error: " . $update_stmt->error;
        }
        $update_stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Player - LionSport Agency</title>
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
            background: #FFD700;
            color: #006442;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 1rem;
            font-weight: bold;
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
        <h2 style="color: #006442; margin-bottom: 1.5rem; text-align: center;">Edit Player</h2>

        <?php if ($error): ?>
            <div class="alert alert-error"><?php echo $error; ?></div>
        <?php endif; ?>
        <?php if ($success): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($player['name']); ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" id="position" name="position"
                    value="<?php echo htmlspecialchars($player['position']); ?>" required>
            </div>
            <div class="form-group">
                <label for="club">Current Club</label>
                <input type="text" id="club" name="club" value="<?php echo htmlspecialchars($player['club']); ?>">
            </div>
            <div class="form-group">
                <label for="nationality">Nationality</label>
                <input type="text" id="nationality" name="nationality"
                    value="<?php echo htmlspecialchars($player['nationality']); ?>">
            </div>
            <button type="submit" class="btn-submit">Update Player</button>
        </form>
        <div style="text-align: center; margin-top: 1rem;">
            <a href="dashboard.php" style="color: #666;">Back to Dashboard</a>
        </div>
    </div>
</body>

</html>