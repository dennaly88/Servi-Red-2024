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
$clave_administrador=$_POST['clave_administrador'];
$ssid=$_POST['ssid'];
$clave_paso=$_POST['clave_paso'];
$id_ubicacion=$_POST['id_ubicacion'];
$mac_address=$_POST['mac_address'];
$direccion=$_POST['direccion'];

$check = getimagesize($_FILES["imagen"]["tmp_name"]);
$image = $_FILES['imagen']['tmp_name'];
$ruta = addslashes(file_get_contents($image));

$checks = getimagesize($_FILES["ubicacion_geografica"]["tmp_name"]);
$ubicacion_geografica = $_FILES['ubicacion_geografica']['tmp_name'];
$rutas = addslashes(file_get_contents($ubicacion_geografica));

$checksa = getimagesize($_FILES["qr"]["tmp_name"]);
$qr = $_FILES['qr']['tmp_name'];
$rutasa = addslashes(file_get_contents($qr));



if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
$consulta8="SELECT ip FROM wifi where ip='$ip'";
 $resultado8=mysqli_query($conexion,$consulta8);
 $filas8=mysqli_num_rows($resultado8);
 $data8 = mysqli_fetch_assoc($resultado8); 
    if($filas8>0){
      header("location:../principal.php?mes=4");
      }
      else{

            $estado='Activo';
            $sql = "INSERT INTO  wifi(estado,ip,usuario,clave_administrador,ssid, clave_paso, id_ubicacion,mac_address, direccion, imagen, ubicacion_geografica, qr) 
            VALUES ('$estado','$ip','$usuario','$clave_administrador','$ssid','$clave_paso','$id_ubicacion','$mac_address','$direccion', '$ruta', '$rutas', '$rutasa')";
            if (mysqli_query($conexion, $sql)) {



                  $fecha = date ('d-M-Y');
                  $hora = date('h:i a',time() - 3600*date('I'));
                  $estado = 'Registrado';
      
                  session_start();
                  $responsable=$_SESSION['usuario'];  
                  $sql1 = "INSERT INTO  movimiento_wifi(ip,mac_address,usuario,clave_administrador,ssid, ubicacion,fecha,hora,responsable,estado) 
                  VALUES ('$ip','$mac_address','$usuario','$clave_administrador','$ssid','$id_ubicacion','$fecha', '$hora','$responsable','$estado')";
                  if (mysqli_query($conexion, $sql1)) {
                        
                    
                  } else {
                        //echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
            
                  }




                  
                  header("location:../principal.php?mes=1");
              
            } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
            }
      
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