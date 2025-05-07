<?php
include 'testConn.php';
$id = $_GET['appointmentID'];
$sql = "update appointments set appointmentGroupID = null, appointmentTeamName=null,".
    " appointmentEmail=null, userID=null where appointmentID=".$id;
//echo $sql;
$conn->query($sql);
$conn->close();
header("location: studentView.php");
?>
