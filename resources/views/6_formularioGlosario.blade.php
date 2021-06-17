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
<!-- Detalle de los segundos textos -->
<div class="w3-container w3-margin-left" style="margin-top:20px">
    <hr style="width:80px;border:5px  solid white" id="quienesSomos" class="w3-round">
    <h1 class="w3-xxlarge" style="margin-top:15px"><b>Glosario de los formularios</b></h1>
    <hr style="width:80px;border:5px  solid teal" class="w3-round">
<!-- Indice -->
    <a href="#indice1" class="w3-center"><h2 style="margin-top:40px">Ingresar el código de caso</h2></a>
    <a href="#indice2" class="w3-center"><h2>Tipo de Cáncer</h2></a>
    <a href="#indice3" class="w3-center"><h2>Nivel del cáncer</h2></a>
    <a href="#indice4" class="w3-center"><h2>Descripción del Caso</h2></a>
    <a href="#indice4_1" class="w3-center"><h2>Descripción del Caso</h2></a>
    <a href="#indice5" class="w3-center"><h2>Sexo del Paciente</h2></a>
    <a href="#indice6" class="w3-center"><h2>Rango de Edad del Paciente</h2></a>
    <a href="#indice7" class="w3-center"><h2>Condición de Radioterapia</h2></a>
    <a href="#indice8" class="w3-center"><h2>Técnica de Tratamiento</h2></a>
    <a href="#indice9" class="w3-center"><h2>Tipo de Optimización</h2></a>
    <a href="#indice10" class="w3-center"><h2>Número total de beamlets</h2></a>
    <a href="#indice11" class="w3-center"><h2>Tamaño del beamlets</h2></a>
    <a href="#indice12" class="w3-center"><h2>Coplanar</h2></a>
    <a href="#indice13" class="w3-center"><h2>Número de Ángulos</h2></a>
    <a href="#indice14" class="w3-center"><h2>Órgano a irradiar</h2></a>
    <a href="#indice15" class="w3-center"><h2>El órgano contiene el tumor</h2></a>
    <a href="#indice16" class="w3-center"><h2>Nivel de prioridad del Órgano</h2></a>
    <a href="#indice17" class="w3-center"><h2>Volumen total del objetivo</h2></a>
    <a href="#indice18" class="w3-center"><h2>Número de vóxeles objetivo</h2></a>
    <a href="#indice19" class="w3-center"><h2>Indicadores</h2></a>
    <a href="#indice20" class="w3-center"><h2>Archivo Médico comprimido</h2></a>
    <a href="#indice21" class="w3-center"><h2>País de Planificación</h2></a>
    <a href="#indice22" class="w3-center"><h2>Nombre de la Institución</h2></a>
    <a href="#indice23" class="w3-center"><h2>Nombre del Autor</h2></a>
    <a href="#indice24" class="w3-center"><h2>Email de Contacto</h2></a>
    <a href="#indice25" class="w3-center"><h2>Bibliografía</h2></a>
<!-- Código de caso -->
    <h2 style="margin-top:40px"><b id="indice1" style="color:teal;">Ingresar el código de caso:</b> Es un texto que representa el código del caso al cual se quiere generar una propuesta.</h2>
<!-- Tipo de Cáncer -->
    <h2 style="margin-top:40px"><b id="indice2" style="color:teal;">Tipo de Cáncer:</b> Es una lista de opciones del tipo de cáncer, que tiene el paciente.</h2>
    <h3><ul class="w3-container" style="margin-left:50px">
        <li>Próstata</li>
        <li>Cabeza y cuello</li>
        <li>Hígado</li>
        <li>Pulmón</li>
        <li>Mama</li>
    </ul></h3>
    <h3 style="color:teal;"><b>¿Si no está el término de tipo de cáncer que necesito en la lista?</b> Si no aparece el término de tipo de cáncer que necesitas seleccionar en la lista, debes ingresarlo en el botón a el costado izquierdo, llamado ‘Agregar otro tipo de cáncer’. Al seleccionarlo aparecerá una pestaña emergente donde se debe ingresar el término a seleccionar, y al completarlo ya va aparecer en la lista para su elección.</h3>
