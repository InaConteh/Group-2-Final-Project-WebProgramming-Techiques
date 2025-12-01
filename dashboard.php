<?php
require_once 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch players
$sql = "SELECT * FROM players ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - LionSport Agency</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .dashboard-container {
            max-width: 1000px;
            margin: 2rem auto;
            padding: 2rem;
        }

        .header-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .player-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .player-table th,
        .player-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        .player-table th {
            background: #006442;
            color: white;
        }

        .action-btn {
            padding: 0.5rem 1rem;
            border-radius: 5px;
            text-decoration: none;
            font-size: 0.9rem;
            margin-right: 0.5rem;
        }

        .btn-edit {
            background: #FFD700;
            color: #006442;
        }

        .btn-delete {
            background: #c62828;
            color: white;
        }

        .btn-add {
            background: #006442;
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo">LionSport</div>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="logout.php">Logout (<?php echo htmlspecialchars($_SESSION['username']); ?>)</a>
        </div>
    </nav>

    <div class="dashboard-container">
        <div class="header-actions">
            <h2>Player Management</h2>
            <a href="add_player.php" class="btn-add">+ Add New Player</a>
        </div>

        <table class="player-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Club</th>
                    <th>Nationality</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['position']); ?></td>
                            <td><?php echo htmlspecialchars($row['club']); ?></td>
                            <td><?php echo htmlspecialchars($row['nationality']); ?></td>
                            <td>
                                <a href="edit_player.php?id=<?php echo $row['id']; ?>" class="action-btn btn-edit">Edit</a>
                                <a href="delete_player.php?id=<?php echo $row['id']; ?>" class="action-btn btn-delete"
                                    onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" style="text-align: center;">No players found. Add one to get started!</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>