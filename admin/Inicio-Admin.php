<html>
<head>
	<title> Administrador </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="Js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="Js/popper.min.js"></script>
	<script type="text/javascript" src="Js/bootstrap.js"></script>
	<meta charset="utf-8">
</head>
<body>
  <?php 
  session_start();
  if (!isset($_SESSION["admin"])) {
     header("location: ../Index.php");
   } 
  ?>
<div class="sidebar">
   <center>
   <img src="img/perfil2.png" alt="Logo" style="width:60px; aling:center;">
  </center>

  <a class="active" href="Inicio-admin.php"><i><img src="img/internet.png" style="width: 30px;"></i>Inicio</a>
  <a href="Nuevos-admin.php"><i><img src="img/add-group.png" style="width: 30px;"></i>Nuevos</a>
  <a href="Administrador.php"><i><img src="img/list.png" style="width: 30px;"></i>Registrados</a>
  <a href="../Login/salir.php"><i><img src="img/exit.png" style="width: 30px;"></i>Salir </a>
</div>

<!-- Page content -->
<div class="content">
  <img src="img/logo.png" style="width: 1100px; height: 600px;">

</div>
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #383d41;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: #ffff;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>

</body>
</html>