<!-- Nivel del cáncer -->
    <h2 style="margin-top:40px"><b id="indice3" style="color:teal;"> Nivel del cáncer:</b> Es una lista del estado de manera particular para cada tipo de cáncer, en el que está el paciente. Este valor describe, cuanto cáncer hay en el cuerpo de una persona y cuánto se ha propagado.</h2>
    <h3><ul class="w3-container" style="margin-left:50px">
        <li><b>Ia:</b> Es cáncer en estadio temprano, ya que existe una cantidad muy pequeña de cáncer que sólo se puede observar con un microscopio. No se ha propagado a ganglios linfáticos adyacentes. No se ha propagado a lugares distantes.</li>
        <li><b>Ib:</b> Esto incluye el cáncer ha alcanzado más de X mm de profundidad, pero todavía se limita a un órgano. No se ha propagado a ganglios linfáticos adyacentes. No se ha propagado a lugares distantes.</li>
        <li><b>IIa:</b> El cáncer ha crecido fuera de órganos, pero no se ha propagado a otros sectores u órganos. No se ha propagado a ganglios linfáticos adyacentes. No se ha propagado a lugares distantes.</li>
        <li><b>IIb:</b> El cáncer ha crecido fuera de órganos, y se ha propagado a otros sectores. No se ha propagado a ganglios linfáticos adyacentes. No se ha propagado a lugares distantes.</li>
        <li><b>IIIa:</b> El cáncer se ha propagado a otros sectores u órganos. El cáncer no está bloqueando conductos. Podría o no haberse propagado a los ganglios linfáticos adyacentes. No se ha propagado a lugares distantes.</li>
        <li><b>IIIb:</b> El cáncer se ha propagado a otros sectores u órganos. El cáncer si está bloqueando conductos. Podría o no haberse propagado a los ganglios linfáticos adyacentes. No se ha propagado a lugares distantes.</li>
        <li><b>IV:</b> El cáncer se ha diseminado a otros órganos o partes del cuerpo. También se lo puede denominar cáncer avanzado o metastásico.</li>
    </ul></h3>
<!-- Descripción del Caso -->
    <h2 style="margin-top:40px"><b id="indice4" style="color:teal;"> Descripción del Caso:</b> Es una breve descripción de las características relevantes para el caso, como enfermedades preexistentes y tratamientos previos, entre otros.</h2>
<!-- Descripción del Caso -->
<h2 style="margin-top:40px"><b id="indice4_1" style="color:teal;"> Descripción de la Propuesta:</b> Es una breve descripción de las características relevantes para la propuesta del caso, como la elección de parámetros.</h2>
<!-- Sexo del Paciente -->
    <h2 style="margin-top:40px"><b id="indice5" style="color:teal;"> Sexo del Paciente:</b> Es una lista con el sexo del paciente, haciendo referencia a las características biológicas y fisiológicas. Es un sector del formulario que se puede evitar ingresar, siempre que no sea relevante esta información para el caso.</h2>
    <h3><ul class="w3-container" style="margin-left:50px">
        <li><b>Femenino:</b> Se refiere a los pacientes con cromosomas XX tiene, por lo general, órganos reproductivos y sexo femeninos, y es biológicamente mujer.</li>
        <li><b>Masculino:</b> Se refiere a los pacientes con cromosomas XY tiene, por lo general, órganos reproductivos y sexo masculinos, y es biológicamente hombre.</li>
        <li><b>Otro:</b> Son pacientes que poseen otras combinaciones de cromosomas, hormonas y partes del cuerpo, clasificándose como intersexual. O que no quieran clasificar el sexo al el cual pertenecen. </li>
     </ul></h3>
<!-- Rango de Edad del Paciente -->
    <h2 style="margin-top:40px"><b id="indice6" style="color:teal;" > Rango de Edad del Paciente:</b> Es una lista con el rango de edad del paciente.</h2>
    <h3><ul class="w3-container" style="margin-left:50px">
        <li> Primera Infancia (0-5 años)</li>
        <li> Infancia (6 - 11 años)</li>
        <li> Adolescencia (12 – 18 años)</li>
        <li> Juventud (14 - 26 años)</li>
        <li> Adultez (27- 59 años)</li>
        <li> Persona Mayor (60 años o más)</li>
    </ul></h3>
