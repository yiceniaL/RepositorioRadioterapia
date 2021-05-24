<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>

<script>
var suma = 0;
var num = 1;
$(document).ready(function(){
    $("#btn1").click(function(){
    suma = suma + num;
    var code00 ='<div class="w3-row w3-center w3-container w3-quarter w3-col s3">'+
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
    '    <div class="w3-col s3"><input class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador 1"></div></div>'
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

<button id="btn1">+</button>

</body>
</html>

