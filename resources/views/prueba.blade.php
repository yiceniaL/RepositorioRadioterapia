<html>
  <head>
    <title>Cómo ejecutar una función desde un enlace o link HTML con Java Script</title>
  </head>
  
<!-- Clonador de indicadores -->
<script>
let numero = 1;
let nn = 0;
let nuevo = function() {
  numero++;
  nn++;
  jQuery('.inputs').append(
    `<section id="${numero}">
    <div class="w3-row w3-center w3-container w3-quarter w3-col s2">
        <h4>${numero} 
        <button class="btn-danger w3-button w3-large w3-hover-grey" onclick="eliminar(${numero})">x</button>
        </h4>
        </div></div>
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3"><h3>${numero}  Nombre del Indicador*</h3></div>
        <div class="w3-col s3"><select class="w3-select w3-border " name="option">
        <option value="" disabled selected>Selecciona el indicador</option><option value="1">lista5</option><option value="2">Option 2</option></select></div></div>
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3"><h3>${numero}  Valor del indicador*</h3></div>
        <div class="w3-col s3"><input maxlength="10" name="indicador" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador"></div></div></section>`
    );   
}
let eliminar = function(n) {
  jQuery("section").remove(`#${n}`);
  jQuery("section2").remove(`#${a}`);
  numero--;
  nn--;
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<div class="inputs"></div>
<div class="w3-row w3-center">
  <div class="w3-container w3-quarter"></div>
  <div class="w3-container w3-quarter w3-margin-bottom w3-tooltip">
    <button onclick="nuevo();" class="w3-button w3-large w3-circle w3-grey">+</button>
  </div>
</div>





<!-- Clonador de Organos -->
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
let numero1 = 1;
let a = 1000;
let nuevo1 = function() {

  numero1++;
  a++;
  jQuery('.inputs1').append(
    `<section1 id="${numero1}">
    <div class="w3-container w3-margin-left" style="background-color:#E5E7E9;">
        <h3>Órgano ${numero1}
        <button class="btn-danger w3-button w3-large w3-hover-black" onclick="eliminar1(${numero1})">
x</button></h3>
    </div>
    <div class="w3-row-padding w3-margin-left" style="margin-top:10px">
        <div class="w3-col s3">
            <h3>Órgano a irradiar*</h3>
        </div>
      </div>
    <section2><div id="${a}"></div></section2>
    </section1>` 
    ); 


    var i;
    $(document).ready(function(){
        for (i = 1; i < nn +1; i++)  {
            
      var code1 =`<div class="w3-row w3-center w3-container w3-quarter w3-col s1"></div>`;
      var code2 =`<div class="w3-row-padding w3-margin-left">`+
      `    <div class="w3-col s3"><h3> ${i+1} Nombre del Indicador*</h3></div>`+
      `    <div class="w3-col s3"><select class="w3-select w3-border " name="option">`+
      `    <option value="" disabled selected>Selecciona el indicador</option><option value="1">lista5</option><option value="2">Option 2</option></select></div></div>`;
      var code3 = `<div class="w3-row-padding w3-margin-left">`+
      `    <div class="w3-col s3"><h3> ${i+1} Valor del indicador*</h3></div>`+
      `    <div class="w3-col s3"><input class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador"></div></div>`;

          $(`#${a}`).append($(code1));
          $(`#${a}`).append($(code2));
          $(`#${a}`).append($(code3));

          }
    });
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
    <button type="button" onclick="nuevo1();" class="w3-button w3-large w3-circle w3-dark-grey w3-hover-black">+</button>
  </div>
</div>
</form>

</html>