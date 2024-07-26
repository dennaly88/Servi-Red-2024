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
$check = getimagesize($_FILES["imagen"]["tmp_name"]);
$image = $_FILES['imagen']['tmp_name'];
$ruta = addslashes(file_get_contents($image));

if (!$conexion) {
      
      header("location:../principal.php?mes=4");
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


$status="Editado";
            $sql1 = "INSERT INTO  movimientos_usuarios(nombres,apellidos,telefono,corre,usuario,contraseña,id_rol,estado,pregunta,cedula,sta) VALUES
            ('$nombres','$apellidos','$telefono','$corre','$usuario','$clave','$id_rol','$estado','$pregunta','$cedula', '$status')";
            if (mysqli_query($conexion, $sql1)) {
                  
                //  header("location:../principal.php?usu=6");
              
            } else {
                 
                 


            }





if (mysqli_query($conexion, "UPDATE usuarios SET id='$edit_id',imagen='$ruta' WHERE id='$edit_id'")) {


      
      header('location:../principal.php?mes=6');
      

} else {
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
	






