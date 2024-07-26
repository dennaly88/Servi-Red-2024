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

$ip=$_POST['ip'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$mac_address=$_POST['mac_address'];
$marcas=$_POST['marcas'];
$modelo=$_POST['modelo'];
$distribucion=$_POST['distribucion'];
$servicios=$_POST['servicios'];
$serial=$_POST['serial'];
$bien_nacional=$_POST['bien_nacional'];
$remoto=$_POST['remoto'];
$ubicacion=$_POST['id_ubicacion'];






$check = getimagesize($_FILES["imagen"]["tmp_name"]);
$imagen = $_FILES['imagen']['tmp_name'];
$ruta = addslashes(file_get_contents($imagen));

$chec = getimagesize($_FILES["ubicacion_geografica"]["tmp_name"]);
$ubicacion_geografica = $_FILES['ubicacion_geografica']['tmp_name'];
$rut = addslashes(file_get_contents($ubicacion_geografica));




if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
$consulta8="SELECT servicio FROM servidor where servicio='$servicios'";
 $resultado8=mysqli_query($conexion,$consulta8);
 $filas8=mysqli_num_rows($resultado8);
 $data8 = mysqli_fetch_assoc($resultado8); 
    if($filas8>0){
      header("location:../principal.php?mes=9");
      }
      else{


            $estado='Activo';
  

$sql = "INSERT INTO  servidor(ip,usuario,clave,marca,modelo,sistema_operativo,servicio, seri, mac_address, bien_nacional,remoto, imagen, ubicacion, ubicacion_geografica,estado) 
VALUES ('$ip','$usuario','$clave','$marcas','$modelo','$distribucion','$servicios','$serial', '$mac_address', '$bien_nacional', '$remoto', '$ruta', '$ubicacion',  '$rut','$estado')";
 
$distribucion=$_POST['distribucion'];
if (mysqli_query($conexion, $sql)) {
                  
$fecha = date ('d-M-Y');
$hora = date('h:i a',time() - 3600*date('I'));
$accion = 'Registrado';

session_start();
$responsable=$_SESSION['usuario'];  
$sql1 = "INSERT INTO  movimiento_servidores(ip,usuario,mac_address,marca,modelo,seri,bien_nacional,fecha,hora,estado,accion,servicio,responsable) 
VALUES ('$ip','$usuario','$mac_address','$marcas','$modelo','$serial','$bien_nacional','$fecha','$hora','$estado','$accion', '$servicios','$responsable')";
if (mysqli_query($conexion, $sql1)) {
      
   
} else {
      //echo "Error: " . $sql . "<br>" . mysqli_error($conexion);

}
 

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