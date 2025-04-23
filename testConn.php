<?php
//Named testConn until can ensure that this is the intended method of connecting to database
/* Database credentials. Assuming you are running MySQL server with default setting (user 'root' with no password) */
define('DB_SERVER', 'rei.cs.ndsu.nodak.edu');
define('DB_USERNAME', 'alexander_haskins_371s25');
define('DB_PASSWORD', '6AcLCCov3N0!');
define('DB_NAME', 'alexander_haskins_db371s25');

/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {

    //echo("db is done");
}
?>
