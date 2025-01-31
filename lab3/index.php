<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>welcome!</title>
</head>
<body>
    <div class="container">
        <h1>welcome!</h1>
        <p>Open Redirect test lab</p>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Sign in</button>
        </form>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>