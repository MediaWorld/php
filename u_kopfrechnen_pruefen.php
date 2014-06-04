<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Kopfrechnen
	</title>
</head>
<body>
	<h1>Kopfrechnen</h1>

	<?php
		$user = $_POST["username"];
		echo "<p>";
		echo "Hallo $user. Ihr Ergebnis<br/>";
		echo "</p>";

		$score = 0;
		$x = $_POST["x"];
		$y = $_POST["y"];
		$zeichen = $_POST["zeichen"];
		$user_answer = $_POST["q"];

		for ($i=0; $i<5; $i++) {

			switch ($zeichen[$i])
			{
				case '+':
					$resault = $x[$i] + $y[$i];
					break;
				case '-':
					$resault = $x[$i] - $y[$i];
					break;
				case '*':
					$resault = $x[$i] * $y[$i];
					break;
				case '/':
					$resault = $x[$i] / $y[$i];
					break;
			}
			
			if ($resault == $user_answer[$i]) 
			{
				$score++;
			}
		}

		echo "<p> $score von 5 richtig. </p>";
		echo "<a href='u_kopfrechnen.html'>Zum Start</a>";
	?>
</body>
</html>