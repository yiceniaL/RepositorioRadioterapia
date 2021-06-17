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
    <div class="w3-padding-24"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Funcion de esconder y mostrar -->
<script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $("p1").hide();
    $("p2").show();
    $("p_1").hide();
    $("p_2").show();
  });
  $(".btn2").click(function(){
    $("p_2").hide();
    $("p_3").show();
  });
  $(".btn3").click(function(){
    $("p2").hide();
    $("p3").show();
    $("p_3").hide();
    $("p_4").show();
  });
  $(".btn4").click(function(){
    $("p_4").hide();
    $("p_5").show();
  });
  $(".btn5").click(function(){
    $("p3").hide();
    $("p4").show();
    $("p_5").hide();
    $("p_6").show();
  });
  $(".btn6").click(function(){
    $("p_6").hide();
    $("p_7").show();
  });
  $(".btn7").click(function(){
    $("p4").hide();
    $("p5").show();
    $("p_7").hide();
    $("p_8").show();
  });
  $(".btn8").click(function(){
    $("p_8").hide();
    $("p_9").show();
  });
  $(".btn9").click(function(){
    $("p5").hide();
    $("p6").show();
    $("p_9").hide();
    $("p_10").show();
  });
  $(".btn10").click(function(){
    $("p_10").hide();
    $("p_11").show();
  });
  $(".btn11").click(function(){
    $("p6").hide();
    $("p7").show();
    $("p_11").hide();
    $("p_12").show();
  });
  $(".btn12").click(function(){
    $("p_12").hide();
    $("p_13").show();
  });
  $(".btn13").click(function(){
    $("p7").hide();
    $("p8").show();
    $("p_13").hide();
    $("p_14").show();
  });
  $(".btn14").click(function(){
    $("p_14").hide();
    $("p_15").show();
  });
  $(".btn15").click(function(){
    $("p8").hide();
    $("p9").show();
    $("p_15").hide();
    $("p_16").show();
  });
  $(".btn16").click(function(){
    $("p_16").hide();
    $("p_17").show();
  });
  $(".btn17").click(function(){
    $("p9").hide();
    $("p10").show();
    $("p_17").hide();
    $("p_18").show();
  });
  $(".btn18").click(function(){
    $("p_18").hide();
    $("p_19").show();
  });
  $(".btn19").click(function(){
    $("p10").hide();
    $("p11").show();
    $("p_19").hide();
    $("p_20").show();
  });
  $(".btn20").click(function(){
    $("p_20").hide();
    $("p_21").show();
  });
  $(".btn21").click(function(){
    $("p11").hide();
    $("p12").show();
    $("p_21").hide();
    $("p_22").show();
  });
  $(".btn22").click(function(){
    $("p_22").hide();
    $("p_23").show();
  });
  $(".btn23").click(function(){
    $("p12").hide();
    $("p13").show();
    $("p_23").hide();
    $("p_24").show();
  });
  $(".btn24").click(function(){
    $("p_24").hide();
    $("p_25").show();
  });
  $(".btn25").click(function(){
    $("p13").hide();
    $("p14").show();
    $("p_25").hide();
    $("p_26").show();
  });
  $(".btn26").click(function(){
    $("p_26").hide();
    $("p_27").show();
  });
  $(".btn27").click(function(){
    $("p14").hide();
    $("p15").show();
    $("p_27").hide();
    $("p_28").show();
  });
  $(".btn28").click(function(){
    $("p_28").hide();
    $("p_29").show();
  });
  $(".btn29").click(function(){
    $("p15").hide();
    $("p16").show();
    $("p_29").hide();
    $("p_30").show();
  });
  $(".btn30").click(function(){
    $("p_30").hide();
    $("p_31").show();
  });
  $(".btn31").click(function(){
    $("p16").hide();
    $("p17").show();
    $("p_31").hide();
    $("p_32").show();
  });
  $(".btn32").click(function(){
    $("p_32").hide();
    $("p_33").show();
  });
  $(".btn33").click(function(){
    $("p17").hide();
    $("p18").show();
    $("p_33").hide();
    $("p_34").show();
  });
  $(".btn34").click(function(){
    $("p_34").hide();
    $("p_35").show();
  });
  $(".btn35").click(function(){
    $("p18").hide();
    $("p19").show();
    $("p_35").hide();
    $("p_36").show();
  });
  $(".btn36").click(function(){
    $("p_36").hide();
    $("p_37").show();
  });
  $(".btn37").click(function(){
    $("p19").hide();
    $("p20").show();
    $("p_37").hide();
    $("p_38").show();
  });
  $(".btn38").click(function(){
    $("p_38").hide();
    $("p_39").show();
  });
  $(".btn39").click(function(){
    $("p20").hide();
    $("p21").show();
    $("p_39").hide();
    $("p_40").show();
  });





  $(".btn40").click(function(){
    $("p_40").hide();
    $("p_41").show();
  });
  $(".btn41").click(function(){
    $("p21").hide();
    $("p22").show();
    $("p_41").hide();
    $("p_42").show();
  });

  $(".btn42").click(function(){
    $("p_42").hide();
    $("p_43").show();
  });
  $(".btn43").click(function(){
    $("p22").hide();
    $("p23").show();
    $("p_43").hide();
    $("p_44").show();
  });










  $(".btn44").click(function(){
    $("p_44").hide();
    $("p_45").show();
  });


  $(".btn45").click(function(){
    $("p23").hide();
    $("p24").show();
    $("p_45").hide();
    $("p_46").show();
  });

  $(".btn46").click(function(){
    $("p_46").hide();
    $("p_47").show();
  });
  $(".btn47").click(function(){
    $("p24").hide();
    $("p25").show();
    $("p_47").hide();
    $("p_48").show();
  });

  $(".btn48").click(function(){
    $("p_48").hide();
    $("p_49").show();
  });
  $(".btn49").click(function(){
    $("p25").hide();
    $("p26").show();
    $("p_49").hide();
    $("p_50").show();
  });

  $(".btn50").click(function(){
    $("p_50").hide();
    $("p_51").show();
  });
  $(".btn51").click(function(){
    $("p26").hide();
    $("p27").show();
    $("p_51").hide();
    $("p_52").show();
  });

  $(".btn52").click(function(){
    $("p_52").hide();
    $("p_53").show();
  });
  $(".btn53").click(function(){
    $("p27").hide();
    $("p28").show();
    $("p_53").hide();
    $("p_54").show();
  });

  $(".btn54").click(function(){
    $("p_54").hide();
    $("p_55").show();
  });
  $(".btn55").click(function(){
    $("p28").hide();
    $("p29").show();
    $("p_55").hide();
    $("p_56").show();
  });

  $(".btn56").click(function(){
    $("p_56").hide();
    $("p_57").show();
  });

  $(".btn57").click(function(){
    $("p29").hide();
    $("p30").show();
    $("p_57").hide();
    $("p_58").show();
  });

  $(".btn58").click(function(){
    $("p_58").hide();
    $("p_59").show();
  });
  $(".btn59").click(function(){
    $("p30").hide();
    $("p31").show();
    $("p_59").hide();
    $("p_60").show();
  });

  $(".btn60").click(function(){
    $("p_60").hide();
    $("p_61").show();
  });
  $(".btn61").click(function(){
    $("p31").hide();
    $("p32").show();
    $("p_61").hide();
    $("p_62").show();
  }); 




  $(".btn62").click(function(){
    $("p_62").hide();
    $("p_63").show();
  });
  $(".btn63").click(function(){
    $("p32").hide();
    $("p33").show();
    $("p_63").hide();
    $("p_64").show();
  }); 

  $(".btn64").click(function(){
    $("p_64").hide();
    $("p_65").show();
  });
  $(".btn65").click(function(){
    $("p33").hide();
    $("p34").show();
    $("p_65").hide();
    $("p_66").show();
  }); 

  $(".btn66").click(function(){
    $("p_66").hide();
    $("p_67").show();
  });
  $(".btn67").click(function(){
    $("p34").hide();
    $("p35").show();
    $("p_67").hide();
    $("p_68").show();
  }); 

  $(".btn68").click(function(){
    $("p_68").hide();
    $("p_69").show();
  });
  $(".btn69").click(function(){
    $("p35").hide();
    $("p36").show();
    $("p_69").hide();
    $("p_70").show();
  }); 

  $(".btn70").click(function(){
    $("p_70").hide();
    $("p_71").show();
  });
  $(".btn71").click(function(){
    $("p36").hide();
    $("p37").show();
    $("p_71").hide();
    $("p_72").show();
  }); 

  $(".btn72").click(function(){
    $("p_72").hide();
    $("p_73").show();
  });
  $(".btn73").click(function(){
    $("p37").hide();
    $("p38").show();
    $("p_73").hide();
    $("p_74").show();
  }); 

  $(".btn74").click(function(){
    $("p_74").hide();
    $("p_75").show();
  });
  $(".btn75").click(function(){
    $("p38").hide();
    $("p39").show();
    $("p_75").hide();
    $("p_76").show();
  }); 

  $(".btn76").click(function(){
    $("p_76").hide();
    $("p_77").show();
  });
  $(".btn77").click(function(){
    $("p39").hide();
    $("p40").show();
    $("p_77").hide();
    $("p_78").show();
  }); 

  $(".btn78").click(function(){
    $("p_78").hide();
    $("p_79").show();
  });
  $(".btn79").click(function(){
    $("p40").hide();
    $("p41").show();
    $("p_79").hide();
    $("p_80").show();
  }); 

  $(".btn80").click(function(){
    $("p_80").hide();
    $("p_81").show();
  });
  $(".btn81").click(function(){
    $("p41").hide();
    $("p42").show();
    $("p_81").hide();
    $("p_82").show();
  }); 

});

