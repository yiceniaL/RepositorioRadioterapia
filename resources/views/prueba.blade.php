
<!DOCTYPE html>
<!-- Detalles de la pagina-->
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<!-- Detalles del estilo de la pagina-->
<style>
.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 280px;
  background-color: white;
  color: black;
  text-align: center;
  padding: 5px 10;
  position: absolute;
  z-index: 1;
  top: -5px;
  left: 110%;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 50%;
  right: 100%;
  border-style: solid;
  border-color: transparent white transparent transparent;
}
.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>



<!-- Tipo de cancer -->
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
    <div autocomplete="on" class="w3-col s4 ">
    <div class="w3-bar">
        <button class="w3-bar-item w3-text-grey w3-button w3-white w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button>
    <!-- Boton para agregar otro tipo -->
            <div style="margin-top:8px">
            <div class="tooltip" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-large w3-white w3-hover-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up w3-xxxlarge" viewBox="0 0 16 16">
                    <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                </svg>
            <span class="tooltiptext">Agregar otro Tipo de optimizacion</span>
            </div>
            </div>
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
                        <input maxlength="100" name="namei" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el nombre">
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



</body>
</html>