<?php
// This file showws the action of deleting appointments by the Instructor

// Start the session
session_start();
include("header.html");
include("footer.html");

$login = $_SESSION['username'];
echo $_SESSION['username'];

//Connection to MySQL
include("connection.php");
$id = $_GET['appointmentID'];

$sql = "DELETE FROM appointments WHERE id='' " . $_GET[$id];
$result = $conn->query($sql);
    if($conn->query($SQL) === TRUE){
        echo "Record was deleted.";
    }
    else{
        echo "Unable to execute $sql. " . mysqli_error($link);
    }
$conn->close();
header("location: InstructorView.php");
?>
