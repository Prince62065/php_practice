<?php
session_start();

// Set session timeout duration
$timeout_duration = 6;

// Check if session start time is set
if (!isset($_SESSION["start"])) {
    $_SESSION["start"] = time();
}

// Check for session timeout
if (time() - $_SESSION["start"] > $timeout_duration) {
    session_unset();
    session_destroy();
    echo "You are automatically logged out.";
    exit();
} else {
    $_SESSION["start"] = time(); // Reset session start time
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>About page - This is about session</p>
    <?php
    // Display username only if it is set
    if (isset($_SESSION["name"])) {
        echo "Hi, " . htmlspecialchars($_SESSION["name"]) . ". You are on the About Us page.";
    } else {
        echo "Hi, Guest! You are on the About Us page.";
    }
    ?>
</body>
</html>
