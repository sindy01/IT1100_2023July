<!-- PHP | Selection - If Else Ladder | Slide 27 -->

<!DOCTYPE html>
<html>
<body>

<?php
	$t=date("H");		//Get the Hours from current date

	if ($t<"10") 
	{
	   echo "Have a good morning!";
	} 
	else if ($t<"20") 
	{
	   echo "Have a good day!";
	} 
	else 
	{
	   echo "Have a good night!";
	}
?>
  
</body>
</html>
