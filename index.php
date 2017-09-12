<?php 
$usuario = '';
$clave = '';
if(isset($_REQUEST['usuario']) && isset($_REQUEST['clave']))
{
	$usuario = $_REQUEST['usuario'];
	$clave = $_REQUEST['clave'];
	if($usuario == 'android' && $clave == 'martes')
	{
		echo "valido";
	}
	else
	{
		echo "invalido";
	}
}
else
{
	echo "sin datos";
}
?>