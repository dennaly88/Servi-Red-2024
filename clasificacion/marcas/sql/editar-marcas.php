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
$id_categoria=$_POST['id_categoria'];
$edit_nombres=$_POST['edit_nombres'];

if (!$conexion) {
  header("location:../principal.php?mar=8");
}
$sql = "UPDATE marcas SET id='$edit_id',id_categoria='$id_categoria',nombres='$edit_nombres' WHERE id='$edit_id'" ;
if (mysqli_query($conexion, $sql)) {
    
    header("location:../principal.php?mar=5");

} else {
  if($sql) { 
    header("location:../principal.php?mar=8");
     }
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
