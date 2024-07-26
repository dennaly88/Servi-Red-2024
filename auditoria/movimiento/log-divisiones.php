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
             LOG DE DIVISIÓNES</h3></span> 
           </div>
           <div class="box-body">


          
             <table id="usuarios" class="table table-bordered table-striped">
               <thead>
                 <tr>
                                     <th>Imagen</th>
                                    <th>Nombres</th>
                                    <th>Estado</th>
                                    <th>Responsable</th>
                                   
                </tr>
               </thead>
               <tbody>
               
               


            
               <?php
                         
                         $sql="SELECT * from movimiento_divisiones order by id";
                         
                         
                                       
                         $result=mysqli_query($conexion,$sql);
                         while($row=mysqli_fetch_array($result)){


                          


                        

                          $el=$row['estado'];
                          switch ($el) { 
                          case 'Registrado':
                          $elo='primary';
                          break;
                          case 'Editado':
                          $elo='success'; 
                          break;
                          case 'Eliminado': 
                          $elo='danger';
                          break;
                      }
                          


                         $per=$row['id_rol'];
                         switch ($per) { 
                         case 1:
                         $per='Administrador';
                         break;
                         case 2:
                         $per='Coordinador'; 
                         break;
                         case 3: 
                         $per='Técnico';
                         break;
                     }






                     
                       
                        
                     $nombre = $row["responsable"];
                     $col="SELECT imagen from usuarios WHERE usuario='$nombre'";
                                           $rel=mysqli_query($conexion,$col);
                                           while($rol=mysqli_fetch_array($rel)){
                                            $imagenunica = '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($rol["imagen"]).'"/>';
                                                         } 


                       echo 
                     "<tr>
                            <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'> $imagenunica</a></td>
                           <td>".$row['nombre']."</td>
                          <td><a href='#estado_".$row['id']."' class='btn btn-$elo btn-xs' data-toggle='modal'>  ".$row['estado']."</a></td>

                           <td>".$row['responsable']."</td>




                       
                       
                     </tr>";
                    
                    
                   }    
                 ?>
               </tbody>
               <tfoot>
               <tr>
              
               <<th>Imagen</th>
                                    <th>Nombres</th>
                                    <th>Estado</th>
                                    <th>Responsable</th>
               </tr>
               </tfoot>
             </table>
             
             <center>  <a  href='../../reportes/controlador_usuarios.php'   title='Ver Total de Materiales PDF' class='btn bg-red btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-file-pdf-o' > Imprimir Moviminetos de Gerencias al sistema</span></a>
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