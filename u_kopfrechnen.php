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
		echo "Hallo $user. Ihre Aufgaben:<br/>";
		echo "</p>";

		$operators = array("+","-","*","/");

		echo "<form action='u_kopfrechnen_pruefen.php' method='post'>";
			for ($i=0; $i<=5; $i++) {
				$x= rand(1,10);
				$y= rand(1,10);
				$zeichen=$operators[rand(0,3)];

				echo "<input type='hidden' name='x[$i]' value='$x'/>";
				echo "<input type='hidden' name='y[$i]' value='$y'/>";
				echo "<input type='hidden' name='zeichen[$i]' value='$zeichen'/>";
				
				echo "<div style='height: 2em;'>";
					echo "<div style='width: 30px; float: left;'>";
						echo "<span>" . ($i + 1) . ".</span>";
					echo "</div>";
					echo "<div style='width: 100px; float: left;'>";
						echo "<label>" . $x . " " . $zeichen . " " .  $y . " = </label>";
					echo "</div>";
					echo "<div style='width: 175px; float: left;'>";
						echo "<input type='number' step='any' name='q[$i]'/>";
					echo "</div>";
				echo "</div>";
			}
			echo "<input type='submit' value='Prufen'/>";
			echo "<input type='hidden' name='username' value='$user'/>";
		echo "</form>";
	?>
</body>
</html>