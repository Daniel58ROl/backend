<?php
session_start();
if(isset($_SESSION['autorizado']) && $_SESSION['autorizado']=='abcd4567$'){
     header("Location:formMenu.php");  
}

if(isset($_POST['pasa'])  && $_POST['pasa']=='123$123'){
    require_once('claseUsuario.php');
       $usuarios=new Usuarios;
       foreach($_POST as $variable=>$valor){
          $swap=$variable;
          $$variable=$valor;
       }
      
       $login=$usuarios->buscarUsuario($txtUsuario,sha1($txtPassword));
       $row = $login[0];
        $_SESSION['estatus']=$row['estatus'];
       if($row['estatus']=='activo'){
          $_SESSION['autorizado']='abcd4567$';
          $_SESSION['idUsuario']=$row['usu_id'][0];
          $_SESSION['usuario']=$row['usu_usuario'];
     
       header("Location:formMenu.php");
       }
       else{
          header("Location: index.php");
       }
}
?>

<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="web1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="web1/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body background="C:\wamp64\www\Todos\images\T.jpg">
    <div class="container">
        <div class="col-md-12">
            <div class="col-md-4"></div>
            <div class="col-md-4" id="login">
                <form class="form-signin" action="logincon.php"method="POST">
                    <div class="text-center">
                        <img id="logoI" style="width:400px; height:400px;" src="C:\xampp\htdocs\Todos\imagenes\don.jpg" alt="logoI">
                    </div>
                    <input  type="email"  name="usuario" id="txtUsuario"class="form-control" placeholder="Usuario">
                    <input  type="password"  name="password"  id="txtPassword" class="form-control"  placeholder="Password">
                    <input  type="hidden" id="pasa" name="pasa" value="123$123" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
                    
                </form>
                <center><button class = "btn btn-lg btn-primary btn-block"  onclick = "location.href = 'RegistroUsuarios.php'">Registrarse</button></center>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>   
</html>