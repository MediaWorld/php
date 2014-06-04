<html>
	<head>
	</head>
	<body>
		<?php
			$namen = array("Peter" => 35, "Markus" => 42, "Jens" => 16, "Julia" => 17, "Monika" => 42, "Gerd" => 55);
			echo "<table border='1'>";
			echo "<thead><th>Name</th><th>Alter</th></thead>";
			foreach ($namen as $name => $age)
			{
				echo "<tr><td>$name</td><td align='right'>$age</td></tr>";
			}
			echo "</table>";
		?>
	</body>
</html>
