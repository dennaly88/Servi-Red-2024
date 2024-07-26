<!-----------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------|
| PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ                                                  |
| CEDULA    : V 16.029.567                                                                             |
| TELEFONO  : 0426-249-15-40                                                                           |
| CORREO    : DENNALY88@GMAIL.COM                                                                      |
| DIRECCIÓN : CUA , ESTADO MIRANDA  CONJUTO RESIDENCIAL EL CASTILLO APARTAMENTO 62-C                   |                                                     |
|------------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------|  
|                                                                                                      |
|  VENEZOLANA DE TELEVISIÓN C.A                                                                        |
|  DIVISIÓN DESARROLLO DE SISTEMAS Y DIVISIÓN DE SERVIDORES Y REDES                                    |
|  CANAL 8                                                                                             |
|                                                                                                      |
|  PROYECTO SOCIOTECNOLOGICO                                                                           |
|  UNIVERSIDAD EXPERIMENTAL DE LA GRAN CARACAS UNEXCA                                                  |
|  PARA OPTAR POR EL TITULO DE INGENIERO EN SISTEMA                                                    |
|                                                                                                      | 
-------------------------------------------------------------------------------------------------------- 
------------------------------------------------------------------------------------------------------->

<?php
 include "conexion.php";

 
 if(!$conexion)  
  {
      header ("location:../index.php?cf=8");
  }
else {
 $usuario = $_POST['usuarios'];
 $contraseña = $_POST['contraseñas'];

 
 $sSalt = '20adeb83e85f03cfc84d0fb7e5f4d290';
 $sSalt = substr(hash('sha256', $sSalt, true), 0, 32);
 $method = 'aes-256-cbc';
 $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
 $clave = base64_encode(openssl_encrypt($contraseña, $method, $sSalt, OPENSSL_RAW_DATA, $iv));

 $consulta8="SELECT usuario FROM usuarios where usuario='$usuario'";
 $resultado8=mysqli_query($conexion,$consulta8);
 $filas8=mysqli_num_rows($resultado8);
 $data8 = mysqli_fetch_assoc($resultado8);  

 if ($filas8>0) 
 {
  $consulta="SELECT * FROM usuarios where  usuario='$usuario' and contraseña='$clave'";
  $resultado=mysqli_query($conexion,$consulta);
  $filas=mysqli_num_rows($resultado);
  $data = mysqli_fetch_assoc($resultado);
  
  


  /**********************      USUARIO INACTIVO  *****************************************************************************************/ 

  if ($filas>0)
  {
   $consulta1="SELECT * FROM usuarios where usuario='$usuario' and  estado='Activo'";
   $resultado1=mysqli_query($conexion,$consulta1);
   $filas1=mysqli_num_rows($resultado1);
   $data1 = mysqli_fetch_assoc($resultado1);

/*&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&*/ 

if ($filas1>0){
      session_start();  
      $_SESSION['usuario']=$data['usuario'];
      $usuario=$_SESSION['usuario'] ;
      $sql="SELECT * from usuarios where '$usuario'=usuario;";
      $result=mysqli_query($conexion,$sql);



while($mostrar=mysqli_fetch_array($result))
    {
     $id=$mostrar['id']; 
     $id_rol=$mostrar['id_rol']; 
     $imagen=$mostrar['imagen']; 
     $nombres=$mostrar['nombres']; 
     $apellidos=$mostrar['apellidos']; 
     session_start();  
     
     $_SESSION['id']=$id;          
     $_SESSION['id_rol']=$id_rol;                       
     $_SESSION['imagen']=$imagen;
     $_SESSION['nombres']=$nombres;
     $_SESSION['apellidos']=$apellidos;
  }




    header ("location:../../principal/inicio/index.php?pp=8");
    /************************  USUARIO REGISTRADO CORRECTO ******************************************/ 
    }else{header ("location:../index.php?ui=8");/************************  USUARIO INACTIVO ******************************************/ 
    }mysqli_free_result($resultado1);mysqli_close($conexion);
    }else{header ("location:../index.php?cnr=8");/******************************* USUARIO  REGISTRADO CLAVE NO*/ 
    }mysqli_free_result($resultado);mysqli_close($conexion);        
    }else{header ("location:../index.php?unr=8");/**************************  USUARIO NO REGISTRADO*/ 
    }mysqli_free_result($resultado);mysqli_close($conexion);  
}
?>
     
     





     

<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : J DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0424.2481.44.55 
-------------------------------------------------------------------------------------------------->












