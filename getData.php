<?php
	include "dbHandler.php";
?>
<?php
	if($connection->connect_error)
	{
		die("Connection error: ".$connection->connect_error);
	}
	$sql = "SELECT * FROM user";
	
	$result = $connection->query($sql);
	
	
	
	if ($result->num_rows > 0)
	{		
		echo "<table>";
		echo "<tr>";
		echo "<th>User ID</th>";
		echo "<th>User Name</th>";
		echo "<th>User Age</th>";
		echo "</tr>";
		while ($row = $result->fetch_assoc())
		{	
			echo "<tr>";
			echo "<td>" .$row['userID'] . " ";
			echo "<td>" .$row['userName']  . " ";
			echo "<td>" .$row['userAge']  . " ";
			echo "</tr>";
		}
		echo "</table>";
	}
?>