<!-- Condición de Radioterapia -->
    <h2 style="margin-top:40px"><b id="indice7" style="color:teal;"> Condición de Radioterapia:</b> Es una lista donde se selecciona la condición de tratamiento de radioterapia.</h2>
    <h3><ul class="w3-container" style="margin-left:50px">
        <li><b>Radioterapia definitiva:</b> La modalidad de tratamiento definitivo del cáncer como la de cabeza y el cuello, cánceres anales, de próstata, de vejiga, de esófago y de cuello de útero.</li>
        <li><b>Radioterapia neoadyuvante:</b> Radioterapia administrada antes de la cirugía en casos seleccionados de que reduce el riesgo de recidiva local y simultáneamente con la quimioterapia, se han demostrado tasas de respuesta patológica completa (es decir, sin tumor residual) del 15 al 27% en las muestras histopatológicas.</li>
        <li><b>Radioterapia adyuvante:</b> La radioterapia puede administrarse después de la cirugía definitiva, como con la conservación de la mama, como alternativa a la mastectomía, reduciendo a la mitad la tasa de recurrencia de la enfermedad a los 10 años y reduce la tasa de mortalidad por cáncer.</li>
        <li><b>Radioterapia de rescate:</b> En caso de recaída local o locorregional tras la cirugía radical, se someten a un control del antígeno prostático específico (PSA) para detectar una recaída temprana, con niveles de PSA crecientes se tratarse con radioterapia radical, maximizando así las posibilidades de control a largo plazo o de curación.</li>
        <li><b>Radioterapia paliativa:</b> Es eficaz para el control de los síntomas, como aliviar el dolor de las metástasis óseas en al menos el 60% de los casos.</li>
    </ul></h3>
<!-- Técnica de Tratamiento -->
    <h2 style="margin-top:40px"><b id="indice8" style="color:teal;"> Técnica de Tratamiento:</b> Es una lista con las técnicas de tratamiento.</h2>
    <h3><ul class="w3-container" style="margin-left:50px">
        <li><b>Radiocirugía estereotáctica (SRS) y Radioterapia estereotáctica (SRT):</b> Se administran radioterapia de alta precisión a lesiones craneales definidas estéreo-tácticamente (benignas o malignas). Esto permite administrar dosis de radiación muy elevadas.</li>
        <li><b>Radioterapia corporal estereotáctica (SBRT) o Radioterapia corporal ablativa estereotáctica (SABR):</b> Permite administrar la radioterapia en zonas extra-craneales utilizando imágenes repetidas antes y durante el tratamiento. La precisión de la administración va de 3e10 fracciones, con una técnica se utiliza como tratamiento estándar para casos seleccionados. La dosis requerida se acumula hasta un pico de Bragg y luego desciende.</li>
        <li><b>Radioterapia conformada tridimensional (3D-CRT):</b> Se suministran haces de radiación desde diferentes direcciones que han sido diseñados para igualar la forma del tumor. Esto ayuda a limitar el daño ocasionado por la radiación en los tejidos sanos y eliminar mejor el cáncer al enfocar la dosis de radiación hacia la forma y el tamaño exactos del tumor.</li>
        <li><b>Radioterapia con modulación de intensidad (IMRT):</b> Con perfiles de intensidad y un haz que gira 360◦ alrededor del paciente con una dosis más compleja. Con campos de ángulos fijos, o sea la rotación no es continua.</li>
        <li><b>Intensidad modulada volumétrica en arcoterapia (VMAT):</b> Con perfiles de intensidad y un haz que gira 360◦ alrededor del paciente con una dosis más compleja. La rotación es continua. Se administra por los modernos LINAC mejorando la cobertura del volumen objetivo y la preservación de los tejidos normales, permitiendo la administración simultánea de diferentes dosis a diferentes volúmenes objetivo. Como cánceres de cabeza y cuello y en la irradiación de los ganglios pélvicos de los cánceres de próstata y ano.</li>
    </ul></h3>
    <h3 style="color:teal;"><b>¿Si no está el término Técnica de Tratamiento que necesito en la lista?</b> Si no aparece el tipo de técnica de tratamiento que necesitas seleccionar en la lista, debes ingresarlo en el botón a el costado izquierdo, llamado ‘Agregar otro tipo de técnica de tratamiento’. Al seleccionarlo aparecerá una pestaña emergente donde se debe ingresar el término a seleccionar junto a una descripción, y al completarlo ya va aparecer en la lista para su elección.</h3>
