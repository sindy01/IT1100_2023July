<!-- PHP | Reading forms using POST | Slide 25 -->

<?php

	echo "Check box test<hr>" ;
	
	if(!empty($_POST['check_list'])) 
	{
		foreach($_POST['check_list'] as $check) 
		{
			echo "check=$check<br>"; 
		}
	}
	else
	{
		echo "Check list is empty";
	}
	
?>
