<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>SOLTCAR</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Freightage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!--web-fonts-->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<link rel="shortcut icon" href="images/logo.png" />
<!--//web-fonts-->
<!--//fonts-->
</head>
<body>
<div class="banner-w3layouts" id="home">
		<!--Top-Bar-->
	<div class="header">
		<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="index.php">SOLTCAR </a></h1>
					</div>
					<div class="top-nav-text">
						<div class="nav-contact-w3ls"><span class="glyphicon glyphicon glyphicon-phone" aria-hidden="true"></span><p>INFORMATE <br> <span class="call">+57 3285678546</span></p></div> 
						
						<a class="page-scroll" href="#myModal2" data-toggle="modal" data-hover="LOGIN">INICIO SESION</a>
						
						
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="hvr-underline-from-center active scroll" href="index.php">Inicio</a></li>
							<li><a href="#features" class="hvr-underline-from-center scroll">Nosotros</a></li>
							
							<li><a href="#team" class="hvr-underline-from-center scroll scroll">Beneficios</a></li>
							<li><a href="#gallery" class="hvr-underline-from-center scroll scroll">Galeria</a></li>
							<li><a href="#contact" class="hvr-underline-from-center scroll scroll">Contactenos</a>
							<li><a class="page-scroll" href="#myModal3" data-toggle="modal" data-hover="LOGIN">REGISTRARSE</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>	
				</nav>
	
	</div>
		<!--//Top-Bar-->
			<!-- modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body login-page "><!-- login-page -->     
									<div class="login-top sign-top">
										<div class="agileits-login">
										<h5>INICIO SESION</h5>
										<form action="login/inicio_sesion.php" method="post">
											<input type="text" placeholder="Usuario" required="" name="usuario"/>
											<input type="password" placeholder="Contraseña" required="" name="password"/>
											<div class="wthree-text"> 
												<ul> 
													<li>
														<label class="anim">
															<input type="checkbox" class="checkbox">
															<span> Recordar</span> 
														</label> 
													</li>
													<li> <a class="page-scroll" href="#myModal4" data-toggle="modal" data-hover="LOGIN">¿Olvidó la contraseña?</a> </li>
												</ul>
												<div class="clearfix"> </div>
											</div>  
											<div class="w3ls-submit"> 
                                              <a href="#"><input type="submit" value="Ingresar" name="enviar"></a>
												  	
											</div>	
										</form>

										</div>  
									</div>
						</div>  
				</div> <!-- //login-page -->
			</div>
		</div>
	<div class="modal about-modal w3-agileits fade" id="myModal4" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div style="margin-top: 70px" class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body login-page"><!-- login-page -->     
									<div class="login-top sign-top">
										<div class="agileits-login">
										<h5>Recuperar Contraseña</h5>
										<form action="recuperar/recupera.php" method="post">
											<input type="email" placeholder="Correo" required="" name="email"/>
											
											<div class="wthree-text"> 
										
												
												<div class="clearfix"> </div>
											</div>  
											<div class="w3ls-submit"> 
                                              <a href="#"><input type="submit" value="Ingresar" name="enviar"></a>
												  	
											</div>	
										</form>
                                         
										</div>  
									</div>
						</div>  
				</div> <!-- //login-page -->
			</div>
		</div>
	<!-- //modal --> 
	<!-- modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body login-page "><!-- login-page -->     
									<div class="login-top sign-top">
										<div class="agileits-login">
										<h5>Registrarse</h5>
										<form action="index.php" method="post">
											<!-- Text input-->
<?php
            include("conexion/conexion.php");
