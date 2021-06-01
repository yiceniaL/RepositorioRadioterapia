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

<!-- Organo -->
<div class="w3-container w3-margin-left" style="background-color:rgb(240, 240, 240);">
    <h3>Órgano 1</h3>
</div>
<!-- Organo a irradiar -->
<div class="w3-row-padding w3-margin-left" style="margin-top:10px">
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
<!-- Boton para agregar otro tipo -->
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
                    <input maxlength="100" name="namei4" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el nombre">
                </div>
            </div>
            <div class="w3-container ">
                <div class="w3-col s4 w3-margin-left">
                    <p>Descripción breve de la órgano</p>
                </div>
                <div class="w3-col s4">
                <textarea maxlength="500" name="named4" autocomplete="on" class="w3-input w3-border w3-rest" style="height: 200px  width: 300px" placeholder="Describe el significado"></textarea>
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
<!-- Organo contien el tumor -->
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
<!-- Nivel de prioridad del organo -->
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Nivel de prioridad del Órgano </h3>
    </div>
    <div class="w3-col s3">
        <input maxlength="3" name="nameprioridad" class="w3-input w3-border" type="text" placeholder="Ingresa el nivel de prioridad del Órgano ">
    </div>
    <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<!-- Volumen total del objetivo -->
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Volumen total del objetivo*</h3>
    </div>
        <div class="w3-col s1">
            <input maxlength="10" name="namevolumen" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Volumen">
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
<!-- Numero de voxels objetivo -->
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Número de vóxels objetivo</h3>
    </div>
    <div class="w3-col s3">
        <input maxlength="10" name="namevoxel" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el número de vóxels objetivo">
    </div>
    <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<!-- Nombre del Indicador -->
<div class="w3-row w3-center w3-container w3-quarter w3-col s2">
        <h4>1</h4></div></div>
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
<!-- Boton para agregar otro tipo -->
        <div class="w3-margin-bottom w3-tooltip">
        <button onclick="document.getElementById('id05').style.display='block'" class="w3-button w3-large w3-white w3-hover-white">
            <span style="position:absolute;left:80px;top:10px" class="w3-text w3-tag w3-medium w3-white">
            Agregar un otro tipo de indicador
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up w3-xxxlarge" viewBox="0 0 16 16">
                <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
            </svg>
        </button>     
        <div  id="id05" class="w3-modal">
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
                    <input maxlength="100" name="namei5" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el nombre">
                </div>
            </div>
            <div class="w3-container ">
                <div class="w3-col s4 w3-margin-left">
                    <p>Descripción breve del indicador</p>
                </div>
                <div class="w3-col s4">
                <textarea maxlength="500" name="named5" autocomplete="on" class="w3-input w3-border w3-rest" style="height: 200px  width: 300px" placeholder="Describe el significado"></textarea>
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
<!-- Valor del indicador -->
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Valor del indicador*</h3>
    </div>
    <div class="w3-col s3">
        <input maxlength="10" name="nameindicador" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador">
    </div>
    <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
    </button>
