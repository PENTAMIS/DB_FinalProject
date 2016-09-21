<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body>

<?php
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

$sql = "SELECT * FROM CS";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>Date</th><th>Asked By</th><th>Q_description</th><th>Status</th><th>Anwsered By</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Date"]. "</td><td>" . $row["Asked_By"]. "</td><td>".$row['Q_Description']."</td><td>".$row['Status']."</td><td>".$row['Answered_By']."</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

// $query = "SELECT * FROM `CS` WHERE ID LIKE '$_GET[search]%'");
// 	// $query = "SELECT * FROM `CS` WHERE Date LIKE '$_GET[search]%'");
// 	// $query = "SELECT * FROM `CS` WHERE Asked_By LIKE '$_GET[search]%'");
// 	// $query = "SELECT * FROM `CS` WHERE Q_Description LIKE '$_GET[search]%'");
// 	// $query = "SELECT * FROM `CS` WHERE Status LIKE '$_GET[search]%'");
// 	// $query = "SELECT * FROM `CS` WHERE Answered_By LIKE '$_GET[search]%'");

// 	while($result=$data->fetch_assoc()){
// 		echo"$result[ID]<br>";
// 		// echo"$result[Date]<br>";
// 		// echo"$result[Asked_By]<br>";
// 		// echo"$result[Q_Description]<br>";
// 		// echo"$result[Status]<br>";
// 		// echo"$result[Answered_By]<br>";
// 	}


$conn->close();
?>  
</body>

</html>