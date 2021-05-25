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

<!-- Contenido de la pagina -->
<!-- Titulo -->
<div class="w3-container w3-margin-left" style="margin-top:20px">
    <h1 class="w3-xxxlarge"><b>Formulario del Caso</b></h1>
    <hr style="width:80px;border:5px solid rgb(0, 128, 128)" class="w3-round">
    <h2 style="margin-top:10px">Es necesario completar este formulario para ingresar un <i>Caso Nuevo</i> al sistema. </h2>
    <h3>* Es necesario completar este campo</h3>
<!-- Titulo primera parte -->
    <h2 style="margin-top:40px"><b>1. Información general del Caso</b></h2>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Tipo de Cáncer*</h3>
    </div>
    <div class="w3-col s3">
        <select class="w3-select w3-border " name="option">
            <option value="" disabled selected>Selecciona el tipo de cáncer</option>
            <option value="1">lista1</option>
            <option value="2">Option 2</option>
        </select>
    </div>
    <div class="w3-col s3 w3-bar">
        <button class="w3-bar-item w3-text-grey w3-button w3-white w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button>
        <div class="w3-margin-bottom w3-tooltip">
        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-large w3-white w3-hover-white">
            <span style="position:absolute;left:80px;top:10px" class="w3-text w3-tag w3-medium w3-white">
            Agregar un otro Tipo de Cáncer
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up w3-xxxlarge" viewBox="0 0 16 16">
                <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
            </svg>
        </button>     
        <div id="id01" class="w3-modal">
            <div class="w3-modal-content">
                <header class="w3-container"> 
                    <span onclick="document.getElementById('id01').style.display='none'" 
                    class="w3-button w3-display-topright">&times;</span>
                    <h3>Agregar otro Tipo de Cáncer</h3>
                </header>
            <div class="w3-container">
                <div class="w3-col s4 w3-margin-left">
                    <p>Nombre del otro Tipo de Cáncer</p>
                </div>
                <div class="w3-col s4">
                    <input class="w3-input w3-border" type="text" placeholder="Ingresa el nombre">
                </div>
            </div>
            <div class="w3-container ">
                <div class="w3-col s4 w3-margin-left">
                    <p>Descripción breve del Tipo de Cáncer</p>
                </div>
                <div class="w3-col s4">
                <textarea class="w3-input w3-border w3-rest" style="height: 200px  width: 300px" placeholder="Describe el significado"></textarea>
                </div>
            </div>
            <div class="w3-container w3-center w3-margin-top">
                <button class="w3-button w3-green">Ingresar nuevo dato</button>
            </div>
            <footer class="w3-padding-16"></footer>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Nivel del cáncer*</h3>
    </div>
    <div class="w3-col s3">
        <select class="w3-select w3-border" name="option">
            <option value="" disabled selected>Selecciona el nivel del cáncer</option>
            <option value="Ia">Ia</option>
            <option value="Ib">Ib</option>
            <option value="Ib">IIa</option>
            <option value="Ib">IIb</option>
            <option value="Ib">IIIa</option>
            <option value="Ib">IIIb</option>
            <option value="Ib">IV</option>
        </select>
    </div>
    <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Descripción del Caso*</h3>
    </div>
    <div class="w3-col s3 w3-center">
        <textarea class="w3-input w3-border w3-rest" style="height: 200px  width: 300px" placeholder="Describe el Caso"></textarea>
            <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg>
    </button>
    </div>
