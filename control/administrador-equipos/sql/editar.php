




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
$empleado=$_POST['edit_empleado'];
$nombre=$_POST['edit_equipo'];
$marca=$_POST['edit_marca'];
$modelo=$_POST['edit_modelo'];
$seri=$_POST['edit_serial'];
$bien_nacional=$_POST['edit_bien_nacional'];
$responsable=$_POST['responsable'];
$fecha=$_POST['edit_fecha'];
$status='Editado';



$sql = "UPDATE administrador_equipos SET id='$edit_id', empleado='$empleado', nombre='$nombre', marca='$marca', modelo='$modelo', seri='$seri', bien_nacional='$bien_nacional', responsable='$responsable', fecha='$fecha', 
status='$status'WHERE id='$edit_id'" ;
 
if (mysqli_query($conexion, $sql)) {

      header("location:../principal.php?mes=2");

} 
else{
      die("Connection failed: " . mysqli_error($conexion));
     header("location:../principal.php?mes=4");
}
mysqli_close($conexion);

  











 
$sql = "UPDATE administrador_equipos SET id='$edit_id',empleado='$empleado', nombre='$equipo',marca='$marca' ,modelo='$modelo',seri='$serial',bien_nacional='$bien_nacional',resposable='$responsable',fecha='$fecha',status='$status' WHERE id='$edit_id'

 WHERE id='$edit_id'" ;
 
if (mysqli_query($conexion, $sql)) {

      header("location:../principal.php?mes=2");

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

