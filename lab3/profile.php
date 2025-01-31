<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Profil</title>
</head>
<body>
    <div class="container">
        <div class="profile">
            <h1>Profile</h1>
            <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
            <a href="redirect.php?url=/profile.php">Secure Redirect</a>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>