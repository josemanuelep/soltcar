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
  <a  href="Inicio-admin.php"><i><img src="img/internet.png" style="width: 30px;"></i>Inicio</a>
  <a class="active" href="Nuevos-admin.php"><i><img src="img/add-group.png" style="width: 30px;"></i>Nuevos</a>
  <a href="Administrador.php"><i><img src="img/list.png" style="width: 30px;"></i>Registrados</a>
  <a href="../index.php"><i><img src="img/exit.png" style="width: 30px;"></i>Salir</a>
</div>

<!-- Page content -->
<div class="content">
  <form action="/action_page.php">
  <h2>Registrar Nuevo Usuario</h2>
  <div class="input-container">
    <i><img src="img/user.png" style="width: 40px;"></i>
    <input class="input-field" type="text" placeholder="Usuario" name="usrnm">
  </div>

  <div class="input-container">
    <i><img src="img/mail.png" style="width: 40px;"></i>
    <input class="input-field" type="text" placeholder="E-mail" name="email">
  </div>

  <div class="input-container">
    <i><img src="img/key.png" style="width: 40px;"></i>
    <input class="input-field" type="password" placeholder="Contraseña" name="psw">
  </div>

  <button type="submit" class="btn">Registrarse</button>
</form>

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

* {box-sizing: border-box;}

/* Style the input container */
.input-container {
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

/* Style the form icons */
.icon {
  padding: 10px;
  background: #4caf50;
  color: white;
  min-width: 50px;
  text-align: center;
}

/* Style the input fields */
.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: #4caf50;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  background-color: #383d41;
  color: #ffff;
  opacity: 0.9;
}
</style>z
</body>
</html>