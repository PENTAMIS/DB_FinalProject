<?php
mysql_query('set names "utf8"');
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Snapask";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$ID = $_POST['ID'];

// sql to delete a record
$sql = "DELETE FROM CS WHERE id='$ID'";

if ($conn->query($sql) === TRUE) {
	header("location:Search.php");
    //echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>