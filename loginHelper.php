<?php
include 'testConn.php';
$username = $_POST['username'];
$password = $_POST['password'];

//echo "<p>username: ". $username.'</p>';
//echo "<p>pass: " . $password . "</p>";

$sql = "SELECT * from users";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    //echo '<p>'.$row['username'].'</p>';
    if($username==$row['username']&&$password==$row['userPassword']){
        $_SESSION["userID"] = $row['userID'];
        $_SESSION["fname"] = $row['userFirstName'];
        $_SESSION["lname"] = $row['userLastName'];

        echo "<p>It works </p>";
        
        if($row['userType']=='Instructor'){
            echo "<p> Instructor";
            //header("location: studentView.php");
        }else if($row['userType']=='Student'){
            echo "<p>Student<p>";
            header("location: studentView.php");
        }else{
            echo "<p>You do not have a valid user type, please contact you database administrator</p>";
            
        }
    }
    if ($username == $row['username']) {
        //echo "<p>Right name</p>";
    }
    if($password==$row['userPassword']){
        //echo "<p>Right pass</p>";
    }
}
echo "<p>Invalid credentials, please try again</p><br />";
echo '<a href="loginAlt.php">Go Back</a>';
//echo "<p>It dosen't work</p>";

?>
