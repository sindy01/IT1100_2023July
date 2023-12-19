<!-- PHP | Global variables | Slide 15 -->

<?php

	$name = "Kamal"; 
	$age = 22; 
	
	function testFunc() 
	{ 
		global $name, $age; 
		$greet = "Hello "; 
		echo $greet . "Name: " . $name . " - Age: " . $age; 
	} 

	testFunc();
	
?>
