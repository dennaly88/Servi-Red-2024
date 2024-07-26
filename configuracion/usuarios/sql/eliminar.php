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
session_start();
    $id = $_GET['id'];
	include('conexion.php');
if (!$conexion) {
      
      header("location:../principal.php?usu=8"); 
}




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
$imagen=$_SESSION['imagen'];


$status="Eliminado";
$sql1 = "INSERT INTO  movimientos_usuarios(imagen,responsable,nombres,apellidos,telefono,corre,usuario,contraseña,id_rol,estado,pregunta,cedula,sta) VALUES
('$imagen','$responsable','$nombres','$apellidos','$telefono','$corre','$usuario','$clave','$id_rol','$estado','$pregunta','$cedula', '$status')";
if (mysqli_query($conexion, $sql1)) {
      
    //  header("location:../principal.php?usu=6");
  
} else {

     
   //  header("location:../principal.php?usu=8");
}






$sql = "DELETE FROM usuarios WHERE id ='$id'";
if (mysqli_query($conexion, $sql)) {  


      header("location:../principal.php?mes=3");

    
} else {
      
      header("location:../principal.php?mes=4");
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
