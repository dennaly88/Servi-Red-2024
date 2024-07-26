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

<?php
ob_start();
include('conexion.php');
$edit_id=$_POST['edit_id'];
$ip=$_POST['edit_ip'];
$usuario=$_POST['edit_usuario'];
$clave_admin=$_POST['edit_clave_admin'];
$clave_paso=$_POST['edit_clave_paso'];
$ssid=$_POST['edit_ssid'];
$mac_address=$_POST['edit_mac_address'];
$id_ubicacion=$_POST['edit_id_ubicacion'];
$remoto=$_POST['edit_remoto'];


 session_start();
$imagen=$_SESSION['imagen'];

$ruta = addslashes(file_get_contents($imagen));

                          

		


$edit_usuario=$_POST['edit_usuario'];
if (!$conexion) {
      header("location:../principal.php?mes=4");
} 
 
$sql = "UPDATE router SET id='$edit_id', ip='$ip', usuario='$usuario',clave_administrador='$clave_admin',clave_paso='$clave_paso',ssid='$ssid',mac_address='$mac_address',id_ubicacion='$id_ubicacion',remoto='$remoto'
                                      WHERE id='$edit_id'" ;
 
if (mysqli_query($conexion, $sql)) {

      header("location:../principal.php?mes=2");

} 
$status="Editado";

$sql1 = "INSERT INTO  movimientos_usuarios(nombres,apellidos,telefono,corre,usuario,contraseña,id_rol,imagen,estado,pregunta,cedula,sta) VALUES
('$nombres','$apellidos','$telefono','$corre','$usuario','$clave','$perfil','$ruta','$estado','$pregunta','$cedula', '$status')";
if (mysqli_query($conexion, $sql1)) {
      
  
} else {
     
     header("location:../principal.php?mes=4");
}
mysqli_close($conexion);
?>


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


