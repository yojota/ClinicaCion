<?php 
//conector a la base de datos
	$host="127.0.0.1";
	$port=3306;
	$socket="";
	$user="root";
	$password="jotajota";
	$dbname="clinica";

	$con = mysql_connect($host,$user,$password);
	if (!$con) {
    	echo "No pudo conectarse a la BD: " . mysql_error();
    	exit;
	}

	$sql = "SELECT idPersonas, apellido, nombre, email, telefono, staff FROM `clinica`.`Personas`";
	$resultado = mysql_query($sql);
	
	if (!$resultado) {
    	echo "No se pudo ejecutar con exito la consulta ($sql) en la BD: " . mysql_error();
    	exit;
	}
	if (mysql_num_rows($resultado) == 0) {
    echo "No se han encontrado filas, nada a imprimir, asi que voy a detenerme.";
    exit;
	}
	while ($fila = mysql_fetch_assoc($resultado)) {
    	print ($fila["apellido"]." ");
    	print ($fila["nombre"]." ");
    	print ($fila["email"]." ");
    	print("<br>");
	}

	mysql_free_result($resultado);
?>