<HTML>
<head>
<TITLE>Formulario HTML</TITLE>
</head>

<Body>
<H1>Todo en una pagina</H1>
<form method="POST">
<input type="radio" name="gender" value="0"> Sr. 
<input type="radio" name="gender" value="1"> Sra. 
<br>
Ingrese su apellido: <br>
<input type="TEXT" name ="apellido">
<input type="submit" name="submitbutton" value="Envialo!">
</form>

<?php 
if(isset($_POST['gender']) &&
   isset ($_POST['apellido']) &&
	$_POST['apellido'] !==""){

if($_POST['gender']==0){
	echo "Hola Señor ";
}else {
	echo "Hola Señora ";
}
	echo "<b>{$_POST['apellido']}</b>, encantado de saludarte.\n";
	}else{
		if (isset ($_POST['submitbutton'])){
			echo "Rellene los campos";
	}
}
?>
</Body>
</HTML>