</div>
<div class="w3-row-padding w3-margin-left w3-margin-top">
    <div class="w3-col s3">
        <h3>Género del Paciente</h3>
    </div>
    <div class="w3-col s3">
        <select class="w3-select w3-border" name="option">
            <option value="" disabled selected>Selecciona el género del paciente</option>
            <option value="Femenino">Femenino</option>
            <option value="Masculino">Masculino</option>
            <option value="Otro">Otro</option>
        </select>
    </div>
    <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Rango de Edad del Paciente</h3>
    </div>
    <div class="w3-col s3">
        <select class="w3-select w3-border" name="option">
            <option value="" disabled selected>Selecciona el rango de edad</option>
            <option value="Primera Infancia (0-5 años)">Primera Infancia (0-5 años)</option>
            <option value="Infancia (6 - 11 años)">Infancia (6 - 11 años)</option>
            <option value="Adolescencia (12 - 18 años)">Adolescencia (12 - 18 años)</option>
            <option value="Juventud (14 - 26 años)">Juventud (14 - 26 años)</option>
            <option value="Adultez (27- 59 años)">Adultez (27- 59 años)</option>
            <option value="Persona Mayor (60 años o mas)">Persona Mayor (60 años o mas)</option>
        </select>
    </div>
    <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Condición de Radioterapia*</h3>
    </div>
    <div class="w3-col s3">
        <select class="w3-select w3-border" name="option">
            <option value="" disabled selected>Selecciona la condición de Radioterapia</option>
            <option value="Radioterapia definitiva">Radioterapia definitiva</option>
            <option value="Radioterapia neoadyuvante">Radioterapia neoadyuvante</option>
            <option value="Radioterapia adyuvante">Radioterapia adyuvante</option>
            <option value="Radioterapia de rescate">Radioterapia de rescate</option>
            <option value="Radioterapia paliativa">Radioterapia paliativa</option>
        </select>
    </div>
    <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<!-- Titulo segunda parte -->
<div class="w3-container w3-margin-left" style="margin-top:20px">
    <h2 style="margin-top:40px"><b>2. Información técnica del tratamiento</b></h2>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Técnica de Tratamiento*</h3>
    </div>
    <div class="w3-col s3">
        <select class="w3-select w3-border " name="option">
            <option value="" disabled selected>Selecciona el tipo de tratamiento</option>
            <option value="1">lista2</option>
            <option value="2">Option 2</option>
        </select>
    </div>
    <div class="w3-col s3 w3-bar">
        <button class="w3-bar-item w3-text-grey w3-button w3-white w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button>
        <div class="w3-margin-bottom w3-tooltip">
        <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-large w3-white w3-hover-white">
            <span style="position:absolute;left:80px;top:10px" class="w3-text w3-tag w3-medium w3-white">
            Agregar un otro tipo de tratamiento
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up w3-xxxlarge" viewBox="0 0 16 16">
                <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
            </svg>
        </button>     
        <div id="id02" class="w3-modal">
            <div class="w3-modal-content">
                <header class="w3-container"> 
                    <span onclick="document.getElementById('id02').style.display='none'" 
                    class="w3-button w3-display-topright">&times;</span>
                    <h3>Agregar otro tipo de tratamiento</h3>
                </header>
            <div class="w3-container">
                <div class="w3-col s4 w3-margin-left">
                    <p>Nombre del otro tipo de tratamiento</p>
                </div>
                <div class="w3-col s4">
                    <input class="w3-input w3-border" type="text" placeholder="Ingresa el nombre">
                </div>
            </div>
            <div class="w3-container ">
                <div class="w3-col s4 w3-margin-left">
                    <p>Descripción breve del tratamiento</p>
                </div>
                <div class="w3-col s4">
                <textarea class="w3-input w3-border w3-rest" style="height: 200px  width: 300px" placeholder="Describe el significado"></textarea>
                </div>
            </div>
            <div class="w3-container w3-center w3-margin-top">
                <button class="w3-button w3-green">Ingresar nuevo dato</button>
            </div>
            <footer class="w3-padding-16"></footer>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Tipo de Optimización*</h3>
    </div>
    <div class="w3-col s3">
        <select class="w3-select w3-border " name="option">
            <option value="" disabled selected>Selecciona el tipo de optimización</option>
            <option value="1">lista3</option>
            <option value="2">Option 2</option>
        </select>
    </div>
    <div class="w3-col s3 w3-bar">
        <button class="w3-bar-item w3-text-grey w3-button w3-white w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button>
        <div class="w3-margin-bottom w3-tooltip">
        <button onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-large w3-white w3-hover-white">
            <span style="position:absolute;left:80px;top:10px" class="w3-text w3-tag w3-medium w3-white">
            Agregar un otro tipo de optimización
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up w3-xxxlarge" viewBox="0 0 16 16">
                <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
            </svg>
        </button>     
        <div id="id03" class="w3-modal">
            <div class="w3-modal-content">
                <header class="w3-container"> 
                    <span onclick="document.getElementById('id03').style.display='none'" 
                    class="w3-button w3-display-topright">&times;</span>
                    <h3>Agregar otro tipo de optimización</h3>
                </header>
            <div class="w3-container">
                <div class="w3-col s4 w3-margin-left">
                    <p>Nombre del otro tipo de optimización</p>
                </div>
                <div class="w3-col s4">
                    <input class="w3-input w3-border" type="text" placeholder="Ingresa el nombre">
                </div>
            </div>
            <div class="w3-container ">
                <div class="w3-col s4 w3-margin-left">
                    <p>Descripción breve de la optimización</p>
                </div>
                <div class="w3-col s4">
                <textarea class="w3-input w3-border w3-rest" style="height: 200px  width: 300px" placeholder="Describe el significado"></textarea>
                </div>
            </div>
            <div class="w3-container w3-center w3-margin-top">
                <button class="w3-button w3-green">Ingresar nuevo dato</button>
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

