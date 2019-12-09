<html>
	<head>
	<title>
	Feedback
	</title>
	</head>
	<body>
		<p>Enviame un email</p>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			Tu direccion de email:
<br>			<input type="text" name="email">
<br>			Tu comentario: 
<br>			<textarea name="mensaje" cols="50" rows="5"></textarea>
<br>			<input type="submit" value="enviar">
		</form>
		<?php
		$reciveremail="izrux@hotmail.com";
		if (isset($_POST['email']) && $_POST['email'] != ""){
			if(@mail($reciveremail, "tienes correo", $_POST['mensaje'], "From: $_POST[email]")){
				echo "<p>Gracias por enviar su opinion</p>";
			}else { echo "<p>Error</p>";
			}
		}
		?>
	</body>
</html>
