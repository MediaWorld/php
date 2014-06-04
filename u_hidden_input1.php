<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			Hidden input 1
		</title>
	</head>
	<body>
		User:<br/>
		<?php
			echo "<p>Username: " . $_POST["username"] . "</p>";
			
			if(isset($_POST["password"])) 
			{
				if($_POST["password"]=="1234") 
				{
					echo "<p>Login successfull</p>";
				}
				else 
				{
					echo "<p>Login failed</p>";
				}
			}
			
			echo "<form action='u_hidden_input2.php' method='post'>";
			echo "	<input type='hidden' name='username' value='" . $_POST["username"] . "'>";
			echo "	<input type='submit'>";
			echo "</form>";
		?>
	</body>
</html>