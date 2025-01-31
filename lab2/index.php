<?php

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

$lang = str_replace(['<script>', '</script>', 'iframe', 'a href', 'img', 'onerror', 'onload', 'javascript:'], '', $lang); // Belirli anahtar kelimeleri kaldırır
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Lab - Advanced</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        select, button {
            font-size: 16px;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
        }

        button {
            background-color: #007BFF;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Advanced XSS Lab!</h1>
        <form method="GET" action="index.php">
            <label for="lang">Select Language:</label>
            <select name="lang" id="lang">
                <option value="en">English</option>
                <option value="fr">French</option>
                <option value="tr">Turkish</option>
            </select>
            <button type="submit">Submit</button>
        </form>

        <p>
            You selected: <?php echo $lang; ?>
        </p>

        <script>
            var lang = "<?php echo $lang; ?>";
            console.log("Selected language: " + lang);
        </script>
    </div>
</body>
</html>