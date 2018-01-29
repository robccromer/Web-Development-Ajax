<?php
	$parseUserRequest = $_POST["parseUserRequest"];
	$arrayUserRequest = json_decode($parseUserRequest,true);
	
	echo "<table>";
	echo "<tr>";
	echo "<th>User ID</th>";
	echo "<th>User Name</th>";
	echo "<th>User Age</th>";
	echo "</tr>";
	
	foreach ($arrayUserRequest as $key => $value)
	{
		echo "<tr>";
		echo "<td>".$value["userID"]."</td>";
		echo "<td>".$value["userName"]."</td>";
		echo "<td>".$value["userAge"]."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>