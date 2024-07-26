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
             LOG DE SERVIDORES</h3></span> 
           </div>
           <div class="box-body">


          
             <table id="usuarios" class="table table-bordered table-striped">
               <thead>
                 <tr>
                                     <th>Imagen</th>
                                     <th>Responsable</th>
                                    <th>Servicio</th>
                                    <th>Ip</th>
                                    <th>Usuario</th>
                                    <th>Mac_address</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Serial</th>
                                    <th>Bien Nacional</th>
                                    <th>Fecha</th>
                                    <th>Hora</a></th>
                                    <th>Estado</a></th>
                                    <th>Acción</a></th>

                 
                </tr>
               </thead>
               <tbody>
               
               


            
               <?php
                         
                         
                         $sql="SELECT * from movimiento_servidores  order by id";
										
                                       
                         $result=mysqli_query($conexion,$sql);
                         while($row=mysqli_fetch_array($result)){


                          $ver=$row['estado'];
                          switch ($ver) { 
                          case 'Activo':
                          $verlo='success';
                          break;
                          case 'Inactivo':
                          $verlo='btn bg-maroon'; 
                          break;
                         
                      }



                        

                      $el=$row['accion'];
                      switch ($el) { 
                      case 'Registrado':
                      $elo='primary';
                      break;
                      case 'Editado':
                      $elo='success'; 
                      break;
                      case 'Inactivo': 
                      $elo='danger';
                      break;
                  }
                      
                          
                    
                      








                


                      
                      session_start();
                        
                      $id=$_SESSION['id'];          
            
                      $perfil=$_SESSION['perfil'];
                      
                      



                     
                       
                      $nombre = $row["responsable"];
                      $col="SELECT imagen from usuarios WHERE id='$id'";
                                            $rel=mysqli_query($conexion,$col);
                                            while($rol=mysqli_fetch_array($rel)){
                                             $imagen = '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($rol["imagen"]).'"/>';
                                                          } 
                        
            


                       echo 
                     "<tr>
                          <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'> $imagen</a></td>
                          <td>".$row['responsable']."</td>
                          <td>".$row['servicio']."</td>
                           <td>".$row['ip']."</td>
                           <td>".$row['usuario']."</td>
                           <td>".$row['mac_address']."</td>
                           <td>".$row['marca']."</td>
                           <td>".$row['modelo']."</td> 
                           <td>".$row['seri']."</td>
                           <td>".$row['bien_nacional']."</td>
                           <td>".$row['fecha']."</td>
                          <td>".$row['hora']."</td>
                         <td><a href='#estado_".$row['id']."' class='btn btn-$verlo btn-xs' data-toggle='modal'>  ".$row['estado']."</a></td>
                          <td>   <a href='#estado_".$row['id']."' class='btn btn-$elo btn-xs' data-toggle='modal'>  ".$row['accion']."</a></td>




                       
                     </tr>";
                    
                    
                   }    
                 ?>
               </tbody>
               <tfoot>
               <tr>
              
               <th>Imagen</th>
               <th>Responsable</th>
                                    <th>Servicio</th>
                                    <th>Ip</th>
                                    <th>Usuario</th>
                                    <th>Mac_address</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Serial</th>
                                    <th>Bien Nacional</th>
                                    <th>Fecha</th>
                                    <th>Hora</a></th>
                                    <th>Estado</a></th>
                                    <th>Acción</a></th>
               </tr>
               </tfoot>
             </table>
             
             <center>  <a  href='../../reportes/controlador_servidores.php'   title='Ver Total de Materiales PDF' class='btn bg-red btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-file-pdf-o' > Imprimir Moviminetos de Servidores al sistema</span></a>
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