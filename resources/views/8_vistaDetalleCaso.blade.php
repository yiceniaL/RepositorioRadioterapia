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
        <button style = "margin-top:60px" class="w3-center w3-teal w3-hover-white  w3-border w3-button w3-medium w3-mobile " >Contactar al Autor</button>
        <button class="w3-center w3-teal w3-margin-top w3-hover-white w3-border w3-button w3-medium w3-mobile " >Descargar el Archivo Médico</button>
        <button onclick="location.href='http://127.0.0.1:8000/formularioPropuesta'" class="w3-center w3-teal w3-margin-top w3-hover-white w3-border w3-button w3-medium w3-mobile " >Nueva propuesta a este Caso</button>
    </div>
</nav>
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
        <h1 class="w3-xxxlarge"><b>Caso</b></h1>
        <hr style="width:80px;border:5px solid rgb(0, 128, 128)" class="w3-round"></hr>
    <!-- 1. Titulo primera parte -->
        <h2 class="w3-margin-left" style="margin-top:40px"><b>Código de Identificación: NUMEROXX</b></h2>
        <h2 class="w3-margin-left"><b>Información general del Caso</b></h2>
        <div class="w3-row-padding w3-margin-left">
            <h3>Tipo de Cáncer: </h3>
            <h3>Nivel del cáncer: </h3>
            <h3>Descripción del Caso: </h3>
            <h3>Género del Paciente: </h3>
            <h3>Rango de Edad del Paciente: </h3>
            <h3>Condición de Radioterapia: </h3>
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
        <div class="w3-row-padding w3-margin-left">
            <div style="background-color:#E5E7E9;">
            <h3 ><b>Órgano 1</b></h3></div>
            <h3>Órgano a irradiar: </h3>
            <h3>El órgano contien el tumor: </h3>
            <h3>Nivel de prioridad del Órgano: </h3>
            <h3>Volumen total del objetivo: </h3>
            <h3>Número de vóxels objetivo: </h3>
            <h3>1. Nombre del Indicador: </h3>
            <h3>1. Valor del indicador: </h3>
            <?php foreach (range(1, 2) as $num): ?>
                <h3><?php echo $num +1 ; ?>. Nombre del Indicador: </h3>
                <h3><?php echo $num +1 ; ?>. Valor del indicador: </h3>
            <?php endforeach; ?>
        </div>   
        <div class="w3-row-padding w3-margin-left">
            <?php foreach (range(1, 7) as $num1): ?>
                <div style="background-color:#E5E7E9;">
                <h3 style="margin-top:20px" ><b>Órgano <?php echo $num1 +1 ; ?></b></h3></div>
                <h3>Órgano a irradiar: </h3>
                <h3>El órgano contien el tumor: </h3>
                <h3>Nivel de prioridad del Órgano: </h3>
                <h3>Volumen total del objetivo: </h3>
                <h3>Número de vóxels objetivo: </h3>
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