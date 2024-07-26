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
$estado=$_POST['estado'];
 
if (!$conexion) {
     
      header("location:../principal.php?usu=8"); 
}
 
$sql = "UPDATE wifi SET id='$edit_id',estado='$estado' WHERE id='$edit_id'" ;

if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../principal.php?mes=2");

} else {

      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
      
}

$sql="SELECT * from wifi order by id";
                       
$result=mysqli_query($conexion,$sql);
while($row=mysqli_fetch_array($result)){

$ip=$row['ip'];
$mac_address=$row['mac_address'];
$clave_administrador=$row['clave_administrador'];
$ssid=$row['ssid'];
$ubicacion=$row['id_ubicacion'];
$usuario=$row['usuario'];


}

$fecha = date ('d-M-Y');
$hora = date('h:i a',time() - 3600*date('I'));
$estado = 'Inactivo';

session_start();
$responsable=$_SESSION['usuario'];  
$sql1 = "INSERT INTO  movimiento_wifi(ip,mac_address,usuario,clave_administrador,ssid, ubicacion,fecha,hora,responsable,estado) 
VALUES ('$ip','$mac_address','$usuario','$clave_administrador','$ssid','$ubicacion','$fecha', '$hora','$responsable','$estado')";
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
	
















