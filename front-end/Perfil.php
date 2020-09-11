<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perfil</title>
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
			
	<div id="main">
		<div id="wrapper">
			<div id="b_w" class="border">
				<div class="card flex-row flex-wrap">
			        <div class="card-header border-0">
			            <img class="img-fluid rounded-circle" src="Imagenes/f3.png" alt="" width="115" height="86">
			        </div>
			        <div class="card-block px-2" style="margin-left: 15px; margin-top: 20px;" >
			            <h2 class="card-title">Edith Araceli Reyes López</h2>
			        </div>
			    </div>
			</div>

			<div id="c_w" class="border">
				<div id="contenedor" class="container-fluid">
				  <div class="row justify-content-center">
				    <div class="col-sm-7 border" style="margin-right: 30px;"> 
				    	<div class="card-body">
							<h5 class="card-title d-inline">Detalles de usuario</h5>
							<p style="text-align: right;">
							  <a href="#" 
							   style="text-decoration: none">Editar perfil</a>
							</p>
							<p style="margin-bottom: 0"><b>Dirección Email</b></p>
							<p style="color:blue;">edithareyesl@ciencias.unam.mx</p>
							<p style="margin-bottom: 0"><b>Tutor</b></p>
							<p style="color:blue;">edithareyesl@ciencias.unam.mx</p>
						</div>	
				    </div>

				    <div class="col-sm-4 border h-50">
				    	<div class="card-body">
							<h5 class="card-title d-inline">Revisar: </h5>
							<p>    </p>
							<p style="margin-bottom: 0">
							  <a href="#" 
							   style="text-decoration: none">Calificaciones</a>
							</p>
							<p>
							  <a href="#" 
							   style="text-decoration: none">Tareas</a>
							</p>
						</div>	
				    </div>

				  </div>
				</div>
			</div>

		</div>
	</div>


<script>

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
</script>


</body>
</html>
