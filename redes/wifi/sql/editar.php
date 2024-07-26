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
$ssid=$_POST['edit_ssid'];
$clave_paso=$_POST['edit_clave_paso'];
$id_ubicacion=$_POST['edit_id_ubicacion'];
$mac_address=$_POST['edit_mac_address'];
$direccion=$_POST['edit_direccion'];


 session_start();
$imagen=$_SESSION['imagen'];

$ruta = addslashes(file_get_contents($imagen));

                          

		


$edit_usuario=$_POST['edit_usuario'];
if (!$conexion) {
      header("location:../principal.php?mes=4");
} 
 
$sql = "UPDATE wifi SET id='$edit_id', ip='$ip', usuario='$usuario',clave_administrador='$clave_admin', ssid='$ssid' ,clave_paso='$clave_paso',id_ubicacion='$id_ubicacion',mac_address='$mac_address',direccion='$direccion'
                                      WHERE id='$edit_id'" ;
 
if (mysqli_query($conexion, $sql)) {

      header("location:../principal.php?mes=2");

}  



$fecha = date ('d-M-Y');
$hora = date('h:i a',time() - 3600*date('I'));
$estado = 'Editado';

session_start();
$responsable=$_SESSION['usuario'];  
$sql1 = "INSERT INTO  movimiento_wifi(ip,mac_address,usuario,clave_administrador,ssid, ubicacion,fecha,hora,responsable,estado) 
VALUES ('$ip','$mac_address','$usuario','$clave_admin','$ssid','$id_ubicacion','$fecha', '$hora','$responsable','$estado')";
if (mysqli_query($conexion, $sql1)) {
      
  
} else {
      //echo "Error: " . $sql . "<br>" . mysqli_error($conexion);

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


