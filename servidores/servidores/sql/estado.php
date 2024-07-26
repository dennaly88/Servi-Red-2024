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
     
      header("location:../principal.php?mes=4"); 
}
 
$sql = "UPDATE servidor SET id='$edit_id',estado='$estado' WHERE id='$edit_id'" ;

if (mysqli_query($conexion, $sql)) {

      


      $sql="SELECT * from servidor order by id";
                       
      $result=mysqli_query($conexion,$sql);
      while($row=mysqli_fetch_array($result)){
      
      $ip=$row['ip'];
      $usuario=$row['usuario'];
      $mac_address=$row['mac_address'];
      $marca=$row['marca'];
      $modelo=$row['modelo'];
      $serial=$row['seri'];
      $bien_nacional=$row['bien_nacional'];
      $servicios=$row['servicio'];
      
      }     




$fecha = date ('d-M-Y');
$hora = date('h:i a',time() - 3600*date('I'));
$accion = 'Inactivo';

session_start();
$responsable=$_SESSION['usuario'];  
$sql1 = "INSERT INTO  movimiento_servidores(ip,usuario,mac_address,marca,modelo,seri,bien_nacional,fecha,hora,estado,accion,servicio, responsable) 
VALUES ('$ip','$usuario','$mac_address','$marca','$modelo','$serial','$bien_nacional','$fecha','$hora','$estado','$accion', '$servicios', '$responsable')";
if (mysqli_query($conexion, $sql1)) {
      
   
} else {
      //echo "Error: " . $sql . "<br>" . mysqli_error($conexion);

}
      
      header("location:../principal.php?mes=2");

} else {

      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
      
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
	
















