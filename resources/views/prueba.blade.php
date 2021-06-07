
<html>
  <head>
    <title>Cómo ejecutar una función desde un enlace o link HTML con Java Script</title>
  </head>

<button onclick="fill_1 (this);">boton 2 </button> 

<script>

function fill_1(x){
    var i;
    var n = 5
    var t1 ='<div class="w3-row w3-center w3-container w3-quarter w3-col s1">'
    ;
    var t2 ='<div class="w3-row-padding w3-margin-left">'+
    '    <div class="w3-col s3"><h3>1 Nombre del Indicador*</h3></div>'+
    '    <div class="w3-col s3"><select class="w3-select w3-border " name="option">'+
    '    <option value="" disabled selected>Selecciona el indicador</option><option value="1">lista5</option><option value="2">Option 2</option></select></div></div>'
    ;
    var t3 = '<div class="w3-row-padding w3-margin-left">'+
    '    <div class="w3-col s3"><h3>1 Valor del indicador*</h3></div>'+
    '    <div class="w3-col s3"><input class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador"></div></div>'
    ;
    for (i = 0; i < n+1; i++)  {
        document.getElementById("demo").innerHTML+=i+t1+t2+t3;
    }
}

</script>
<p id="demo"></p>

</body>

</html>