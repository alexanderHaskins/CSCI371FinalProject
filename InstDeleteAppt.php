<?php
// This file shows deleting appointments by the Instructor
// Start the session
session_start();
include("headerInst.html");
include("footer.html");
include'testConn.php';

$login = $_SESSION['username'];
echo $_SESSION['username'];

//Connection to MySQL
include("testConn.php");
$id = $_GET['appointmentID'];

$sql = "DELETE FROM appointments WHERE id='' " . $_GET[$id];
$result = $conn->query($sql);
    if($conn->query($SQL) === TRUE){
        echo "appointment was deleted.";
    }
    else{
        echo "Unable to execute $sql. " . mysqli_error($link);
    }
$conn->close();
header("location: InstHome.php");
?>
