<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Juan Pereira Construcciones</title>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="fonts.css">
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
    <div id="buscador">        
        <FORM name="fbuscador" method="post" action="buscar.php" onsubmit="return verificar_blanco()">
            <div id="campotexto"><input type ="text" name="criterio" class="campob"></div>
            <div id="botonbuscar"><input type="submit" value="Buscar" class="botonb"></div>
        </FORM>
    </div>
    <ul>
        <li><a href="#"><img src="imagenes/facebook.png" width="45" height="44"></a></li>
        <li><a href="#"><img src="imagenes/twitter.png" width="46" height="44">
    </ul>
    </header>
    <div id="menubar"> 
        <div id="menutext">Menu </div>         
        <div id ="bt-menu"><a href="#"><span class="icon-menu"</span></a></div>
    </div> 
    <div class="limpiar"></div>
	<nav id="menu">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="trabajos.html">Trabajos</a></li>
            <li><a href="servicios.html">Servicios</a></li>
            <li><a href="contactos.html">Contactos</a></li>
        </ul>
    </nav>
    <!-- Cuerpo -->
<section id="cuerpo">
<?php
// Lee el contenido del archivo JSON
$configJson = file_get_contents('config.json');

// Decodifica el contenido JSON
$configData = json_decode($configJson, true);

// Accede a los datos de la base de datos
$host = $configData['database']['host'];
$username = $configData['database']['username'];
$password = $configData['database']['password'];
$databaseName = $configData['database']['database_name'];

// Realiza la conexión a la base de datos usando los datos obtenidos
$conexion = new mysqli($host, $username, $password, $databaseName);

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}
//Buscar imágenes de las obras
$ssql= "Select * from imagenes where img_obr=" . $_GET['referencia']; 

//Ejectuo la consulta sobre imagenesde de obras
$conexion->query("SET NAMES 'utf8'");                
$resultado = $conexion->query($ssql);

//Verifico si esisten imágenes de la obra
if($resultado->num_rows == 0)
    echo "No se encontraron imágenes de esta obra";

 //Muestro imágenes   
 while($row = $resultado->fetch_object()) 
 {
    echo "<div class='obra'>";
    echo "<h2>{$_GET['titulo']}</h2>";
       
//Muestro imágenes   
while($row = $resultado->fetch_object()){
    echo "<div class = 'galería'>";
        if($_GET['obra'] == 1){
        ?>
        <img src="Obras realizadas/<?php echo $_GET['titulo']?>/<?php echo $row->img_img;?>" class="obra2">
        <?php
        }else{
        ?>        
        <img src="proyectoobranueva/<?php echo $_GET['titulo']?>/<?php echo $row->img_img;?>"class="obra2">
        <?php
        }
    echo "</div>";
}
echo "</div>";
}
?>
</section>
<SCRIPT TYPE = "text/javascript" src = "js/jquery.js"> </SCRIPT>
<SCRIPT TYPE = "text/javascript" src = "menu.js"> </SCRIPT>
    <!-- Pie de Pagina -->
    <footer id="piepagina">
        <div id="menubarpie"> 
            <div id="menutext">Menu </div>         
            <div id ="bt-menu"><a href="#"><span class="icon-menu"</span></a></div>
        </div> 
        <div class="limpiar"></div>
        <ul class="menupie">            
            <li><a href="index.html">Home</a></li>
            <li><a href="trabajos.html">Trabajos</a></li>
            <li><a href="servicios.html">Servicios</a></li>
            <li><a href="contactos.html">Contactos</a></li> 
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



 