<!-- Tipo de Optimización -->    
    <h2 style="margin-top:40px"><b id="indice9" style="color:teal;"> Tipo de Optimización:</b> Se despliega por medio de una lista el tipo de optimización.</h2>
    <h3><ul class="w3-container" style="margin-left:50px">
        <li><b>Multicriterio o Multiobjetivo:</b> Es una optimización que busca minimizar o maximizar varias funciones objetivo a la vez.</li>
        <li><b>Montecarlo:</b> Esto incluye el cáncer ha alcanzado más de X mm de profundidad, pero todavía se limita a un órgano. No se ha propagado a ganglios linfáticos adyacentes. No se ha propagado a lugares distantes.</li>
        <li><b>Algoritmo DAO rápido:</b> La optimización de apertura directa es un método para controlar la complejidad que proporciona una reducción significativa en el número de segmentos de haz y requerimientos.</li>
        <li><b>Heurísticas:</b> Es un tipo de optimización donde se busca resolver un tipo de problema, usando los parámetros dados con procedimientos genéricos y abstractos para encontrar la solución.</li>
    </ul></h3>
    <h3 style="color:teal;"><b>¿Si no está el término Tipo de Optimización que necesito en la lista?</b> Si no aparece el tipo de tipo de optimización que necesitas seleccionar en la lista, debes ingresarlo en el botón a el costado izquierdo, llamado ‘Agregar otro tipo de tipo de optimización’. Al seleccionarlo aparecerá una pestaña emergente donde se debe ingresar el término a seleccionar junto a una descripción, y al completarlo ya va aparecer en la lista para su elección.</h3>
<!-- Número total de beamlets -->      
    <h2 style="margin-top:40px"><b id="indice10" style="color:teal;"> Número total de beamlets:</b> Se ingresa un número entero, que corresponde al número total de Beamlets utilizados en el Caso. El Blemet, es un pequeño elemento de intensidad de fotones que subdivide un haz, para optimizar la distribución de la intensidad o calcular la dosis.</h2>
<!-- Tamaño del beamlets -->     
    <h2 style="margin-top:40px"><b id="indice11" style="color:teal;"> Tamaño del beamlets:</b> Es el número del tamaño de la grilla del beamlet.</h2>
<!-- Coplanar -->       
    <h2 style="margin-top:40px"><b id="indice12" style="color:teal;"> Coplanar:</b> Se indica 'Si', si el modelo a utilizar es coplanario (la radiación se administra por un solo plano), o 'No' si el modelo a utilizar no es coplanario (la radiación se administra por múltiples planos).</h2>
<!-- Número de Ángulos -->       
    <h2 style="margin-top:40px"><b id="indice13" style="color:teal;"> Número de Ángulos:</b> Se ingresa un número, que representa el número de ángulos utilizados en el procedimiento.</h2>
