<?php
    include 'conexion.php';
    $query1=mysqli_query($mysqli,"SELECT id, nombre FROM datos");
    
    if(isset($_POST['estado']))
    {
        $estado=$_POST['estado'];
        echo $estado;
    }
?>
<?php
    include 'conexion.php';
    $query2=mysqli_query($mysqli,"SELECT id, municipio FROM municipios ORDER BY municipio");
    
    if(isset($_POST['municipio']))
    {
        $municipios=$_POST['municipio'];
        echo $municipios;
    }
?>
<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Registro de Usuarios</title>
	<link href="estilos.css" rel="stylesheet" type="text/css">
</head>

	<body>
		<div class="group">
		<form action="registroBen.php" method="POST">
			<center></center><h2><em>Registro de Usuarios</em></h2></center>
			<!--<center>--> 
			<label for="Nombre">Nombre<span><em>(requerido)</em></span></label>
			<input type="text" required pattern="[A-Za-z ]+"name="Nombre"  class="form-input" required/>             
			  
			<label for="Calle">Calle<span><em>(requerido)</em></span></label>
			<input type="text" name="Calle" class="form-input" />     
            <label for="Ciudad">Municipio <span><em>(requerido)</em></span></label>
			<input type="text" required pattern="[A-Za-z0-9]+" name="Municipio" class="form-input" />
			
			
			<label for="Ciudad">Ciudad<span><em>(requerido)</em></span></label>
			<select name=Ciudad>
					<option value="">seleccione una ciudad</option>
                    <?php 
                        while($datos = mysqli_fetch_array($query2))
                        {
                    ?>
					        
                            <option value="<?php echo $datos['municipio']?>"> <?php echo $datos['municipio']?> </option>
                    <?php
                        }
                    ?> 
                    </select>
			  <label for="Estado">Estado<span><em>(requerido)</em></span></label>
                <select name=Estado>
                    <option value="">seleccione una Estado</option>
				    <?php 
                        while($datos = mysqli_fetch_array($query1))
                        {
                    ?>
					        
                            <option value="<?php echo $datos['nombre']?>"> <?php echo $datos['nombre']?> </option>
                    <?php
                        }
                    ?> 
                    </select>
				
				</select><br></br>
			<label for="Estado">Código Postal<span><em>(requerido)</em></span></label>
			<input type="text" minlength="5" maxlength="5"  name="CP" class="form-input"  required/>
			<label for="Telefono">Teléfono<span><em>(requerido)</em></span></label>
			<input type="text" minlength="10" maxlength="10"required pattern="[0-9]+"  name="Telefono" class="form-input"  required/>
			<label for="Correo">Correo Electronico<span><em>(requerido)</em></span></label>
			<input type="email" name="Correo" class="form-input"  required/>
			<label for="Contraseña">Contrase&ntilde;a<span><em>(requerido)</em></span></label>
			<input type="password" minlength="8"name="Contraseña" class="form-input"  required/>
			<label for="Contraseña2">Confirmar Contrase&ntilde;a<span><em>(requerido)</em></span></label>
			<input type="password" minlength="8"name="Contraseña2" class="form-input"  required/>
			 <div class="form-group">
            <label>Tipo de Usuario</label></br>
            <select id="TipUsuario" name="TipUsuario">
                <option value="Beneficiario">Beneficiario</option>
                <option value="Donante">Donante</option>
            </select>
			<!--</center>--> 
			<!--<label for="TipoUsuario">Tipo de Usuario<span><em>(requerido)</em></span></label>-->
			<!--<input type="text"name="TipoUsuario" class="form-input"  required/>-->						
			<center>
				<input class="form-btn" name="submit" type="submit" value="Registrar">
			<!--<<button class = "form-btn" onclick = href = 'C:/xampp/htdocs/Todos/Zoon10/index.html'">Volver</button>-->
			</center>
		  </form>
		
		<center><button class = "form-btn" onclick = "location.href = 'loginUsuiario.php'">Volver</button></center>
		</div>
	</body>
</html>