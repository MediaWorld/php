<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			$zahl = $_POST["zahl"];
			$erg = $zahl *$zahl;

			echo "<p>Das quadrat von $zahl ist $erg<br/></p>";
		?>
	</body>
</html>