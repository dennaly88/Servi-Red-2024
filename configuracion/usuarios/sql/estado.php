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



$sql = "UPDATE usuarios SET id='$edit_id',estado='$estado' WHERE id='$edit_id'" ;

if (mysqli_query($conexion, $sql)) {



      $sql="SELECT * from usuarios order by id";
                       
      $result=mysqli_query($conexion,$sql);
      while($row=mysqli_fetch_array($result)){
      $nombres=$row['nombres'];
      $apellidos=$row['apellidos'];
      $telefono=$row['telefono'];
      $corre=$row['corre'];
      $usuario=$row['usuario'];
      $contraseña=$row['contraseña'];
      $id_rol=$row['id_rol'];
      $estado=$row['estado'];
      $pregunta=$row['pregunta'];
      $cedula=$row['cedula'];
      
      
      }
      
      
      session_start();
      $responsable=$_SESSION['usuario'];  
     
      $fecha = date ('d-M-Y');
$hora = date('h:i a',time() - 3600*date('I'));
      
      $status="Inactivo";
      $sql1 = "INSERT INTO  movimientos_usuarios(fecha,hora,responsable,nombres,apellidos,telefono,corre,usuario,contraseña,id_rol,estado,pregunta,cedula,sta) VALUES
      ('$hora','$fecha','$responsable','$nombres','$apellidos','$telefono','$corre','$usuario','$clave','$id_rol','$estado','$pregunta','$cedula', '$status')";
      if (mysqli_query($conexion, $sql1)) {
            
          //  header("location:../principal.php?usu=6");
        
      } else {
      
           
         //  header("location:../principal.php?usu=8");
      }





      
      
      
      header("location:../principal.php?mes=7");

} else {
      header("location:../principal.php?mes=4"); 


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
	
















