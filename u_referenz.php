<?php
	function rechne($zahl1,$zahl2){
		$erg["summe"] = $zahl1 + $zahl2;
		$erg["produkt"] = $zahl1 * $zahl2;
		return $erg;
	};
	
	$zahl1 = 5;
	$zahl2 = 7;
	$erg = rechne($zahl1,$zahl2);
	echo "Die summe von $zahl1 und $zahl2 ist " . $erg['summe'] . "<br/>";
	echo "Das produkt von $zahl1 und $zahl2 ist " . $erg['produkt'] . "<br/>";

?>