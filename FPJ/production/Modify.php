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

Create Variables and take in POST values
$ID = $_POST['ID'];

$Asked_By = $_POST['Asked_By'];
$Q_Description = $_POST['Q_Description'];
$Status = $_POST['Status'];
$Answered_By = $_POST['Answered_By'];

if ($_POST['Date'] != '') {
	$Date = $_POST['Date'];
} else{
	$Date = $_GET['Date'];
}

if ($Q_Description != '') {
	$Q_Description = $_POST['Q_Description'];
} else{
	$Q_Description = $_GET['Q_Description'];
}


// if(isset($_POST['submit-button'])) {

//     foreach($_POST as $name => $value) {
//         if(isset($_POST['user-count-updated'])){
//             $ID = $_POST['ID'];
//             $sql = "UPDATE CS SET $name = $value WHERE id = $ID";
//             $q->execute($db->prepare($sql)); 
//         }
//     }

// };

Insert data into the database
$sql = "UPDATE CS SET Date='$Date', Asked_By='$Asked_By', Q_Description='$Q_Description', Status='$Status', Answered_By='$Answered_By'
WHERE ID='$ID';";


if ($conn->query($sql) === TRUE) {
	header("location:Search.php");
       //echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>