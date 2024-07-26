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
$nombres=$_POST['nombres'];

if (!$conexion) {
 
      header("location:../principal.php?ge=4"); 
} 

$sql = "UPDATE gerencias set nombres='$nombres' where id='$edit_id'";
 
if (mysqli_query($conexion, $sql)) {
      header("location:../principal.php?ge=2");
} else {

      header("location:../principal.php?ge=4");     
}



$fecha = date ('d-M-Y');
$hora = date('h:i a',time() - 3600*date('I'));

            session_start();
            $responsable=$_SESSION['usuario'];          
               $status="Editado";
            $sql1 = "INSERT INTO  moviminetos_gerencias(fecha,hora,nombre,estado,responsable) VALUES
('$fecha','$hora','$nombres','$status','$responsable')";
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


