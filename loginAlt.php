<?php
include("footer.html");
echo '<link rel="stylesheet" type="text/css" href="style.css" media="screen" />';
echo "<body style='background-color:aliceblue'>";

echo '<head>
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

</head>';
echo '<div id="header">
<img class="image" src="NDSU.jpg" width="150" align="right"> <br />
    
</div>';
echo '<div class="input">
    <style>
        div {
            text-align: center;
        }
    </style>';
echo '
<form action="loginHelper.php" method="post">  
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <h1 style="text-align: center;">Login</h1><br />
            <br>
     <label for="username" style="text-align: center;">Username:</label><br>
     <input type="text" style="text-align: center;" id="username" name="username" required><br><br>
     <label for="password">Password:</label><br>
     <input type="password" style="text-align: center";id="password" name="password" required><br><br>
     <input type="submit" value="submit">
</form>';
echo '</div>
    <footer>
        <p>Alexander Haskins, Jamie Martin  CSCI 371</p>
    </footer>';

?>
