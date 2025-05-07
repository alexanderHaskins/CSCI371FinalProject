<?php

session_start();

$username = $_POST['userID'];
$password = $_POST['password'];


// Instructor Name = jamie.martin, Instructor Password = abc1234;
// Student Name = alexander.haskins, Student Password = def5678;

echo "<input type='text' id='userID' value=''/>";
echo "<input type='text' id='password' value=''/>";

if (($_POST['userID'] == 'jamie.martin' && $_POST['password'] == 'abc1234')) {

    $username = $_SESSION['userID'] = $username;
    $password = $_SESSION['password'] = $username;

    header('Location: InstructorView.php');
    include 'connection.php';

} else if (($_POST['userID'] == 'alexander.haskins' && $_POST['password'] == 'def5678')) {
    header('Location: StudentView.php');
    include 'Testconn.php';
} else {
    
    echo "invalid name or password";
}

    


if (isset($_POST['userid'])) {
    $_SESSION['userid'] = $_POST['userid'];
    echo "Welcome {$_SESSION['userid']}";
}

if (!$_SESSION['userid']) {
    echo "Please login";
    exit;
}