<!-- Órgano a irradiar -->       
    <h2 style="margin-top:40px"><b id="indice14" style="color:teal;"> Órgano a irradiar:</b> Es una lista con el nombre del órgano o elemento a irradiar. </h2>
    <h3><ul class="w3-container" style="margin-left:50px">
        <li> Antebrazo derecho</li>
        <li> Antebrazo izquierdo</li>
        <li> Bazo</li>
        <li> Boca</li>
        <li> Brazo derecho</li>
        <li> Brazo izquierdo</li>
        <li> Bronquio derecho</li>
        <li> Bronquio izquierdo</li>
        <li> Caja Torácica</li>
        <li> Cerebro</li>
        <li> Cintura escapular </li>
        <li> Cintura pelviana</li>
        <li> Clítoris</li>
        <li> Codo derecho</li>
        <li> Codo izquierdo</li>
        <li> Columna Vertebral</li>
        <li> Corazón</li>
        <li> Costillas derechas</li>
        <li> Costillas izquierdas</li>
        <li> Cráneo</li>
        <li> Diafragma</li>
        <li> Dientes</li>
        <li> Duodeno</li>
        <li> Encéfalo</li>
        <li> Esófago</li>
        <li> Esternón</li>
        <li> Estómago</li>
        <li> Faringe </li>
        <li> Fosa Nasal derecha</li>
        <li> Fosa Nasal izquierda</li>
        <li> Glándula mamaria derecha</li>
        <li> Glándula mamaria izquierda</li>
        <li> Glándula parótida</li>
        <li> Glándula sublingual</li>
        <li> Glándula submandibular</li>
        <li> Glándula Suprarrenal derecha</li>
        <li> Glándula Suprarrenal izquierda</li>
        <li> Hígado</li>
        <li> Hombro derecho</li>
        <li> Hombro izquierdo</li>
        <li> Huesos</li>
        <li> Intestino delgado</li>
        <li> Intestino grueso </li>
        <li> Laringe</li>
        <li> Lengua</li>
        <li> Mano derecha</li>
        <li> Mano izquierda</li>
        <li> Mediastino</li>
        <li> Médula espinal</li>
        <li> Mesenterio</li>
        <li> Muñeca derecha</li>
        <li> Muñeca izquierda</li>
        <li> Músculos</li>
        <li> Muslo derecho</li>
        <li> Muslo izquierdo</li>
        <li> Oído derecho</li>
        <li> Oído izquierdo</li>
        <li> Ojo derecho</li>
        <li> Ojo izquierdo</li>
        <li> Ovario derecho</li>
        <li> Ovario izquierdo</li>
        <li> Páncreas</li>
        <li> Paratiroides</li>
        <li> Pene</li>
        <li> Perineo</li>
        <li> Peritoneo</li>
        <li> Pie derecho</li>
        <li> Pie izquierdo</li>
        <li> Pierna derecha</li>
        <li> Pierna izquierda</li>
        <li> Próstata</li>
        <li> Pulmón derecho</li>
        <li> Pulmón izquierdo</li>
        <li> Riñón derecho</li>
        <li> Riñón izquierdo</li>
        <li> Rodilla derecha</li>
        <li> Rodilla izquierda</li>
        <li> Testículo derecho</li>
        <li> Testículo izquierdo</li>
        <li> Timo</li>
        <li> Tiroides</li>
        <li> Tobillo derecho</li>
        <li> Tobillo izquierdo</li>
        <li> Tráquea</li>
        <li> Trompa de falopio derecha</li>
        <li> Trompa de falopio izquierda</li>
        <li> Útero</li>
        <li> Vagina</li>
        <li> Vejiga urinaria</li>
        <li> Vértebras Cervicales </li>
        <li> Vesicular biliar</li>
        <li> Vulva</li>
    </ul></h3>
    <h3 style="color:teal;"><b>¿Si no está el término de tipo de Órgano que necesito en la lista?</b> Si no aparece el término de tipo de órgano que necesitas seleccionar en la lista, debes ingresarlo en el botón a el costado izquierdo, llamado ‘Agregar otro tipo de órgano’. Al seleccionarlo aparecerá una pestaña emergente donde se debe ingresar el término a seleccionar, y al completarlo ya va aparecer en la lista para su elección.</h3>
<!-- El órgano contiene el tumor -->         
    <h2 style="margin-top:40px"><b id="indice15" style="color:teal;"> El órgano contiene el tumor:</b> Se identifica con la selección de 'Si' o 'No', si el órgano referenciado contiene un tumor.</h2>
<!-- Nivel de prioridad del Órgano -->         
    <h2 style="margin-top:40px"><b id="indice16" style="color:teal;"> Nivel de prioridad del Órgano:</b> Se ingresa un número entero con el nivel de prioridad del órgano, siendo el más alto en nivel 1 donde se va a enfocar en preservar ese órgano.</h2>
<!-- Volumen total del objetivo -->         
    <h2 style="margin-top:40px"><b id="indice17" style="color:teal;"> Volumen total del objetivo:</b> Se ingresa el valor numérico con volumen total objetivo del órgano, con la unidad referenciada.</h2>
<!-- Número de vóxeles objetivo -->         
    <h2 style="margin-top:40px"><b id="indice18" style="color:teal;"> Número de vóxeles objetivo:</b> Se ingresa el valor numérico de la cantidad de voxels objetivo del órgano. El voxel es la unidad cúbica que compone un objeto tridimensional, usada con el fin de discretizar la zona.</h2>
