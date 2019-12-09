<html>
	<head>
 		<title>Cuenta el numero de visitas a la pagina</title>
	</head>
	<body>
		<h1>Contador Sencillo</h1>
		<p>Cantidad de visitas:
		<b>
		<?php
	
			 $fp = fopen("counter.txt", "r+");
			 $counter = fgets($fp, 7);
			 echo $counter;
			 $counter ++;
			 rewind($fp);
			 fputs($fp, $counter);
			 fclose($fp);
		?>
		</b></p>
	</body>
</html> 