<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Registrar de Organizacion</title>
	<link href="estilos.css" rel="stylesheet" type="text/css">
</head>

	<body>
		<div class="group">
		<form action="registroOrg.php" method="POST">
			<center></center><h2><em>Registro de Organización</em></h2></center>
			  
			<label for="Nombre">Nombre<span><em>(requerido)</em></span></label>
			<input type="text" required pattern="[A-Z-a-z ]+" placeholder="Nombre de la organización" name="Nombre"  class="form-input" required/>             
			  
			<label for="Calle">Calle<span><em>(requerido)</em></span></label>
			<input type="text" required pattern="[A-Za-z0-9 ]#+" name="Calle" class="form-input" />     

			<label for="Municipio">Localidad <span><em>(requerido)</em></span></label>
			<input type="text" required pattern="[A-Z-a-z ]+" name="Municipio" class="form-input" required/>   
			  
			<label for="Ciudad">Ciudad <span><em>(requerido)</em></span></label>
			<input type="text" required pattern="[A-Z-a-z]+" name="Ciudad" class="form-input" min="1" required/>             
			  
			<label for="Estado">Estado<span><em>(requerido)</em></span></label>
			<input type="text" required pattern="[A-Z-a-z]+" name="Estado" class="form-input"  required/>
			<label for="CP">Codigo Postal<span><em>(requerido)</em></span></label>
			<input type="text" minlength="5" maxlength="5" name="CP" class="form-input"  required/>
			<label for="Telefono">Telefono<span><em>(requerido)</em></span></label>
			<input type="Tel" minlength="10" required pattern="[0-9]+"  name="Telefono" class="form-input"  required/>
			<label for="Correo">Correo Electronico<span><em>(requerido)</em></span></label>
			<input type="email" name="Correo" placeholder="ejemplo@um.com" class="form-input"  required/>
			<label for="Contraseña">Contrase&ntilde;a<span><em>(requerido)</em></span></label>
			<input type="password" minlength="8" placeholder="8 caracteres como minimo"name="Contraseña" class="form-input"  required/>
			<label for="Contraseña2">Confirmar Contrase&ntilde;a<span><em>(requerido)</em></span></label>
			<input type="password" minlength="8"placeholder="8 caracteres como minimo" name="Contraseña2" class="form-input"  required/>
			 <div class="form-group">
           <!-- <label>Tipo de Usuario</label></br>-->
           <!-- <select id="TipUsuario">-->
                <!--<option value="Beneficiario">Beneficiario</option>-->
                <!--<option value="Organizacion">Organizacion</option>-->
            </select>
			<!--<label for="TipoUsuario">Tipo de Usuario<span><em>(requerido)</em></span></label>-->
			<!--<input type="text"name="TipoUsuario" class="form-input"  required/>-->						
			<center>
				<input class="form-btn" name="submit" type="submit" value="Registrar">
			<!--<<button class = "form-btn" onclick = href = 'C:/xampp/htdocs/Todos/Zoon10/index.html'">Volver</button>-->
			</center>
		  </form>
		<center><button class = "form-btn" onclick = "location.href = 'Principal.html'">Volver</button></center>
		</div>
	</body>
</html>