<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles.css" />

</head>
<body>
    <style>
        header {
            position: fixed;
            left: 0;
            top: 15px;
            width: 100%;
            background-color: green;
            color: yellow;
            text-align: left;
            padding: 15px;
        }
    </style>
    <header>
        <div id="header">
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            echo '<p>Hello ' . $username . '</p>';
            echo '
            <a href="logout.php" class="button" style="color:white">Logout</a>
            ';
        }
        ?>
            <img class="image" src="NDSU.jpg" width="150" align="right">
        </div>
        
    </header>

</body>
</html>