</script>

<div style="height:500px">    
    <p1> <!-- Parte1  -->
    <!-- Nivel de cancer -->
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
        <a href="http://127.0.0.1:8000/formularioGlosario#indice3" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Descripcion del caso -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Descripción del Caso*</h3>
        </div>
        <div class="w3-col s3 w3-center">
            <textarea maxlength="700" name="namedescripcion" autocomplete="on" class="w3-input w3-border w3-rest" style="height: 200px  width: 300px" placeholder="Describe el Caso"></textarea>
                <a href="http://127.0.0.1:8000/formularioGlosario#indice4" target="_blank" >
                <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
        </button></a>
        </div>
    </div>  
    <!-- Sexo del paciente -->
    <div class="w3-row-padding w3-margin-left w3-margin-top">
        <div class="w3-col s3">
            <h3>Sexo del Paciente</h3>
        </div>
        <div class="w3-col s3">
            <select class="w3-select w3-border" name="option">
                <option value="" disabled selected>Selecciona el sexo del paciente</option>
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice5" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Rango de edad del paciente -->
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
        <a href="http://127.0.0.1:8000/formularioGlosario#indice6" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Archivo Medico comprimido -->
    <div for="myfile" class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Archivo Médico comprimido* </h3>
        </div>
        <div class="w3-container w3-quarter w3-margin-top">
            <input type="file" id="myfile" name="myfile">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice20" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white  w3-margin-top">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p1>
