<!-- PHP | Loop Through an Associative Array | Slide 10 -->

<!DOCTYPE html>
<html>
<body>
<?php

	$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

	foreach ($age as $x => $y) 
	{
		echo "Key=" . $x . ", Value=" . $y;
		echo "<br>";
	}

?>
</body>
</html>

<!--
	$x = "Peter" & $y = $age["Peter"] - Iteration 1
	$x = "Ben" & $y = $age["Ben"] 	  - Iteration 2
	$x = "Joe" & $y = $age["Joe"]     - Iteration 3
													-->