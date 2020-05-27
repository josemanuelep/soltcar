<?php  
$rol = "";
$pass = "";
$loginNombre = $_POST["usuario"];
$loginPassword = $_POST["password"];
if(isset($_POST["enviar"])) {

	require("conexion.php");
	

	$consulta = "SELECT usuario, contrasena, id_rol FROM tbl_clientes WHERE usuario='$loginNombre'";
	
	$resultado = mysqli_query($mysqli, $consulta);


	while ($filas = mysqli_fetch_assoc($resultado)) {
		$rol = $filas["id_rol"];
		$hash = $filas["contrasena"];
	}

$veryfy = md5($loginPassword);
if ($veryfy == $hash) {

	switch ($rol) {
		case 1:
		session_start();
		$_SESSION["usuario"] = $_POST["enviar"];
		header("Location: ../usuario/index.html");
		break;
		case 2:
		session_start();
		$_SESSION["admin"] = $_POST["enviar"];
		header("Location: ../admin1/index.html");
		break;
	}
}else{


	echo "<script>
	
			alert('Usuario y/o Contraseña Incorrecta');
			window.location.href='../index.php';
			</script>";
}

}
?>
