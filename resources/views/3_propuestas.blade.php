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

<!-- Buscador -->
<div class="w3-padding-24 w3-teal">
<div class="w3-row">
<div class="w3-bar w3-center w3-margin-to">
  <div class="w3-col w3-container" style="width:30%">
    <h3 class="w3-right" >Búsqueda:</h3>
  </div>
  <div class="w3-col w3-container" style="width:40%">
    <input autocomplete="on"  class="w3-input w3-border w3-white w3-border-black w3-hover-border-white" type="text">
  </div>
  <div class="w3-col w3-container" style="width:30%">
    <button class="w3-left w3-round w3-white w3-border w3-button w3-medium w3-mobile w3-center" >
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </svg></button>
  </div>
</div>
</div>
</div>
<!-- Titulo -->
<div class="w3-container w3-margin-left" style="margin-top:20px" id="showcase">
    <h1 class="w3-xxxlarge"><b>Propuestas</b></h1>
    <hr style="width:80px;border:5px solid rgb(0, 128, 128)" class="w3-round">
</div>
<!-- Tabla -->
<div class="w3-container w3-margin-left">
  <table class="w3-table w3-bordered w3-hoverable w3-large">
  <thead class="w3-xlarge">
    <tr>
      <th>Código del Caso</th>
      <th>Tipo de Cáncer</th>
      <th>Técnica</th>
      <th>Tipo de Optimización</th>
      <th>Autor</th>
      <th>Institución</th>
      <th> </th>
      <th> </th>
    </tr>
    </thead>

    <tr>
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
      <td>50</td>
      <td>Smith</td>
      <td>Smith</td>
      <td class="w3-center">
        <button class="w3-center w3-bar-item w3-button w3-teal w3-small w3-mobile w3-hover-grey">Ver más</button>
      </td>
      <td>
        <button class="w3-button w3-small w3-teal w3-hover-grey" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
        </svg>
        </button>
      </td>
    </tr>

    <tr>
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
      <td>50</td>
      <td>Smith</td>
      <td>Smith</td>
      <td class="w3-center">
        <button class="w3-center w3-bar-item w3-button w3-teal w3-small w3-mobile w3-hover-grey">Ver más</button>
      </td>
      <td>
        <button class="w3-button w3-small w3-teal w3-hover-grey" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
        </svg>
        </button>
      </td>
    </tr>

    <tr>
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
      <td>50</td>
      <td>Smith</td>
      <td>Smith</td>
      <td class="w3-center">
        <button class="w3-center w3-bar-item w3-button w3-teal w3-small w3-mobile w3-hover-grey">Ver más</button>
      </td>
      <td>
        <button class="w3-button w3-small w3-teal w3-hover-grey" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
        </svg>
        </button>
      </td>
    </tr>

    <tr>
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
      <td>50</td>
      <td>Smith</td>
      <td>Smith</td>
      <td class="w3-center">
        <button class="w3-center w3-bar-item w3-button w3-teal w3-small w3-mobile w3-hover-grey">Ver más</button>
      </td>
      <td>
        <button class="w3-button w3-small w3-teal w3-hover-grey" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
        </svg>
        </button>
      </td>
    </tr>

    <tr>
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
      <td>50</td>
      <td>Smith</td>
      <td>Smith</td>
      <td class="w3-center">
        <button class="w3-center w3-bar-item w3-button w3-teal w3-small w3-mobile w3-hover-grey">Ver más</button>
      </td>
      <td>
        <button class="w3-button w3-small w3-teal w3-hover-grey" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
        </svg>
        </button>
      </td>
    </tr>

    <tr>
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
      <td>50</td>
      <td>Smith</td>
      <td>Smith</td>
      <td class="w3-center">
        <button class="w3-center w3-bar-item w3-button w3-teal w3-small w3-mobile w3-hover-grey">Ver más</button>
      </td>
      <td>
        <button class="w3-button w3-small w3-teal w3-hover-grey" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
        </svg>
        </button>
      </td>
    </tr>

    <tr>
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
      <td>50</td>
      <td>Smith</td>
      <td>Smith</td>
      <td class="w3-center">
        <button class="w3-center w3-bar-item w3-button w3-teal w3-small w3-mobile w3-hover-grey">Ver más</button>
      </td>
      <td>
        <button class="w3-button w3-small w3-teal w3-hover-grey" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
        </svg>
        </button>
      </td>
    </tr>

    <tr>
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
      <td>50</td>
      <td>Smith</td>
      <td>Smith</td>
      <td class="w3-center">
        <button class="w3-center w3-bar-item w3-button w3-teal w3-small w3-mobile w3-hover-grey">Ver más</button>
      </td>
      <td>
        <button class="w3-button w3-small w3-teal w3-hover-grey" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
        </svg>
        </button>
      </td>
    </tr>

    <tr>
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
      <td>50</td>
      <td>Smith</td>
      <td>Smith</td>
      <td class="w3-center">
        <button class="w3-center w3-bar-item w3-button w3-teal w3-small w3-mobile w3-hover-grey">Ver más</button>
      </td>
      <td>
        <button class="w3-button w3-small w3-teal w3-hover-grey" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
        </svg>
        </button>
      </td>
    </tr>
    

    <tr>
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
      <td>50</td>
      <td>Smith</td>
      <td>Smith</td>
      <td class="w3-center">
        <button class="w3-center w3-bar-item w3-button w3-teal w3-small w3-mobile w3-hover-grey">Ver más</button>
      </td>
      <td>
        <button class="w3-button w3-small w3-teal w3-hover-grey" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
        </svg>
        </button>
      </td>
    </tr>










  </table>
</div>

 

</body>
<!-- Pie de Pagina -->
<footer class="w3-padding-64"></footer>
</html>