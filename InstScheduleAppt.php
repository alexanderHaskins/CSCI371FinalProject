<?php
session_start();
include 'testConn.php';
include 'header.php';
include 'footer.html';

$currentID = $_SESSION["userID"];
$appointment = $_GET["appointmentID"];

$sql = "SELECT * from appointments where appointmentID=". $appointment;
$sql2 = "SELECT * from users where userID=" . $currentID;
$sql3 = "SELECT * from groups where groupLeader=". $currentID." or groupMember1=" . $currentID
    . " or groupMember2=" . $currentID . " or groupMember3=" . $currentID . " or groupMember4="
    . $currentID;

$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);

$row = $result->fetch_assoc();
$row2 = $result2->fetch_assoc();
$row3 = $result3->fetch_assoc();
echo '<form action="InstAddAppt.php" method="post">';
echo ' <label for="appointmentDate">Appointment ID:</label>';
echo '<br />';
echo '<input type="text" class="form-control m-2" id="appointmentID" name="appointmentID" value="' . $appointment . '" readonly required>';
echo '<br />';

echo ' <label for="appointmentDate">Date:</label>';
echo '<br />';
echo '<input type="text" class="form-control m-2" id="appointmentDate" name="appointmentDate" value="'. $row['appointmentDate'].'" readonly required>';
echo '<br />';

echo ' <label for="appointmentTime">Time:</label>';
echo '<br />';
echo '<input type="text" class="form-control m-2" id="appointmentTime" name="appointmentTime" value="' . $row['appointmentTime'] . '" readonly required>';
echo '<br />';

echo '<br />';
echo ' <label for="appointmentGroupID">Group ID:</label>';
echo '<br />';
echo '<input type="text" class="form-control m-2" id="appointmentGroupID" name="appointmentGroupID" value="' . $row3['groupID'] . '" readonly required>';

echo '<br />';
echo ' <label for="appointmentTeamName">Team Name:</label>';
echo '<br />';
echo '<input type="text" class="form-control m-2" id="appointmentTeamName" name="appointmentTeamName" required>';

echo '<br />';
echo ' <label for="appointmentEmail">Email:</label>';
echo '<br />';
echo '<input type="text" class="form-control m-2" id="appointmentEmail" name="appointmentEmail" value="' . $row2['userEmail'] . '" readonly required>';

echo '<br />';
echo ' <label for="userID">User ID:</label>';
echo '<br />';
echo '<input type="text" class="form-control m-2" id="userID" name="userID" value="' . $currentID . '" readonly required>';

echo '<br />';
echo '<input type="submit" value="Submit">
    </form>';

$conn->close();
?>
