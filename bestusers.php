<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>En İyi Kullanıcılar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>En İyi Kullanıcılar</h1>
    <?php
    $users = file("users.txt");
    foreach ($users as $user) {
        echo "<div class='user-entry'>" . $user . "</div>";
    }
    ?>
</body>
</html>