<!-----------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------|
| PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ                                                  |
| CEDULA    : V 16.029.567                                                                             |
| TELEFONO  : 0426-249-15-40                                                                           |
| CORREO    : DENNALY88@GMAIL.COM                                                                      |
| DIRECCIÓN : CUA , ESTADO MIRANDA  CONJUTO RESIDENCIAL EL CASTILLO APARTAMENTO 62-C                   |                                                     |
|------------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------|  
|                                                                                                      |
|  VENEZOLANA DE TELEVISIÓN C.A                                                                        |
|  DIVISIÓN DESARROLLO DE SISTEMAS Y DIVISIÓN DE SERVIDORES Y REDES                                    |
|  CANAL 8                                                                                             |
|                                                                                                      |
|  PROYECTO SOCIOTECNOLOGICO                                                                           |
|  UNIVERSIDAD EXPERIMENTAL DE LA GRAN CARACAS UNEXCA                                                  |
|  PARA OPTAR POR EL TITULO DE INGENIERO EN SISTEMA                                                    |
|                                                                                                      | 
-------------------------------------------------------------------------------------------------------- 
------------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="imagenes/logo-servired.ico">
    <title>Servi-Red | VTV </title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>

<!-------------------------------------------------------------------------------------------------------- 
                                           PRINCIPAL SISTEMA
------------------------------------------------------------------------------------------------------->

<body class="hold-transition skin-blue sidebar-mini">
  
<div class="wrapper">

<?php
                session_start();
		            $usuario=$_SESSION['usuario'] ;
                $imagen=$_SESSION['imagen'];
                $nombres=$_SESSION['nombres'];
                $apellidos= $_SESSION['apellidos'];    
                $id_rol=$_SESSION['id_rol']; 
                $corre=$_SESSION['corre'];             
?> 

<!-------------------------------------------------------------------------------------------------------- 
                                           CONSULTA DE PERFIL
------------------------------------------------------------------------------------------------------->
<?php 
session_start();
include('sql/conexion.php');

  if(!$conexion)  
{
  include ('mensajes/conexion-fallida.php');  
}
else {
       
$id=$_SESSION['id'];          
$id_rol=$_SESSION['id_rol'];                       
$imagen=$_SESSION['imagen'];
$nombres=$_SESSION['nombres'];
$apellidos=$_SESSION['apellidos'];
$usuario=$_SESSION['usuario'];
$consulta=" SELECT * FROM usuarios u INNER JOIN roles r  ON u.id_rol=r.id  WHERE '$id'=u.id ";
$result=mysqli_query($conexion,$consulta);          
while($mostrar=mysqli_fetch_array($result)){
  ?> 
<?php
$perfil=$mostrar['nombre']; 
session_start();
$_SESSION['perfil']=$perfil;

}
  ?>	
<?php 
if ($id_rol == '1') {

  $perfil='Administrador';
   
  } else
  if ($id_rol == '2') {
  
    $perfil='Coordinador';
  
  
  } else
  if ($id_rol == '3'){
    $perfil='Tecnico';
  
  }
} 
?> 
                <?php
                          $usu=$_GET["usu"];
                          switch ($usu) { 

                              case 1:require ("mensajes/cambio-foto.php");                           
                              break; 
                              case 2:require ("mensajes/cambio-estado.php"); 
                                break;
                              case 3:require ("mensajes/cambio-contraseña.php"); 
                                break;   
                              case 4:require ("mensajes/cambio-perfil.php"); 
                                break; 
                              case 5:require ("mensajes/editar-usuario.php");  
                                break; 
                              case 6:require ("mensajes/crear-usuario.php");  
                                break; 
                              case 7:require ("mensajes/eliminar-usuario.php"); 
                                break; 
                              case 8: require ("mensajes/conexion-fallida.php");
                                break;
                              case 9: require ("mensajes/usuario-duplicado.php");
                                break;
                                   } 
                    ?>      
                     
                    
                    <?php
                          $udu=$_GET["udu"];
                          switch ($udu) { 

                              case 1:require ("mensajes/usuario-duplicado.php");                           
                              break; 
                            
                                   } 
                    ?>        
      
      
<!-------------------------------------------------------------------------------------------------------- 
                                           CONSULTA DE PERFIL
------------------------------------------------------------------------------------------------------->

      <?php require ("libreria.php");?>
      <?php require ("../../cuerpo/menu-horizontal.php");?>
      <?php require ("../../cuerpo/configuracion-menu-vertical.php");?>
     
  <div class="content-wrapper">
        <?php require ("../../cuerpo/cuerpo-superior.php");?>
        <?php require ("log-equipos.php");?>
        
  </div>
       <?php require ("../../cuerpo/footer.php");?>

      
</div>
</body>

<!-------------------------------------------------------------------------------------------------------- 
                                           
------------------------------------------------------------------------------------------------------->

</html>
<!-----------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------|
| PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ                                                  |
| CEDULA    : V 16.029.567                                                                             |
| TELEFONO  : 0426-249-15-40                                                                           |
| CORREO    : DENNALY88@GMAIL.COM                                                                      |
| DIRECCIÓN : CUA , ESTADO MIRANDA  CONJUTO RESIDENCIAL EL CASTILLO APARTAMENTO 62-C                   |                                                     |
|------------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------|  
|                                                                                                      |
|  VENEZOLANA DE TELEVISIÓN C.A                                                                        |
|  DIVISIÓN DESARROLLO DE SISTEMAS Y DIVISIÓN DE SERVIDORES Y REDES                                    |
|  CANAL 8                                                                                             |
|                                                                                                      |
|  PROYECTO SOCIOTECNOLOGICO                                                                           |
|  UNIVERSIDAD EXPERIMENTAL DE LA GRAN CARACAS UNEXCA                                                  |
|  PARA OPTAR POR EL TITULO DE INGENIERO EN SISTEMA                                                    |
|                                                                                                      | 
-------------------------------------------------------------------------------------------------------- 
------------------------------------------------------------------------------------------------------->


