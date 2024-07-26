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
qr
<?php
ob_start();
include('conexion.php');

$ip=$_POST['ip'];
$usuario=$_POST['usuario'];
$clave_administrador=$_POST['clave_administrador'];
$id_ubicacion=$_POST['id_ubicacion'];
$mac_address=$_POST['mac_address'];
$direccion=$_POST['direccion'];

$check = getimagesize($_FILES["imagen"]["tmp_name"]);
$image = $_FILES['imagen']['tmp_name'];
$ruta = addslashes(file_get_contents($image));

$checks = getimagesize($_FILES["ubicacion_geografica"]["tmp_name"]);
$ubicacion_geografica = $_FILES['ubicacion_geografica']['tmp_name'];
$rutas = addslashes(file_get_contents($ubicacion_geografica));





if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
$consulta8="SELECT ip FROM switch where ip='$ip'";
 $resultado8=mysqli_query($conexion,$consulta8);
 $filas8=mysqli_num_rows($resultado8);
 $data8 = mysqli_fetch_assoc($resultado8); 
    if($filas8>0){
      header("location:../principal.php?mes=9");
      }
      else{

            $sql = "INSERT INTO  switch(ip,usuario,clave, id_ubicacion,mac_address,  imagen, ubicacion_geografica, direccion) 
            VALUES ('$ip','$usuario','$clave_administrador','$id_ubicacion','$mac_address', '$ruta', '$rutas' , '$direccion')";
            if (mysqli_query($conexion, $sql)) {
                  
                  header("location:../principal.php?mes=1");
              
            } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
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