<!-- Indicadores -->         
    <h2 style="margin-top:40px"><b id="indice19" style="color:teal;"> Indicadores:</b> Los indicadores corresponden a términos, que se pueden usar como, comparadores entre tratamientos de radioterapia.</h2>
    <h2 class="w3-container w3-center">n. Nombre del Indicador</h2>
    <h2 class="w3-container w3-center">n. Valor del indicador</h2>
    <h2>Los indicadores a evaluar, pueden ser:</h2>
    <h3><ul class="w3-container" style="margin-left:50px">
        <li><b> Dosis Mínima (Dx en Grey):</b> Se ingresa un número entero, que corresponde a la cantidad de dosis mínima prescrita, en unidad de Gray para el caso.</li>
        <li><b> Dosis Media (Dx en Grey):</b> Se ingresa un número entero, que corresponde a la cantidad de dosis media prescrita, en unidad de Gray para el caso.</li>
        <li><b> Dosis Máxima (Dx en Grey):</b> Se ingresa un número, entero que corresponde a la cantidad de dosis máxima prescrita, en unidad de Gray para el caso.</li>
        <li><b> Volumen porcentual Mínimo (Vx %):</b> Se ingresa un número entero, que corresponde a la cantidad de volumen porcentual mínimo prescrito, para el caso.</li>
        <li><b> Volumen porcentual Medio (Vx %):</b> Se ingresa un número entero, que corresponde a la cantidad de volumen porcentual media prescrito, para el caso.</li>
        <li><b> Volumen porcentual Máximo (Vx %):</b> Se ingresa un número entero, que corresponde a la cantidad de volumen porcentual máximo prescrito, para el caso. </li>
        <li><b> Fracciones de Radiación:</b> Se refiere a la división de la dosis total de radiación, en cantidades menores que se administran cada día, se mide en Grays.</li>
    </ul></h3>
    <h3 style="color:teal;"><b>¿Si no está el término Tipo de Indicador que necesito en la lista?</b> Si no aparece el tipo de tipo de indicador que necesitas seleccionar en la lista, debes ingresarlo en el botón a el costado izquierdo, llamado ‘Agregar otro tipo de tipo de indicador’. Al seleccionarlo aparecerá una pestaña emergente donde se debe ingresar el término a seleccionar junto a una descripción, y al completarlo ya va aparecer en la lista para su elección.</h3>
<!-- Archivo Médico comprimido -->        
    <h2 style="margin-top:40px"><b id="indice20" style="color:teal;"> Archivo Médico comprimido:</b> Consta de Subir archivos comprimido en formato zip o rar, relacionado al caso.</h2>
