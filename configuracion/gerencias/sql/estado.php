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
$status=$_POST['estado'];
$nombre=$_POST['nombre'];
 
if (!$conexion) {
     
      header("location:../principal.php?usu=6");
}
 
$sql = "UPDATE gerencias SET id='$edit_id', estado='$status' WHERE id='$edit_id'" ;

if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../principal.php?ge=2");

} else {

      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
      
}

 



$fecha = date ('d-M-Y');
$hora = date('h:i a',time() - 3600*date('I'));

            session_start();
            $responsable=$_SESSION['usuario'];          
               $status="Inactiva";
            $sql1 = "INSERT INTO  moviminetos_gerencias(fecha,hora,nombre,estado,responsable) VALUES
('$fecha','$hora','$nombre','$status','$responsable')";
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
	
















