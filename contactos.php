<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Juan Pereira Construccines</title>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<style>    
    #cajapresentacion h1{
        font-size: 23px;
    }
    table{            
        border:3px solid #6d6d6d;
        color:#fe0000;
        /*border-radius: 5px;*/
        margin: left;

    }
    td{
        border:1px solid #6d6d6d;
        /*border-radius: 5px;*/
        text-align: left;
    }
    input{
        border:1px solid #6d6d6d;
        /*border-radius: 5px;*/
    }
    textarea{
        border:1px solid #6d6d6d;
        /*border-radius: 5px;*/
    }
</style>
<script language="javascript">
   function verificar_datos(){
    if(document.femail.nombre.value.length ==0) {
        alert("complete su nombre");
        return false;
    }
    if(document.femail.email.value.length ==0) {    
        alert("complete su correo");
        return false;
    }
    if(document.femail.confirmacion.value.length ==0){
        alert("complete confirmacion de correo");
        return false; 
    }
    if(document.femail.comentario.value.length ==0){
        alert("complete su comentario");
        return false;
    }
    return true;
   }
</script>
<script>
    function verificar_blanco() {
        // Obtener el valor del campo de texto
        var criterio = document.fbuscador.criterio.value;

        // Verificar si el campo está en blanco
        if (criterio.trim() === "") {
            alert("Por favor, ingrese un criterio de búsqueda");
            return false; // Evita que el formulario se envíe
        }

        // Si todo está bien, permite que el formulario se envíe
        return true;
    }
</script>
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
    <div class="limpiar"></div>
	<nav id="menu">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="trabajos.html">trabajos</a></li>
            <li><a href="servicios.html">Servicios</a></li>
            <li><a href="contactos.php">Contactos</a></li>
        </ul>
    </nav>
    <!-- Cuerpo -->
    <section id="cuerpo">
    <h1 class="titulopagina">Contactos</h1>
    <article class="cajas">
        <div id="cajapresentacion">
            <h1>TRABAJANDO CON EXCELENCIA</h1>
            <?php
                if(!$_POST)
                {
                ?>
                <form name="femail" action="contactos.php" method="post" onSubmit="return verificar_datos()">
                <table>   
                <tr>
                <td> Nombre:</td>   
                <td><input type="text" name="nombre" size=16></td>
                </tr>
                <tr><td>Correo:</td>
                <td><input type="text" name="email" size=16></td>
                </tr>
                <tr>
                <td>Confirmación:</td>
                <td><input type="text" name="confirmacion" size=16>  </td>
                </tr>  
                <tr>
                <td>Comentarios:</td>
                <td><textarea name="comentario" cols=32 rows=6></textarea></td>
                </tr>
                <tr>
                <td><input type="reset" value="Restablecer"></td>
                <td><input type="submit" value="Enviar"></td>
                </tr>
                </table>    
                </form>
                <?php
                }else {
                  //verico si esta bien escrito los 2 correos
                  if($_POST["email"]!=$_POST["confirmacion"])
                    echo "Error:Los correos no coinciden";
                  else{
                  //estoy recibiendo el formulario compongo el cuerpo
                  $cuerpo = "Formulario enviado\n";
                  $cuerpo .= "Nombre: " . $_POST["nombre"] . "\n";
                  $cuerpo .= "Email:" . $_POST["email"] . "\n";
                  $cuerpo .= "Comentarios: " . $_POST["comentario"] . "\n";   
                  //la variable $_POST[email]no va con la comilla doble o sea $_POST["email"] ya que cerraria la cadena
                  //com la primer comilla doble antes de email, tampoco va comilla simples como $_POST['email']
                  //Puede ir comillas simples parecidas como cuando usamos la Sentencia Insert o Update de Sql
                  // o sea de esta manera '$_POST[email]'.
                  //Esta mal hacer esto  '$_POST['email']'. Esto ultimo es incorrecto
                  // Otra forma correcta y mas simple es como dejo en el codigo solo colocar
                  //$_POST[email] sin ninguna comillas simples y dobles . Esto lo aprendi en el
                  //capitulo de cadenas del manual de php. Directamente se coloca la varialbes o sea $_POST[email]
                  //dentro de la cadena y nada mÃ¡s. El navegador entiende que tiene que ir el contenido de la 
                  //variable $_POST[email] y no la palabra literal $_POST[email].  
                  
                  //mando el correo...
                  if(mail("infylac@gmail.com","Comentario",$cuerpo)){
                    //doy gracias por el envio
                  echo "Gracias por rellenar el formulario. Se ha enviado correctamente.";
                  }else{
                    echo "Falla al enviar el mensaje";
                  }
                  }
                }
                ?>

        </div>
        <div id="banner">
            <img src="servicios/foto-banner.jpg" width="440" height="290">
        </div>
        <!--Para que crezca la caja "cajas" pero no hace ya que a mi me sale igual. Lo coloco por las dudas-->
        <div class="limpiar"></div>
    </article>    
    <!--Contactos-->
    <h1>Otros contactos</h1>
    <div>
        <div id="cajaservicios">
            <p>01</p>
            <h2>Personalmente</h2>
            <p>Chacabuco y Zapiola. Posadas Misiones</p>            
        </div>
        <div id="cajaservicios">
            <p>02</p>
            <h2>Teléfonos</h2>
            <p>54-0376-154579996</p>            
        </div>
        <div id="cs-sm">
            <p>03</p>
            <h2>Email</h2>
            <p>pereiraconstrucciones@gmail.com</p>
        </div>        
        <div class="limpiar"></div>
    </div>
    </section>
    <!-- Pie de Pagina -->
    <footer id="piepagina">
        <ul class="menupie">
            <li><a href="index.html">Home</a></li>
            <li><a href="trabajos.html">Trabajos</a></li>
            <li><a href="servicios.html">Servicios</a></li>
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
