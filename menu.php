<?php
session_start();

if (!isset($_SESSION['user_id'])) {
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
<h2>Welcome, <?php echo htmlspecialchars($_SESSION['user_email']); ?>!</h2>
<p>This is the menu page.</p>
<a href="/test" target="_blank">Go to Laravel App</a>
<a href="logout.php">Logout</a>
</body>
</html>
