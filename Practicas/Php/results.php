﻿<html>
<head>
	<title>encuesta de opinión</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
</head>
<body>
	<h1>Resultados de la encuesta</h1>
	<?php
	$file = "results.txt";
	$fp = fopen($file, "r");
	$vote = fread($fp, filesize($file));
	fclose($fp);
$vote = explode(",", $vote);
$allvotes = $vote[0] + $vote[1] + $vote[2];
$length = 400;
$length0 = $vote[0] * $length / $allvotes;
$length1 = $vote[1] * $length / $allvotes;
$length2 = $vote[2] * $length / $allvotes;
$length0 = round($length0);
$length1 = round($length1);
$length2 = round($length2);
$percent0 = 100 * $vote[0] / $allvotes;
$percent0 = round($percent0, 0);
$percent1 = 100 * $vote[1] / $allvotes;
$percent1 = round($percent1 , 0);
$percent2 = 100 * $vote[2] / $allvotes;
$percent2 = round($percent2, 0);
?>
<p> Total de votos: <?php echo $allvotes;?></p>
<h3>Resultados</h3>
<table border="0">
	<tr>
<td><b>Opción 1 </b></td>
<td>&nbsp;</td><td width="<?php echo $length0; ?>" bgcolor="blue">&nbsp;</td>
<td>&nbsp;<?php echo "$percent0%"; ?>&nbsp; (<i><?php echo $vote[0];?></i>)</td>
</tr> </table>
<table border="0">
	<tr>
<td><b>Opción 2</b></td>
<td>&nbsp;</td><td width="<?php echo $length1; ?>" bgcolor="orange">&nbsp;</td>
<td>&nbsp;<?php echo "$percent1%;"; ?>&nbsp;(<i><?php echo $vote[1];?></i>)</td>
</tr></table>

<table border="0">
	<tr>
<td><b>Opción 3</b></td>
<td>&nbsp;</td><td width="<?php echo $length2; ?>" bgcolor="pink">&nbsp;</td>
<td>&nbsp;<?php echo "$percent2%;"; ?>&nbsp;(<i><?php echo $vote[2];?></i>)</td>
</tr></table>
</body>
</html>