<!-- País de Planificación -->        
    <h2 style="margin-top:40px"><b id="indice21" style="color:teal;"> País de Planificación:</b> Es en donde se selecciona el país de planificación.</h2>
    <h3><ul class="w3-container" style="margin-left:50px">
        <li> Afganistán</li>
        <li> Albania</li>
        <li> Alemania</li>
        <li> Andorra</li>
        <li> Angola</li>
        <li> Antigua y Barbuda</li>
        <li> Arabia Saudita</li>
        <li> Argelia</li>
        <li> Argentina</li>
        <li> Armenia</li>
        <li> Australia</li>
        <li> Austria</li>
        <li> Azerbaiyán</li>
        <li> Bahamas</li>
        <li> Bahrein</li>
        <li> Bangladesh</li>
        <li> Barbados</li>
        <li> Belarús</li>
        <li> Belice</li>
        <li> Benin</li>
        <li> Bhután</li>
        <li> Bolivia </li>
        <li> Bosnia y Herzegovina</li>
        <li> Botswana</li>
        <li> Brasil</li>
        <li> Brunei Darussalam</li>
        <li> Bulgaria</li>
        <li> Burkina Faso</li>
        <li> Burundi</li>
        <li> Bélgica</li>
        <li> Cabo Verde</li>
        <li> Camboya</li>
        <li> Camerún</li>
        <li> Canadá</li>
        <li> Chad</li>
        <li> Chequia</li>
        <li> Chile</li>
        <li> China</li>
        <li> Chipre</li>
        <li> Colombia</li>
        <li> Comoras</li>
        <li> Congo</li>
        <li> Costa Rica</li>
        <li> Croacia</li>
        <li> Cuba</li>
        <li> Côte d'Ivoire</li>
        <li> Dinamarca</li>
        <li> Djibouti</li>
        <li> Dominica</li>
        <li> Ecuador</li>
        <li> Egipto</li>
        <li> El Salvador</li>
        <li> Emiratos Árabes Unidos</li>
        <li> Eritrea</li>
        <li> Eslovaquia</li>
        <li> Eslovenia</li>
        <li> España</li>
        <li> Estados Unidos de América</li>
        <li> Estonia</li>
        <li> Eswatini</li>
        <li> Etiopía</li>
        <li> Federación de Rusia</li>
        <li> Fiji</li>
        <li> Filipinas</li>
        <li> Finlandia</li>
        <li> Francia</li>
        <li> Gabón</li>
        <li> Gambia</li>
        <li> Georgia</li>
        <li> Ghana</li>
        <li> Granada</li>
        <li> Grecia</li>
        <li> Guatemala</li>
        <li> Guinea</li>
        <li> Guinea Ecuatorial</li>
        <li> Guinea-Bissau</li>
        <li> Guyana</li>
        <li> Haití</li>
        <li> Honduras</li>
        <li> Hungría</li>
        <li> India</li>
        <li> Indonesia</li>
        <li> Iraq</li>
        <li> Irlanda</li>
        <li> Irán</li>
        <li> Islandia</li>
        <li> Islas Cook</li>
        <li> Islas Feroe</li>
        <li> Islas Marshall</li>
        <li> Islas Salomón</li>
        <li> Israel</li>
        <li> Italia</li>
        <li> Jamaica</li>
        <li> Japón</li>
        <li> Jordania</li>
        <li> Kazajstán</li>
        <li> Kenya</li>
        <li> Kirguistán</li>
        <li> Kiribati</li>
        <li> Kuwait</li>
        <li> Lesotho</li>
        <li> Letonia</li>
        <li> Liberia</li>
        <li> Libia</li>
        <li> Lituania</li>
        <li> Luxemburgo</li>
        <li> Líbano</li>
        <li> Macedonia del Norte</li>
        <li> Madagascar</li>
        <li> Malasia</li>
        <li> Malawi</li>
        <li> Maldivas</li>
        <li> Malta</li>
        <li> Malí</li>
        <li> Marruecos</li>
        <li> Mauricio</li>
        <li> Mauritania</li>
        <li> Micronesia </li>
        <li> Mongolia</li>
        <li> Montenegro</li>
        <li> Mozambique</li>
        <li> Myanmar</li>
        <li> México</li>
        <li> Mónaco</li>
        <li> Namibia</li>
        <li> Nauru</li>
        <li> Nepal</li>
        <li> Nicaragua</li>
        <li> Nigeria</li>
        <li> Niue</li>
        <li> Noruega</li>
        <li> Nueva Zelandia</li>
        <li> Níger</li>
        <li> Omán</li>
        <li> Pakistán</li>
        <li> Palau</li>
        <li> Panamá</li>
        <li> Papua Nueva Guinea</li>
        <li> Paraguay</li>
        <li> Países Bajos</li>
        <li> Perú</li>
        <li> Polonia</li>
        <li> Portugal</li>
        <li> Qatar</li>
        <li> Reino Unido de Gran Bretaña e Irlanda del Norte</li>
        <li> República Centroafricana</li>
        <li> República Democrática Popular Lao</li>
        <li> República Democrática del Congo</li>
        <li> República Dominicana</li>
        <li> República Popular Democrática de Corea</li>
        <li> República Unida de Tanzanía</li>
        <li> República de Corea</li>
        <li> República de Moldova</li>
        <li> República Árabe Siria</li>
        <li> Rumania</li>
        <li> Rwanda</li>
        <li> Saint Kitts y Nevis</li>
        <li> Samoa</li>
        <li> San Marino</li>
        <li> San Vicente y las Granadinas</li>
        <li> Santa Lucía</li>
        <li> Santo Tomé y Príncipe</li>
        <li> Senegal</li>
        <li> Serbia</li>
        <li> Seychelles</li>
        <li> Sierra Leona</li>
        <li> Singapur</li>
        <li> Somalia</li>
        <li> Sri Lanka</li>
        <li> Sudáfrica</li>
        <li> Sudán</li>
        <li> Sudán del Sur</li>
        <li> Suecia</li>
        <li> Suiza</li>
        <li> Suriname</li>
        <li> Tailandia</li>
        <li> Tayikistán</li>
        <li> Timor-Leste</li>
        <li> Togo</li>
        <li> Tokelau</li>
        <li> Tonga</li>
        <li> Trinidad y Tabago</li>
        <li> Turkmenistán</li>
        <li> Turquía</li>
        <li> Tuvalu</li>
        <li> Túnez</li>
        <li> Ucrania</li>
        <li> Uganda</li>
        <li> Uruguay</li>
        <li> Uzbekistán</li>
        <li> Vanuatu</li>
        <li> Venezuela</li>
        <li> Viet Nam</li>
        <li> Yemen</li>
        <li> Zambia</li>
        <li> Zimbabwe</li>
    </ul></h3>
