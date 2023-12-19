<?php 
//The connection objects 
$con=new mysqli("localhost", "root", "std@#786","StudentInfo_db"); //2 marks  
 
// Check connection 
if($con->connect_error)
{ 
	die("Connection failed: " . $con->connect_error); //2 marks 
} 
?> 
