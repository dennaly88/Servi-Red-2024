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
$nombres=$_POST['edit_nombres'];
$apellidos=$_POST['edit_apellidos'];
$cedula=$_POST['edit_cedula'];
$telefono=$_POST['edit_telefono'];
$corre=$_POST['edit_correo'];
$usuario=$_POST['edit_usuario'];
$clave=$_POST['edit_contraseña'];
$estado=$_POST['edit_estado'];
$pregunta=$_POST['edit_pregunta'];
$id_rol=$_POST['edit_perfil'];
$imagen=$_POST['imagen'];




                          

		


$edit_usuario=$_POST['edit_usuario'];
if (!$conexion) {
      header("location:../principal.php?mes=4");
} 
 
$sql = "UPDATE usuarios SET id='$edit_id', nombres='$nombres', apellidos='$apellidos',telefono='$telefono', corre='$corre' ,usuario='$usuario',cedula='$cedula'
                                      WHERE id='$edit_id'" ;
 
if (mysqli_query($conexion, $sql)) {

      header("location:../principal.php?mes=2");

} 



session_start();
$responsable=$_SESSION['usuario'];  
$_SESSION=$ima; 
$fecha = date ('d-M-Y');
$hora = date('h:i a',time() - 3600*date('I'));

$status="Editado";
$sql1 = "INSERT INTO  movimientos_usuarios(fecha,hora,imagen,responsable,nombres,apellidos,telefono,corre,usuario,contraseña,id_rol,estado,pregunta,cedula,sta) VALUES
('$fecha','$hora','$imagen','$responsable','$nombres','$apellidos','$telefono','$corre','$usuario','$clave','$id_rol','$estado','$pregunta','$cedula', '$status')";
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


