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
    <button class="w3-center w3-teal w3-hover-white w3-margin-top w3-border w3-button w3-medium w3-mobile " >Contactar al Autor</button>
    <button class="w3-center w3-teal w3-hover-white w3-margin-top w3-border w3-button w3-medium w3-mobile" >
        <p> Subir una Nueva propuesta a este Caso</p> </button>
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
<!-- Titulo -->
  <div class="w3-container" style="margin-top:20px" id="showcase">
    <h1 class="w3-xxxlarge"><b>Casos</b></h1>
    <hr style="width:80px;border:5px solid rgb(0, 128, 128)" class="w3-round">
  </div>
<!-- Texto ordenado de los casos --> 
    <div class="w3-col">
      <div class=" w3-col s3 w3-center">
        <h3>Titulo del Caso 1</h3>
        <p class="w3-opacity">Autor 1</p>
        <button class=" w3-center w3-bar-item w3-button w3-teal w3-large w3-mobile " >Ver más</button>
        <button class="w3-button w3-xlarge" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
        </svg>
        </button>
      </div>
      <div class=" w3-col s9">
        <p>Descricpion del caso 1. Some text about our services - what we do and what we offer. We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua boris nisi ut aliquip ex ea commodo consequat. Duis aute irure gergtrgergegre erge e</p>
      </div>
    </div>
    <div class="w3-col" >
      <div class="w3-margin-top w3-col s3 w3-center">
        <h3>Titulo del Caso 2</h3>
        <p class="w3-opacity">Autor 2</p>
        <button class=" w3-center w3-bar-item w3-button w3-teal w3-large w3-mobile " >Ver más</button>
        <button class="w3-button w3-xlarge" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
        </svg>
        </button>
      </div>
      <div class="w3-margin-top w3-col s9">
      <p>Descricpion del caso 1. Some text about our services - what we do and what we offer. We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua boris nisi ut aliquip ex ea commodo consequat. Duis aute irure gergtrgergegre erge e</p>
      </div>
    </div>
    <div class="w3-col" >
      <div class="w3-margin-top w3-col s3 w3-center">
        <h3>Titulo del Caso 3</h3>
        <p class="w3-opacity">Autor 3</p>
        <button class=" w3-center w3-bar-item w3-button w3-teal w3-large w3-mobile " >Ver más</button>
        <button class="w3-button w3-xlarge" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
        </svg>
        </button>
      </div>
      <div class="w3-margin-top w3-col s9">
      <p>Descricpion del caso 1. Some text about our services - what we do and what we offer. We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua boris nisi ut aliquip ex ea commodo consequat. Duis aute irure gergtrgergegre erge e</p>
      </div>
    </div>
    <div class="w3-col" >
      <div class="w3-margin-top w3-col s3 w3-center">
        <h3>Titulo del Caso 4</h3>
        <p class="w3-opacity">Autor 4</p>
        <button class=" w3-center w3-bar-item w3-button w3-teal w3-large w3-mobile " >Ver más</button>
        <button class="w3-button w3-xlarge" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
        </svg>
        </button>
      </div>
      <div class="w3-margin-top w3-col s9">
      <p>Descricpion del caso 1. Some text about our services - what we do and what we offer. We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua boris nisi ut aliquip ex ea commodo consequat. Duis aute irure gergtrgergegre erge e</p>
      </div>
    </div>
    <div class="w3-col" >
      <div class="w3-margin-top w3-col s3 w3-center">
        <h3>Titulo del Caso 5</h3>
        <p class="w3-opacity">Autor 5</p>
        <button class=" w3-center w3-bar-item w3-button w3-teal w3-large w3-mobile " >Ver más</button>
        <button class="w3-button w3-xlarge" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
        </svg>
        </button>
      </div>
      <div class="w3-margin-top w3-col s9">
      <p>Descricpion del caso 1. Some text about our services - what we do and what we offer. We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua boris nisi ut aliquip ex ea commodo consequat. Duis aute irure gergtrgergegre erge e</p>
      </div>
    </div>




<!-- Funcciones con alguna accion -->
<script>
// Accordion 1,2,3,4
function myAccFunc1() {
  var x = document.getElementById("demoAcc1");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
function myAccFunc2() {
  var x = document.getElementById("demoAcc2");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
function myAccFunc3() {
  var x = document.getElementById("demoAcc3");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
function myAccFunc4() {
  var x = document.getElementById("demoAcc4");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
document.getElementById("myBtn").click();
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>
</body>
</html>