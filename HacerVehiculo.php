<?php
$miobjeto=new stdClass();
$miobjeto->Patente=$_GET['Patente'];
$miobjeto->Horario=$_GET['Horario'];

$archivo=fopen('usuarios.txt','a');
fwrite($archivo,json_encode($miobjeto)."\n");
fclose($archivo);
?>