<html>
<head>
</head>
<body>
	<?php
		function bigger($zahl1,$zahl2){
			if($zahl1>=$zahl2){
				$bigger = $zahl1;
			} else {
				$bigger = $zahl2;
			}
			return $bigger;
		}
		
		$a = bigger(3,6);
		$b = bigger(7,6);
		echo "<p>Maximum: $a</p>";
		echo "<p>Maximum: $b</p>";
	?>
</body>
</html>
