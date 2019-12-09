<?php
if($_POST['gender']==0){
	echo "Hola Señor ";
}else {
	echo "Hola Señora ";
}
echo "<b>{$_POST['apellido']}</b>, encantado de saludarte.\n";

?>