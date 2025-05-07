<?php

/* Database credentials */
define('DB_SERVER', 'rei.cs.ndsu.nodak.edu');
define('DB_USERNAME', 'jamie_l_martin_371s25');
define('DB_PASSWORD', 'cpONE313ON0!');
define('DB_NAME', 'jamie_l_martin_db371s25');

/* Connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