?>
  
  <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md">
    

    
  <input id="apellido" name="apellido" type="text" placeholder="Apellido" class="form-control input-md">
    

    <select id="tipo_id" name="tipo_id" class="form-control">
      <option value=" ">TI - Tarjeta de identidad.</option>
      <option value="">CC - Cédula de ciudadanía</option>
      <option value="">CE - Cédula de extranjería</option>
      <option value="">PA - Pasaporte</option>
      <option value="">NIT - Número de Identificación Tributaria</option>
    </select>

  <input id="numero_id" name="numero_id" type="text" placeholder="Numero de identificacion" class="form-control input-md">
    

  <input id="movil" name="movil" type="text" placeholder="Celular" class="form-control input-md">
    
 
  <input id="telefono" name="telefono" type="text" placeholder="Telefono" class="form-control input-md">
    

  <input id="direccion" name="direccion" type="text" placeholder="Direccion" class="form-control input-md">
    
  <input id="ciudad" name="ciudad" type="text" placeholder="Ciudad" class="form-control input-md">
    

  <input id="departamento" name="departamento" type="text" placeholder="Departamento" class="form-control input-md">

  <input id="email" name="email" type="email" placeholder="Correo" class="form-control input-md">
    
  
  <input id="usuario" name="usuario" type="text" placeholder="Usuario" class="form-control input-md">
    

    <input id="contrasena" name="contrasena" type="password" placeholder="Contraseña" class="form-control input-md">
 
												
												<div class="clearfix"> </div>
											</div>  
											<div class="w3ls-submit"> 
												<input type="submit" value="Registrarse" name="Registrar" style="font-size: 1em; color: #fff; border: none; outline: none; padding: .8em 5em; -webkit-appearance: none; text-transform: uppercase; transition: .5s all; background: #dd1733; display: inline-block;">  	
											</div>	
										</form>

										</div>  
									</div>
						</div>  
				</div> <!-- //login-page -->
			</div>
		</div>
	<!-- //modal --> 
<!--banner-->
		<!--Slider-->
		
		
<!--//banner-->

<!-- welcome -->
	<div class="features" id="features">
		<div class="container">
			<h2 class="title-w3">MISIÓN Y VISIÓN</h2>
		    <div class="w3-agile-top-info">	
			<div class="w3-welcome-grids">
				<div class="col-md-7 w3-welcome-left">
					<h5> NUESTRA MISIÓN</h5>
					<p>Nuestra misión consiste en servir a la comunidad estableciendo un puente de comunicación que permita a cualquier persona llegar a un acuerdo. Se realiza la creación de este aplicativo para que los conductores sean sus propios jefes y no tengan que depender de una empresa, que se puedan unir para formar un grupo, fortalecer sus ideas y complementarse, beneficiando a todos sus usuarios, para facilitar la prestación y solicitación de los servicios.</span></p>
				</div>
				<div class="col-md-5 w3ls-welcome-img1">
					<img src="images/w1.jpg" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3-welcome-grids w3-welcome-bottom">
				<div class="col-md-5 w3ls-welcome-img1 w3ls-welcome-img2">
					<img src="images/w2.jpg" alt="" />
				</div>
				<div class="col-md-7 w3-welcome-left">
					<h5> NUESTRA VISIÓN</h5>
					<p>En el futuro, nos proyectamos como un aplicativo que innove y sirva a variedad de empresas dedicadas al transporte de carga</span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>


<section id="openmodal" class="modalDialog">
				<section class="modal">
					<a href="#close" class="close"> X </a>
					<h2> Ventana Modal</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati architecto quaerat, facere blanditiis, tempora sequi?</p>
				</section>
			</section>
			

