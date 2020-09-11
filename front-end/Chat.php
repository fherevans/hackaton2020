<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="CSS/styles.css">
</head>

<body>
	<nav class="fixed-top navbar navbar-light bg-white navbar-expand moodle-has-zindex">
        <div data-region="drawer-toggle" class="d-inline-block mr-3 drawer-toggle">
            <button aria-expanded="true" aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left mr-1 btn-secondary" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav" onclick="abrirOcerrar()"><span style="cursor:pointer" onclick="abrirOcerrar()">&#9776;</span></button>
        </div>

        <a href="#" class="navbar-brand has-logo
            ">
            <span class="logo d-none d-sm-inline">
                <img src="Imagenes/logos.png" alt="fciencias">
            </span>
    	</a>

    	<ul class="navbar-nav d-none d-md-flex">
        <!-- custom_menu -->
        
        <!-- page_heading_menu -->
	        
	    </ul>
	    <ul class="nav navbar-nav ml-auto">
	        <div class="d-none d-lg-block">
	            
	        </div>

	        <li class="usermenu"><div class="action-menu moodle-actionmenu nowrap-items d-inline" id="action-menu-1" data-enhance="moodle-core-actionmenu">

	        <div class="menubar d-flex " id="action-menu-1-menubar" role="menubar">

	            <div class="action-menu-trigger">
	                <div class="dropdown">
	                    <a href="#" class=" dropdown-toggle" id="dropdown-1" title="" role="menuitem" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                        
	                        <span class="userbutton"><span class="usertext"></span><span class="avatars"><span class="avatar current"><img src="Imagenes/f2.png" class="rounded-circle" alt="Imagen de Usuario" title="Imagen de Usuario" class="userpicture defaultuserpic" role="presentation" width="35" height="35"></span></span></span>
	                            
	                        <b class="caret"></b>
	                    </a>
	                    
	                    <div class="dropdown-menu dropdown-menu-right menu  align-tr-br" id="action-menu-1-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-1" role="menu" data-align="tr-br">
	                    	<!-- Agregar a donde se dirige -->
	                        <a href="#" class="dropdown-item text-username menu-action" role="menuitem" aria-labelledby="actionmenuaction-1">
	                            <!-- Aquí es donde se debe de poner el nombre del usuario -->
	                            <i class="icon fa fa-user fa-fw " aria-hidden="true" title="Edith Araceli Reyes López" aria-label="Edith Araceli Reyes López"></i>
	                                    <span class="menu-action-text" id="actionmenuaction-1">
	                                        Edith Araceli Reyes López
	                                    </span>
	                        </a>
	                    	<div class="dropdown-divider"></div>
	                        <a href="#" class="dropdown-item menu-action" role="menuitem" data-title="mymoodle,admin" aria-labelledby="actionmenuaction-2">
	                                <i class="icon fa fa-calendar-o fa-fw " aria-hidden="true" title="Tablero" aria-label="Tablero"></i>
	                            <span class="menu-action-text" id="actionmenuaction-2">
	                                Tablero
	                            </span>
	                        </a>
	                        <a href="#" class="dropdown-item menu-action" role="menuitem" data-title="profile,moodle" aria-labelledby="actionmenuaction-3">
	                                <i class="icon fa fa-user fa-fw " aria-hidden="true" title="Perfil" aria-label="Perfil"></i>
	                            <span class="menu-action-text" id="actionmenuaction-3">
	                                Perfil
	                            </span>
	                        </a>
	                        <a href="#" class="dropdown-item menu-action" role="menuitem" data-title="grades,grades" aria-labelledby="actionmenuaction-4">
	                                <i class="icon fa fa-book fa-fw " aria-hidden="true" title="Calificaciones" aria-label="Calificaciones"></i>
	                            <span class="menu-action-text" id="actionmenuaction-4">
	                                Calificaciones
	                            </span>
	                        </a>
	                        <a href="https://moodle.fciencias.unam.mx/cursos/message/index.php" class="dropdown-item menu-action" role="menuitem" data-title="messages,message" aria-labelledby="actionmenuaction-5">
	                                <i class="icon far fa-comment fa-fw " aria-hidden="true" title="Mensajes" aria-label="Mensajes"></i>
	                            <span class="menu-action-text" id="actionmenuaction-5">
	                                Mensajes
	                            </span>
	                        </a>
	                        <a href="https://moodle.fciencias.unam.mx/cursos/user/preferences.php" class="dropdown-item menu-action" role="menuitem" data-title="preferences,moodle" aria-labelledby="actionmenuaction-6">
	                                <i class="icon fa fa-wrench fa-fw " aria-hidden="true" title="Preferencias" aria-label="Preferencias"></i>
	                            <span class="menu-action-text" id="actionmenuaction-6">
	                                Preferencias
	                            </span>
	                        </a>
	                        <div class="dropdown-divider"></div>
	                        <a href="https://moodle.fciencias.unam.mx/cursos/login/logout.php?sesskey=OPHxMTDkQW" class="dropdown-item menu-action" role="menuitem" data-title="logout,moodle" aria-labelledby="actionmenuaction-7">
	                                <i class="icon fas fa-sign-out-alt fa-fw " aria-hidden="true" title="Salir" aria-label="Salir"></i>
	                            <span class="menu-action-text" id="actionmenuaction-7">
	                                Salir
	                            </span>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>

			</div></li>
	    </ul>
	</nav>

	<div id="mySidenav" class="sidenav">
	  <a href="#">About</a>
	  <a href="#">Services</a>
	  <a href="#">Clients</a>
	  <a href="#">Contact</a>
	</div>
			
	<div id="main" style="overflow : scroll;">
		<div id="b_chat" class="border">
			<div id="contenedor" class="container-fluid" style="height: 100%;">
			  	<div class="row justify-content-center" style="height: 100%;">
			   		<div id="opciones" class="col-sm-3 border border-dark" style="height: 100%; padding: 0; margin: 0;"> 
			    		<div id="contactos" class="border-bottom border-dark" style="height: 50%; padding: 0; margin-right: 0;">
			    			<div class="border-bottom border-dark" style="margin: 0; background-color: lightblue;"> 
			    				<h5 style="text-align: center; ">Contactos</h5>
			    			</div>

			    			<div id="lista_contactos" style="height: 100%; overflow:auto; padding: 0; margin: 0">
			    				<div class="border-bottom border-dark" style="height: 25%; padding: 0; margin: 0">
			    					<div class="row justify-content-center" style="padding-bottom: 0;">
										<div class="col-sm-3 " style="padding: 0; padding-top: 3px; display: flex; justify-content: center; height: auto; width: auto;">
											<img src="Imagenes/f2.png" class="rounded-circle" alt="Imagen de Usuario s" title="Imagen de Usuario s" class="userpicture defaultuserpic" role="presentation" width="45" height="45">
										</div>
									  	<div class="col-sm-8" style="text-align: left; padding: 10px; height: auto; width: auto;">Juanito López</div>
									</div> 
			    				</div>
			    			</div>

			    		</div>

			    		<div id="Grupos" style="height: 50%;">
			    			<div class="border-bottom border-dark" style="margin: 0; background-color: lightblue;"> 
			    				<h5 style="text-align: center; ">Grupos</h5>
			    			</div>

			    			<div id="lista_grupo" style="height: 100%">
			    				
			    			</div>

			    		</div>

			    	</div>

			    	<div id="mensajes" class="col-sm-8 border border-left-0 border-dark" > 
			    		
				    	<div id="muestra_msj" style="overflow-y: scroll; overflow-x: hidden; height: 82%;">

							<div id="m1"> 
								<div class="row">
									<div class="col-sm-1 " style="padding: 0 auto; margin-top: 15px; margin-left: 7px; display: flex;  height: auto; width: auto;">
										<img src="Imagenes/f2.png" class="displayed rounded-circle" alt="Imagen de Usuario s" title="Imagen de Usuario s" class="userpicture defaultuserpic" role="presentation" width="45" height="45" style="float: left;">
									</div>
								  	
								
									<div class="col-sm-5 center" style="text-align: left; padding: 10px; height: auto; width: auto;">
										<div class="border border-dark rounded" style="display:inline-block; float: left;"> 
											<p style="padding: auto; margin: 4px;">Hola que tal? Cómo les va? Espero que muy bien XD</p> 
										</div>
									</div>
								</div>

								<div class="row" style="margin-top: -10px;">
									<div class="col-sm-1 " style="padding: 0 auto; margin-top: 7px; margin-left: 7px; display: flex;  height: auto; width: auto;">
									</div>
								  	
								
									<div class="col-sm-5 center" style="text-align: left; padding: 10px; height: auto; width: auto;">
										<div class="border border-dark rounded" style="float: left;"> 
											<p style="padding: auto; margin: 4px;">Hola que tal? Cómo les va? Espero que muy bien XD</p> 
										</div>
									</div>
								</div>
							</div>	

							<div id="m2"> 
								<div class="row justify-content-end">
									<div class="col-sm-5 center" style="text-align: left; padding: 10px; height: auto; width: auto;">
										<div class="border border-dark rounded" style="display:inline-block; float: right;"> 
											<p style="padding: auto; margin: 4px;">Hola que tal? Cómo les va? Espero que muy bien XD</p> 
										</div>
									</div>
									<div class="col-sm-1 " style="padding: 5px; margin: 0; margin-top: 14px; display: flex;  height: auto; width: auto;">
										<img src="Imagenes/f2.png" class="displayed rounded-circle" alt="Imagen de Usuario s" title="Imagen de Usuario s" class="userpicture defaultuserpic" role="presentation" width="45" height="45" style="float: right; margin: 0; padding: 0">
									</div>
								</div>
							</div>			    		

				    	</div>

			    		<div id="envia">
			    			<div class="row justify-content-center" >
								<div class="col-sm-2" style="text-align: right;">
									<img src="Imagenes/f2.png" class="rounded-circle" alt="Imagen de Usuario s" title="Imagen de Usuario s" class="userpicture defaultuserpic" role="presentation" width="50" height="50">
								</div>

								<div class="col-sm-7">
									<textarea id="textarea_msj" name="w3review" rows="1" cols="50" style="width: 100%"> </textarea>
									<button onclick="enviarMsj()" class="btn btn-secondary btn-sm" style="float: right;">Enviar</button>
								</div>

								<div class="col-sm-2" >
									<img src="Imagenes/f2.png" class="rounded-circle" alt="Imagen de Usuario s" title="Imagen de Usuario s" class="userpicture defaultuserpic" role="presentation" width="50" height="50" >
								</div>
							</div> 
			    		</div>
			    	</div>

			  	</div>
			</div>
		</div>
	</div>


