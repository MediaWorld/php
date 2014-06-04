<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			for($x=1;$x<=10;$x++)
			{
				for($y=1;$y<=10;$y++)
				{
					echo $x * $y . " ";
				}
				echo "<br/>";
			}
		?>
	</body>
</html>