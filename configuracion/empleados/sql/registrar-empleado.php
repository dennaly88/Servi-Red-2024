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

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$gerencia=$_POST['gerencia'];
$division=$_POST['division'];
$cargo=$_POST['cargo'];
$cedula=$_POST['cedula'];
$codigo=$_POST['codigo'];
$nacionalidad=$_POST['nacionalidad'];
$telefono_casa=$_POST['telefono_casa'];
$telefono_celular=$_POST['telefono_celular'];
$voto=$_POST['voto'];
$observacion=$_POST['observacion'];
$direccion=$_POST['direccion'];
$estado=$_POST['estado'];

$check = getimagesize($_FILES["imagen"]["tmp_name"]);
$image = $_FILES['imagen']['tmp_name'];
$ruta = addslashes(file_get_contents($image));



if (!$conexion) {
      header("location:../principal.php?usu=8");
     
}
 
 $consulta8="SELECT cedula FROM nomina where cedula='$cedula'";
 $resultado8=mysqli_query($conexion,$consulta8);
 $filas8=mysqli_num_rows($resultado8);
 $data8 = mysqli_fetch_assoc($resultado8); 
    if($filas8>0){
      
      header("location:../principal.php?emp=9");
      }
      else{




            
     
            $sql = "INSERT INTO  nomina(estado,nombres,apellidos,gerencia,division,cargo,cedula,codigo,nacionalidad,telefono_casa,telefono_celular,voto,observacion,direccion,imagen) VALUES
            ('$estado','$nombres','$apellidos','$gerencia','$division','$cargo','$cedula','$codigo','$nacionalidad','$telefono_casa','$telefono_celular','$voto','$observacion','$direccion','$ruta')";
            if (mysqli_query($conexion, $sql)) {



                 

                

                  
                  header("location:../principal.php?emp=6");
              
            } else {
                 
                 header("location:../principal.php?emp=8");
            }

            $fecha = date ('d-M-Y');
            $hora = date('h:i a',time() - 3600*date('I'));

            session_start();
            $responsable=$_SESSION['usuario'];          
               $accion="Registrado";
            $sql1 = "INSERT INTO  movimientos_empleados(estado,accion,nombres,apellidos,cedula,telefono_celular,cargo,gerencia,division,responsable,fecha,hora) VALUES
              ('$estado', '$accion','$nombres','$apellidos','$cedula','$telefono_celular','$cargo','$gerencia','$division','$responsable','$fecha','$hora')";
            if (mysqli_query($conexion, $sql1)) {
                  
                //  header("location:../principal.php?usu=6");
              
            } else {

                 
               //  header("location:../principal.php?usu=8");
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
	
