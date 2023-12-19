<?php 

require 'config.php'; //1 mark Q3 Part c

if(isset($_POST["submitBtn"])) //1 mark
{  
	$name=$_POST["firstname"]; //0.5 mark 
	$gender =$_POST["gender"]; //0.5 mark  
	$phone=$_POST["mobile"]; //0.5 mark  
	$email=$_POST["email"]; //0.5 mark  
	$address=$_POST["address"]; //0.5 mark 
	$user ==$_POST["username"]; //0.5 mark 
	$password==$_POST["pwd"]; //0.5 mark  
	$sql= "INSERT INTO StudentDetails (StudentName, Gender, Mobile, Email, 
	Address, UserName, Password) 
	VALUES($name,$gender,$phone,$email,$address,$user,$password)"; //2 marks 

if($con->query($sql)) //1 mark  
{  
	echo "Inserted successfully"; //1 mark   
} 
else 
{ 
	echo "Error:". $con->error; //1 mark   
} 

$con->close(); //0.5 mark  
?> 
