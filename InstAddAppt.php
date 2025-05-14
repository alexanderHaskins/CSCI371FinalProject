<?php
<?php
include 'testConn.php';
$date = $_POST["appointmentDate"];
$time = $_POST["appointmentTime"];
$group = $_POST["appointmentGroupID"];
$team = $_POST["appointmentTeamName"];
$email = $_POST["appointmentEmail"];
$user = $_POST["userID"];
$appointment = $_POST["appointmentID"];

$sql = "UPDATE appointments SET appointmentDate=cast('" . $date . "' as date), appointmentTime=cast('" . $time .
    "' as time), appointmentGroupID=" . $group . ", appointmentTeamName='" .$team."', appointmentEmail='" . $email . "', userID=" . $user .
    " WHERE appointmentID=".$appointment;


echo $sql;
$conn->query($sql);
header("location: InstHome.php");
$conn->close();
?>


?>