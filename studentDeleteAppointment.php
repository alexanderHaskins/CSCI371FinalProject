<?php
include 'testConn.php';
$id = $_GET['DeleteID'];
//$sql = "delete from appointments where appointmentID=$id";
//$conn->query($sql);
$conn->close();
header("location: studentView.php");
?>
