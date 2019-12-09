<html>
	<head>
		<title>Un libro de visitas</title>
	</head>
	<body>
		<h1>Libro de visitas</h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
			Tu comentario:<br>
			<textarea cols="55" rows="4" name="comment"></textarea><br>
			Tu nombre:<br>
			<input type="text" name="name"><br>
			Tu e-mail:<br>
			<input type="text" name="email"><br>
			<input type="submit" value="publica:">
		</form>
		<h3>Mostrar todos los comentarios</h3>
		<?php
			$file ="guestbook.txt";
			 if (isset($_POST['comment']) && isset($_POST['name']) != "" && $_POST['email'] != "") {
				 $comment = $_POST['comment'];
				 $name = $_POST['name'];
				 $email = $_POST['email'];
				 //El archivo se abre para escritura-lectura
				 $fp = fopen($file, "r+");
				$old = fread ($fp, filesize($file));
				 $email = "<a href=\mailto:$email\">$email</a>";
				 $dateOfEntry = date ("y-m-d");
				 $comment = htmlspecialchars($comment);
				 $comment = stripslashes($comment);
				 $entry="<p><b>$name</b> ($email) wrote on <i>$dateOfEntry</i>;<br>$comment</p>\n";
				 rewind($fp);
				 fputs($fp, "$entry \n $old");
				 fclose($fp);
			}
			readfile($file);
		?>
	</body>
</html>