<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Número total de beamlets</h3>
    </div>
    <div class="w3-col s3">
        <input class="w3-input w3-border" type="text" placeholder="Ingresa el número total de beamlets">
    </div>
    <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Tamaño del beamlets</h3>
    </div>
        <div class="w3-col s1">
            <select class="w3-select w3-border" style="width: 100px" name="option">
                <option value="" disabled selected>n x n</option>
                <option value="1 x 1">1 x 1</option>
                <option value="0.5 x 0.">0.5 x 0.5</option>
            </select> 
        </div>
        <select class="w3-select w3-border" style="width: 150px" name="option">
                <option value="" disabled selected>Unidad</option>
                <option value="mm">mm</option>
                <option value="cm">cm</option>
                <option value="dm">dm</option>
                <option value="in">in</option>
                <option value="ft">ft</option>
        </select>  
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Coplanar</h3>
    </div>
    <div class="w3-col s3">
        <select class="w3-select w3-border " name="option">
            <option value="" disabled selected>Selecciona si es cooplanar</option>
            <option value="1">Si</option>
            <option value="2">No</option>
        </select>
    </div>
    <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Número de Ángulos</h3>
    </div>
    <div class="w3-col s3">
        <input class="w3-input w3-border" type="text" placeholder="Ingresa el número de ángulos">
    </div>
    <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<!-- Titulo tercera parte -->
<div class="w3-container w3-margin-left" style="margin-top:20px">
    <h2 style="margin-top:40px"><b>3. Informacón de la región de interés</b></h2>
