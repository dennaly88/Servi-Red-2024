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
             INTERFAZ PARA ADMINISTRAR LOS MATERIALES</h3></span> 
           </div>
           
           <div class="box-body">
           <center><a href="#registrar" class='btn btn-primary btn-sm' data-toggle='modal'>
            <span class='glyphicon glyphicon-plus'></span>Agregar Material</a></center>
             <table id="administrar-materiales" class="table table-bordered table-striped">
               <thead>
                 <tr>
                                    <th>Foto</th>
                                    <th>Asignado</th>
                                    <th>Equipo</th>
                                    <th>Nombre</th>
                                    <th>Cantidad Inicial</th>
                                    <th>Cantidad Modificar</th>
                                    <th>Cantidad Total</th>
                                    <th>Medición</th>
                                    <th>Status</th>
                                    <th>Registrado</th>
                                    <th>Fecha</th>
                                    <th>Acción</a></th>
                 
                </tr>
               </thead>
               <tbody>
                     <?php
                                $sql="SELECT * from materiales";
                                $materiales=mysqli_query($conexion,$sql);
                      ?>
                      <?php
                                $sql="SELECT * from unidad";
                                $unidad=mysqli_query($conexion,$sql);
                      ?>
                       <?php
                                $sql="SELECT * from empleados";
                                $resu=mysqli_query($conexion,$sql);
                                $image = '<img src="'.$mostrar["imagen"].'" class="img-circle" width="80" height="80" />';
                       ?>
               
            
               <?php
                         
                         $sql="SELECT * from administrador_materiales order by id desc";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){
                     $imagen = $row["imagen"];
                     $estado=$row['status'];
                     $idreporte=$row['id'];
                     if($estado=='Registrado'){
                      
                      $estado='success';
                     }else{
                      if($estado=='Editado'){
                      
                        $estado='info';
                       }else{

                        if($estado=='Aumento'){
                      
                          $estado='primary';
                         }else{

                          if($estado=='Disminución'){
                      
                            $estado='danger';
                           }
                         }
                       }
                    } 
                    
                  
                    $no = $row["asignado"];
                    $cu="SELECT imagen from nomina WHERE nombres='$no'";
                                          $oi=mysqli_query($conexion,$cu);
                                          while($is=mysqli_fetch_array($oi)){
                                           $imagenunica = '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($is["imagen"]).'"/>';
                                                        } 
                    echo
                     "<tr>
                    <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'>$imagenunica</a></td>
                     <td>".$row['asignado']."</td>



                     <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'>$imagen</a></td>
                     
                   
                     <td>".$row['nombre']."</td>
                     <td>".$row['cantidad_inicial']."</td>
                     <td>".$row['cantidad_modificada']."</td>
                     <td>".$row['cantidad']."</td>
                     <td>".$row['unidad']."</td>
                     <td><a class='btn btn-$estado btn-xs' data-toggle='modal'>  ".$row['status']."</a></td>
                     <td>".$row['responsable']."</td>
                     <td>".$row['fecha']."</td>
                     
                

 <td class='dropdown'>
                <div class='btn-group dropleft'>
                
                  <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                  <span class='glyphicon glyphicon-list'></span><span class='caret'></span>
                  </a>
                  <ul class='dropdown-menu dropdown-menu-right'>
                    <li>

                        <a href='#editar_".$row['id']."' title='Editar' class='btn btn btn-sm' data-toggle='modal'name='Editar'><span class='glyphicon glyphicon-edit'></span></a>
                    
                    </li>

                    <li role='presentation'>
                          <a href='#eliminar_".$row['id']."'  title='Eliminar' class='btn btn btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span></a>

                    </li>

                
                    
                    <li role='presentation'>
                             <a href='#aumentar_".$row['id']."'  title='Aumentar' class='btn bg  btn-sm' data-toggle='modal'  data-toggle='modal'><span class='glyphicon glyphicon-plus'></span></a>

                    </li>

                       <li role='presentation'>
                             <a href='#disminuir_".$row['id']."'  title='Dismunucion' class='btn bg  btn-sm' data-toggle='modal'  data-toggle='modal'><span class='glyphicon glyphicon-log-out'></span></a>

                    </li>
                  </ul>
              
                </div>
           </td>



                     
                   
                     
                    
                               

                              

               
                  
                     </tr>";
                     include('registrar.php');
                     include('aumentar.php');
                     include('disminuir.php');
                     include('actualizar.php');
                     include('eliminar.php');
                     include('asignar-material-empleado.php');
                   }    
                 ?>
               </tbody>
               <tfoot>
               <tr>
              
                                    
               <th>Foto</th>
                                    <th>Asignado</th>
                                    <th>Equipo</th>
                                    <th>Nombre</th>
                                    <th>Cantidad Inicial</th>
                                    <th>Cantidad Modificar</th>
                                    <th>Cantidad Total</th>
                                    <th>Medición</th>
                                    <th>Status</th>
                                    <th>Registrado</th>
                                    <th>Fecha</th>
                                    <th>Acción</a></th>
               </tr>
               </tfoot>
             </table> 
           </div>
         </div>
         <?php include('contador-administrar-material.php');?>
   </section>
  
   <script src="../../cuerpo/librerias/js/data-table-2.js"></script>

  
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