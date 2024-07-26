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
              INTERFAZ DE EQUIPOS</h3></span> 
           </div>
           
           <div class="box-body">
           <center><a href="#registro_material" class='btn btn-primary btn-sm' data-toggle='modal'>
            <span class='glyphicon glyphicon-plus'></span>Agregar Equipo</a></center>
             <table id="equipos" class="table table-bordered table-striped">
               <thead>
                 <tr>
                                    <th>id</th>
                                    <th>Foto</th>
                                    <th>Nombres</th>
                                    <th>Acción</a></th>
                </tr>
               </thead>
               <tbody>           
               <?php
                         $sql="SELECT * from equipos order by id";   
                         $result=mysqli_query($conexion,$sql);
                         while($row=mysqli_fetch_array($result)){
                         $imagen = '<img  width="130" height="130" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                         $estado=$row['estado'];
                         if($estado=='Activo'){
                           
                           $estado='success'; 
                         }else{
                           $estado='btn bg-maroon';
                         }
                         $categoria=$row['id_categoria'];
                           switch ($categoria) { 
                           case 1:
                           $categoria='equipos';
                           break;
                           case 2:
                            $categoria='wifi'; 
                           break;
                           case 3: 
                            $categoria='router';
                           break;
                           case 4: 
                            $categoria='switch';
                            break;
                            case 5: 
                              $categoria='servidores';
                              break;
                              case 6: 
                                $categoria='materiales';
                                break;
                         }
                                    
                       echo 
                     "<tr>
                     <td>".$row['id']."</td>
                           <td><a href='#cambiar_foto_equipo".$row['id']."'  data-toggle='modal'><span class='img-circle'>$imagen</a></td>
                           <td>".$row['nombre']."</td>     
                       <td>
                         <a href='#editar_equipo_".$row['id']."'title='Editar' class='btn btn-info btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> </a>
                         <a href='#eliminar_equipo_".$row['id']."'title='Eliminar' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> </a>
                       </td>
                     </tr>";
                     include('registrar-equipos.php');
                     include('actualizar-equipos.php');
                     include('cambiar-foto-equipos.php');
                     include('eliminar-equipos.php');  
                   }
                 ?>
               </tbody>
               <tfoot>
               <tr>
                                    <th>id</th>
                                    <th>Foto</th>
                                    <th>Nombres</th>
                                    <th>Acción</a></th>
               </tr>
               </tfoot>
             </table>
           </div>
         </div>
         <?php include('contador-equipos.php');?>
   </section>
   <script src="../../cuerpo/librerias/js/data-table.js"></script>
</body>
</html>
