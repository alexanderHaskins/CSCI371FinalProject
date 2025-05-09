<?php

include("footer.html");
echo '<link rel="stylesheet" type="text/css" href="style.css" media="screen" />';
session_start();
echo "<body style='background-color:aliceblue'>";

$username = $_POST["username"];
$password = $_POST["password"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = htmlspecialchars($_POST['username']);
   
 
}


?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />

    <style>
        body{
            background-color:aliceblue;
        }
    </style>

</head>
<body>
    <div id="header">
    <img class="image" src="NDSU.jpg" width="150" align="right"> <br />
        
    </div>
    <div class="input">
        <style>
            div {
                text-align: center;
            }
        </style>
        <form action="login" method="post">
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <h1 style="text-align: center;">Login</h1><br />
            <br>
            <label for="username" style="text-align: center;">Username:</label><br>
            <input type="text" style="text-align: center;" id="user" name="username" required><br><br>

            <label for="password">Password:</label><br>
            <input type="text" style="text-align: center";id="password" name="password" required><br><br>

            <br />
        


        <label>
            <input type="radio" name="option" value="Student">
            Student
        </label><br>
        <label>
            <input type="radio" name="option" value="Instructor">
            Instructor
        </label><br>
        </form>

        <input type="submit" value="Login"><br />
        <br />

    </div>
    <footer>
        <p>Alexander Haskins, Jamie Martin  CSCI 371</p>
    </footer>
</body>
</html>

