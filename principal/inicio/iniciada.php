<?php 
session_start();
$id=$_SESSION['id'];          

include('sql/conexion.php');
$sql="SELECT * from usuarios WHERE id='$id'";
$result=mysqli_query($conexion,$sql);
while($row=mysqli_fetch_array($result)){


  $nombres=$row['nombres'];
  $apellidos=$row['apellidos'];
  $telefono=$row['telefono'];
  $corre=$row['corre'];
  $usuario=$row['usuario'];
  $cedula=$row['cedula'];
  $id_rol=$row['id_rol'];   

                       }
                       
                        
$estado="Iniciada";
//$ip = $_SERVER['REMOTE_ADDR'];
$ip='127.1.1.1';
$fecha = date ('d-M-Y');
$hora = date('h:i a',time() - 3600*date('I'));

                         $sql = "INSERT INTO  movimiento_sesion(nombres,apellidos,cedula,telefono,corre,usuario,perfil,estado,fecha,hora,ip) VALUES
                         ('$nombres','$apellidos','$cedula','$telefono','$corre','$usuario','$id_rol','$estado','$fecha', '$hora', '$ip')";
                                   if (mysqli_query($conexion, $sql)) {
                                         
                                        
                                     
                                   } else {
                                        
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
                                   }


                                   ?> 