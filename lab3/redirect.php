<?php
session_start();

$redirect_url = $_GET['url'];

$decoded_once = urldecode($redirect_url);
$decoded_twice = urldecode($decoded_once);

if ($decoded_twice === $redirect_url || $decoded_once === $redirect_url) {
    die("Yönlendirme yapılamadı.");
}

if (filter_var($decoded_twice, FILTER_VALIDATE_URL) !== false) {
    $parsed_url = parse_url($decoded_twice);
    if (isset($parsed_url['scheme']) && isset($parsed_url['host'])) {
        header("Location: " . $decoded_twice);
        exit();
    } else {
        die("Yönlendirme yapılamadı.");
    }
} else {
    die("Yönlendirme yapılamadı.");
}
?>