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

// Create Variables and take in POST values
$Date = $_POST['Date'];
$Asked_By = $_POST['Asked_By'];
$Q_Description = $_POST['Q_Description'];
$Status = $_POST['Status'];
$Answered_By = $_POST['Answered_By'];


// Insert data into the database
$sql = "INSERT INTO CS (Date, Asked_By, Q_Description, Status, Answered_By) 
VALUES ('$Date', '$Asked_By', '$Q_Description','$Status','$Answered_By');";


if ($conn->query($sql) === TRUE) {
    header("location:Search.php");
       //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>