<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<table border="1">
			<?php
				for($x=1;$x<=10;$x++)
				{
					echo "<tr>";
					for($y=1;$y<=10;$y++)
					{
						echo "<td align='right'>" . $x * $y . "</td>";
					}
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>