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
<div class="sidebar">
  <center>
   <img src="img/perfil2.png" alt="Logo" style="width:60px; aling:center;">
  </center>
  <a href="Inicio-admin.php"><i><img src="img/internet.png" style="width: 30px;"></i>Inicio</a>
  <a href="Nuevos-admin.php"><i><img src="img/add-group.png" style="width: 30px;"></i>Nuevos</a>
  <a class="active" href="Administrador.php"><i><img src="img/list.png" style="width: 30px;"></i>Registrados</a>
  <a href="../index.php"><i><img src="img/exit.png" style="width: 30px;"></i>Salir</a>
</div>

<!-- Page content -->
<div class="content">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <input class="form-control mr-sm-2" type="text" id="myInput" placeholder="Buscar..">
</nav>
  	<table class="table table-striped">
    <thead>
	<tr>
		<th> Id </th>
		<th> Nombre</th>
		<th> Apellido</th>
		<th> Tipo de identificacion</th>
    <th> Numero de identificacion </th>
    <th> Celular </th>
    <th> Telefono </th>
    <th> Direccion </th>
    <th> Ciudad </th>
    <th> Departamento </th>
    <th> Usuario </th>
		<th> Contraseña </th>
    <th> Id Rol </th>
		<th> Actualizar </th>
		<th> Bloquear </th>
    <?php
  include("../conexion/conexion.php");
$consultodo="SELECT * FROM tbl_clientes"; 
$resultadotodo=mysqli_query($mysqli,$consultodo); 
?>
</tr>
</thead>
<tbody id="myTable">
<?php
while ($row=$resultadotodo->fetch_assoc()) {?>
 <tr>
  <td> <?php 
  echo $row['idclientes'];
  ?>
  </td>
  <td> <?php 
  echo $row['nombre'];
  ?>
  </td>
  <td> <?php 
  echo $row['apellido'];
  ?>
  </td>
  <td> <?php 
  echo $row['tipo_id'];
  ?>
  </td>
  <td> <?php 
  echo $row['numero_id'];
  ?>
  </td>
  <td> <?php 
  echo $row['movil'];
  ?>
  </td>
  <td> <?php 
  echo $row['telefono'];
  ?>
  </td>
  <td> <?php 
  echo $row['direccion'];
  ?>
  </td>
   <td> <?php 
  echo $row['ciudad'];
  ?>
  </td>
   <td> <?php 
  echo $row['departamento'];
  ?>
  </td>

  <td> <?php 
  echo $row['usuario'];
  ?>
  </td>

  <td> <?php 
  echo $row['contrasena'];
  ?>
  </td>
    <td> <?php 
  echo $row['id_rol'];
  ?>
  </td>
  <td><a href="../Act_tur/Actualizacion_turista.php? idclientes=<?php echo $row['Id_usuario'];?>">Editar</a> </td>
  <td><a href="../Eli_tur/Eliminacion_turista.php? Id_usuario=<?php echo $row['Id_usuario'];?>">Eliminar</a> </td>
</tr>
<?php } ?>
</tbody>
</table>
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
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>