<!-- Parte2  -->
<!-- Organo 1  -->
    <p2 hidden> 
    <!-- Organo a irradiar -->
    <div class="w3-row-padding w3-margin-left" style="margin-top:10px">
        <div class="w3-col s3">
            <h3>Órgano a irradiar 1*</h3>
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
                <div class="w3-container w3-center w3-margin-top">
                    <button class="w3-button w3-green">Ingresar nuevo dato</button>
                </div>
                <footer class="w3-padding-16"></footer>
            </div>
            </div>
            </div>
            </div>
        </div>
    </p2>
    <p3 hidden> 
    <!-- Organo -->
    <div class="w3-container w3-margin-left">
        <h3>Órgano 1</h3>
    </div>
    <!-- Organo contiene el tumor -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>El órgano contiene el tumor*</h3>
        </div>
        <div class="w3-col s3">
            <select class="w3-select w3-border " name="option">
                <option value="" disabled selected>¿El órgano contiene tumor?</option>
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice15" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Nivel de prioridad del organo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Nivel de prioridad del Órgano </h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="3" name="nameprioridad" class="w3-input w3-border" type="text" placeholder="Ingresa el nivel de prioridad del Órgano ">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice16" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
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
            <a href="http://127.0.0.1:8000/formularioGlosario#indice17" target="_blank" > 
            <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Numero de voxels objetivo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Número de vóxels objetivo</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="namevoxel" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el número de vóxels objetivo">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice18" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p3>
<!-- Organo 2  -->
<p4 hidden> 
    <!-- Organo a irradiar -->
    <div class="w3-row-padding w3-margin-left" style="margin-top:10px">
        <div class="w3-col s3">
            <h3>Órgano a irradiar 2*</h3>
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
                <div class="w3-container w3-center w3-margin-top">
                    <button class="w3-button w3-green">Ingresar nuevo dato</button>
                </div>
                <footer class="w3-padding-16"></footer>
            </div>
            </div>
            </div>
            </div>
        </div>
    </p4>
    <p5 hidden> 
    <!-- Organo -->
    <div class="w3-container w3-margin-left">
        <h3>Órgano 2</h3>
    </div>
    <!-- Organo contiene el tumor -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>El órgano contiene el tumor*</h3>
        </div>
        <div class="w3-col s3">
            <select class="w3-select w3-border " name="option">
                <option value="" disabled selected>¿El órgano contiene tumor?</option>
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice15" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Nivel de prioridad del organo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Nivel de prioridad del Órgano </h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="3" name="nameprioridad" class="w3-input w3-border" type="text" placeholder="Ingresa el nivel de prioridad del Órgano ">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice16" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
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
            <a href="http://127.0.0.1:8000/formularioGlosario#indice17" target="_blank" > 
            <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Numero de voxels objetivo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Número de vóxels objetivo</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="namevoxel" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el número de vóxels objetivo">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice18" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p5>
<!-- Organo 3  -->
<p6 hidden> 
    <!-- Organo a irradiar -->
    <div class="w3-row-padding w3-margin-left" style="margin-top:10px">
        <div class="w3-col s3">
            <h3>Órgano a irradiar 3*</h3>
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
                <div class="w3-container w3-center w3-margin-top">
                    <button class="w3-button w3-green">Ingresar nuevo dato</button>
                </div>
                <footer class="w3-padding-16"></footer>
            </div>
            </div>
            </div>
            </div>
        </div>
    </p6>
    <p7 hidden> 
    <!-- Organo -->
    <div class="w3-container w3-margin-left">
        <h3>Órgano 3</h3>
    </div>
    <!-- Organo contiene el tumor -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>El órgano contiene el tumor*</h3>
        </div>
        <div class="w3-col s3">
            <select class="w3-select w3-border " name="option">
                <option value="" disabled selected>¿El órgano contiene tumor?</option>
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice15" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Nivel de prioridad del organo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Nivel de prioridad del Órgano </h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="3" name="nameprioridad" class="w3-input w3-border" type="text" placeholder="Ingresa el nivel de prioridad del Órgano ">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice16" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
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
            <a href="http://127.0.0.1:8000/formularioGlosario#indice17" target="_blank" > 
            <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Numero de voxels objetivo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Número de vóxels objetivo</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="namevoxel" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el número de vóxels objetivo">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice18" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p7>
<!-- Organo 4  -->
<p8 hidden> 
    <!-- Organo a irradiar -->
    <div class="w3-row-padding w3-margin-left" style="margin-top:10px">
        <div class="w3-col s3">
            <h3>Órgano a irradiar 4*</h3>
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
                <div class="w3-container w3-center w3-margin-top">
                    <button class="w3-button w3-green">Ingresar nuevo dato</button>
                </div>
                <footer class="w3-padding-16"></footer>
            </div>
            </div>
            </div>
            </div>
        </div>
    </p8>
    <p9 hidden> 
    <!-- Organo -->
    <div class="w3-container w3-margin-left">
        <h3>Órgano 4</h3>
    </div>
    <!-- Organo contiene el tumor -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>El órgano contiene el tumor*</h3>
        </div>
        <div class="w3-col s3">
            <select class="w3-select w3-border " name="option">
                <option value="" disabled selected>¿El órgano contiene tumor?</option>
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice15" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Nivel de prioridad del organo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Nivel de prioridad del Órgano </h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="3" name="nameprioridad" class="w3-input w3-border" type="text" placeholder="Ingresa el nivel de prioridad del Órgano ">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice16" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
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
            <a href="http://127.0.0.1:8000/formularioGlosario#indice17" target="_blank" > 
            <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Numero de voxels objetivo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Número de vóxels objetivo</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="namevoxel" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el número de vóxels objetivo">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice18" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p9>
