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
.div2 {
    width: 400px;
    height: 200px;    
    padding: 50px;
}
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
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Descripción del Caso*</h3>
    </div>
    <div class="w3-col s3">
        <input class=" div2 w3-input w3-border" type="text" placeholder="Describe el Caso">
    </div>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3 w3-margin-top">
        <h3>Género del Paciente</h3>
    </div>
    <div class="w3-col s3">
        <select class="w3-select w3-border w3-margin-top" name="option">
            <option value="" disabled selected>Selecciona el género del paciente</option>
            <option value="Femenino">Femenino</option>
            <option value="Masculino">Masculino</option>
            <option value="Otro">Otro</option>
        </select>
    </div>
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
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Número total de beamlets</h3>
    </div>
    <div class="w3-col s3">
        <input class="w3-input w3-border" type="text" placeholder="Ingresa el número total de beamlets">
    </div>
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
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Número de Ángulos</h3>
    </div>
    <div class="w3-col s3">
        <input class="w3-input w3-border" type="text" placeholder="Ingresa el número de ángulos">
    </div>
</div>
<!-- Titulo tercera parte -->
<div class="w3-container w3-margin-left" style="margin-top:20px">
    <h2 style="margin-top:40px"><b>3. Informacón de la región de interés</b></h2>
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
        <input class="w3-input w3-border" type="text" placeholder="Ingresa el nivel de prioridad del Órgano ">
    </div>
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
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Número de vóxels objetivo</h3>
    </div>
    <div class="w3-col s3">
        <input class="w3-input w3-border" type="text" placeholder="Ingresa el número de vóxels objetivo">
    </div>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Nombre del Indicador 1*</h3>
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
        <h3>Valor del indicador 1*</h3>
    </div>
    <div class="w3-col s3">
        <input class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador 1">
    </div>
</div>
<div class="w3-row w3-center">
  <div class="w3-container w3-quarter"></div>
  <div class="w3-container w3-quarter w3-margin-bottom">
    <button class="w3-button w3-large w3-circle w3-grey">+</button>
  </div>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Archivo Médico comprimido* </h3>
    </div>
    <div class="w3-container w3-quarter">
        <button class="w3-button w3-block w3-grey">Subir archivos</button>
    </div>
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
            <option value="Bolivia (Estado Plurinacional de)">Bolivia (Estado Plurinacional de)</option>
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
            <option value="Micronesia (Estados Federados de)">Micronesia (Estados Federados de)</option>
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
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Nombre del Autor*</h3>
    </div>
    <div class="w3-col s3">
        <input class="w3-input w3-border" type="text" placeholder="Ingresa el nombre del Autor">
    </div>
</div>
<div class="w3-row-padding w3-margin-left">
    <div class="w3-col s3">
        <h3>Email de Contacto*</h3>
    </div>
    <div class="w3-col s3">
        <input class="w3-input w3-border" type="text" placeholder="Ingresa el email de Contacto">
    </div>
</div>
<div class="w3-row">
    <div class="w3-container" style="margin-top:30px"></div>
    <div class="w3-col w3-container w3-margin " style="width:20%"></div>
    <button class="w3-button w3-teal w3-xlarge" style="width:18%">Subir archivos</button>
  </div>
</div>


<textarea class="w3-input w3-border" style="resize:none"></textarea>



</body>
<!-- Pie de Pagina -->
<footer class="w3-padding-64"></footer>
</html>