<?php
	include "dbHandler.php";
?>
<?php
	if($connection -> connect_error)
	{
		die("Connection error: ".$connection -> connect_error)
	}
	
	$result = $connection -> query ("SELECT * FROM user");
	if (result -> num_rows > 0)
	{
		while ($row = $result->fetch_assoc())
		{
			echo $row['userName'];
		}
	}
?>