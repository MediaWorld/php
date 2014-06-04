<html>
<head>
</head>
<body>
	<?php
		$namen = array('Peter', 'Markus', 'Jens', 'Julia', 'Monika', 'Gerd');
		$alter = array(35,42,16,17,42,55);
		echo "<table border='1'>";
		echo "<thead><th>Name</th><th>Alter</th></thead>";
		for ($i=0;$i<=5;$i++)
		{
			echo "<tr><td>{$namen[$i]}</td><td align='right'>{$alter[$i]}</td></tr>";
		}
		echo "</table>";
	?>
</body>
</html>
