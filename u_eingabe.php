<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			$full_name = $_POST["vor"] . " " . $_POST["nach"];
			$strasse   = $_POST["str"];
			$ort       = $_POST["plz"] . " " . $_POST["ort"];

			echo "<p>Ihre Adresse lautet:<br/></p>";
			echo "<p> $full_name<br/>$strasse<br/>$ort</p>";
		?>
	</body>
</html>