<!-- Organo 5  -->
<p10 hidden> 
    <!-- Organo a irradiar -->
    <div class="w3-row-padding w3-margin-left" style="margin-top:10px">
        <div class="w3-col s3">
            <h3>Órgano a irradiar 5*</h3>
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
                <div class="w3-container w3-center w3-margin-top">
                    <button class="w3-button w3-green">Ingresar nuevo dato</button>
                </div>
                <footer class="w3-padding-16"></footer>
            </div>
            </div>
            </div>
            </div>
        </div>
    </p10>
    <p11 hidden> 
    <!-- Organo -->
    <div class="w3-container w3-margin-left">
        <h3>Órgano 5</h3>
    </div>
    <!-- Organo contiene el tumor -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>El órgano contiene el tumor*</h3>
        </div>
        <div class="w3-col s3">
            <select class="w3-select w3-border " name="option">
                <option value="" disabled selected>¿El órgano contiene tumor?</option>
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice15" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Nivel de prioridad del organo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Nivel de prioridad del Órgano </h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="3" name="nameprioridad" class="w3-input w3-border" type="text" placeholder="Ingresa el nivel de prioridad del Órgano ">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice16" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
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
            <a href="http://127.0.0.1:8000/formularioGlosario#indice17" target="_blank" > 
            <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Numero de voxels objetivo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Número de vóxels objetivo</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="namevoxel" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el número de vóxels objetivo">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice18" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p11>
<!-- Organo 6  -->
<p12 hidden> 
    <!-- Organo a irradiar -->
    <div class="w3-row-padding w3-margin-left" style="margin-top:10px">
        <div class="w3-col s3">
            <h3>Órgano a irradiar 6*</h3>
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
                <div class="w3-container w3-center w3-margin-top">
                    <button class="w3-button w3-green">Ingresar nuevo dato</button>
                </div>
                <footer class="w3-padding-16"></footer>
            </div>
            </div>
            </div>
            </div>
        </div>
    </p12>
    <p13 hidden> 
    <!-- Organo -->
    <div class="w3-container w3-margin-left">
        <h3>Órgano 6</h3>
    </div>
    <!-- Organo contiene el tumor -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>El órgano contiene el tumor*</h3>
        </div>
        <div class="w3-col s3">
            <select class="w3-select w3-border " name="option">
                <option value="" disabled selected>¿El órgano contiene tumor?</option>
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice15" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Nivel de prioridad del organo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Nivel de prioridad del Órgano </h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="3" name="nameprioridad" class="w3-input w3-border" type="text" placeholder="Ingresa el nivel de prioridad del Órgano ">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice16" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
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
            <a href="http://127.0.0.1:8000/formularioGlosario#indice17" target="_blank" > 
            <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Numero de voxels objetivo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Número de vóxels objetivo</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="namevoxel" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el número de vóxels objetivo">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice18" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p13>
<!-- Organo 7  -->
<p14 hidden> 
    <!-- Organo a irradiar -->
    <div class="w3-row-padding w3-margin-left" style="margin-top:10px">
        <div class="w3-col s3">
            <h3>Órgano a irradiar 7*</h3>
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
                <div class="w3-container w3-center w3-margin-top">
                    <button class="w3-button w3-green">Ingresar nuevo dato</button>
                </div>
                <footer class="w3-padding-16"></footer>
            </div>
            </div>
            </div>
            </div>
        </div>
    </p14>
    <p15 hidden> 
    <!-- Organo -->
    <div class="w3-container w3-margin-left">
        <h3>Órgano 7</h3>
    </div>
    <!-- Organo contiene el tumor -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>El órgano contiene el tumor*</h3>
        </div>
        <div class="w3-col s3">
            <select class="w3-select w3-border " name="option">
                <option value="" disabled selected>¿El órgano contiene tumor?</option>
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice15" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Nivel de prioridad del organo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Nivel de prioridad del Órgano </h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="3" name="nameprioridad" class="w3-input w3-border" type="text" placeholder="Ingresa el nivel de prioridad del Órgano ">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice16" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
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
            <a href="http://127.0.0.1:8000/formularioGlosario#indice17" target="_blank" > 
            <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Numero de voxels objetivo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Número de vóxels objetivo</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="namevoxel" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el número de vóxels objetivo">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice18" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p15>