</div>
<div class="w3-row w3-center">
  <div class="w3-container w3-quarter"></div>
  <div class="w3-col s3">
        <h3>1</h3>
    </div>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Órgano a irradiar*</h3>
    </div>
    <div class="w3-col s3">
        <select class="w3-select w3-border " name="option">
            <option value="" disabled selected>Selecciona el órgano a irradiar</option>
            <option value="1">lista4</option>
            <option value="2">Option 2</option>
        </select>
    </div>
    <div class="w3-col s3 w3-bar">
        <button class="w3-bar-item w3-text-grey w3-button w3-white w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button>
        <div class="w3-margin-bottom w3-tooltip">
        <button onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-large w3-white w3-hover-white">
            <span style="position:absolute;left:80px;top:10px" class="w3-text w3-tag w3-medium w3-white">
            Agregar un otro tipo de órgano
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up w3-xxxlarge" viewBox="0 0 16 16">
                <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
            </svg>
        </button>     
        <div id="id04" class="w3-modal">
            <div class="w3-modal-content">
                <header class="w3-container"> 
                    <span onclick="document.getElementById('id04').style.display='none'" 
                    class="w3-button w3-display-topright">&times;</span>
                    <h3>Agregar otro tipo de órgano</h3>
                </header>
            <div class="w3-container">
                <div class="w3-col s4 w3-margin-left">
                    <p>Nombre del otro tipo de órgano</p>
                </div>
                <div class="w3-col s4">
                    <input class="w3-input w3-border" type="text" placeholder="Ingresa el nombre">
                </div>
            </div>
            <div class="w3-container ">
                <div class="w3-col s4 w3-margin-left">
                    <p>Descripción breve de la órgano</p>
                </div>
                <div class="w3-col s4">
                <textarea class="w3-input w3-border w3-rest" style="height: 200px  width: 300px" placeholder="Describe el significado"></textarea>
                </div>
            </div>
            <div class="w3-container w3-center w3-margin-top">
                <button class="w3-button w3-green">Ingresar nuevo dato</button>
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
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>El órgano contien el tumor*</h3>
    </div>
    <div class="w3-col s3">
        <select class="w3-select w3-border " name="option">
            <option value="" disabled selected>¿El órgano contiene tumor?</option>
            <option value="1">Si</option>
            <option value="2">No</option>
        </select>
    </div>
    <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Nivel de prioridad del Órgano </h3>
    </div>
    <div class="w3-col s3">
        <input class="w3-input w3-border" type="text" placeholder="Ingresa el nivel de prioridad del Órgano ">
    </div>
    <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Volumen total del objetivo*</h3>
    </div>
        <div class="w3-col s1">
            <input class="w3-input w3-border" type="text" placeholder="Volumen">
        </div>
        <select class="w3-select w3-border" style="width: 150px" name="option">
                <option value="" disabled selected>Unidad</option>
                <option value="mm">mm^3</option>
                <option value="cm">cm^3</option>
                <option value="dm">dm^3</option>
                <option value="in">in^3</option>
                <option value="ft">ft^3</option>
        </select>  
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Número de vóxels objetivo</h3>
    </div>
    <div class="w3-col s3">
        <input class="w3-input w3-border" type="text" placeholder="Ingresa el número de vóxels objetivo">
    </div>
    <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<div class="w3-row w3-center w3-container w3-quarter w3-col s2">
        <h>1</h></div></div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Nombre del Indicador*</h3>
    </div>
    <div class="w3-col s3">
        <select class="w3-select w3-border " name="option">
            <option value="" disabled selected>Selecciona indicador</option>
            <option value="1">lista5</option>
            <option value="2">Option 2</option>
        </select>
    </div>
    <div class="w3-col s3 w3-bar">
        <button class="w3-bar-item w3-text-grey w3-button w3-white w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button>
        <div class="w3-margin-bottom w3-tooltip">
        <button onclick="document.getElementById('id05').style.display='block'" class="w3-button w3-large w3-white w3-hover-white">
            <span style="position:absolute;left:80px;top:10px" class="w3-text w3-tag w3-medium w3-white">
            Agregar un otro tipo de indicador
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up w3-xxxlarge" viewBox="0 0 16 16">
                <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
            </svg>
        </button>     
        <div id="id05" class="w3-modal">
            <div class="w3-modal-content">
                <header class="w3-container"> 
                    <span onclick="document.getElementById('id05').style.display='none'" 
                    class="w3-button w3-display-topright">&times;</span>
                    <h3>Agregar otro tipo de indicador</h3>
                </header>
            <div class="w3-container">
                <div class="w3-col s4 w3-margin-left">
                    <p>Nombre del otro tipo de indicador</p>
                </div>
                <div class="w3-col s4">
                    <input class="w3-input w3-border" type="text" placeholder="Ingresa el nombre">
                </div>
            </div>
            <div class="w3-container ">
                <div class="w3-col s4 w3-margin-left">
                    <p>Descripción breve del indicador</p>
                </div>
                <div class="w3-col s4">
                <textarea class="w3-input w3-border w3-rest" style="height: 200px  width: 300px" placeholder="Describe el significado"></textarea>
                </div>
            </div>
            <div class="w3-container w3-center w3-margin-top">
                <button class="w3-button w3-green">Ingresar nuevo dato</button>
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
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Valor del indicador*</h3>
    </div>
    <div class="w3-col s3">
        <input class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador 1">
    </div>
    <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
