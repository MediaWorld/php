<html>
<head>
</head>
<body>
	<?php
		function vermerk($entwickler){
			echo "<table border='1'><tr><td>";
			echo "Dieses Programm wurde geschrieben von $entwickler";
			echo "</td></tr></table>";
		}
		
		vermerk("Gilad Tsabar");
		vermerk("Camilla Tsabar");
		
	?>
</body>
</html>