<!-- Nombre de la Institución -->      
    <h2 style="margin-top:40px"><b id="indice22" style="color:teal;"> Nombre de la Institución:</b> Se escribe el nombre de la institución a la cual representa el autor.</h2> 
    <h3><ul class="w3-container" style="margin-left:50px">
        <li> Universidad Católica del Norte</li>
        <li> Universidad Católica de Valparaíso</li>
    </ul></h3>
    <h3 style="color:teal;"><b>¿Si no está el término de tipo de Nombre de la Institución que necesito en la lista?</b> Si no aparece el tipo de nombre de la institución que necesitas seleccionar en la lista, debes ingresarlo en el botón a el costado izquierdo, llamado ‘Agregar otro tipo de nombre de la institución’. Al seleccionarlo aparecerá una pestaña emergente donde se debe ingresar el término a seleccionar, y al completarlo ya va aparecer en la lista para su elección.</h3>
<!-- Nombre del Autor: -->          
    <h2 style="margin-top:40px"><b id="indice23" style="color:teal;"> Nombre del Autor:</b> Se ingresa el nombre del autor o encargado, que está levantando la información.</h2>
<!-- Email de Contacto: -->          
    <h2 style="margin-top:40px"><b id="indice24" style="color:teal;"> Email de Contacto:</b> Se escribe el contacto del email relacionado con el autor.</h2>
<!-- Bibliografía: -->          
    <h2 style="margin-top:60px"><b id="indice25"> Bibliografía:</b></h2>
    <h4 style="margin-top:20px"> Broderick, M., Leech, M. & Coffey, M. Direct aperture optimization as a means of reducing the complexity of intensity modulated radiation therapy plans. Radiat Oncol 4, 8 (2009). https://doi.org/10.1186/1748-717X-4-8</h4>
    <h4 style="margin-top:20px"> Comisión Nacional para Prevenir y Erradicar la Violencia Contra las Mujeres. (24 de Marzo de 2016). Gobierno de México. Obtenido de Gobierno de Mexico: https://www.gob.mx/conavim/articulos/a-que-nos-referimos-cuando-hablamos-de-sexo-y-genero</h4>
    <h4 style="margin-top:20px"> Gutierrez Hidalgo, M. A. (Diciembre de 2018). Opac PUCV. Obtenido de Opac PUCV: http://opac.pucv.cl/pucv_txt/txt-8000/UCC8091_01.pdf</h4>
    <h4 style="margin-top:20px"> Initia. (2007). Initia. Obtenido de Initia: https://initiaoncologia.com/glosario/fraccion/#:~:text=largo%20del%20tiempo.-,La%20fracci%C3%B3n%20se%20refiere%20a%20la%20divisi%C3%B3n%20de%20las%20dosis,radiaciones%20ionizantes%20por%20el%20tejido.</h4>
    <h4 style="margin-top:20px"> Junta Editorial de Cancer.Net. (Marzo de 2018). Cancer.Net. Obtenido de Cancer.Net: https://www.cancer.net/es/desplazarse-por-atenci%C3%B3n-del-c%C3%A1ncer/diagn%C3%B3stico-de-c%C3%A1ncer/estadios-del-c%C3%A1ncer</h4>
    <h4 style="margin-top:20px"> Planned Parenthood. (s.f.). Planned Parenthood. Obtenido de Planned Parenthood: https://www.plannedparenthood.org/es/temas-de-salud/identidad-de-genero/sexo-e-identidad-de-genero</h4>
    <h4 style="margin-top:20px"> Ramos, S. A. (Noviembre de 2007). Materias. Obtenido de Materias: http://materias.fi.uba.ar/7114/Docs/ApunteHeuristicas.pdf</h4>
    <h4 style="margin-top:20px"> Sociedad Americana Contra El Cáncer. (3 de Enero de 2020). American Cancer Society. Obtenido de American Cancer Society: https://www.cancer.org/es/cancer/cancer-de-cuello-uterino/deteccion-diagnostico-clasificacion-por-etapas/clasificacion-de-la-etapa.html</h4>
    <h4 style="margin-top:20px"> Staffurth, J., & Evans, E. (2018). Principles of cancer treatment by radiotherapy. Surgery (Oxford), 111-116.</h4>
    <h4 style="margin-top:20px"> The Free Dictionary. (2003). The Free Dictionary. Obtenido de The Free Dictionary: https://medical-dictionary.thefreedictionary.com/voxel</h4>
    <h4 style="margin-top:20px"> The Free Dictionary. (2012). The Free Dictionary. Obtenido de The Free Dictionary: https://medical-dictionary.thefreedictionary.com/beamlet</h4>
</div>
</body>
<!-- Pie de Pagina -->
<footer class="w3-padding-64"></footer>
</html>