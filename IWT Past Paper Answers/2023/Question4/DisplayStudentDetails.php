<?php 

require 'config.php'; //1 mark Q3 Part c

$sql = "select StudentName,Gender,Mobile,Email,Address from StudentDetails"; //1 mark 
 
$result = $con->query($sql); //1 mark
 
	 	if($result->num_rows > 0) //1 mark
		{ 
 	 	//read data  	 	
		while($row = $result->fetch_assoc()) //1 mark
		{  
	 	 	//Read and utilize the row data 
 	 	 	echo "Name: ". $row["StudentName"]. "<br />";  	 	 	
			echo "Gender: ". $row["Gender"]. "<br />";  	 	 	
			echo "Mobile: ". $row["Mobile"]. "<br />";  	 	 	
			echo "Email : ". $row["Email"]. "<br />";  	 	 	
			echo "Address: ". $row["Address"]. "<br />" //1 mark
	 	 	} 
	 	} 
	 	else 
	 	{ 
	 	 	echo "no results"; 
	 	} 
$con->close(); 
?> 
