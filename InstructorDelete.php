// Start the session
session_start();
include("headerInst.html");
include("footer.html");

#connect to MySQL
include("connection.php");
$id = $_GET['appointmentID'];

$sql = "DELETE FROM appointments WHERE id='" . $_GET[$id];
$result = $conn->query($sql);

    if($conn->query($SQL) === TRUE){
        echo "Record was deleted.";
    }
    else{
        echo "Unable to execute $sql. " . mysqli_error($link);

    }
$onn->close();
header("Location: InstructorHome.php");
?>
