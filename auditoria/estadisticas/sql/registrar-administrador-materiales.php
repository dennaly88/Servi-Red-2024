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

$asignado=$_POST['asignado'];
$gerencia=$_POST['gerencia'];
$division=$_POST['division'];
$cargo=$_POST['cargo'];
$nombre=$_POST['nombre'];
$unidad=$_POST['unidad'];
$cantidad=$_POST['cantidad'];
$cantidad_inicial=0;
$cantidad_modificada=0;
$fecha=$_POST['fecha'];
$responsable=$_POST['responsable'];
$status=$_POST['status'];
$imagen=$_POST['imagen'];


if (!$conexion) {
      header("location:../principal.php?adm=7");
     
}
 
$co="SELECT imagen FROM materiales  where nombre='$nombre'";
$re=mysqli_query($conexion,$co);
while($row=mysqli_fetch_array($re)){


$imagen_material= '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
   
                    }



 
     
$sql = "INSERT INTO  administrador_materiales(nombre,unidad,fecha,responsable,imagen,status,cantidad,cantidad_inicial,cantidad_modificada,asignado,gerencia,division,cargo) VALUES
            ('$nombre','$unidad','$fecha','$responsable','$imagen_material','$status','$cantidad','$cantidad_inicial','$cantidad_modificada','$asignado','$gerencia','$division','$cargo')";
            if (mysqli_query($conexion, $sql)) {
                  
                  header("location:../principal.php?adm=1");
              
            } else {
                 
                 header("location:../principal.php?adm=7");
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
	
