<?php 

	session_start();

	//LA CONEXIÓN A LA BASE DE DATOS
	$conex = new mysqli(
		'localhost',
		'root',
		'',
		'padron_entero'
	);
	//PARA PROBAR SI ESTA FUNCIONANDO LA CONEXIÓN
		//if ($conex) {
			//echo "La base de dato esta conectada";
		//}
?>