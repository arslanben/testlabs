<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $message = $_POST['message'];

    $message = str_replace("<script>", "", $message);
    $message = str_replace("</script>", "", $message);

    $entry = "$username: $message\n";
    file_put_contents("users.txt", $entry, FILE_APPEND);
    header("Location: index.html");
    exit();
}
?>