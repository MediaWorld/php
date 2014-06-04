<html>
<head>
</head>
<body>
	<?php
		function mittel($zahl1, $zahl2, $zahl3){
			$mittel = ($zahl1+$zahl2+$zahl3)/3;
			echo "<p>Der Mittelwert von $zahl1 und $zahl2 und $zahl3 ist $mittel</p>";
		}

		mittel(4,7,6);
		mittel(44,67.5,1);
		mittel(-5,0,-13);
		mittel(0.001,0.0081,0.0032);
		mittel(5,8,2);
		
	?>
</body>
</html>
