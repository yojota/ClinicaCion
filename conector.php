<?php 
//conector a la base de datos
	echo "hola mundo";
	$host="127.0.0.1";
	$port=3306;
	$socket="";
	$user="root";
	$password="jotajota";
	$dbname="clinica";

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();
?>