<!DOCTYPE html>
<html lang="en">
<head>
  <title>Boletas</title>
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

<body id="fondo1">
	<nav class="fixed-top navbar navbar-light bg-white navbar-expand">
	        <div data-region="drawer-toggle" class="d-inline-block mr-3 drawer-toggle">
	            <button aria-expanded="true" aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left mr-1 btn-secondary" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav" onclick="abrirOcerrar()"><span style="cursor:pointer" onclick="abrirOcerrar()">&#9776;</span></button>
	        </div>

	        <a href="#" class="navbar-brand has-logo
	            ">
	            <span class="logo d-none d-sm-inline">
	                <img src="Imagenes/logos.png" alt="fciencias" width="240" height="120">
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
	                                        Luis Emmanuel
	                                    </span>
	                        </a>
	                    	<div class="dropdown-divider"></div>
	                        <a href="Inicio.php" class="dropdown-item menu-action" role="menuitem" data-title="mymoodle,admin" aria-labelledby="actionmenuaction-2">
	                                <i class="icon fa fa-calendar-o fa-fw " aria-hidden="true" title="Tablero" aria-label="Tablero"></i>
	                            <span class="menu-action-text" id="actionmenuaction-2">
	                                Tablero
	                            </span>
	                        </a>
	                        <a href="Perfil.php" class="dropdown-item menu-action" role="menuitem" data-title="profile,moodle" aria-labelledby="actionmenuaction-3">
	                                <i class="icon fa fa-user fa-fw " aria-hidden="true" title="Perfil" aria-label="Perfil"></i>
	                            <span class="menu-action-text" id="actionmenuaction-3">
	                                Perfil
	                            </span>
	                        </a>
	                        <a href="Calificaciones.php" class="dropdown-item menu-action" role="menuitem" data-title="grades,grades" aria-labelledby="actionmenuaction-4">
	                                <i class="icon fa fa-book fa-fw " aria-hidden="true" title="Calificaciones" aria-label="Calificaciones"></i>
	                            <span class="menu-action-text" id="actionmenuaction-4">
	                                Calificaciones
	                            </span>
	                        </a>
	                        <a href="Chat.php" class="dropdown-item menu-action" role="menuitem" data-title="messages,message" aria-labelledby="actionmenuaction-5">
	                                <i class="icon far fa-comment fa-fw " aria-hidden="true" title="Mensajes" aria-label="Mensajes"></i>
	                            <span class="menu-action-text" id="actionmenuaction-5">
	                                Mensajes
	                            </span>
	                        </a>
	                        <div class="dropdown-divider"></div>
	                        <a href="InicioSesion.php" class="dropdown-item menu-action" role="menuitem" data-title="logout,moodle" aria-labelledby="actionmenuaction-7">
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
	  <a data-toggle="modal" data-target="#crearC" data-whatever="">Crear Curso</a>
	  <a data-toggle="modal" data-target="#inscribirC" data-whatever="">Inscribir Curso</a>
	</div>

	<div class="modal fade" id="crearC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Crear Curso</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Nombre de la Materia</label>
	            <input type="text" class="form-control" id="recipient-name">
	          </div>
	          <div class="form-group">
	            <label for="message-text" class="col-form-label">Descripción de la Materia</label>
	            <textarea class="form-control" id="message-text"></textarea>
	          </div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <button type="button" class="btn btn-primary">Crear materia</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="inscribirC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Inscribir Materia</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Nombre de la Materia</label>
	            <input type="text" class="form-control" id="recipient-name">
	          </div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <button type="button" class="btn btn-primary">Inscribir Materia</button>
	      </div>
	    </div>
	  </div>
	</div>
			
	<div id="main">
		<div id="wrapper">
			<div id="b_w" class="border">
				<div id="bitacora" class="border">
					<div class="card-body">
						<!-- Editable table -->
						<div class="card">
							<h3 class="card-header text-center font-weight-bold text-uppercase py-4">Boleta</h3>
							<div class="card-body">
							<div id="table" class="table-editable">
								<span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
									class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
								<table class="table table-bordered table-responsive-md table-striped text-center">
								<thead>
									<tr>
									<th class="text-center">Nombre</th>
									<th class="text-center">Tarea</th>
									<th class="text-center">Calificacion</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									<td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
									<td class="pt-3-half" contenteditable="true">30</td>
									<td class="pt-3-half" contenteditable="true">10</td>
									<td>
										<span class="table-remove"><button type="button"
											class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
									</td>
									</tr>
									<!-- This is our clonable table line -->
									<tr>
									<td class="pt-3-half" contenteditable="true">Guerra Cortez</td>
									<td class="pt-3-half" contenteditable="true">45</td>
									<td class="pt-3-half" contenteditable="true">0</td>
									<td>
										<span class="table-remove"><button type="button"
											class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
									</td>
									</tr>
									<!-- This is our clonable table line -->
									<tr>
									<td class="pt-3-half" contenteditable="true">Guadalupe House</td>
									<td class="pt-3-half" contenteditable="true">26</td>
									<td class="pt-3-half" contenteditable="true">5</td>
									<td>
										<span class="table-remove"><button type="button"
											class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
									</td>
									</tr>
									<!-- This is our clonable table line -->
									<tr class="hide">
									<td class="pt-3-half" contenteditable="true">Elisa Gallagher</td>
									<td class="pt-3-half" contenteditable="true">31</td>
									<td class="pt-3-half" contenteditable="true">6</td>
									<td>
										<span class="table-remove"><button type="button"
											class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
									</td>
									</tr>
								</tbody>
								</table>
							</div>
							</div>
						</div>
						</div>	
					</div>
				</div>	
			</div>
		</div>
		<script>
			const $tableID = $('#table');
			const $BTN = $('#export-btn');
			const $EXPORT = $('#export');

			const newTr = `
			<tr class="hide">
			<td class="pt-3-half" contenteditable="true">Example</td>
			<td class="pt-3-half" contenteditable="true">Example</td>
			<td class="pt-3-half" contenteditable="true">Example</td>
			<td class="pt-3-half" contenteditable="true">Example</td>
			<td class="pt-3-half" contenteditable="true">Example</td>
			<td class="pt-3-half">
				<span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
				<span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a></span>
			</td>
			<td>
				<span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light">Remove</button></span>
			</td>
			</tr>`;

			$('.table-add').on('click', 'i', () => {

			const $clone = $tableID.find('tbody tr').last().clone(true).removeClass('hide table-line');

			if ($tableID.find('tbody tr').length === 0) {

				$('tbody').append(newTr);
			}

			$tableID.find('table').append($clone);
			});

			$tableID.on('click', '.table-remove', function () {

			$(this).parents('tr').detach();
			});

			$tableID.on('click', '.table-up', function () {

			const $row = $(this).parents('tr');

			if ($row.index() === 0) {
				return;
			}

			$row.prev().before($row.get(0));
			});

			$tableID.on('click', '.table-down', function () {

			const $row = $(this).parents('tr');
			$row.next().after($row.get(0));
			});

			// A few jQuery helpers for exporting only
			jQuery.fn.pop = [].pop;
			jQuery.fn.shift = [].shift;

			$BTN.on('click', () => {

			const $rows = $tableID.find('tr:not(:hidden)');
			const headers = [];
			const data = [];

			// Get the headers (add special header logic here)
			$($rows.shift()).find('th:not(:empty)').each(function () {

				headers.push($(this).text().toLowerCase());
			});

			// Turn all existing rows into a loopable array
			$rows.each(function () {
				const $td = $(this).find('td');
				const h = {};

				// Use the headers from earlier to name our hash keys
				headers.forEach((header, i) => {

				h[header] = $td.eq(i).text();
				});

				data.push(h);
			});

			// Output the result
			$EXPORT.text(JSON.stringify(data));
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

			$('#crearC').on('show.bs.modal', function (event) {
			  var button = $(event.relatedTarget) // Button that triggered the modal
			  //var recipient = button.data('whatever') // Extract info from data-* attributes
			  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			  var modal = $(this)
			  //modal.find('.modal-title').text('New message to ' + recipient)
			  //modal.find('.modal-body input').val(recipient)
			})

			$('#inscribirC').on('show.bs.modal', function (event) {
			  var button = $(event.relatedTarget) // Button that triggered the modal
			  //var recipient = button.data('whatever') // Extract info from data-* attributes
			  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			  var modal = $(this)
			  //modal.find('.modal-title').text('New message to ' + recipient)
			  //modal.find('.modal-body input').val(recipient)
			})

		</script>
	</body>
</html>