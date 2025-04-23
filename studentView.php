<?php
//This file serves to display the appointments table and link to the actions the Student can take

include 'testConn.php';
$sql = "select * from appointments";
$result = $conn->query($sql);


echo "<table border='1'>";
//$row2 = $result2->fetch_assoc();
while ($row = $result->fetch_assoc()) {
    //$sql2 = "select * from users";
    //$result2 = $conn2->query($sql2);
    echo "<tr>";
    echo "<td>" . $row['appointmentDate'] ."</td>";
    echo "<td>" . $row['appointmentTime'] . "</td>";
    echo "<td>" . $row['appointmentGroupID'] . "</td>";
    echo "<td>" . $row['appointmentTeamName'] . "</td>";
    echo "<td>" . $row['appointmentEmail'] . "</td>";
    $user = $row['userID'];
    echo "<td>" . $user . "</td>";
    /*
    while ($row2 = $result2->fetch_assoc()) {
        //echo "<td>" . $row2['userFirstName'] . "</td>";
        if ($user == $row2['userID']) {
            echo "<td>" . $row2['userFirstName'] . "</td>";
        }
    }
    */
    //echo "<td>" . $row['userID'] . "</td>";


    //$conn2->close();
    echo "</tr>";
}

echo "</table>";
//echo "<p>" . $sql . "</p>";
$conn->close();
?>