<?php 
if(isset($_POST["enviar"])) {
require'../conexion/conexion.php'; 
include '../conexion/funcs.php';


	$errors = array();
	
	if(!empty($_POST))
	{
		$email = $mysqli->real_escape_string($_POST['email']);
		echo "$email";
		
		if(!isEmail($email))
		{
			$errors = "Debe ingresar un correo electronico valido";
			echo "$errors";
		}
		
		if(emailExiste($email))
		{			
			$user_id = getValor('idclientes', 'correo', $email);
			$nombre = getValor('nombre', 'correo', $email);

			echo "$nombre";

			
			$token = generaTokenPass($user_id);
			
			$url = 'http://'.$_SERVER["SERVER_NAME"].'/SOLCAR2/login/cambia_pass.php?user_id='.$user_id.'&token='.$token;

			
			$asunto = 'Recuperar Contraseña - SOLTCAR';
			$cuerpo = "Hola $nombre: <br /><br />Se ha solicitado un reinicio de contrase&ntilde;a. <br/><br/>Para restaurar la contrase&ntilde;a, visita la siguiente direcci&oacute;n: <a href='$url'>$url</a>";

			
			if(enviarEmail($email, $nombre, $asunto, $cuerpo)){
				echo "$asunto";
				echo "Hemos enviado un correo electronico a las direcion $email para restablecer tu password.<br />";
				echo "<a href='../index.php' >Iniciar Sesion</a>";
				exit;
			}
			} else {
			$errors = "La direccion de correo electronico no existe";
			echo "$errors";
		}
	}
	}
?>