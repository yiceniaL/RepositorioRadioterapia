<!DOCTYPE html>
<!-- Detalles de la pagina-->
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<!-- Detalles del estilo de la pagina-->
<style>
body,h1,h2,h3,h4,h5 {font-family: "arial", sans-serif}
body {font-size:16px;}
</style>
<body>

<!-- Menu del costado -->
<!-- Datos de informacion de contacto -->
<nav class="w3-sidebar w3-teal w3-collapse w3-top w3-large " style="z-index:3;width:335px;font-weight:bold;"><br>
  <div class="w3-container">
    <h3 class="w3-padding-12"><b>Información de contacto</b></h3>
    <h5>Nombre del Autor:</h5>
    <h5>País de Planificación:</h5>
    <h5>Nombre de la Institución:</h5>
  </div>
    <div class="w3-center">
        <button onclick="document.getElementById('id04').style.display='block'" style = "margin-top:60px" class="w3-center w3-teal w3-hover-white  w3-border w3-button w3-medium w3-mobile " >Contactar al Autor</button>

        <button class="w3-center w3-teal w3-margin-top w3-hover-white w3-border w3-button w3-medium w3-mobile " >Descargar el Archivo Médico</button>
        <button onclick="location.href='http://127.0.0.1:8000/formularioPropuesta'" class="w3-center w3-teal w3-margin-top w3-hover-white w3-border w3-button w3-medium w3-mobile " >Nueva propuesta a este Caso</button>
    </div>
</nav>

<!-- Enviar email -->
<div class="w3-margin-bottom">
        <div id="id04" class="w3-modal">
            <div class="w3-modal-content">
                <header class="w3-container"> 
                    <span onclick="document.getElementById('id04').style.display='none'" 
                    class="w3-button w3-display-topright">&times;</span>
                    <h3>Envía un email a el autor</h3>
                </header>
            <form action="mailto:someone@example.com" method="post" enctype="text/plain">
            <div class="w3-container">
                <div class="w3-col s2 w3-margin-left">
                    <p>Nombre:</p>
                </div>
                <div class="w3-col s6">
                    <input type="text" name="name" maxlength="100" name="namei4" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa tu nombre">
                </div>
            </div>
            <div class="w3-container">
                <div class="w3-col s2 w3-margin-left">
                    <p>Email:</p>
                </div>
                <div class="w3-col s6">
                    <input maxlength="100" name="mail" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa tu correo para recibir una respuesta">
                </div>
            </div>
            <div class="w3-container ">
                <div class="w3-col s2 w3-margin-left">
                    <p>Comentario:</p>
                </div>
                <div class="w3-col s8">
                <textarea type="text" maxlength="500" name="comment" autocomplete="on" class="w3-input w3-border w3-rest" style="height: 200px  width: 300px" placeholder="Ingreso el comentario para el Autor"></textarea>
                </div>
            </div>
            <div class="w3-bar w3-container w3-center w3-margin-top">
            <span onclick="document.getElementById('id04').style.display='none'"><button onclick="alert('Recuerda confirmar el envío del email desde tu bandeja.')"type="submit" class="w3-button w3-green">Enviar</button></span>              
                <button type="reset" class="w3-button w3-green">Borrar</button>
            </div>
            <footer class="w3-padding-16"></footer>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>
</div>
</div>
</form>

<!-- Menu del costado queto -->
<header class="w3-container w3-top w3-hide-large w3-rgb(0, 128, 128) w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-rgb(0, 128, 128) w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Efecto de superposición al abrir la barra lateral en pantallas pequeñas -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Contenido de la pagina -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
    <div class="w3-container w3-margin-left" style="margin-top:20px">
        <h1 class="w3-xxxlarge"><b>Tratamiento</b></h1>
        <hr style="width:80px;border:5px solid rgb(0, 128, 128)" class="w3-round"></hr>
        <!-- Caso Referido -->
        <style>
        .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 90%;
        border-radius: 5px;
        }
        .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        .container {
        padding: 2px 16px;
        }
        </style>
        <h2 class="w3-margin-left"><b>Información general del Caso</b></h2>
        <div style="background-color:#E5E7E9;" class="card w3-row-padding w3-margin-left">
        <div class="container">
            <h2><b>Caso Referido</b></h2> 
            <div class="w3-row-padding">
            <div class="w3-col s8">
                <h3>Código de Identificación*: NUMXXXX</h3>
            </div>
            </div>
            <h3>Tipo de Cáncer:</h3> 
            <h3>Descripción del Caso:</h3> 
            <h3>Condición de Radioterapia:</h3> 
            <h3>Región objetivo de Interes:</h3> 
            <h3>Volumen total del objetivo:</h3> 
            <h3>País de Planificación:</h3> 
            <h3>Autor:</h3> 
        </div>
        </div>       
        <div class="w3-row-padding w3-margin-left">
            <h3>Descripción de la propuesta: </h3>
        <h2 style="margin-top:20px"><b>Información técnica del tratamiento</b></h2>
    </div>
        <div class="w3-row-padding w3-margin-left">
            <h3>Técnica de Tratamiento: </h3>
            <h3>Tipo de Optimización: </h3>
            <h3>Número total de beamlets: </h3>
            <h3>Tamaño del beamlets: </h3>
            <h3>Coplanar: </h3>
            <h3>Número de Ángulos: </h3>
        <h2 style="margin-top:20px"><b>Informacón de la región de interés</b></h2>
    </div>
    <!-- Organo 1 e indicadores-->
        <div class="w3-row-padding w3-margin-left">
            <div style="background-color:#E5E7E9;">
            <h3 ><b>Órgano 1</b></h3></div>
            <h3>Órgano del caso: </h3>
             <h3>Nivel de prioridad del Órgano: </h3>
            <h3>1. Nombre del Indicador: </h3>
            <h3>1. Valor del indicador: </h3>
            <?php foreach (range(1, 2) as $num): ?>
                <h3><?php echo $num +1 ; ?>. Nombre del Indicador: </h3>
                <h3><?php echo $num +1 ; ?>. Valor del indicador: </h3>
            <?php endforeach; ?>
        </div>   
        <!-- Ciclo de Organos e indicadores -->
        <div class="w3-row-padding w3-margin-left">
            <?php foreach (range(1, 7) as $num1): ?>
                <div style="background-color:#E5E7E9;">
                <h3 style="margin-top:20px" ><b>Órgano <?php echo $num1 +1 ; ?></b></h3></div>
                <h3>Órgano del caso: </h3>
                <h3>Nivel de prioridad del Órgano: </h3>
                <h3>1. Nombre del Indicador: </h3>
                <h3>1. Valor del indicador: </h3>
                <?php foreach (range(1, 2) as $num2): ?>
                <h3><?php echo $num2 +1 ; ?>. Nombre del Indicador: </h3>
                <h3><?php echo $num2 +1 ; ?>. Valor del indicador: </h3>
                <?php endforeach; ?>
            <?php endforeach; ?> 
    </div>   

<footer class="w3-padding-48"></footer>
</body>
</html>