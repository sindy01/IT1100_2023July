<!-- PHP | Loop Through an Indexed Array using For Loop | Slide 7 -->

<!DOCTYPE html>
<html>
<body>
<?php

	$subjects = array("ITA", "DBMS", "ST");
	
	$arrlength = count($subjects);	# $arrlength = 3
	
	for ($x = 0; $x < $arrlength; $x++) 
	{		 
		echo $subjects[$x];
		echo "<br>";
	}
	
?>
</body>
</html>
