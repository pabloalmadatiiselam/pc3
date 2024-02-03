<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>MaquetaciÃ³n BÃ¡sica Responsive</title>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<!-- Maquetacion BÃ¡sica de una web HMTL5 -->
<div id="contenedor">
	<header id ="cabecera">
    <div id="logo">
        <center>
         <img src="imagenes/logo.jpg" width="352" height="109">
        </center>
    </div>
    <ul>
        <li><a href="#"><img src="imagenes/facebook.png" width="45" height="44"></a></li>
        <li><a href="#"><img src="imagenes/twitter.png" width="46" height="44">
    </ul>
    </header>
	<nav id="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="trabajos.php">Trabajos</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="contactos.php">Contactos</a></li>
        </ul>
    </nav>
    <!-- Cuerpo -->
    <section id="cuerpo">
    <h1 class="titulopagina">Refacción/Remodelación</h1>
    <article class="cajas">
        <div id="cajapresentacion">
            <h1>TRABAJANDO <br>CON <br>EXCELENCIA</h1>
            <p>
                La empresa ofrece trabajos para distintos tipos de refacciones ya sea en vivienda particular, departamento, o trabajos en la infraestructura  exterior que rodea a la vivienda: mampostería, revoques, pisos, cielorrasos, techos, veredas, muros perimetrales, rampas de acceso, etc.
            </p>
        </div>
        <div id="banner">
            <img src="servicios/foto-banner.jpg" width="440" height="290">
        </div>
        <!--Para que crezca la caja "cajas" pero no hace ya que a mi me sale igual. Lo coloco por las dudas-->
        <div class="limpiar"></div>
    </article>    
    <h1>Refacción/Remodelación</h1>
    <div>
        <div id="cajaservicios">
            <p>01</p>
            <h2>Refacción</h2>
            <p></p>
            <img src="servicios/refaccion.jpg" width="270" height="120">
        </div>
        <div id="cajaservicios">
            <p>02</p>
            <h2>Remodelación</h2>
            <p></p>
            <img src="servicios/remodelacion.jpg" width="270" height="120">
        </div>
        <div id="cs-sm">
            <p>03</p>
            <h2>Mampostería</h2<
            <p></p>
            <img src="servicios/mamposteria.jpg" width="270" height="120">
        </div>        
        <div class="limpiar"></div>
    </div>
    </section>
    <!-- Pie de Pagina -->
    <footer id="piepagina">
        <ul class="menupie">
            <li><a href="index.php">Home</a></li>
            <li><a href="trabajos.php">Trabajos</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="contactos.php">Contactos</a></li> 
        </ul>
        <ul class="socialespie">
        <li><a href="#"><img src="imagenes/facebook.png" width="45" height="44"></a></li>
        <li><a href="#"><img src="imagenes/twitter.png" width="46" height="44">
        </ul>
        <div class="limpiar"></div>
    </footer>
</div>
</body>
</html>