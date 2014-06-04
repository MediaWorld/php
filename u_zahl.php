<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		<?php
			//Article details
			$article1 = 22.50;
			$article2 = 12.30;
			$article3 = 5.20;

			$vat_factor = 1.19;

			//Brutto price calculation
			$brutto_price = ($article1 + $article2 + $article3) * $vat_factor;

			//Brutto price display
			echo $brutto_price;
		?>
	</body>
</html>