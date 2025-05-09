<?php

session_start();

include("headerInst.html");
include("footer.html");
include "connect.php";

$login = $_SESSION['InstructorName'];
echo $_SESSION['InstructorName'];

$sql = "select a.appointmentID, a.appointmentDate, a.appointmentTime,a.appointmentGroupID,a.appointmentTeamName,a.appointmentEmail,
a.userID as user, u.userID, u.userFirstName, u.userLastName
from appointments a,users u 
where a.userID=u.userID";
$result = $conn->query($sql);
$rows = array();



echo "<table border='1'>";

echo "<tr>";
echo "<th>Date:</th>";
echo "<th>Time:</th>";
echo "<th>Group Number:</th>";
echo "<th>Group Name:</th>";
echo "<th>Email:</th>";
echo "<th>Name:</th>";
echo "<th>Availability:</th>";
echo "</tr>";
?>


        