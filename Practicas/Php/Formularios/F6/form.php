<HTML>
<head>
<TITLE>Formulario HTML</TITLE>
<meta http-equiv = "content-type" 
content="text/html; charset=iso-8859-1">
</head>

<Body>
<H1>Todo en una pagina(form.php)</H1>
<form action="form.php" method="POST">
<input type="radio" name="gender" value="0" 
<?PHP
if (isset($_POST['gender'])&&
$_POST['gender']==0) {
echo "checked='Checked'";
}
?>> Sr. 
<input type="radio" name="gender" value="1"
<?PHP
if (isset($_POST['gender'])&&
$_POST['gender']==1) {
echo "checked='Checked'";
}
?>
> Sra. 
<br>
Ingrese su apellido: <br>
<input type="TEXT" name ="apellido"
value = "<?php
if (isset ($_POST['apellido']))
{
echo $_POST['apellido'];
}
?>">
<input type="submit" name="submitbutton" value="Envialo!">
</form>

<p>
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
</p>
</Body>
</HTML>