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
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Navbar de la parte superior -->
<div class="w3-top w3-teal w3-large">
  <div class="w3-bar w3-tile w3-card" id="myNavbar">
    <a href="#inicio" class="w3-bar-item w3-button w3-wide">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
        </svg>
    </a>
    <!-- Navbar de los nombre linkeados en la parte superior -->
    <div class="w3-right w3-hide-small">
      <a href="#comoPublicar" class="w3-bar-item w3-button">¿Cómo publicar?</a>
      <a href="#quienesSomos" class="w3-bar-item w3-button"><i class="fa fa-user"></i>Quienes Somos</a>
      <a href="#contacto" class="w3-bar-item w3-button"><i class="fa fa-th"></i>Contacto</a>
    </div>
    <!-- Oculte los enlaces flotantes a la derecha en pantallas pequeñas y reemplácelos con un ícono de menú -->
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
<!-- Barra lateral en pantallas pequeñas al hacer clic en el icono de menú -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#comoPublicar" onclick="w3_close()" class="w3-bar-item w3-button">¿Cómo publicar?</a>
  <a href="#quienesSomos" onclick="w3_close()" class="w3-bar-item w3-button">Quienes Somos</a>
  <a href="#contacto" onclick="w3_close()" class="w3-bar-item w3-button">Contacto</a>
</nav>

<!-- Contenido de la pagina -->
<!-- Titulo -->
  <div class="w3-container w3-margin-left" id="inicio">
    <h1 class="w3-xxxlarge" style="margin-top:70px"><b>Repositorio de Radioterapia</b></h1>
  </div>
<!-- Botones -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

<div style="margin-top:100px" class="w3-container">
  <p>
    <button a onclick="location.href='http://127.0.0.1:8000/propuestas'" style="margin-left:280px" class="w3-xxlarge w3-bar-item w3-button w3-hover-none w3-light-grey w3-hover-text-teal">Tratamientos</a></button>
    <button a onclick="location.href='http://127.0.0.1:8000/casos'" class="w3-xxlarge w3-bar-item w3-button w3-hover-none w3-light-grey w3-hover-text-teal">Casos</a></button>
    <button a onclick="location.href='http://127.0.0.1:8000/formularioCaso'"class="w3-xxlarge w3-bar-item w3-button w3-hover-none w3-light-grey w3-hover-text-teal">Publicar un Caso</a></a></button>
  </p>
</div>

<!-- Estadisticos -->
<style>
* {
  box-sizing: border-box;
}
/* Float four columns side by side */
.column {
  float: left;
  width: 15%;
  padding: 0 10px;
}
/* Remove extra left and right margins, due to padding */
.row {margin: 10 -5px;}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 15px;
  text-align: center;
  background-color: #0E6655;
  color: white;
}
</style>
<div style="margin-top:40px" class="row">
  <div style="margin-left:150px" class="column">
    <div class="card">
      <h1>X</h1>
      <p style="font-size:20px;">Casos Publicados</p>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <h1>X</h1>
      <p style="font-size:20px;">Tratamientos Publicadas</p>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h1>X</h1>
    <p style="font-size:20px;">Instituciones con Casos</p>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <h1>X</h1>
      <p style="font-size:20px;">Autores con Tratamientos</p>
    </div>
  </div>
  <div class="column">
      <div class="card">
        <h1>X</h1>
        <p style="font-size:20px;">Total de Descargas</p>
      </div>
    </div>
</div>

 <!-- Detalle de los primeros textos -->
