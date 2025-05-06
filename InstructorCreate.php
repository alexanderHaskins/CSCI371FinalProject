<?php
session_start();

include('header.html');
include('footer.html');

include("connection.php");

$date_now = date('Y-m-d H:i:s');
echo ($date_now);

#creating the SQL query
    $sql = "INSERT INTO appointments (appointmentID, appointmentDate, appointmentTime,
appointmentGroupID, appointmentTeamName, appointmentEmail, userID)
VALUES ()";

$result = $conn->query($sql);
$rows = array();


if($conn->query($sql) === TRUE) {
echo "new appointment created";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    $conn -> close();
    echo('home.html');
?>

