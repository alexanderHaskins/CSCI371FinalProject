<?php

// Start the session
session_start();

echo "Welcome!" . $_REQUEST['InstructorName'];

include("header.html");
include("footer.html");

#connect to MySQL
include("connection.php");

$sql = "DELETE FROM appointments WHERE";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo ("<table border='1'>");
}
    if(mysqli_query($link, $sql)){
        echo "Record was deleted.";
    }
    else{
        echo "Unable to execute $sql. " . mysqli_error($link);
    }
    $conn->close().
echo ("Location: InstructorHome.php");
?>
