<!DOCTYPE html>
<html>
<title>Mi clase</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <img src="Imagenes/logos.png" alt="fciencias" width="200" height="100">
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="Inicio.php" class="w3-bar-item w3-button">Mis clases</a>
    <a href="Perfil.php" class="w3-bar-item w3-button">Mi perfil</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Clase <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button">Tareas pendientes</a>
      <a href="#" class="w3-bar-item w3-button">Examenes</a>
      <a href="Calificaciones.php" class="w3-bar-item w3-button">Calificaciones</a>
      <a href="#" class="w3-bar-item w3-button">Unidades</a>
    </div>
    <a href="#" class="w3-bar-item w3-button">Mi profesor</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Contactar a mi profesor</a>
  </div>

</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">ELEMENTARY ROOM</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:80px"></div>

  <!-- Top header -->
  <header class="w3-container w3-xlarge" style="background:blue">
    <p class="w3-left" style="color:white">Bienvenido a tu clase, Luis Emmanuel</p>
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-main">
    <img src="http://eearivera.edu.ar/wp-content/uploads/2020/03/geografia.jpg" alt="Jeans" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small" style="color: black">GEOGRAFÍA</h1>
      <h1 class="w3-hide-large w3-hide-medium"  style="color: black">GEOGRAFÍA</h1>
      <h1 class="w3-hide-small"  style="color: black">Curso del profesor Carlos<br><h5 style="color: black" >5to grado</h5></h1>
    </div>
  </div>

  <div class="w3-container w3-text-grey">
    <p><h2>Material</h2></p>
  </div>

  <!-- Product grid -->
 <style>

 .menu, .temas{
     list-style:none;
     line-height: 30px;
     margin: left;
     padding-left:0;
     width: 20em;}
 .menu a{
     color: white;
    display:block;
    font-size: 20px;
    text-decoration: none;
    width:80%;
}
 .menu li{
 	box-shadow: 5px 0 rgba(180, 180,180) inset;
    margin-bottom: 10px;
    padding-left: 1.5em;
    --webkit-transition: all 1s;
    -o-transition: all 1s;
    transition: all 1s;
 }

 .menu li:nth-child(1){
      background-color: rgba(180,180,180);
 }
 .menu li:hover{
 	box-shadow: 22em 0 rgba(180,180,180) inset;
 }

.column {
         float: left;
         width: 37%;
         padding: 10px;
         }
.row:after {
         content: "";
         display:table;
         clear: both;
         }
.temas a{
     color:white;
     font-size: 15px;
     padding-top: 10px;
     text-decoration: none;
}
.temas li{
     margin-bottom: 5px;
     padding-left: 1.5em;
     width:80%;
     padding-bottom: 1.5em;
     box-shadow: 5px 0 rgba(200, 200,200) inset;
     --webkit-transition: all 1s;
    -o-transition: all 1s;
    transition: all 1s;
}
.temas li:hover{
    box-shadow: 22em 0 rgba(200,200,200) inset;
}
 </style>

 <div class="row" style="background-color: rgba(152,208,195)">

          <ul class="menu column">
              <li><a href="clase2.html">Unidad 1<br><h6>Espacio geográfico y mapas</h6></a></li>
               <li><a href="#">Unidad 2<br><h6>Componentes naturales</h6></a></li>
               <li><a href="#">Unidad 3<br><h6>Componentes sociales y culturales</h6></a></li>
               <li><a href="#">Unidad 4<br><h6>Componentes económicos</h6></a></li>
               <li><a href="#">Unidad 5<br><h6>Calidad de vida, ambiente y prevención de desastres</h6></a></li>
          </ul>


     <div class="column" style="background-color:rgba(180,180,180); margin-top:25px;margin-left:-7px;height:36em">
      	<ul class="temas">
             <li><a href="#">Los continentes</a></li>
             <li><a href="#">Diversidad cultural de los continentes</a></li>
             <li><a href="#">Población de los continentes</a></li>
             <li><a href="#">Características económicas de los continentes</a></li>
             <li><a href="#">Retos de los continentes</a></li>
         </ul>
     </div>
</div>

  <!-- Subscribe section -->
  <br><div class="w3-container w3-blue w3-padding-32">
    <h1>¿Qué estás pensando?</h1>
    <p>Escribe algo para tus compañeros:</p>
    <p><input class="w3-input w3-border" type="text" placeholder="Tengo dudas en..." style="width:100%" style="height:200px"></p>
    <button type="button" class="w3-button w3-red w3-margin-bottom">¡Listo!</button>
  </div>


  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">los lambdasticos</a></div>

  <!-- End page content -->
</div>

<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">¡Contáctame!</h2>
      <p>Ingresa tu correo electrónico y tu mensaje, te responderé tan pronto como pueda.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Ingresa aquí tu correo"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Ingresa tu mensaje"></p>
      <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Enviar</button>
    </div>
  </div>
</div>

<script>
// Accordion
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
