<?php
/* Database credentials */
$servername = "rei.cs.ndsu.nodak.edu";
$username = "jamie_l_martin_371s25";
$password = "cpONE313ON0!";
$database = "jamie_l_martin_db371s25";

define('DB_SERVER', 'rei.cs.ndsu.nodak.edu');
define('DB_USERNAME', 'jamie_l_martin_371s25');
define('DB_PASSWORD', 'cpONE313ON0!');
define('DB_NAME', 'jamie_l_martin_db371s25');

/* Connect to MySQL database */
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn -> false) {
    die("Connection failed: " . $connection -> connect_error);
} 

echo "Connected successfully";
?>
