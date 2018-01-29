<?php
	include "dbHandler.php";
?>
<?php
	$userNameInsert = $_POST['userName'];
	$userAgeInsert = $_POST['userAge'];
	$con = mysqli_connect('50.62.209.8:3306','robcromer','pKu9?t09','robccromer_database');
	if ($connection -> connect_error) 
	{
		echo 'Database connection error';
	}
	
	$sql = "INSERT INTO `user` (`userID`, `userName`, `userAge`) VALUES (NULL, '". $userNameInsert ."', ". $userAgeInsert .")";
	
	if ($connection->query($sql) === TRUE) 
	{
		echo "New record created successfully";
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $connection->error;
	}
	$connection->close();
?>