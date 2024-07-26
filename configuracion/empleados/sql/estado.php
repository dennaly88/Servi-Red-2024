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



$sql = "UPDATE nomina SET id='$edit_id',estado='$estado' WHERE id='$edit_id'" ;

if (mysqli_query($conexion, $sql)) {



      




      
      
      
      header("location:../principal.php?emp=5");

} else {
      header("location:../principal.php?mes=4"); 


      //echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
      
}


$sql="SELECT * from nomina order by id";
                       
$result=mysqli_query($conexion,$sql);
while($row=mysqli_fetch_array($result)){
$nombres=$row['nombres'];
$apellidos=$row['apellidos'];
$cedula=$row['cedula'];
$telefono_celular=$row['telefono_celular'];
$gerencia=$row['gerencia'];
$division=$row['division'];
$id_rol=$row['id_rol'];
$estado=$row['estado'];
$pregunta=$row['pregunta'];

}





$fecha = date ('d-M-Y');
$hora = date('h:i a',time() - 3600*date('I'));

session_start();
$responsable=$_SESSION['usuario'];          
   $accion="Inactivo";
$sql1 = "INSERT INTO  movimientos_empleados(estado,accion,nombres,apellidos,cedula,telefono_celular,cargo,gerencia,division,responsable,fecha,hora) VALUES
  ('$estado', '$accion','$nombres','$apellidos','$cedula','$telefono_celular','$cargo','$gerencia','$division','$responsable','$fecha','$hora')";
if (mysqli_query($conexion, $sql1)) {
      
    //  header("location:../principal.php?usu=6");
  
} else {

     
   //  header("location:../principal.php?usu=8");
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
	
















