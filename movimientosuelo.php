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
            <li><a href="#">Proyectos</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Contactos</a></li>
        </ul>
    </nav>
    <!-- Cuerpo -->
    <section id="cuerpo">
    <h1 class="titulopagina">Movimiento de suelo</h1>
    <article class="cajas">
        <div id="cajapresentacion">
            <h1>TRABAJANDO <br>CON <br>EXCELENCIA</h1>
            <p>
                La empresa ofrece el alquiler de Retroexcavadora (Modelo Maxion 4x4) y camión volcador capacidad de 6 m3, para realizar distintos trabajos de excavación y movimientos de suelo.
            </p>
        </div>
        <div id="banner">
            <img src="servicios/foto-banner.jpg" width="440" height="290">
        </div>
        <!--Para que crezca la caja "cajas" pero no hace ya que a mi me sale igual. Lo coloco por las dudas-->
        <div class="limpiar"></div>
    </article>    
    <h1>Vehículos para alquilar</h1>
    <div>
        <div id="cajaservicios">
            <p>01</p>
            <h2>Retroexcabadora maxion 4x4</h2>
            <p></p>
            <img src="Imagenes ilustrativas retro y camion/17-retroexcavadora-maxion-750.jpg" width="270" height="120">
        </div>
        <div id="cajaservicios">
            <p>02</p>
            <h2>Retroexcabadora maxion 4x4</h2>
            <p></p>
            <img src="Imagenes ilustrativas retro y camion/f_maxion750.jpg" width="270" height="120">
        </div>
        <div id="cs-sm">
            <p>03</p>
            <h2>Camión volcador chevrolet</h2<
            <p></p>
            <img src="Imagenes ilustrativas retro y camion/vendo-camion-volcador-chevrolet-c70_72a4a3e1_3.jpg" width="270" height="120">
        </div>        
        <div class="limpiar"></div>
    </div>
    </section>
    <!-- Pie de Pagina -->
    <footer id="piepagina">
        <ul class="menupie">
            <li><a href="#">Home</a></li>
            <li><a href="#">Proyectos</a></li>
            <li><a href="#">Servicios</a></li>
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