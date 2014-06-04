<html>
<head>
</head>
<body>
	<?php
		function vermerk($vor_name, $nach_name, $abteilung){
			$email = "$vor_name.$nach_name@$abteilung.phpdevel.de";
			$entwickler = "$vor_name $nach_name, Abteilung $abteilung";
			echo "<table border='1'><tr><td>";
			echo "Dieses Programm wurde geschrieben von $entwickler<br/>E-mail: $email";
			echo "</td></tr></table>";
		}
		
		vermerk("Gilad","Tsabar","Research");
		vermerk("Camilla","Tsabar","Support");
		vermerk("Emilie","Tsabar","Weiterbildung");
		
	?>
</body>
</html>
