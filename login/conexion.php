<?php
$local="localhost";
$usuariobd="root";
$password="";
$db="bd_soltcar";
$mysqli = new mysqli($local, $usuariobd, $password, $db);
 
if($mysqli->connect_errno) {
	echo "Error";
    exit();
}
 
?>