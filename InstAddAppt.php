<?php
// This file shows the instructor adding an appointment

session_start();

include"headerInst.html";
include"footer.html";
include'connect.php';

    $date = $_POST['appointmentDate'];
    $time = $_POST['appointmentTime'];
    $group = $_POST['appointmentGroupID'];
    $team = $_POST['appointmentTeamName'];
    $date = $_POST['userId'];
    $date = $_POST["appointmentID"];


//creating a new appointment 
    $sql = "UPDATE appointments SET appointmentDate=" . $date . ", appointmentTime=" . $time .
    ", appointmentGroupID=" . $group . ", appointmentTeamName=" . $email . ", userID=" . $user .
    "WHERE appointmentID=".$appointment;

header("location: InstHome.php");
$conn -> close();
?>

