<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Maquetación Básica Responsive</title>
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
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>
    <!-- Cuerpo -->
    <section id="cuerpo">
    <h1 class="titulopagina">Construciones nuevas</h1>
    <article>
        <div id="cajapresentacion">
            <h1>TRABAJANDO <br>CON <br>EXCELENCIA</h1>
            <p>
                La empresa ofrece para el comitente que quiera realizar Construcciones Nuevas los siguientes servicios: Proyectos, Presupuestos, y Construcción y Dirección de Obra.
                Si usted está interesado en construir su primera Casa, ofrecemos un proyecto y prototipo base  de carácter sencillo  el cual usted podrá construir en su totalidad, o de acuerdo a su presupuesto una parte del mismo para luego seguir ampliándolo. 
                Dicho Prototipo se refiere a una Casa de material, pensado para una familia tipo (Mama, Papa y 2 hijos). La descripción y el croquis del mismo podrán descargar en estos enlaces<br>
                <a href= "proyectoobranueva/Corte.pdf">Corte</a><br>
                <a href= "proyectoobranueva/Fachada.pdf">Fachada</a><br>
                <a href= "proyectoobranueva/Planta de techo.pdf">Planta de techo</a><br>
                <a href= "proyectoobranueva/Planta.pdf">Planta</a><br>  
            </p>
        </div>
        <div id="banner">
            <img src="servicios/foto-banner.jpg" width="440" height="290">
        </div>
        <div class="limpiar"></div>
    </article>       
    </section>
    <!-- Pie de Pagina -->
    <footer id="piepagina">
        <ul class="menupie">
            <li><a href="#">Home</a></li>
            <li><a href="trabajos.php">Trabajos</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="#">Contacto</a></li> 
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