<div class="w3-container w3-margin-left" style="margin-top:20px">
    <hr style="width:80px;border:5px  solid white" id="comoPublicar" class="w3-round">
    <h1 class="w3-xxlarge"  style="margin-top:50px"><b>¿Cómo publicar?</b></h1>
    <hr style="width:80px;border:5px  solid teal" class="w3-round">
    <h3 style="margin-top:40px">Para subir información a la plataforma, primero debes identificar qué tipo de información quieres subir:</h3>
    <h3 style="margin-top:20px" class="w3-margin-left"><b>></b> Si se desea subir un <b><a class="w3-text-teal" href="http://127.0.0.1:8000/formularioCaso">nuevo caso</a></b>, de un paciente con el tratamiento médico de radioterapia con los datos que el equipo clínico dispone.</h3>
    <h3 class="w3-margin-left"><b>></b> Si se desea subir una <b><a class="w3-text-teal" href="http://127.0.0.1:8000/formularioPropuesta">nueva propuesta</a></b>, para un caso ya expuesto con anterioridad en la base de datos con la simulación del tratamiento de la radioterapia. </h3>
    <h3 style="margin-top:20px">Para subir un <b>nuevo caso</b> vas a necesitar la siguiente información, entre otros como:</h3>
    <div class="w3-center">
        <ul class="w3-ul w3-large" style="margin-left:300px width:50%">
            <li>El tipo de cáncer del paciente.</li>
            <li>Es estado que se encuentra el cáncer.</li>
            <li>Una descripción breve del caso.</li>
            <li>La condición en la que se encuentra la Radioterapia.</li>
            <li>La técnica del caso utilizada.</li>
            <li>El tipo de optimización utilizada en la simulación.</li>
            <li>Los órganos a irradiar e identificar que órgano contiene el tumor.</li>
            <li>El volumen total del objetivo del órgano.</li>
            <li>El nombre y valor de algún indicador seleccionado.</li>
            <li>El Archivo medico comprimido.</li>
        </ul>
    </div>
    <h3 style="margin-top:20px"> <h3 style="margin-top:20px">Para subir una <b>nueva propuesta</b> de un caso ya expuesto vas a necesitar la siguiente información, entre otros como: </h3></h3>
    <div class="w3-center">
        <ul class="w3-ul w3-large" style="margin-left:300px width:50%">
            <li>El código referenciado del caso ya expuesto.</li>
            <li>Una descripción breve de la propuesta.</li>
            <li>La técnica del tratamiento utilizado.</li>
            <li>El tipo de optimización utilizada en la simulación.</li>
            <li>El nombre y valor del indicador seleccionado.</li>
            <li>El Archivo medico comprimido.</li>
        </ul>
    </div>
</div>
 <!-- Detalle de los segundos textos -->
<div class="w3-container w3-margin-left" style="margin-top:20px">
    <hr style="width:80px;border:5px  solid white" id="quienesSomos" class="w3-round">
    <h1 class="w3-xxlarge" style="margin-top:50px"><b>Quienes Somos</b></h1>
    <hr style="width:80px;border:5px  solid teal" class="w3-round">
    <h3 style="margin-top:40px">Este repositorio web tiene el principal objetivo de implementar algoritmos inteligentes aplicados a la toma de decisiones con múltiples objetivos, variables y restricciones, esto será aplicado a tratamientos para combatir el cáncer, y permitirá a los médicos tomar la mejor opción de tratamiento para cada paciente.</h3>
    <h3 style="margin-top:20px">Este proyecto está liderado por el PhD. Guillermo Cabrera, quien se adjudicó un proyecto FONDECYT, Fondo Nacional de Desarrollo Científico y Tecnológico, es parte del Gobierno de Chile es un fondo del gobierno de Chile y depende de la Agencia nacional de investigacion y desarrollo. En colaboración con alumnos de la Universidad Católica del Norte, se llevó a cabo este repositorio con la finalidad de subir, visualizar y/o descargar informes de casos clínicos tratados.</h3>
    <h3 style="margin-top:20px">La finalidad de la plataforma es incentivar la interacción entre investigadores de la radioterapia y/o médicos dedicados al tratamiento del cáncer, así pudiendo compartir sus conocimientos y experiencia al momento de decidir la mejor manera de combatir la enfermedad.</h3>
</div>
 <!-- Detalle de los terceros textos -->
<div class="w3-container w3-margin-left" style="margin-top:70px">
    <h1 class="w3-xxlarge" id="contacto"><b>Contacto</b></h1>
    <hr style="width:80px;border:5px  solid teal" class="w3-round">
    <h3 style="margin-top:40px">Para fines investigativos, contactarse con el Dr. Guillermo Cabrera, por favor enviar un email Guillermo.cabrera@nombrepagina.com</h3>
    <h3 style="margin-top:20px">Para consultas acerca del funcionamiento de la página, por favor enviar un email a soporte@nombrepagina.com</h3>
</div>
<!-- Pie de Pagina-->
<footer class="w3-padding-64"></footer>
</body>