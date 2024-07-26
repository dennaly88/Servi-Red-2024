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
$servicio=$_POST['edit_servicio'];
$usuario=$_POST['edit_usuario'];
$clave=$_POST['edit_clave'];
$mac_address=$_POST['edit_mac_address'];
$marca=$_POST['edit_marca'];
$modelo=$_POST['edit_modelo'];
$serial=$_POST['edit_serial'];
$bien=$_POST['bien_nacional'];
$sistema=$_POST['edit_sistema_operativo'];
$ubicacion=$_POST['edit_id_ubicacion'];
$remoto=$_POST['edit_remoto'];

 session_start();
                

		



 
$sql = "UPDATE servidor SET id='$edit_id', ip='$ip', usuario='$usuario', clave='$clave', marca='$marca', modelo='$modelo', sistema_operativo='$sistema', servicio='$servicio', seri='$serial', mac_address='$mac_address', bien_nacional='$bien', remoto='$remoto', ubicacion='$ubicacion'
 WHERE id='$edit_id'" ;
 
if (mysqli_query($conexion, $sql)) {






      

      header("location:../principal.php?mes=2");

} 

$estado='Activo';
$fecha = date ('d-M-Y');
$hora = date('h:i a',time() - 3600*date('I'));
$accion = 'Editado';

session_start();
$responsable=$_SESSION['usuario'];  
$sql1 = "INSERT INTO  movimiento_servidores(ip,usuario,mac_address,marca,modelo,seri,bien_nacional,fecha,hora,estado,accion,servicio,responsable) 
VALUES ('$ip','$usuario','$mac_address','$marca','$modelo','$serial','$bien','$fecha','$hora','$estado','$accion', '$servicio','$responsable')";
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


