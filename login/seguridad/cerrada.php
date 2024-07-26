<?php 
include('conexion.php');

$unico=$_GET["id"]; 

echo $unico;

$consulta="SELECT * from usuarios WHERE id='$unico'";
$resultados=mysqli_query($conexion,$consulta);
while($mostrar=mysqli_fetch_array($resultados)){


  $nombres=$mostrar['nombres'];
  $apellidos=$mostrar['apellidos'];
  $telefono=$mostrar['telefono'];
  $corre=$mostrar['corre'];
  $usuario=$mostrar['usuario'];
  $cedula=$mostrar['cedula'];
  $id_rol=$mostrar['id_rol'];
  
  

  echo $$nombres;
                       }
                 
                       
//$ip = $_SERVER['REMOTE_ADDR'];                  
$ip='127.1.1.1';
$estado="Cerrada";
$fecha = date ('d-M-Y');
$hora = date('h:i a',time() - 3600*date('I'));

                         $sql = "INSERT INTO  movimiento_sesion(nombres,apellidos,cedula,telefono,corre,usuario,perfil,estado,fecha,hora,ip) VALUES
                         ('$nombres','$apellidos','$cedula','$telefono','$corre','$usuario','$id_rol','$estado','$fecha', '$hora', '$ip')";
                                   if (mysqli_query($conexion, $sql)) {
                                         
                                        
                                     
                                   } else {
                                        
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);


  } 
                                   ?> 