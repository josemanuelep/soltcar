<?php
	@session_start();
	session_destroy();
	echo'<script type="text/javascript">
        alert("CERRO SESIÓN");
        window.location.href="../index.php";
        </script>';

 ?>