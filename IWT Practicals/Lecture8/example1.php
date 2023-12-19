<!-- Database Connectivity | Insert Statement| Slide 14 -->

<?php

//Linking the configuration file
require 'config.php';

$sql= "INSERT INTO myTable(ID,Name)VALUES(11111,'SLIIT')";

	if($con->query($sql))
	{
		echo "Inserted successfully";
	}
	else
	{
		echo "Error:". $con->error;
	}
	
$con->close();

?>