<script>

var msj_user = true; 

const inicio = `
<div> 
	<div class="row justify-content-end" style="margin-top: -10px;">
		<div class="col-sm-5 center" style="text-align: left; padding: 10px; height: auto; width: auto;">
			<div class="border border-dark rounded" style="display:inline-block; float: right;"> 
				<p style="padding: auto; margin: 4px;"> `;

const medio = ` </p> 
			</div>
		</div>`;

const foto =` 
		<div class="col-sm-1 " style="padding: 5px; margin: 0; display: flex;  height: auto; width: auto;">
			<img src="Imagenes/f2.png" class="displayed rounded-circle" alt="Imagen de Usuario s" title="Imagen de Usuario s" class="userpicture defaultuserpic" role="presentation" width="45" height="45" style="float: right; margin: 0; padding: 0">
		</div>`;

const sinFoto =` 
		<div class="col-sm-1 " style="padding: 5px; margin: 0; display: flex;  height: auto; width: auto;">
		</div>`;


const fin = `
	</div>
</div>`;


$('#textarea_msj').keypress(function (e) {
	console.log("Hola");
  if (e.which == 13) {
  	enviarMsj();
    return false;    //<---- Add this line
  }
});

function abrirOcerrar() {
	var valor = document.getElementById("mySidenav").getBoundingClientRect().width;
	console.log(valor);
	if (valor == 0) {
		console.log("cero");
		document.getElementById("mySidenav").style.width = "200px";
  		document.getElementById("main").style.marginLeft = "200px";
	}else{
		console.log("no cero");
		document.getElementById("mySidenav").style.width = "0";
  		document.getElementById("main").style.marginLeft = "0";
	}
}

function enviarMsj(){
	
	var x = document.getElementById("textarea_msj").value; 

	if (x.trim() == ""){
		document.getElementById('textarea_msj').value = '';
		return false;
	}


	if (msj_user){
		document.getElementById("muestra_msj").innerHTML += inicio + x + medio + sinFoto + fin;
	}else{
		document.getElementById("muestra_msj").innerHTML += inicio + x + medio + foto + fin;
	}
	document.getElementById('textarea_msj').value = '';

	var messageBody = document.querySelector('#muestra_msj');
	messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;


}

</script>


</body>
</html>
