<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  	<script type="text/javascript">  
	function onlyOne(checkbox) {
    	var checkboxes = document.getElementsByName('tipo')
    	checkboxes.forEach((item) => {
        	if (item !== checkbox) item.checked = false
    	})
	}
	</script>

    <!-- Css-->
    <link rel="stylesheet" type="text/css" href="CSS/styles.css" th:href="@{/CSS/styles.css}">
</head>
<body id=fondo2>
	<div class="modal-dialog text-center">
		<div class="col-sm-8 registro">
			<div class = "modal-content">
				<div class= "col-12 reg-img-registro">
					<h2><i>Registro</i></h2>
					<img src="Imagenes/ARDILLA5.png"/>
				</div>
				<form class="col-12">
					<div class="form-group-registro" id="nombre">
						<input type= "text" class="form-contol" placeholder="Nombre">
					</div>
					<div class="form-group-registro" id="correo">
						<input type= "text" class="form-contol" placeholder="Correo Electronico">
					</div>
					<div class="form-group-registro" id="contrasena">
						<input type= "password" class="form-contol" placeholder="Contrasena">
					</div>
					<div class="form-group-registro" id="contrasenac">
						<input type= "password" class="form-contol" placeholder="Confirmar Contrasena">
					</div>
					
					<input type="checkbox" name="tipo" value="Profesor" onclick="onlyOne(this)" checked=""><span class="checkboxtexto">Profesor</span><br>      
       		 		<input type="checkbox" name="tipo" value="Padre" onclick="onlyOne(this)" ><span class="checkboxtexto">Padre</span><br> 
       	


					<button id="bR" type="submit" class="btn btn-danger"><i class="fas fa-sign-in-alt"></i>  Registrarse </button>
					<button id="bR2" type="submit" class="btn btn-danger"><i class="fas fa-ban"></i>  Cancelar </button>
				</form>

		</div>
	</div>
</body>

</html>