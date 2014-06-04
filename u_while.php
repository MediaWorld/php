<html>
<head>
</head>
<body>
	<style>
		div{
			width: 50px;
			float: left;
		}
	</style>
	<?php
		srand((double)microtime()*1000000);
		$spieler1=0;
		$spieler2=0;
		
		echo "<div>Spieler1</div><div>Spieler2</div><br/>";
		while ($spieler1<25 && $spieler2<25)
		{
			$rnd1=rand(1,6);
			$rnd2=rand(1,6);
			$spieler1+=$rnd1;
			$spieler2+=$rnd2;
			echo "<div>$rnd1 ($spieler1)</div><div>$rnd2 ($spieler2)</div><br/>";
		} 
		
		switch($spieler1)
		{
			case ($spieler1 > $spieler2):
				echo "<br/>Spieler1 hat gewonnen";
				break;
			case ($spieler1 < $spieler2):
				echo "<br/>Spieler2 hat gewonnen";
				break;
			default:
				echo "<br/>Kein gewinner";
		}
	?>
</body>
</html>
