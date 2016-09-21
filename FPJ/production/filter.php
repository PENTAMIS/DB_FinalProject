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

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title> Live Search </title>
		<meta charset="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/footable.js"></script>
		<script src="js/footable.filter.js"></script>
	</head>

<body>
	<input type="text" id="filter"><br><br>
	<table class="footable" data-filter="#filter">
		<thead>
			<tr>
				<th>ID</th>
				<th>Date</th>
				<th>Asked By</th>
				<th>Q_description</th>
				<th>Status</th>
				<th>Anwsered By</th>
			</tr>
		</thead>
		<tbody>

		<?php
			while($row1 = mysqli_fetch_array($result)):;
			?>

			<tr>
				<td><?php echo $row1[0];?></td>
				<td><?php echo $row1[1];?></td>
				<td><?php echo $row1[2];?></td>
				<td><?php echo $row1[3];?></td>
				<td><?php echo $row1[4];?></td>
				<td><?php echo $row1[5];?></td>
			</tr>	
			<?php endwhile;?>
		</tbody>
	</table>
</body>
 	<script type="text/javascript">
 		$(document).ready(function(){
 			$('.footable').footable();
 	});
	</script>
</html>