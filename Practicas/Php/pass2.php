<HTML>
	<HEAD>
		<title>
		¿conoces la contraseña?
		</title>
	</HEAD>
	<BODY>
	<h1>Password Protegido</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="post">
		<input type ="text" name="PW">
		<input name="enviar" type="submit" value="envialo">
	</form>
	<?php
	if(isset($_POST['enviar'])) {	
		$pw= $_POST['PW'];
		if($pw=="abc"){
	?>
	<h3>1.seccion protegida</h3>
	<p>contenido interesante...</p>
	<?php
		}else if ($pw=="1234"){
	?>
		<h3>2.seccion protegida</h3>
		<p>contenido interesante....</p>
	<?php
		}else{
	?>
	<h3>lo siento ,no puedes entrar </h3>
	<p>esta visto que no sabes la contraseña</p>
	<?php
			}
	}	
	?>		
	</BODY>
</HTML>

