<!--------------------------------------------------------------------------------------------------------
|--------------------------------------------------------------------------------------------------------
| PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ   
| TELEFONO :0426-249-15-40
| CORREO : DENNALY88@GMAIL.COM
|------------------------------------------------------------------------------------------------------------
|  
|  DIVISIÓN DESARROLLO DE SISTEMAS Y DIVISION DE SERVIDORES Y REDES
|  VENEZOLANA DE TELEVISION C.A
|  CANAL 8
|  PROYECTO SOCIOTECNOLOGICO 
|  UNIVERSIDAD EXPERIMENTAL DE LA GRAN CARACAS UNEXCA
|  PARA OPTAR POR EL TITULO DE INGENIERO EN SISTEMA 
| 
|
--------------------------------------------------------------------------------------------------------->																				
<!DOCTYPE html>
<html lang="es">
  <head>
  <link rel="shortcut icon" href="../images/favicon.ico">
	<title>Servi-Red | VTV</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
	<body>
	<section class="ftco-section">
		<div class="container">
		<div class="row justify-content-center">
		</center>
		<img src="images/logo2.png" alt="logo" width='180' height='120'>
		</div><br>
		<div class="row justify-content-center">
		<div class="col-md-6 col-lg-4">
		<div class="login-wrap p-0">
<!---------------------------------------------------------------------------------------------------------------------------------------->	
<!-------------------------------------------------                VALIDACIONES                         ---------------------------------->	
<!---------------------------------------------------------------------------------------------------------------------------------------->	
		
		<?php
				unset($cf);
				$cf= $_GET["cf"]; /**********************     CONEXION FALLIDA   ***********************************/
				if ($cf<2) {
				} else 
				{
				include 'mensajes/conexion-fallida.php';
				}  
		?>

		 <?php
				unset($ui);
				$ui = $_GET["ui"];/*************************   USUARIO INACTIVO *******************************************************/
				if ($ui<2) {
				} else 
				{
				include 'mensajes/usuario-inactivo.php';
				}  
			?>
		<?php
				unset($cnr);/************************************** CLAVE NO REGISTRADA **************************************************/
				$cnr = $_GET["cnr"];
				if ($cnr<2) {
				} else 
			    {
			    include 'mensajes/clave-no-registrado.php';
				}  
			?>


			<?php
				unset($unr);/*************************************** USUARIO NO REGISTRADO ************************************************/
				$unr = $_GET["unr"];
				if ($unr<2) {
				}else 
				{
				include 'mensajes/usuario-no-registrado.php';
				}  
			?>
			<?php
				unset($cps);/*************************************** PREGUNTA DE SEGURIDAD INCORRECTA ************************************************/
				$cps = $_GET["cps"];
				if ($cps<2) {
				} else 
				{
				include 'mensajes/cedula.php';
				}  
			?>
<!---------------------------------------------------------------------------------------------------------------------------------------->	
<!---------------------------------------------------------------------------------------------------------------------------------------->	
<!---------------------------------------------------------------------------------------------------------------------------------------->	

<form action="sql/validar.php"  method="POST">
		<div class="form-group">
		<input type="text" class="form-control" placeholder="Usuario" name="usuarios" required>
		</div>
		<div class="form-group">

		<input id="password" pattern="(?=.*\d)(?=.*[a-záéíóúüñ])(?=.*[A-ZÁÉÍÓÚÜÑ])(?=.*[@$!%?&*#]).{8,16}"
		title="Debe tener al menos una Mayúscula, una Minúscula ,un Caracter Especial y un Numero .  (Minimo 8 y Maximo 16 Caracteres)  "
		type="password" class="form-control" placeholder="Contraseña" name="contraseñas" required>
		<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		<br>
		<button class="form-control" type="button" onclick="mostrarContrasena()">Mostrar Contraseña</button>
<script>
  function mostrarContrasena(){
      var tipo = document.getElementById("password");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }
</script>

		</div>
		<div class="form-group">
			<button type="submit" class="form-control btn btn submit px-3">Entrar</button>
		</div>	
	</form>

	
	<form action="olvidosuclave.php"  method="POST">													
	    <div class="form-group">
			<button type="submit" class="form-control btn btn submit px-3"><h6>¿ Olvidaste tu usuario o clave ?</h6></button>
		</div>	
	</form>
			<center><img src="images/principal.png" alt="logo">
	</div><center> © Venezolana de Televisión Todos los Derechos Reservados- 2024</div></center>
	</div>
	</div>
</section>
					<script src="js/jquery.min.js"></script>
					<script src="js/popper.js"></script>
					<script src="js/bootstrap.min.js"></script>
					<script src="js/main.js"></script>
	</body>
</html>
<!--------------------------------------------------------------------------------------------------------
|--------------------------------------------------------------------------------------------------------
| PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ   
| TELEFONO :0426-249-15-40
| CORREO : DENNALY88@GMAIL.COM
|------------------------------------------------------------------------------------------------------------
|  
|  DIVISIÓN DESARROLLO DE SISTEMAS Y DIVISION DE SERVIDORES Y REDES
|  VENEZOLANA DE TELEVISION C.A
|  CANAL 8
|  PROYECTO SOCIOTECNOLOGICO 
|  UNIVERSIDAD EXPERIMENTAL DE LA GRAN CARACAS UNEXCA
|  PARA OPTAR POR EL TITULO DE INGENIERO EN SISTEMA 
| 
|
--------------------------------------------------------------------------------------------------------->







