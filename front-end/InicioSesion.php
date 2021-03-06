<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Css-->
    <link rel="stylesheet" type="text/css" href="CSS/styles.css" th:href="@{/CSS/styles.css}">
</head>
<body id="fondo1">
	<div class="modal-dialog text-center">
		<div class="col-sm-8 inicio-sesion">
			<div class = "modal-content">
				<div class= "col-12 user-img-inicio-sesion">
					<img src="Imagenes/ARDILLA6.png"/>
				</div>
				<form class="col-12">
					<div class="form-group-inicio-sesion" id="correo">
						<input type= "text" class="form-contol" placeholder="Correo Electronico">
					</div>
					<div class="form-group-inicio-sesion" id="contrasena">
						<input type= "password" class="form-contol" placeholder="Contrasena">
					</div>
					<div class="form-check">
    					<input type="checkbox" class="form-check-input" id="exampleCheck1">
   						<label class="form-check-label" for="exampleCheck1">Recordarme</label>
  					</div>
					<button id="bR3" type="submit" class="btn btn-danger"><i class="fas fa-sign-in-alt"></i>  Iniciar Sesión </button>
					<button id="bR4" type="submit" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i>  Regresar </button>
				</form>
		</div>
	</div>
</div>

</body>
</html>