var suma = 1;
var num = 1;
$(document).ready(function(){
    $("#btn1").click(function(){
    suma = suma + num;
    var code00 ='<div class="w3-row w3-container w3-quarter w3-col s1">'+
    '    <h4>'
    ;
    var code0 ='</h4></div></div>'
    ;
    var code1 ='<div class="w3-row-padding w3-margin-left">'+
    '    <div class="w3-col s3"><h3>Nombre del Indicador*</h3></div>'+
    '    <div class="w3-col s3"><select class="w3-select w3-border " name="option">'+
    '    <option value="" disabled selected>Selecciona el indicador</option><option value="1">lista5</option><option value="2">Option 2</option></select></div></div>'
    ;
    var code2 = '<div class="w3-row-padding w3-margin-left">'+
    '    <div class="w3-col s3"><h3>Valor del indicador*</h3></div>'+
    '    <div class="w3-col s3"><input class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador"></div></div>'
    ;
        $("#someElement").append($(code00));
        $("#someElement").append($(code0));
        $("#someElement").append(suma);
        $("#someElement").append($(code1));
        $("#someElement").append($(code2));
  });
});
</script>
</head>
<body>
<div id="someElement"></div>
<div class="w3-row w3-center">
  <div class="w3-container w3-quarter"></div>
  <div class="w3-container w3-quarter w3-margin-bottom w3-tooltip">
    <button id="btn1" class="w3-button w3-large w3-circle w3-grey">
        <span style="position:absolute;left:-50px;top:10px" class="w3-text w3-tag w3-large w3-white w3-tiny">
        Agregar otro indicador
        </span>+</button>
  </div>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Archivo Médico comprimido* </h3>
    </div>
    <div class="w3-container w3-quarter">
        <button class="w3-button w3-block w3-grey">Subir archivos</button>
    </div>
    <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<!-- Titulo cuarta parte -->
