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
$nombre=$_POST['nombre'];
if (!$conexion) {
 
      header("location:../principal.php?di=4");
}
 
 $consulta8="SELECT nombres FROM division where nombres='$nombre'";
 $resultado8=mysqli_query($conexion,$consulta8);
 $filas8=mysqli_num_rows($resultado8);
 $data8 = mysqli_fetch_assoc($resultado8); 
    if($filas8>0){
      
      header("location:../principal.php?di=5");
      }
      else{
     
            $sql = "INSERT INTO division (nombres) VALUES ('$nombre') ";
            if (mysqli_query($conexion, $sql)) {
                  
                  header("location:../principal.php?di=1");
              
            } else {
                 
                  header("location:../principal.php?di=4");
            }



            session_start();
            $responsable=$_SESSION['usuario'];          
               $status="Registrado";
            $sql1 = "INSERT INTO  movimiento_divisione(nombre,estado,responsable) VALUES
('$nombre','$status','$responsable')";
            if (mysqli_query($conexion, $sql1)) {
                  
                //  header("location:../principal.php?usu=6");
              
            } else {

                 
               //  header("location:../principal.php?usu=8");
            }







            mysqli_close($conexion);
      }
     
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
	
