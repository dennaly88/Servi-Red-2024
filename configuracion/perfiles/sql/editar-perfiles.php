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
$edit_nombre=$_POST['edit_nombre'];
$vista_principal=$_POST['vista_principal'];
$vista_configuracion=$_POST['vista_configuracion'];
$vista_clasificacion=$_POST['vista_clasificacion'];
$vista_control=$_POST['vista_control'];
$vista_auditoria=$_POST['vista_auditoria'];
$vista_redes=$_POST['vista_redes'];
$vista_servidores=$_POST['vista_servidores'];
$vista_opciones=$_POST['vista_opciones'];
$vista_documentacion=$_POST['vista_documentacion'];


if (!$conexion) {

    header("location:../principal.php?ep=8"); 
      
} 
     
        if($vista_principal=='1'){

            $vista_principal='1';
                
        }else{
        
        $vista_principal='0';
        
        }

  if($vista_configuracion=="1"){

      $vista_configuracion="1";
    
  }else{
  
  $vista_configuracion="0";
  
  }

  if($vista_clasificacion=="1"){

      $vista_clasificacion="1";
    
  }else{
  
  $vista_clasificacion="0";
  
  }

  if($vista_control=="1"){

      $vista_control="1";
    
  }else{
  
  $vista_control="0";
  
  }

  if($vista_auditoria=="1"){

      $vista_auditoria="1";
    
  }else{
  
  $vista_auditoria="0";
  
  }

  if($vista_redes=="1"){

      $vista_redes="1";
    
  }else{
  
  $vista_redes="0";
  
  }

  if($vista_servidores=="1"){

      $vista_servidores="1";
  }
  else
  {  
  $vista_servidores="0";
  }


  if($vista_opciones=="1"){

      $vista_opciones="1";
    
  }else{
  
      $vista_opciones="0";
  
  }

  if($vista_documentacion=="1"){

      $vista_documentacion="1";
    
  }else{
  
  $vista_documentacion="0";
  
  }

  $sql = "UPDATE roles SET id='$edit_id', nombre='$edit_nombre', vista_principal='$vista_principal',  vista_configuracion='$vista_configuracion', vista_clasificacion='$vista_clasificacion', vista_control='$vista_control',  vista_auditoria='$vista_auditoria' , vista_redes='$vista_redes' , vista_servidores='$vista_servidores' , vista_opciones='$vista_opciones', vista_documentacion='$vista_documentacion' WHERE id='$edit_id'" ;

  

 
if (mysqli_query($conexion, $sql)) {
      header("location:../principal.php?ep=1");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
     
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


