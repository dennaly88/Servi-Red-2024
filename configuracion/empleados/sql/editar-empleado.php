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

//$edit_nombres=$_POST['edit_nombres'];
//$edit_apellidos=$_POST['edit_apellidos'];
//$edit_telefono=$_POST['edit_telefono'];
//$edit_correo=$_POST['edit_correo'];
//$edit_usuario=$_POST['edit_usuario'];
$edit_direccion=$_POST['edit_direccion'];
   




 

$sql = "UPDATE nomina set direccion='$edit_direccion' where id='$edit_id'";


$sql="SELECT * from nomina where id='$edit_id'";
                       
$result=mysqli_query($conexion,$sql);
while($row=mysqli_fetch_array($result)){
$nombres=$row['nombres'];
$apellidos=$row['apellidos'];
$cedula=$row['cedula'];
$telefono_celular=$row['telefono_celular'];
$cargo=$row['cargo'];
$gerencia=$row['gerencia'];
$division=$row['division'];
$estado=$row['estado'];



}




$fecha = date ('d-M-Y');
$hora = date('h:i a',time() - 3600*date('I'));

session_start();
$responsable=$_SESSION['usuario'];          
   $accion="Editado";
$sql1 = "INSERT INTO  movimientos_empleados(estado,accion,nombres,apellidos,cedula,telefono_celular,cargo,gerencia,division,responsable,fecha,hora) VALUES
  ('$estado', '$accion','$nombres','$apellidos','$cedula','$telefono_celular','$cargo','$gerencia','$division','$responsable','$fecha','$hora')";
if (mysqli_query($conexion, $sql1)) {
      
    //   $estado=$_SERVER['REMOTE_ADDR']; header("location:../principal.php?usu=6");
  
} else {

     
   //  header("location:../principal.php?usu=8");
}













 
if (mysqli_query($conexion, $sql)) {

      header("location:../principal.php?emp=5");
} else {
      
      header("location:../principal.php?emp=8");
     
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


