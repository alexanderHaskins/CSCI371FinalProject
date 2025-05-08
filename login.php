<?php

include("footer.html");

session_start();
echo "<body style='background-color:aliceblue'>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $_SESSION['username'] = $username;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post" action="">
        <h1>Login</h1>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <h2>I am a</h2>
        <label for="userType">Student</label>
        <input type="radio" id="option1" name="options" value="option1" required>
        
        <label for="userType">Instructor</label>
        <input type="radio" id="option2" name="options" value="option2" required><br><br>

        <input type="submit" value="Login">
    </form>

    <?php
    if (isset($_SESSION['username'])) {
        echo "Logged in as: " . $_SESSION['username'];
    }
    ?>
</body>
</html>

