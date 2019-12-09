<?php
setcookie("check", 2);
if (isset($_POST['submit'])){
	setcookie("voted", 2);
}
?>
<html>
	<head>
		<title>encuesta de opinión</title>
	</head>
	<body>
		<h1>Encuesta</h1>
		<h3>¿Qué opinas de los nuevos tranvías de la ciudad de Barcelona?</h3>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<input type="radio" name="reply" value="0">
			Una idea excelente, los tranvías son rápidos y eficientes. <br>
			<input type="radio" name="reply" value="1">
			Me da igual, yo siempre voy en coche.<br>
			<input type="radio" name="reply" value="2">
			¡Barcelona no necesita tranvías!
			<br><br>
			<?php
			if (empty($_POST['submit']) && empty($_COOKIE['voted'])){
				/*Mostrar el botón Submit solo si el formulario todavía no se ha enviado y el usuario no ha votado.*/
				?>
				<input name="submit" type="submit" value="Vota!">
				<?php
			}else{
				echo "<p>Gracias por tu voto.</p>\n";
				if (isset($_POST['reply']) && isset($_COOKIE['check']) && empty($_COOKIE['voted'])){
			$file = "results.txt";
			$fp = fopen($file, "r+");
			$vote = fread($fp, filesize($file));
			$arr_vote = explode(",", $vote); //explode convierte la string en array
			$reply = $_POST['reply'];
			$arr_vote[$reply]++;
			$vote = implode(",", $arr_vote); //implode vincula elementos de la array a string
			rewind($fp);
			fputs($fp, $vote);
			fclose($fp);
			}
			}
			?>
		</form>
		<p>
		<LI><a href="http://localhost:8081/Php/results.php" target=principal>Ver resultado de la encuesta</a>
	</p>
	</body>
</html>