<!-- Organo 8  -->
<p16 hidden> 
    <!-- Organo a irradiar -->
    <div class="w3-row-padding w3-margin-left" style="margin-top:10px">
        <div class="w3-col s3">
            <h3>Órgano a irradiar 8*</h3>
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
                <div class="w3-container w3-center w3-margin-top">
                    <button class="w3-button w3-green">Ingresar nuevo dato</button>
                </div>
                <footer class="w3-padding-16"></footer>
            </div>
            </div>
            </div>
            </div>
        </div>
    </p16>
    <p17 hidden> 
    <!-- Organo -->
    <div class="w3-container w3-margin-left">
        <h3>Órgano 8</h3>
    </div>
    <!-- Organo contiene el tumor -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>El órgano contiene el tumor*</h3>
        </div>
        <div class="w3-col s3">
            <select class="w3-select w3-border " name="option">
                <option value="" disabled selected>¿El órgano contiene tumor?</option>
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice15" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Nivel de prioridad del organo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Nivel de prioridad del Órgano </h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="3" name="nameprioridad" class="w3-input w3-border" type="text" placeholder="Ingresa el nivel de prioridad del Órgano ">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice16" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
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
            <a href="http://127.0.0.1:8000/formularioGlosario#indice17" target="_blank" > 
            <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Numero de voxels objetivo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Número de vóxels objetivo</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="namevoxel" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el número de vóxels objetivo">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice18" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p17>
<!-- Organo 9  -->
<p18 hidden> 
    <!-- Organo a irradiar -->
    <div class="w3-row-padding w3-margin-left" style="margin-top:10px">
        <div class="w3-col s3">
            <h3>Órgano a irradiar 9*</h3>
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
                <div class="w3-container w3-center w3-margin-top">
                    <button class="w3-button w3-green">Ingresar nuevo dato</button>
                </div>
                <footer class="w3-padding-16"></footer>
            </div>
            </div>
            </div>
            </div>
        </div>
    </p18>
    <p19 hidden> 
    <!-- Organo -->
    <div class="w3-container w3-margin-left">
        <h3>Órgano 9</h3>
    </div>
    <!-- Organo contiene el tumor -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>El órgano contiene el tumor*</h3>
        </div>
        <div class="w3-col s3">
            <select class="w3-select w3-border " name="option">
                <option value="" disabled selected>¿El órgano contiene tumor?</option>
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice15" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Nivel de prioridad del organo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Nivel de prioridad del Órgano </h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="3" name="nameprioridad" class="w3-input w3-border" type="text" placeholder="Ingresa el nivel de prioridad del Órgano ">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice16" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
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
            <a href="http://127.0.0.1:8000/formularioGlosario#indice17" target="_blank" > 
            <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Numero de voxels objetivo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Número de vóxels objetivo</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="namevoxel" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el número de vóxels objetivo">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice18" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p19>
<!-- Organo 10  -->
<p20 hidden> 
    <!-- Organo a irradiar -->
    <div class="w3-row-padding w3-margin-left" style="margin-top:10px">
        <div class="w3-col s3">
            <h3>Órgano a irradiar 10*</h3>
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
                <div class="w3-container w3-center w3-margin-top">
                    <button class="w3-button w3-green">Ingresar nuevo dato</button>
                </div>
                <footer class="w3-padding-16"></footer>
            </div>
            </div>
            </div>
            </div>
        </div>
    </p20>
    <p21 hidden> 
    <!-- Organo -->
    <div class="w3-container w3-margin-left">
        <h3>Órgano 10</h3>
    </div>
    <!-- Organo contiene el tumor -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>El órgano contiene el tumor*</h3>
        </div>
        <div class="w3-col s3">
            <select class="w3-select w3-border " name="option">
                <option value="" disabled selected>¿El órgano contiene tumor?</option>
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice15" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Nivel de prioridad del organo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Nivel de prioridad del Órgano </h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="3" name="nameprioridad" class="w3-input w3-border" type="text" placeholder="Ingresa el nivel de prioridad del Órgano ">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice16" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
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
            <a href="http://127.0.0.1:8000/formularioGlosario#indice17" target="_blank" > 
            <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    <!-- Numero de voxels objetivo -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>Número de vóxels objetivo</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="namevoxel" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el número de vóxels objetivo">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice18" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p21>






















<!-- Indicador 1  -->
<p22 hidden> 
<!-- Nombre del Indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>1. Nombre del Indicador*</h3>
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
</p22>

<p23 hidden>
<!-- Valor del indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>1. Valor del indicador*</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="nameindicador" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice19" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p23>

<!-- Indicador 2  -->
<p24 hidden> 
<!-- Nombre del Indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>2. Nombre del Indicador*</h3>
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
    </p24>

<p25 hidden>
<!-- Valor del indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>2. Valor del indicador*</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="nameindicador" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice19" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p25>

<!-- Indicador 3  -->
<p26 hidden> 
<!-- Nombre del Indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>3. Nombre del Indicador*</h3>
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
    </p26>

<p27 hidden>
<!-- Valor del indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>3. Valor del indicador*</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="nameindicador" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice19" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p27>

<!-- Indicador 4  -->
<p28 hidden> 
<!-- Nombre del Indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>4. Nombre del Indicador*</h3>
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
    </p28>

<p29 hidden>
<!-- Valor del indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>4. Valor del indicador*</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="nameindicador" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice19" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p29>

<!-- Indicador 5  -->
<p30 hidden> 
<!-- Nombre del Indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>5. Nombre del Indicador*</h3>
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
    </p30>

<p31 hidden>
<!-- Valor del indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>5. Valor del indicador*</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="nameindicador" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice19" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p31>

<!-- Indicador 6  -->
<p32 hidden> 
<!-- Nombre del Indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>6. Nombre del Indicador*</h3>
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
    </p32>

