<?php

$Page_Title = 'Registro de Usuarios';
$Page = 'registro';
include ('includes/header.php');
//include('registrarUsuario.php');
?>
<!-- Nota: Lista de iconos de Bootstrap 
 https://www.w3schools.com/icons/bootstrap_icons_glyphicons.asp
-->
<div class="jumbotron">
<div  class="container text-center">
 <p>
 	<h2>Registro de Usuarios</h2>
 </p> 
</div>

<div class="container">

				<form action='registrarUsuario.php' method='post'>

					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>	
						</span>		
								<input  class="form-control" id="user" name="user" type="text" placeholder="Usuario" required="true" value="Thioalejo">		
					</div>	

					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
						</span>		
								<input class="form-control" id="password" name="password" type="password" placeholder="Contraseña" required="true" value="alejo">			
					</div>	

					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-edit"></span>
						</span>			
								<input class="form-control" id="firstname" name="firstname" type="text" placeholder="Primer Nombre" required="true" value="Johnny">		
					</div>		

					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-edit"></span>
						</span>			
								<input class="form-control" id="secondname" name="secondname" type="text" placeholder="Segundo Nombre" value="Alejandro">		
					</div>	

					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-edit"></span>
						</span>			
								<input class="form-control" id="lastname1" name="lastname1" type="text" placeholder="Primer Apellido" required="true" value="Martinez">		
					</div>		

					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-edit"></span>
						</span>			
								<input class="form-control" id="lastname2" name="lastname2" type="text" placeholder="Segundo Apellido" value="Saraza">		
					</div>	

					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-envelope"></span>
						</span>			
								<input class="form-control" id="email" name="email" type="email" placeholder="Email" required="true" value="alejo.saraza@gmail.com">	
					</div>		

				<button type="submit" class="btn btn-default btn-block">
				  <span class="glyphicon glyphicon-send"></span> Enviar 
				</button>

				</form>	

</div>
</div>




<?php
include ('includes/footer.php');
?>