<?php
	include "dbHandler.php";
?>
<?php
	$getUserQuery = $_POST["getUserQuery"];
	//$result = $connection->query($getUserQuery);
	if($connection->connect_error)
	{
		die("Connection error: ".$connection->connect_error);
	}
	
	$return_arr = array();
	$result = " ";
	error_reporting(E_ERROR);
	if ($result = mysqli_query( $connection, $getUserQuery ))
	{
		while ($row = mysqli_fetch_assoc($result)) 
		{
		$row_array['userID'] = $row['userID'];
		$row_array['userName'] = $row['userName'];
		$row_array['userAge'] = $row['userAge'];

		array_push($return_arr,$row_array);
		}
	}
	mysqli_close($connection);
	echo json_encode($return_arr);	
	/* if ($result->num_rows > 0)
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
	}*/
?>