<div class="team" id="team">
			<div class="col-md-6 agile-team-grids">
				<div class="col-md-6 team-grid">
					<div class="team-img">
						<img src="images/t1.jpg" class="img-responsive" alt=" " />
						<figcaption class="overlay">
								<h4>Alberto</h4>
					<span>Sus redes sociales</span>
							<div class="w3l-social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</figcaption>
					</div>
				
				</div>
				<div class="col-md-6 team-grid">
					<div class="team-img">
						<img src="images/t2.jpg" class="img-responsive" alt=" " />
						<figcaption class="overlay">
							<h4> Ricardo</h4>
					<span>Sus redes sociales</span>
							<div class="w3l-social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</figcaption>
					</div>
					
				</div>
				<div class="col-md-6 team-grid">
					<div class="team-img">
						<img src="images/t3.jpg" class="img-responsive" alt=" " />
						<figcaption class="overlay">
								<h4> Fernando</h4>
					<span>Sus redes sociales</span>
							<div class="w3l-social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</figcaption>
					</div>
					
				</div>
				<div class="col-md-6 team-grid">
					<div class="team-img">
						<img src="images/t4.jpg" class="img-responsive" alt=" " />
						<figcaption class="overlay">
							  <h4>Luis</h4>
					           <span>Sus redes sociales</span>
							<div class="w3l-social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</figcaption>
					</div>
					
				</div>
				<div class="clearfix"></div>
			</div>
	<div class="col-md-6 team-grid-text-agile">
		
		    <h4 class="title-w3 two">Beneficios</h4>
			<p>Los beneficios que traera a los conductores sera su propio manejo de informacion, que no tengan que depender de una empresa, que se puedan unir para formar un grupo, fortalecer sus ideas y complementarse, beneficiando a todos sus usuarios , para facilitar la prestación y solicitación de los servicios. Asi seran sus propios jefes de su empresa.</p>
		</div>
		<div class="clearfix"> </div>

