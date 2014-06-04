<html>
<head>
</head>
<body>
	<?php
		function quadrat($zahl){
			$quadrat = $zahl*$zahl;
			echo "<p>Das Quadrat von $zahl ist $quadrat</p>";
		}
		
		quadrat(3);
		quadrat(3.2);
		quadrat(-5);
		quadrat(83373);
		
	?>
</body>
</html>
