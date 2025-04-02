<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
</head>
<body>
<h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
<p>This is the menu page.</p>
<a href="logout.php">Logout</a>
</body>
</html>
