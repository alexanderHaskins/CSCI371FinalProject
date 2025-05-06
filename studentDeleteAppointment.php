<?php
include 'testConn.php';
$id = $_GET['appointmentID'];
$sql = "update appointments set appointmentGroupID = '', appointmentTeamName='',".
    " appointmentEmail='', userID='' where appointmentID=".$id;
$conn->query($sql);
$conn->close();
header("location: studentView.php");
?>