<p33 hidden>
<!-- Valor del indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>6. Valor del indicador*</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="nameindicador" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice19" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p33>

<!-- Indicador 7  -->
<p34 hidden> 
<!-- Nombre del Indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>7. Nombre del Indicador*</h3>
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
    </p34>

<p35 hidden>
<!-- Valor del indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>7. Valor del indicador*</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="nameindicador" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice19" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p35>

<!-- Indicador 8  -->
<p36 hidden> 
<!-- Nombre del Indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>8. Nombre del Indicador*</h3>
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
    </p36>

<p37 hidden>
<!-- Valor del indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>8. Valor del indicador*</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="nameindicador" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice19" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p37>

<!-- Indicador 9  -->
<p38 hidden> 
<!-- Nombre del Indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>9. Nombre del Indicador*</h3>
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
    </p38>

<p39 hidden>
<!-- Valor del indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>9. Valor del indicador*</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="nameindicador" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice19" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p39>

<!-- Indicador 10  -->
<p40 hidden> 
<!-- Nombre del Indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>10. Nombre del Indicador*</h3>
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
    </p40>

<p41 hidden>
<!-- Valor del indicador -->
    <div class="w3-row-padding w3-margin-left">
        <div class="w3-col s3">
            <h3>10. Valor del indicador*</h3>
        </div>
        <div class="w3-col s3">
            <input maxlength="10" name="nameindicador" autocomplete="on" class="w3-input w3-border" type="text" placeholder="Ingresa el valor del indicador">
        </div>
        <a href="http://127.0.0.1:8000/formularioGlosario#indice19" target="_blank" > 
        <button class="w3-text-grey w3-button w3-circle w3-white w3-small w3-hover-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </button></a>
    </div>
    </p41>


































</div>

















<p_1><!-- Boton1  -->
<div class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn1 w3-button w3-teal w3-xlarge" style="width:15%">Siguente1 &#10095;</button>
  </div>
  </p_1>
<p_2 hidden><!-- Boton2  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn2 w3-button w3-teal w3-xlarge" style="width:15%">Guardar2 &#10095;</button>
  </div>
  </p_2>
<p_3 hidden><!-- Boton3  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn3 w3-button w3-teal w3-xlarge" style="width:15%">Siguente3 &#10095;</button>
  </div>
  </p_3>
