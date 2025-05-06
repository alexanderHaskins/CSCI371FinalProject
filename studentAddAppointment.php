<?php
include 'testConn.php';
$date = $_POST["appointmentDate"];
$time = $_POST["appointmentTime"];
$group = $_POST["appointmentGroupID"];
$team = $_POST["appointmentTeamName"];
$email = $_POST["appointmentEmail"];
$user = $_POST["userID"];
$appointment = $_POST["appointmentID"];

$sql = "UPDATE appointments SET appointmentDate=" . $date . ", appointmentTime=" . $time .
    ", appointmentGroupID=" . $group . ", appointmentTeamName=" . $email . ", userID=" . $user .
    "WHERE appointmentID=".$appointment;



header("location: studentView.php");
$conn->close();
?>