<div class="w3-container w3-margin-left" style="margin-top:20px">
    <h2 style="margin-top:40px"><b>4. Información de contacto </b></h2>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Pais de Planificación*</h3>
    </div>
    <div class="w3-col s3">
        <select class="w3-select w3-border " name="option">
            <option value="" disabled selected>Selecciona el pais de Planificación</option>
            <option value="Afganistán">Afganistán</option>
            <option value="Albania">Albania</option>
            <option value="Alemania">Alemania</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Antigua y Barbuda">Antigua y Barbuda</option>
            <option value="Arabia Saudita">Arabia Saudita</option>
            <option value="Argelia">Argelia</option>
            <option value="Argentina">Argentina</option>
            <option value="Armenia">Armenia</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Azerbaiyán">Azerbaiyán</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahrein">Bahrein</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Barbados">Barbados</option>
            <option value="Belarús">Belarús</option>
            <option value="Belice">Belice</option>
            <option value="Benin">Benin</option>
            <option value="Bhután">Bhután</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
            <option value="Botswana">Botswana</option>
            <option value="Brasil">Brasil</option>
            <option value="Brunei Darussalam">Brunei Darussalam</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burundi">Burundi</option>
            <option value="Bélgica">Bélgica</option>
            <option value="Cabo Verde">Cabo Verde</option>
            <option value="Camboya">Camboya</option>
            <option value="Camerún">Camerún</option>
            <option value="Canadá">Canadá</option>
            <option value="Chad">Chad</option>
            <option value="Chequia">Chequia</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Chipre">Chipre</option>
            <option value="Colombia">Colombia</option>
            <option value="Comoras">Comoras</option>
            <option value="Congo">Congo</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Croacia">Croacia</option>
            <option value="Cuba">Cuba</option>
            <option value="Côte d'Ivoire">Côte d'Ivoire</option>
            <option value="Dinamarca">Dinamarca</option>
            <option value="Djibouti">Djibouti</option>
            <option value="Dominica">Dominica</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Egipto">Egipto</option>
            <option value="El Salvador">El Salvador</option>
            <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
            <option value="Eritrea">Eritrea</option>
            <option value="Eslovaquia">Eslovaquia</option>
            <option value="Eslovenia">Eslovenia</option>
            <option value="España">España</option>
            <option value="Estados Unidos de América">Estados Unidos de América</option>
            <option value="Estonia">Estonia</option>
            <option value="Eswatini">Eswatini</option>
            <option value="Etiopía">Etiopía</option>
            <option value="Federación de Rusia">Federación de Rusia</option>
            <option value="Fiji">Fiji</option>
            <option value="Filipinas">Filipinas</option>
            <option value="Finlandia">Finlandia</option>
            <option value="Francia">Francia</option>
            <option value="Gabón">Gabón</option>
            <option value="Gambia">Gambia</option>
            <option value="Georgia">Georgia</option>
            <option value="Ghana">Ghana</option>
            <option value="Granada">Granada</option>
            <option value="Grecia">Grecia</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Guinea">Guinea</option>
            <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
            <option value="Guinea-Bissau">Guinea-Bissau</option>
            <option value="Guyana">Guyana</option>
            <option value="Haití">Haití</option>
            <option value="Honduras">Honduras</option>
            <option value="Hungría">Hungría</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iraq">Iraq</option>
            <option value="Irlanda">Irlanda</option>
            <option value="Irán">Irán</option>
            <option value="Islandia">Islandia</option>
            <option value="Islas Cook">Islas Cook</option>
            <option value="Islas Feroe">Islas Feroe</option>
            <option value="Islas Marshall">Islas Marshall</option>
            <option value="Islas Salomón">Islas Salomón</option>
            <option value="Israel">Israel</option>
            <option value="Italia">Italia</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japón">Japón</option>
            <option value="Jordania">Jordania</option>
            <option value="Kazajstán">Kazajstán</option>
            <option value="Kenya">Kenya</option>
            <option value="Kirguistán">Kirguistán</option>
            <option value="Kiribati">Kiribati</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Letonia">Letonia</option>
            <option value="Liberia">Liberia</option>
            <option value="Libia">Libia</option>
            <option value="Lituania">Lituania</option>
            <option value="Luxemburgo">Luxemburgo</option>
            <option value="Líbano">Líbano</option>
            <option value="Macedonia del Norte">Macedonia del Norte</option>
            <option value="Madagascar">Madagascar</option>
            <option value="Malasia">Malasia</option>
            <option value="Malawi">Malawi</option>
            <option value="Maldivas">Maldivas</option>
            <option value="Malta">Malta</option>
            <option value="Malí">Malí</option>
            <option value="Marruecos">Marruecos</option>
            <option value="Mauricio">Mauricio</option>
            <option value="Mauritania">Mauritania</option>
            <option value="Micronesia">Micronesia</option>
            <option value="Mongolia">Mongolia</option>
            <option value="Montenegro">Montenegro</option>
            <option value="Mozambique">Mozambique</option>
            <option value="Myanmar">Myanmar</option>
            <option value="México">México</option>
            <option value="Mónaco">Mónaco</option>
            <option value="Namibia">Namibia</option>
            <option value="Nauru">Nauru</option>
            <option value="Nepal">Nepal</option>
            <option value="Nicaragua">Nicaragua</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Niue">Niue</option>
            <option value="Noruega">Noruega</option>
            <option value="Nueva Zelandia">Nueva Zelandia</option>
            <option value="Níger">Níger</option>
            <option value="Omán">Omán</option>
            <option value="Pakistán">Pakistán</option>
            <option value="Palau">Palau</option>
            <option value="Panamá">Panamá</option>
            <option value="Papua Nueva Guinea">Papua Nueva Guinea</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Países Bajos">Países Bajos</option>
            <option value="Perú">Perú</option>
            <option value="Polonia">Polonia</option>
            <option value="Portugal">Portugal</option>
            <option value="Qatar">Qatar</option>
            <option value="Reino Unido de Gran Bretaña e Irlanda del Norte">Reino Unido de Gran Bretaña e Irlanda del Norte</option>
            <option value="República Centroafricana">República Centroafricana</option>
            <option value="República Democrática Popular Lao">República Democrática Popular Lao</option>
            <option value="República Democrática del Congo">República Democrática del Congo</option>
            <option value="República Dominicana">República Dominicana</option>
            <option value="República Popular Democrática de Corea">República Popular Democrática de Corea</option>
            <option value="República Unida de Tanzanía">República Unida de Tanzanía</option>
            <option value="República de Corea">República de Corea</option>
            <option value="República de Moldova">República de Moldova</option>
            <option value="República Árabe Siria">República Árabe Siria</option>
            <option value="Rumania">Rumania</option>
            <option value="Rwanda">Rwanda</option>
            <option value="Saint Kitts y Nevis">Saint Kitts y Nevis</option>
            <option value="Samoa">Samoa</option>
            <option value="San Marino">San Marino</option>
            <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
            <option value="Santa Lucía">Santa Lucía</option>
            <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
            <option value="Senegal">Senegal</option>
            <option value="Serbia">Serbia</option>
            <option value="Seychelles">Seychelles</option>
            <option value="Sierra Leona">Sierra Leona</option>
            <option value="Singapur">Singapur</option>
            <option value="Somalia">Somalia</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Sudáfrica">Sudáfrica</option>
            <option value="Sudán">Sudán</option>
            <option value="Sudán del Sur">Sudán del Sur</option>
            <option value="Suecia">Suecia</option>
            <option value="Suiza">Suiza</option>
            <option value="Suriname">Suriname</option>
            <option value="Tailandia">Tailandia</option>
            <option value="Tayikistán">Tayikistán</option>
            <option value="Timor-Leste">Timor-Leste</option>
            <option value="Togo">Togo</option>
            <option value="Tokelau">Tokelau</option>
            <option value="Tonga">Tonga</option>
            <option value="Trinidad y Tabago">Trinidad y Tabago</option>
            <option value="Turkmenistán">Turkmenistán</option>
            <option value="Turquía">Turquía</option>
            <option value="Tuvalu">Tuvalu</option>
            <option value="Túnez">Túnez</option>
            <option value="Ucrania">Ucrania</option>
            <option value="Uganda">Uganda</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Uzbekistán">Uzbekistán</option>
            <option value="Vanuatu">Vanuatu</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Viet Nam">Viet Nam</option>
            <option value="Yemen">Yemen</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
        </select>
    </div>
    <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Nombre de la Institución*</h3>
    </div>
    <div class="w3-col s3">
        <select class="w3-select w3-border " name="option">
            <option value="" disabled selected>Selecciona el nombre de la institución</option>
            <option value="1">lista5</option>
            <option value="2">Option 2</option>
        </select>
    </div>
    <div class="w3-col s3 w3-bar">
        <button class="w3-bar-item w3-text-grey w3-button w3-white w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button>
        <div class="w3-margin-bottom w3-tooltip">
        <button onclick="document.getElementById('id06').style.display='block'" class="w3-button w3-large w3-white w3-hover-white">
            <span style="position:absolute;left:80px;top:10px" class="w3-text w3-tag w3-medium w3-white">
            Agregar un otro tipo de institución
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up w3-xxxlarge" viewBox="0 0 16 16">
                <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
            </svg>
        </button>     
        <div id="id06" class="w3-modal">
            <div class="w3-modal-content">
                <header class="w3-container"> 
                    <span onclick="document.getElementById('id06').style.display='none'" 
                    class="w3-button w3-display-topright">&times;</span>
                    <h3>Agregar otro tipo de institución</h3>
                </header>
            <div class="w3-container">
                <div class="w3-col s4 w3-margin-left">
                    <p>Nombre del otro tipo de institución</p>
                </div>
                <div class="w3-col s4">
                    <input class="w3-input w3-border" type="text" placeholder="Ingresa el nombre">
                </div>
            </div>
            <div class="w3-container ">
                <div class="w3-col s4 w3-margin-left">
                    <p>Descripción breve de la institución</p>
                </div>
                <div class="w3-col s4">
                <textarea class="w3-input w3-border w3-rest" style="height: 200px  width: 300px" placeholder="Describe el significado"></textarea>
                </div>
            </div>
            <div class="w3-container w3-center w3-margin-top">
                <button class="w3-button w3-green">Ingresar nuevo dato</button>
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
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Nombre del Autor*</h3>
    </div>
    <div class="w3-col s3">
        <input class="w3-input w3-border" type="text" placeholder="Ingresa el nombre del Autor">
    </div>
    <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Email de Contacto*</h3>
    </div>
    <div class="w3-col s3">
        <input class="w3-input w3-border" type="text" placeholder="Ingresa el email de Contacto">
    </div>
    <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<div class="w3-row">
    <div class="w3-container" style="margin-top:30px"></div>
    <div class="w3-col w3-container w3-margin " style="width:20%"></div>
    <button class="w3-button w3-teal w3-xlarge" style="width:18%">Ingresar Datos </button>
  </div>
</div>







</body>
<!-- Pie de Pagina -->
<footer class="w3-padding-64"></footer>
</html>