<p_4 hidden><!-- Boton4  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn4 w3-button w3-teal w3-xlarge" style="width:15%">Guardar4 &#10095;</button>
  </div>
 </p_4>
 <p_5 hidden><!-- Boton5  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn5 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Órgano5 &#10095;</button>
    <button class="btn_1 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_5>
  <p_6 hidden><!-- Boton6  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn6 w3-button w3-teal w3-xlarge" style="width:15%">Guardar6 &#10095;</button>
  </div>
 </p_6>
 <p_7 hidden><!-- Boton7  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn7 w3-button w3-teal w3-xlarge" style="width:15%">Siguente7 &#10095;</button>
  </div>
  </p_7>
  <p_8 hidden><!-- Boton8  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn8 w3-button w3-teal w3-xlarge" style="width:15%">Guardar8 &#10095;</button>
  </div>
  </p_8>
  <p_9 hidden><!-- Boton9  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn9 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Órgano9 &#10095;</button>
    <button class="btn_1 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_9>
  <p_10 hidden><!-- Boton10  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn10 w3-button w3-teal w3-xlarge" style="width:15%">Guardar10 &#10095;</button>
  </div>
  </p_10>
  <p_11 hidden><!-- Boton11  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn11 w3-button w3-teal w3-xlarge" style="width:15%">Siguente11 &#10095;</button>
  </div>
  </p_11>
  <p_12 hidden><!-- Boton12  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn12 w3-button w3-teal w3-xlarge" style="width:15%">Guardar12 &#10095;</button>
  </div>
  </p_12>
  <p_13 hidden><!-- Boton13  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn13 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Órgano13 &#10095;</button>
    <button class="btn_1 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_13>
  <p_14 hidden><!-- Boton14  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn14 w3-button w3-teal w3-xlarge" style="width:15%">Guardar14 &#10095;</button>
  </div>
  </p_14>
  <p_15 hidden><!-- Boton15  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn15 w3-button w3-teal w3-xlarge" style="width:15%">Siguente15 &#10095;</button>
  </div>
  </p_15>
  <p_16 hidden><!-- Boton16  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn16 w3-button w3-teal w3-xlarge" style="width:15%">Guardar16 &#10095;</button>
  </div>
  </p_16>
  <p_17 hidden><!-- Boton17  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn17 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Órgano17 &#10095;</button>
    <button class="btn_1 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_17>
  <p_18 hidden><!-- Boton18  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn18 w3-button w3-teal w3-xlarge" style="width:15%">Guardar18 &#10095;</button>
  </div>
  </p_18>
  <p_19 hidden><!-- Boton19  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn19 w3-button w3-teal w3-xlarge" style="width:15%">Siguente19 &#10095;</button>
  </div>
  </p_19>
  <p_20 hidden><!-- Boton20  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn20 w3-button w3-teal w3-xlarge" style="width:15%">Guardar20 &#10095;</button>
  </div>
  </p_20>
  <p_21 hidden><!-- Boton21  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn21 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Órgano21 &#10095;</button>
    <button class="btn_1 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_21>
  <p_22 hidden><!-- Boton22  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn22 w3-button w3-teal w3-xlarge" style="width:15%">Guardar22 &#10095;</button>
  </div>
  </p_22>
  <p_23 hidden><!-- Boton23  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn23 w3-button w3-teal w3-xlarge" style="width:15%">Siguente23 &#10095;</button>
  </div>
  </p_23>
  <p_24 hidden><!-- Boton24  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn24 w3-button w3-teal w3-xlarge" style="width:15%">Guardar24 &#10095;</button>
  </div>
  </p_24>
  <p_25 hidden><!-- Boton25  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn25 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Órgano25 &#10095;</button>
    <button class="btn_1 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_25>
  <p_26 hidden><!-- Boton26  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn26 w3-button w3-teal w3-xlarge" style="width:15%">Guardar26 &#10095;</button>
  </div>
  </p_26>

  <p_27 hidden><!-- Boton27  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn27 w3-button w3-teal w3-xlarge" style="width:15%">Siguente27 &#10095;</button>
  </div>
  </p_27>
  <p_28 hidden><!-- Boton28  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn28 w3-button w3-teal w3-xlarge" style="width:15%">Guardar28 &#10095;</button>
  </div>
  </p_28>

  <p_29 hidden><!-- Boton29  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn29 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Órgano29 &#10095;</button>
    <button class="btn_1 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_29>
  <p_30 hidden><!-- Boton30  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn30 w3-button w3-teal w3-xlarge" style="width:15%">Guardar30 &#10095;</button>
  </div>
  </p_30>

  <p_31 hidden><!-- Boton31  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn31 w3-button w3-teal w3-xlarge" style="width:15%">Siguente31 &#10095;</button>
  </div>
  </p_31>
  <p_32 hidden><!-- Boton32  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn32 w3-button w3-teal w3-xlarge" style="width:15%">Guardar32 &#10095;</button>
  </div>
  </p_32>

  <p_33 hidden><!-- Boton33  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn33 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Órgano33 &#10095;</button>
    <button class="btn_1 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_33>
  <p_34 hidden><!-- Boton34  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn34 w3-button w3-teal w3-xlarge" style="width:15%">Guardar34 &#10095;</button>
  </div>
  </p_34>

  <p_35 hidden><!-- Boton35  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn35 w3-button w3-teal w3-xlarge" style="width:15%">Siguente35 &#10095;</button>
  </div>
  </p_35>

  <p_36 hidden><!-- Boton36  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn36 w3-button w3-teal w3-xlarge" style="width:15%">Guardar36 &#10095;</button>
  </div>
  </p_36>

  <p_37 hidden><!-- Boton37  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn37 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Órgano37 &#10095;</button>
    <button class="btn_1 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_37>
  <p_38 hidden><!-- Boton38  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn38 w3-button w3-teal w3-xlarge" style="width:15%">Guardar38 &#10095;</button>
  </div>
  </p_38>

  <p_39 hidden><!-- Boton39  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn39 w3-button w3-teal w3-xlarge" style="width:15%">Siguente39 &#10095;</button>
  </div>
  </p_39>
  <p_40 hidden><!-- Boton40  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn40 w3-button w3-teal w3-xlarge" style="width:15%">Guardar40 &#10095;</button>
  </div>
  </p_40>





  <p_41 hidden><!-- Boton41  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn41 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Indicador41 &#10095;</button>
    <button class="btn_2 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_41>
  <p_42 hidden><!-- Boton42  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn42 w3-button w3-teal w3-xlarge" style="width:15%">Guardar42 &#10095;</button>
  </div>
  </p_42>

  <p_43 hidden><!-- Boton43  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn43 w3-button w3-teal w3-xlarge" style="width:15%">Siguente43 &#10095;</button>
  </div>
  </p_43>
  <p_44 hidden><!-- Boton44  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn44 w3-button w3-teal w3-xlarge" style="width:15%">Guardar44 &#10095;</button>
  </div>
  </p_44>

  <p_45 hidden><!-- Boton45  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn45 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Indicador45 &#10095;</button>
    <button class="btn_2 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_45>
  <p_46 hidden><!-- Boton46  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn46 w3-button w3-teal w3-xlarge" style="width:15%">Guardar46 &#10095;</button>
  </div>
  </p_46>

  <p_47 hidden><!-- Boton47  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn47 w3-button w3-teal w3-xlarge" style="width:15%">Siguente47 &#10095;</button>
  </div>
  </p_47>
  <p_48 hidden><!-- Boton48  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn48 w3-button w3-teal w3-xlarge" style="width:15%">Guardar48 &#10095;</button>
  </div>
  </p_48>

  <p_49 hidden><!-- Boton49  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn49 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Indicador49 &#10095;</button>
    <button class="btn_2 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_49>
  <p_50 hidden><!-- Boton50  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn50 w3-button w3-teal w3-xlarge" style="width:15%">Guardar50 &#10095;</button>
  </div>
  </p_50>

  <p_51 hidden><!-- Boton51  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn51 w3-button w3-teal w3-xlarge" style="width:15%">Siguente51 &#10095;</button>
  </div>
  </p_51>
  <p_52 hidden><!-- Boton52  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn52 w3-button w3-teal w3-xlarge" style="width:15%">Guardar52 &#10095;</button>
  </div>
  </p_52>

  <p_53 hidden><!-- Boton53  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn53 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Indicador53 &#10095;</button>
    <button class="btn_2 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_53>
  <p_54 hidden><!-- Boton54  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn54 w3-button w3-teal w3-xlarge" style="width:15%">Guardar54 &#10095;</button>
  </div>
  </p_54>

  <p_55 hidden><!-- Boton55  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn55 w3-button w3-teal w3-xlarge" style="width:15%">Siguente55 &#10095;</button>
  </div>
  </p_55>
  <p_56 hidden><!-- Boton56  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn56 w3-button w3-teal w3-xlarge" style="width:15%">Guardar56 &#10095;</button>
  </div>
  </p_56>

  <p_57 hidden><!-- Boton57  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn57 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Indicador57 &#10095;</button>
    <button class="btn_2 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_57>
  <p_58 hidden><!-- Boton58  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn58 w3-button w3-teal w3-xlarge" style="width:15%">Guardar58 &#10095;</button>
  </div>
  </p_58>

  <p_59 hidden><!-- Boton59  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn59 w3-button w3-teal w3-xlarge" style="width:15%">Siguente59 &#10095;</button>
  </div>
  </p_59>
  <p_60 hidden><!-- Boton60  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn60 w3-button w3-teal w3-xlarge" style="width:15%">Guardar60 &#10095;</button>
  </div>
  </p_60>

  <p_61 hidden><!-- Boton61  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn61 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Indicador61 &#10095;</button>
    <button class="btn_2 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_61>
  <p_62 hidden><!-- Boton62  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn62 w3-button w3-teal w3-xlarge" style="width:15%">Guardar62 &#10095;</button>
  </div>
  </p_62>













  <p_63 hidden><!-- Boton63  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn63 w3-button w3-teal w3-xlarge" style="width:15%">Siguente63 &#10095;</button>
  </div>
  </p_63>
  <p_64 hidden><!-- Boton64  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn64 w3-button w3-teal w3-xlarge" style="width:15%">Guardar64 &#10095;</button>
  </div>
  </p_64>

  <p_65 hidden><!-- Boton65  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn65 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Indicador65 &#10095;</button>
    <button class="btn_2 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_65>
  <p_66 hidden><!-- Boton66  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn66 w3-button w3-teal w3-xlarge" style="width:15%">Guardar66 &#10095;</button>
  </div>
  </p_66>

  <p_67 hidden><!-- Boton67  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn67 w3-button w3-teal w3-xlarge" style="width:15%">Siguente67 &#10095;</button>
  </div>
  </p_67>
  <p_68 hidden><!-- Boton68  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn68 w3-button w3-teal w3-xlarge" style="width:15%">Guardar68 &#10095;</button>
  </div>
  </p_68>

  <p_69 hidden><!-- Boton69  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn69 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Indicador69 &#10095;</button>
    <button class="btn_2 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_69>
  <p_70 hidden><!-- Boton70  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn70 w3-button w3-teal w3-xlarge" style="width:15%">Guardar70 &#10095;</button>
  </div>
  </p_70>

  <p_71 hidden><!-- Boton71  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn71 w3-button w3-teal w3-xlarge" style="width:15%">Siguente71 &#10095;</button>
  </div>
  </p_71>
  <p_72 hidden><!-- Boton72  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn72 w3-button w3-teal w3-xlarge" style="width:15%">Guardar72 &#10095;</button>
  </div>
  </p_72>

  <p_73 hidden><!-- Boton73  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn73 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Indicador73 &#10095;</button>
    <button class="btn_2 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_73>
  <p_74 hidden><!-- Boton74  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn74 w3-button w3-teal w3-xlarge" style="width:15%">Guardar74 &#10095;</button>
  </div>
  </p_74>

  <p_75 hidden><!-- Boton75  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn75 w3-button w3-teal w3-xlarge" style="width:15%">Siguente75 &#10095;</button>
  </div>
  </p_75>
  <p_76 hidden><!-- Boton76  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn76 w3-button w3-teal w3-xlarge" style="width:15%">Guardar76 &#10095;</button>
  </div>
  </p_76>

  <p_77 hidden><!-- Boton77  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:30%" ></div>
    <button class="btn77 w3-button w3-teal w3-xlarge" style="width:15%">Agregar Indicador77 &#10095;</button>
    <button class="btn_2 w3-button w3-teal w3-xlarge" style="width:15%">Siguente &#10095;&#10095;</button>
  </div>
  </p_77>
  <p_78 hidden><!-- Boton78  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn78 w3-button w3-teal w3-xlarge" style="width:15%">Guardar78 &#10095;</button>
  </div>
  </p_78>

  <p_79 hidden><!-- Boton79  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn79 w3-button w3-teal w3-xlarge" style="width:15%">Siguente79 &#10095;</button>
  </div>
  </p_79>
  <p_80 hidden><!-- Boton80  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn80 w3-button w3-teal w3-xlarge" style="width:15%">Guardar80 &#10095;</button>
  </div>
  </p_80>

  <p_81 hidden><!-- Boton81  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn81 w3-button w3-teal w3-xlarge" style="width:15%">Siguente81 &#10095;</button>
  </div>
  </p_81>
  <p_82 hidden><!-- Boton82  -->
  <div  class="w3-bar">
    <div class="w3-container" ></div>
    <div class="w3-col w3-container w3-margin " style="width:45%" ></div>
    <button class="btn82 w3-button w3-teal w3-xlarge" style="width:15%">Guardar82 &#10095;</button>
  </div>
  </p_82>

</body>
</html>




<!-- Pie de Pagina -->
<footer class="w3-padding-64"></footer>
</html>