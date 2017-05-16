<!DOCTYPE html>
<html lang="es">

<head>
	<title>Pagina Personal</title>
	<meta charset="utf-8">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="main.js"></script>
	<script src="desplazamiento.js"></script>
	<link rel="stylesheet" href="assets/css/estilos2.css">
	<link rel="stylesheet" href="assets/css/iconos.css">	
    <link rel="stylesheet" href="assets/css/animations.css">
	
</head>

<body>



<div id="contenedor"> 


	<header>
	<div class="logo">
		<img src="imagenes\logo.jpg"/>
	</div>	
		<nav class="menu"> 
			<ul>
				<li> <a href="#contenedor"><span class="primero"><i class="icon icon-home3"></i></span> Inicio</a></li>
				<li> <a href="#servicios"><span class="segundo"><i class="icon icon-wrench"></i></span> Mis Servicios</a></li>
				<li> <a href="#catalogo"><span class="tercero"><i class="icon icon-books"></i></span> Mis Proyectos</a></li>
				<li> <a href="#contacto"><span class="cuarto"><i class="icon icon-mail4"></i></span> Contácto</a></li>

			</ul>				
		</nav>
	</header>
	


	<div id="contenido">
	<center><img src="imagenes/foto.jpg" /></center>
	<center><p><h1>Sergio Michelotti</h1></p></center>
	<center><p><h1>Ingeniero en Informática</h1></p></center>
		<article>
		<p><h2><u>Sobre Mi</u></h4></p>
			<h3><p>Me dedico a la Programación! Me destaco trabajando en soporte técnico y en aplicaciones</p></h3>
			<h3><p>Tengo experiencia en lenguajes como Java, C y VisualBasic entre muchos otros.</p></h3>
			<h3><p>También soy hábil estructurando y consultando bases de datos.</p></h3>
			<h3><p>Me gusta que el código sea ordenado, semántico y mantenible.</p></h3>
		</article>
	</div>


	<section id="blanco1">
	
	</section>

	<div id="servicios" >

		<center><img src="imagenes/servicio.png"></center>

		<article id="serv1">
			<center><img src="imagenes/398.jpg" id="imgservicio2" ></center>
			<center><p><b><h2>Mantenimiento Informático</h2></b></p></center>
			<center><p> Un ordenador necesita cuidado.  </p></center>
			<center><p>Con mantenimiento informático no tendrás que comprar  </p></center>
			<center><p>ordenadores nuevos todos los años.</p></center>
		</article>


		<article id="serv2">
			<center><img src="imagenes/1183.jpg" id="imgservicio3" ></center>
			<center><p><b><h2>Servicio Técnico</h2></b></p></center>
			<center><p> El cliente la posibilidad de reparar su ordenador </p></center>
			<center><p>ordenador de una forma segura, rápida y muy económica </p></center>
			<center><p>tendrá su ordenador reparado en menos de 24h</p></center>
		</article>


		<article id="serv3">
			<center><img src="imagenes/537.jpg" id="imgservicio4" ></center>
			<center><p><b><h2>Software</h2></b></p></center>
			<center><p> Desarrollo diferentes tipos de software con multiples </p></center>
			<center><p>lenguajes de programación como aplicaciones de escritorio  </p></center>
			<center><p>internas o con conexión a bases de datos externas</p></center>
		</article>


		<article id="serv4">
			<center><img src="imagenes/539.jpg" id="imgservicio5" ></center>
			<center><p><b><h2>Diseño Web</h2></b></p></center>
			<center><p>Diseños profesionales y adaptados a tus requerimientos </p></center>
			<center><p>su página web informativa, empresarial,   </p></center>
			<center><p>profesional o tienda virtual para su empresa</p></center>
		</article>
	</div>


	<section id="blanco2">
	
	</section>





	<section id="catalogo">	
		<center><img src="imagenes/proyecto.png"></center>
	</section>

	<section id="blanco3">
	
	</section>

	<section id="contacto">
		<center><img src="imagenes/contacto.png"></center>
	</section>


	

</div>

	<footer>
		<h4>Copyright Sergio Michelotti© Todos los Derechos Reservados <a href="http://www.google.com"><font color="Black">ir a Google...  </font></a></h4>
	</footer>


<script>
 $(window).scroll(function() {
 $('#imgservicio2').each(function(){
 var imagePos = $(this).offset().top;
var topOfWindow = $(window).scrollTop();
 if (imagePos < topOfWindow+400) {
 $(this).addClass("slideRight");
 }
 });
 });
</script>


<script>
 $(window).scroll(function() {
 $('#imgservicio3').each(function(){
 var imagePos = $(this).offset().top;
var topOfWindow = $(window).scrollTop();
 if (imagePos < topOfWindow+400) {
 $(this).addClass("slideLeft");
 }
 });
 });
</script>


<script>
 $(window).scroll(function() {
 $('#imgservicio4').each(function(){
 var imagePos = $(this).offset().top;
var topOfWindow = $(window).scrollTop();
 if (imagePos < topOfWindow+400) {
 $(this).addClass("slideRight");
 }
 });
 });
</script>


<script>
 $(window).scroll(function() {
 $('#imgservicio5').each(function(){
 var imagePos = $(this).offset().top;
var topOfWindow = $(window).scrollTop();
 if (imagePos < topOfWindow+400) {
 $(this).addClass("slideLeft");
 }
 });
 });
</script>


</body>
</html>