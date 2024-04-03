<!DOCTYPE html>
<html>
	<body>
	<?php
		$name = "Kyle Learning";	//global variable
		function global_var()
		{
			global $name;
			echo "Variable inside the function".$name;
			echo "</br>";
		}
		global_var();
		echo "variable outside the function".$name;
	?>
	</body>
</html>
