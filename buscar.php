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
    <h1 class="titulopagina">Búsqueda de obras</h1>
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

// Resto del código de tu aplicación...
if($_POST["criterio"]<>""){
    //cuenta el numero de palabras
    $trozos = explode(" ",$_POST["criterio"]);
    $numero = count($trozos);             
    $busqueda = $_POST["criterio"]; 
    if($numero == 1){
        //SI SOLO HAY UNA PALABRA DE BUSQUEDA SE ESTABLECE UNA INSTRUCCION CON LIKE
        $cadbusca = "SELECT obr_ide, obr_tip, obr_nom, obr_des FROM obras WHERE obr_nom LIKE '%$busqueda%' OR obr_des LIKE '%$busqueda%' ORDER BY obr_tip LIMIT 50 ";

    }elseif($numero > 1){
        //SI HAY UNA FRASE SE UTILIZA EL ALGORITMO DE BUSQUEDA AVANZADO DE MATCH AGAINST.
        //busqueda de frases con mas de una palabra y un algoritmo especializado       
        $cadbusca = "SELECT obr_ide, obr_tip, obr_nom, obr_des, MATCH (obr_nom, obr_des) AGAINST ( '$busqueda' ) AS Score FROM obras WHERE MATCH (obr_nom, obr_des) AGAINST ( '$busqueda' ) ORDER BY Score DESC LIMIT 50";
    } 
   // CONSULTA
   $conexion->query("SET NAMES 'utf8'");
   //ejecutar consulta y retorna objeto $mysqli_result
   $result = $conexion->query($cadbusca);          
   //mostrar obras  
   //MOSTRAR subtitulos y obras
   $aux=0;
   $tipart = array("Obras reaalizadas", "Obras nuevas");
   while($row = $result->fetch_object()){
   //mostramos los articulos de los articulos o lo que deseamos...
   $refer = $row->obr_ide;
   $titulo = $row->obr_nom;
   $obra=$row->obr_tip;
   if($aux != $obra){                    
       echo "<h3 class='titulos'>" . $tipart[$obra-1] . "</h3>";
       $aux = $obra;
   }
   $desarrollo = $row->obr_des;
   $array_palabras = explode(".",$desarrollo);                
   echo $refer . "-";
   echo "<a href='mostrar-desarrollo.php?referencia=".$refer."&obra=".$obra."&titulo=".$titulo."'>".$titulo."</a><br><font class='descripcion'>".$array_palabras[0]."...</font><p>";
   }
} 
else echo ("No ingreso un texto para la búsqueda");       
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
