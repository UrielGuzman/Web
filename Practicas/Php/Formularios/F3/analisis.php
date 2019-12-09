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
	echo "Rellene los campos correctamente <BR>";
	}
?>