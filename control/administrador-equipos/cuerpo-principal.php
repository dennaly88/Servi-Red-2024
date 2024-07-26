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
             INTERFAZ PARA ADMINISTRAR EQUIPOS</h3></span> 
           </div>
           
           <div class="box-body">
           <center><a href="#registro_equipo" class='btn btn-primary btn-sm' data-toggle='modal'>
            <span class='glyphicon glyphicon-plus'></span>Agregar Equipo</a></center>
             <table id="administrar-materiales" class="table table-bordered table-striped">
               <thead>
                 <tr>
                
                                    <th>Foto</th>
                                    <th>Asignado a </th>
                                    <th>Equipo</th>
                                    <th>Foto Equipo</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Serial</th>
                                    <th>Bien Nacional</th>
                                    <th>Registrado por</th>
                                    <th>Fecha</th>
                                    <th>Status</th>
                                    <th>Acción</th> 
                  
                </tr>
               </thead>
               <tbody>
                     <?php
                                $sql="SELECT * from equipos";
                                $equipos=mysqli_query($conexion,$sql);
                      ?>
                      <?php
                                $sql="SELECT * from unidad";
                                $unidad=mysqli_query($conexion,$sql);
                      ?>
                      <?php
                                
                                $sql="SELECT * from nomina where gerencia  = 'TECNOLOGIA DE LA INFORMACION Y COMUNICACION'"; 
                                $tecnologia=mysqli_query($conexion,$sql);
                      ?>
               
            
               <?php
                         
                        
                        include('sql/conexion.php');
                        $consulta="SELECT * from administrador_equipos";
                        $result=mysqli_query($conexion,$consulta);
                        $total_equipos = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $total_equipos =  $total_equipos + 1;
                        }
                    ?>
                   <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from administrador_equipos where status='Asignado'"; 
                        $result=mysqli_query($conexion,$consulta);
                        $total_asignado = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $total_asignado = $total_asignado + 1;
                        }
                    ?>
                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from administrador_equipos where status='Registrado'"; 
                        $result=mysqli_query($conexion,$consulta);
                        $total_almacen = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $total_almacen = $total_almacen + 1;
                        }
                    ?>

                       <?php
                                $sql="SELECT * from empleados";
                                $resu=mysqli_query($conexion,$sql);
                                $imagen = '<img src="'.$mostrar["imagen"].'" class="img-circle" width="80" height="80" />';
                       ?>

                    <?php
                                $sql="SELECT * from equipos";
                                $resulta=mysqli_query($conexion,$sql);
                       ?>
                    <?php
                                $sql="SELECT * from marcas";
                                $resultados=mysqli_query($conexion,$sql);
                      ?>
   <?php
                                $sql="SELECT * from sistemas_operativos";
                                $sistemas_operativos=mysqli_query($conexion,$sql);
                      ?>
	
  
  <?php
       

	?>







                <?php
                     $sql="SELECT * from administrador_equipos";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){
                      
                     $imagen_empleado = $row["imagen_empleado"];
                     $estado=$row['status'];
                     if($estado=='Registrado')
                     {
                      
                          $estado='success';
                        }else{
                          if($estado=='Asignado'){
                          
                            $estado='info';
                          }else{

                            if($estado=='Editado'){
                          
                              $estado='primary';
                            }else{

                              if($estado=='Eliminado'){
                          
                                $estado='danger';
                              }
                            }
                          }
                    }   
                    $sql88="SELECT imagen from nomina WHERE nombres='$imagen_empleado'";
                    $resultas=mysqli_query($conexion,$sql88);
                      while($rowis=mysqli_fetch_array($resultas)){
            $imagen2 = '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                         } 


   $nombre_empleado = $row["empleado"];
   $consulta8="SELECT imagen from nomina WHERE nombres='$nombre_empleado'";
                         $resultado=mysqli_query($conexion,$consulta8);
                         while($rowis=mysqli_fetch_array($resultado)){
                          $imagenunica = '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($rowis["imagen"]).'"/>';
                                       } 

$marca = $row["marca"];
$consulta88="SELECT imagen from marcas WHERE nombres='$marca'";
$resultado88=mysqli_query($conexion,$consulta88);
while($rowis88=mysqli_fetch_array($resultado88)){
$marcaimagen = '<img class="img" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($rowis88["imagen"]).'"/>';
                                                                           } 

$equiponombre = $row["nombre"];
$con8="SELECT imagen from equipos WHERE nombre='$equiponombre'";
$res8=mysqli_query($conexion,$con8);
while($ro8=mysqli_fetch_array($res8)){
$equipoimagen = '<img class="img" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($ro8["imagen"]).'"/>';
} 
                    echo
                     "<tr>
                    
                    
                  <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle' width='80' height='80'>$imagenunica</a></td>
                  <td>".$row['empleado']."</td>
									<td>".$row['nombre']."</td>
                  <td><a href='#equipo_".$row['id']."'  data-toggle='modal'><span class='img' width='100' height='100'>$equipoimagen</a></td>
                  <td><a href='#marca_".$row['id']."'  data-toggle='modal'><span class='img' width='100' height='100'>$marcaimagen</a></td>
                  <td>".$row['modelo']."</td>
                  <td>".$row['seri']."</td>
                  <td>".$row['bien_nacional']."</td>
                  <td><a class='btn bg-navy btn-fla btn-xs' data-toggle='modal'>  ".$row['responsable']."</a></td>
                  <td>".$row['fecha']."</td>
                  <td><a class='btn btn-$estado btn-xs' data-toggle='modal'>  ".$row['status']."</a></td>
                   

            <td class='dropdown'>
                <div class='btn-group dropleft'>
                
                  <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                  <span class='glyphicon glyphicon-list'></span><span class='caret'></span>
                  </a>
                  <ul class='dropdown-menu dropdown-menu-right'>
                    <li>

                        <a href='#actualizar_equipos".$row['id']."' title='Editar' class='btn btn btn-sm' data-toggle='modal'name='Editar'><span class='glyphicon glyphicon-edit'></span></a>
                    
                    </li>

                    <li role='presentation'>
                          <a href='#eliminar_equipos".$row['id']."'  title='Eliminar' class='btn btn btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span></a>

                    </li>

                  
                    <li role='presentation'>
                          <a href='#asignar_".$row['id']."'  title='Asignar' class='btn  btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-log-out'></span></a>

                    </li>
                    <li role='presentation'>
                           <a  href='../../reportes/principal.php?id=$row[id]'   title='Ver PDF' class='btn bg  btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-file-pdf-o' ></span></a>

                    </li>
                    <li role='presentation'>
                           <a  href='../reportes/descargar-materiales.php?id=$row[id]'   title='Descargar PDF' class='btn bg btn-flat  btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-download' ></span></a>        

                    </li>

                  </ul>
              
                </div>
           </td>
                

               
                  
                     </tr>";
                     include('registrar-equipos.php');
                     include('actualizar-equipos.php');
                     include('eliminar-equipos.php');
                     include('aumentar-materiales.php');
                     include('disminucion-materiales.php');
                     include('asignar.php');
                   }    
                 ?>
               </tbody>
               <tfoot>
               <tr>
              
                                    
             
                                    <th>Foto</th>
                                    <th>Asignado a </th>
                                    <th>Equipo</th>
                                    <th>Foto Equipo</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Serial</th>
                                    <th>Bien Nacional</th>
                                    <th>Registrado por</th>
                                    <th>Fecha</th>
                                    <th>Status</th>
                                    <th>Acción</th>
               </tr>
               </tfoot>
             </table> 
           </div>
         </div>
         <?php include('contador-administrar-equipos.php');?>
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