</div>
<!-- Clonador de indicadores -->
<script>
let numero = 1;
let nuevo = function() {
  numero++;
  jQuery('.inputs').append(
    `<section id="${numero}">
    <div class="w3-row w3-center w3-container w3-quarter w3-col s2">
        <h4>${numero} 
        <button class="btn-danger w3-button w3-large w3-hover-grey" onclick="eliminar(${numero})">x</button>
        </h4>
        </div></div>
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3"><h3>Nombre del Indicador*</h3></div>
        <div class="w3-col s3"><select class="w3-select w3-border " name="option">
        <option value="" disabled selected>Selecciona el indicador</option><option value="1">lista5</option><option value="2">Option 2</option></select></div></div>
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3"><h3>Valor del indicador*</h3></div>
        <div class="w3-col s3"><input maxlength="10" name="indicador" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador"></div></div></section>`
    );   
}
let eliminar = function(n) {
  jQuery("section").remove(`#${n}`);
  numero--;
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<div class="inputs"></div>
<div id="someElement"></div>
<div class="w3-row w3-center">
  <div class="w3-container w3-quarter"></div>
  <div class="w3-container w3-quarter w3-margin-bottom w3-tooltip">
    <button onclick="nuevo();" class="w3-button w3-large w3-circle w3-grey">
        <span style="position:absolute;left:-50px;top:10px" class="w3-text w3-tag w3-large w3-white w3-tiny">
        Agregar otro indicador
        </span>+</button>
  </div>
</div>
<!-- Clonador de Organos -->
<script>
let numero1 = 1;
let nuevo1 = function() {
  numero1++;
  jQuery('.inputs1').append(
    `<section1 id="${numero1}">
    <div class="w3-container w3-margin-left" style="background-color:rgb(240, 240, 240);">
        <h3>Órgano ${numero1}
        <button class="btn-danger w3-button w3-large w3-hover-black" onclick="eliminar1(${numero1})">x</button></h3>
    </div>
    <div class="w3-row-padding w3-margin-left" style="margin-top:10px">
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
    </div>
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Nivel de prioridad del Órgano </h3>
        </div>
        <div class="w3-col s3">
            <input name="nameprioridad" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el nivel de prioridad del Órgano ">
        </div>
    </div>
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Volumen total del objetivo*</h3>
        </div>
            <div class="w3-col s1">
                <input name="namevolumen" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Volumen">
            </div>
            <select class="w3-select w3-border" style="width: 150px" name="option">
                    <option value="" disabled selected>Unidad</option>
                    <option value="mm">mm^3</option>
                    <option value="cm">cm^3</option>
                    <option value="dm">dm^3</option>
                    <option value="in">in^3</option>
                    <option value="ft">ft^3</option>
            </select>  
    </div>
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Número de vóxels objetivo</h3>
        </div>
        <div class="w3-col s3">
            <input name="namevoxels" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el número de vóxels objetivo">
        </div>
    </div>
    <div class="w3-row w3-center w3-container w3-quarter w3-col s2">
            <h4>1</h4></div></div>
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
    </div>
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Valor del indicador*</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="nameindicador" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador">
        </div>
    </div>
    </section1>` 
    );   

    var text = "";
    var i;
    for (i = 0; i < 3; i++) {
      let nuevo = function() {
 
        jQuery('.inputs').append(
          `<section id="${numero}">
          <div class="w3-row w3-center w3-container w3-quarter w3-col s2">
              <h4>${numero} 
              <button class="btn-danger w3-button w3-large w3-hover-grey" onclick="eliminar(${numero})">x</button>
              </h4>
              </div></div>
          <div class="w3-row-padding w3-margin-left">
              <div class="w3-col s3"><h3>Nombre del Indicador*</h3></div>
              <div class="w3-col s3"><select class="w3-select w3-border " name="option">
              <option value="" disabled selected>Selecciona el indicador</option><option value="1">lista5</option><option value="2">Option 2</option></select></div></div>
          <div class="w3-row-padding w3-margin-left">
              <div class="w3-col s3"><h3>Valor del indicador*</h3></div>
              <div class="w3-col s3"><input maxlength="10" name="indicador" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador"></div></div></section>`
          );   
}

    }


    );
}
let eliminar1 = function(n1) {
  jQuery("section1").remove(`#${n1}`);
  numero1--;
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<form method="post" action="gestionArticulos.php">
    <div class="inputs1"></div>
<div class="w3-row w3-center">
  <div class="w3-container w3-quarter"></div>
  <div class="w3-container w3-quarter w3-margin-bottom w3-tooltip">
    <button type="button" onclick="nuevo1();" class="w3-button w3-large w3-circle w3-dark-grey w3-hover-black">
        <span style="position:absolute;left:-50px;top:10px" class="w3-text w3-tag w3-large w3-white w3-tiny">
        Agregar otro órgano
        </span>+</button>
  </div>
</div>


<!-- Pie de Pagina -->
<footer class="w3-padding-64"></footer>
</html>


