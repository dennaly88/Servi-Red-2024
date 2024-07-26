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
<?php ob_start();?>


<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<section class="content">
     
      
         <div class="box box-primary">
           <div class="box-header">       
             <h3 class="box-title"> <span class="label btn bg-navy btn-fla  pull-left">
              LOG DE SESIONES</h3></span> 
           </div>
           <div class="box-body">


          
             <table id="usuarios" class="table table-bordered table-striped">
               <thead>
                 <tr>
<th>Imagen</a></th>                                 
<th>Nombres</th>
<th>Apellidos</th>
<th>Cedula</th>
<th>Telefono</th>
<th>Correo</th>
<th>Usuario</th>
<th>Perfil</th>
<th>Fecha</th>
<th>Hora</th>
<th>IP</th>                           
<th>Sesión</th>                           
                 
                </tr>
               </thead>
               <tbody>
               
               





            
               <?php







                         
                         $sql="SELECT * from movimiento_sesion order by id";
                         $result=mysqli_query($conexion,$sql);
                         while($row=mysqli_fetch_array($result)){
                          $imagen = '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                  

                         
                          $estado=$row['estado'];
                          if($estado=='Iniciada'){
                           
                            $estado='success';
                          }else{
                           if($estado=='Cerrada'){
                           
                             $estado='danger';
                            }
                         } 

                         
										$perfil=$row['perfil'];
											switch ($perfil) { 
											case 1:
											$per='Administrador';
                      $per1='primary';
										; 
											break;
											case 2:
											$per='Coordinador'; 
                      $per1='success';
											break;
											case 3: 
											$per='Técnico';
                      $per1='info';
											break;
										}
                    $cedula_sesion = $row["cedula"];
                    $col="SELECT imagen from usuarios WHERE cedula='$cedula_sesion'";
                                          $rel=mysqli_query($conexion,$col);
                                          while($rol=mysqli_fetch_array($rel)){
                                           $imagenunica = '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($rol["imagen"]).'"/>';
                                                        }          

          
                       echo 
                     "<tr>
                <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'> $imagenunica</a></td>
  
                         
                           <td>".$row['nombres']."</td>
                           <td>".$row['apellidos']."</td>
                           <td>".$row['cedula']."</td>
                           <td>".$row['telefono']."</td>
                           <td>".$row['corre']."</td>
                           <td>".$row['usuario']."</td> 
                            <td><a href='#estado_".$row['id']."' class='btn btn-$per1 btn-xs' data-toggle='modal'>  ".$per."</a></td>

                           <td>".$row['fecha']."</td>
                           <td>".$row['hora']."</td>
                            <td><a href='#estado_".$row['id']."' class='btn bg-navy btn-fla btn-xs' data-toggle='modal'>  ".$row['ip']."</a></td>

                            <td><a href='#estado_".$row['id']."' class='btn btn-$estado btn-xs' data-toggle='modal'>  ".$row['estado']."</a></td>



                      
                       
                     </tr>";
                    
                    
                    } 
                 ?>
               </tbody>
               <tfoot>
               <tr>
              
                                    
<th>Imagen</a></th>                                 
<th>Nombres</th>
<th>Apellidos</th>
<th>Cedula</th>
<th>Telefono</th>
<th>Correo</th>
<th>Usuario</th>
<th>Perfil</th>
<th>Fecha</th>
<th>Hora</th>
<th>IP</th>
<th>Sesión</th>

               </tr>
               </tfoot>
             </table>
             
           <center>  <a  href='../../reportes/controlador_sesiones.php'   title='Total de Sesiones PDF' class='btn bg-red btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-file-pdf-o' > Imprimir Moviminetos de Sesiones al sistema</span></a>
           </div>
         </div>
         <?php include('contador-usuarios.php');?>
   </section>
  
   <script src="../../cuerpo/librerias/js/data-table.js"></script>
</body>
</html>





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