</div>
<!--//team-->
<!-- gallery -->
		<div class="gallery"  id="gallery">
			<div class="container">
				<h4 class="title-w3"> Algunos Vehiculos</h4>
				<div id="jzBox" class="jzBox">
					<div id="jzBoxNextBig"></div>
					<div id="jzBoxPrevBig"></div>
					<img src="#" id="jzBoxTargetImg" alt="">
					<div id="jzBoxBottom">
						<div id="jzBoxTitle"></div>
						<div id="jzBoxCounter"></div>
						<span id="jzBoxMoreItems"> 
							<i class="glyphicon glyphicon-chevron-left" id="jzBoxPrev"></i> &nbsp;
							<i class="glyphicon glyphicon-chevron-right" id="jzBoxNext"></i> &nbsp;
						</span>
						<i class="glyphicon glyphicon-remove-circle" id="jzBoxClose"></i>
					</div>
				</div>
				<div class="gallery-grids-row">
					<div class="col-md-4 gallery-grid">
						<div class="wpf-demo-4">  
							<a href="images/g1.jpg" class="jzBoxLink item-hover" title="">  
								<img src="images/g1.jpg" class="img-responsive" alt=" " />
								<div class="view-caption">
									<p>Abrir Galeria</p>
								</div> 
							</a>    		
						</div>
						<div class="wpf-demo-4">  
							<a href="images/g2.jpg" class="jzBoxLink item-hover" title="">  
								<img src="images/g2.jpg" alt=" " class="img-responsive" />
								<div class="view-caption">
									<p>Abrir Galeria</p>
								</div> 
							</a>    			
						</div>
						<div class="wpf-demo-4">  
							<a href="images/g7.jpg" class="jzBoxLink item-hover" title="">  
								<img src="images/g7.jpg" alt=" " class="img-responsive" />
								<div class="view-caption">
									<p>Abrir Galeria</p>
								</div> 
							</a>    			
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 gallery-grid">
						<div class="wpf-demo-4">  
							<a href="images/g3.jpg" class="jzBoxLink item-hover" title="">  
								<img src="images/g3.jpg" alt=" " class="img-responsive" />
								<div class="view-caption">
									<p>Abrir Galeria</p>
								</div> 
							</a>    			
						</div>
						<div class="wpf-demo-4">  
							<a href="images/g4.jpg" class="jzBoxLink item-hover" title="">  
								<img src="images/g4.jpg" alt=" " class="img-responsive" />
								<div class="view-caption">
									<p>Abrir Galeria</p>
								</div> 
							</a>    			
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 gallery-grid">
						<div class="wpf-demo-4">  
							<a href="images/g6.jpg" class="jzBoxLink item-hover" title="">  
								<img src="images/g6.jpg" alt=" " class="img-responsive" />
								<div class="view-caption">
									<p>Abrir Galeria</p>
								</div> 
							</a>  
						</div> 
						<div class="wpf-demo-4">  
							<a href="images/g8.jpg" class="jzBoxLink item-hover" title="">  
								<img src="images/g8.jpg" alt=" " class="img-responsive" />
								<div class="view-caption">
									<p>Abrir Galeria</p>
								</div> 
							</a>    			
						</div>
						<div class="wpf-demo-4">  
							<a href="images/g5.jpg" class="jzBoxLink item-hover" title="">  
								<img src="images/g5.jpg" alt=" " class="img-responsive" />
								<div class="view-caption">
									<p>Abrir Galeria</p>
								</div> 
							</a>    			
						</div> 
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //gallery --> 	

		
				<h4 class="title-w3">Contactenos</h4>
        <footer class="footer-distributed" id="contact">

			<div class="footer-left">

				<h3>SOLTCAR<span> <img src="images/logo.png" alt="Logo" style="width:100px;"></span></h3>

				<p class="footer-links">
					<a href="index.php">Inicio</a>
					·
					<a href="#features">Nosotros</a>
					·
					<a href="#capabilities">Registrar</a>
					·
					<a href="#team">Beneficios</a>
					·
					<a href="#gallery">Galeria</a>
					·
					<a href="#contact">Contactenos</a>
				</p>

				<p class="footer-company-name">SOLTCAR &copy; 2020</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span> Abejorral</span> Antioquia, Colombia</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+57 3285678546</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:SOLTACR@gmail.com">SOLTACR@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Acerca de nosotros</span>
					SOLTCAR es un aplicativo web con la finalidad de establecer un puente de comunicación entre los tranportadors de carga y facilitar el trabajo.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
		<style>
			.footer-distributed{
	background-color: #000;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;

	padding: 55px 50px;
	margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  #5383d3;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #5383d3;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}

		</style>

	<div class="copy">
		<p>© 2017 Freightage . All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
	</div>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- jarallax-js -->
			<script src="js/jarallax.js"></script>
			<script src="js/SmoothScroll.min.js"></script>
			<script type="text/javascript">
				/* init Jarallax */
				$('.jarallax').jarallax({
					speed: 0.5,
					imgWidth: 1366,
					imgHeight: 768
				})
			</script>
<!-- //jarallax-js -->
					<!--banner Slider starts Here-->
						<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>

							<!--banner Slider starts Here-->


<!--light-box-files -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<!--//light-box-files -->
		<script type="text/javascript">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!--//footer-section-->
<!-- Starts-Number-Scroller-Animation-JavaScript -->		
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //Starts-Number-Scroller-Animation-JavaScript -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<?php

if(isset($_POST["Registrar"])){
include("conexion/conexion.php");
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$tipo_id=$_POST['tipo_id'];
$tipo_id=$_POST['numero_id'];
$movil=$_POST['movil'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$departamento=$_POST['departamento'];
$email=$_POST['email'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$activacion=$_POST['activacion'];
$id_rol=$_POST['id_rol'];
$validatepassword = strpos($usuario, $contrasena);

$consulta = "SELECT  usuario FROM tbl_clientes";
$resultado = mysqli_query($mysqli, $consulta);


while ($fila = mysqli_fetch_assoc($resultado)) { 
	$user = $fila["usuario"];
}

$password = md5($contrasena);

if ($usuario <> $user) {

	if ($validatepassword !== false) {
			echo '<script> alert("La contraseña es igual al usuario "); 
		window.location.href = "index.php";
		</script>';
		} else {
			mysqli_query($mysqli, "INSERT INTO tbl_clientes(nombre,apellido,tipo_id,numero_id,movil,telefono,direccion,ciudad,departamento,correo,usuario,contrasena,activacion,token_password,password_request,id_rol)VALUES('$nombre', '$apellido', '$tipo_id', '$numero_id', '$movil', '$telefono', '$direccion', '$ciudad', '$departamento', '$email', '$usuario','$password','1','','','1')");
	
		
		}
		} else {

			echo "<script>
			alert('Nombre de usuario en uso');
			window.location.href='index.php';
			</script>";
	}
	echo "<script>
			alert('Se ha registrado correctamente');
			window.location.href='index.php';
			</script>";

	

}
?>
</body>
</html>