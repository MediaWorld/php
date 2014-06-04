<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			//Article details
			$article1 = 22.50;
			$article2 = 12.30;
			$article3 = 5.20;

			//Brutto price calculation
			$netto_price = $article1 + $article2 + $article3;
			$vat_factor = 1.19;
			$unit = "€";

			$brutto_price = $netto_price * $vat_factor;

			//Brutto price display
			echo "<p>Artikel 1: " . number_format($article1,2) . " $unit<br/>Artikel 2: " . number_format($article2,2) ." $unit<br/>Artikel 3: " . number_format($article3,2) . " $unit<br/></p>";
			echo "<p>Nettosumme: " . number_format($netto_price,2) . " $unit<br/>Umsatzsteuer: " . number_format(($vat_factor -1)*100,0) ."%<br/>Bruttosumme: " . number_format($brutto_price,2) . " $unit</p>";
		?>
	</body>
</html>