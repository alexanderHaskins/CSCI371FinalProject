<?php
//File shown is the actions the instrcuctor can take with editing appointments
session_start();

include("header.html");
include("footer.html");
include'testConn.php';

$login = $_SESSION['InstructorName'];
echo $_SESSION['InstructorName'];

echo "<table border='2'>";
"<tr>";
"<th>Date</th>";
"<th>Time</th>";
"<th>Group Number</th>";
"<th>Team Name</th>";
"<th>Email</th>";
"<th>Name</th>";
"<th>Available</th>";
"</tr>";


if (mysql_num_rows($results) > 0) {
    while ($results = mysql_fetch_array($results)) {
        echo "<tr><td>" . $results['appointmentID'] .   "</td>";
        echo "<td>" . $results['appointmentDate']   .   "</td>";
        echo "<td>" . $results['appointmentTime'] .     "</td>";
        echo "<td>" . $results['appointmentGroupID'] .  "</td>";
        echo "<td>" . $results['appointmentTeamName'] . "</td>";
        echo "<td>" . $results['appointmentEmail'] .    "</td>";
        echo "<td>" . $results['userID'] . "</td></tr>";
    }
}
echo "</table>";
?>


        
