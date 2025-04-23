<?php
//This file serves to display the appointments table and link to the actions the Student can take

include 'testConn.php';
$sql = "select a.appointmentID, a.appointmentDate, a.appointmentTime,a.appointmentGroupID,a.appointmentTeamName,a.appointmentEmail,
a.userID as user, u.userID, u.userFirstName, u.userLastName
from appointments a,users u 
where a.userID=u.userID or a.userID is null";
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
//$row2 = $result2->fetch_assoc();
while ($row = $result->fetch_assoc()) {
    $flag = true;
    foreach($rows as $x){
        if ($x["appointmentID"] == $row["appointmentID"]) {
            $flag = false;
        }
    }
    if ($flag) {
        $rows[] = $row;
    }
    
}
foreach ($rows as $row) {
    //$sql2 = "select * from users";
    //$result2 = $conn2->query($sql2);

    echo "<tr>";
    echo "<td>" . $row['appointmentDate'] . "</td>";
    echo "<td>" . $row['appointmentTime'] . "</td>";
    echo "<td>" . $row['appointmentGroupID'] . "</td>";
    echo "<td>" . $row['appointmentTeamName'] . "</td>";
    echo "<td>" . $row['appointmentEmail'] . "</td>";
    $user = $row['user'];

    //echo "<td>" . $user . "</td>";
    /*
    while ($row2 = $result2->fetch_assoc()) {
        //echo "<td>" . $row2['userFirstName'] . "</td>";
        if ($user == $row2['userID']) {
            echo "<td>" . $row2['userFirstName'] . "</td>";
        }
    }
    */
    //echo "<td>" . $row['userID'] . "</td>";
    if (!is_null($user)) {
        echo "<td>" . $row['userFirstName'] . " " . $row['userLastName'] . "</td>";
    } else {
        echo "<td>" . "" . "</td>";
    }
    if (
        is_null($row['appointmentGroupID']) and is_null($row['appointmentTeamName']) 
        and is_null($row['appointmentEmail']) and is_null($row['user'])
    ) {
        echo "<td>" . "Available" . "</td>";
    } else {
        /*
        if(!is_null('appointmentGroupID')){
            echo '<td>' . "groupID" . '</td>';
        }
        if (!is_null('appointmentTeamName')) {
            echo '<td>' . "teamName" . '</td>';
        }
        if (!is_null('appointmentEmail')) {
            echo '<td>' . "email" . '</td>';
        }
        */
        

        echo "<td>" . "Booked" . "</td>";
    }


    //$conn2->close();
    echo "</tr>";
}

echo "</table>";
//echo "<p>" . $sql . "</p>";
$conn->close();
?>