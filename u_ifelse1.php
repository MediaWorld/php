<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			$menge = $_POST["menge"];
			$sorte = $_POST["sorte"];
			$preis_N = 1.35;
			$preis_S = 1.40;

			if ($sorte=="N")
			{
				$erg = $menge * $preis_N;
				echo "<p>$menge Liter Normal kosten $erg &euro;<br/></p>";
			} else
			{
				$erg = $menge * $preis_S;
				echo "<p>$menge Liter Super kosten $erg &euro;<br/></p>";
			}
		?>
	</body>
</html>