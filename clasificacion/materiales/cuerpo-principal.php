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
              INTERFAZ DE MATERIALES</h3></span> 
           </div>
           <div class="box-body">
           <center><a href="#registro_material" class='btn btn-primary btn-sm' data-toggle='modal'>
            <span class='glyphicon glyphicon-plus'></span>Agregar Material</a></center>
             <table id="materiales" class="table table-bordered table-striped">
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
                         $sql="SELECT * from materiales order by id";   
                         $result=mysqli_query($conexion,$sql);
                         while($row=mysqli_fetch_array($result)){
                         $imagen = '<img  width="90" height="80" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
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
                           <td><a href='#cambiar_foto_marca".$row['id']."'  data-toggle='modal'><span class='img-circle'>$imagen</a></td>
                          
                           <td>".$row['nombre']."</td>
                                         
                       <td>
                         <a href='#editar_material_".$row['id']."'title='Editar' class='btn btn-info btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> </a>
                         <a href='#eliminar_material_".$row['id']."'title='Eliminar' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> </a>
                       </td>
                     </tr>";
                     include('registrar-material.php');
                     include('actualizar-material.php');
                     include('cambiar-foto-material.php');
                     include('eliminar-material.php');
                                         
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
         <?php include('contador-materiales.php');?>
   </section>   
   <script src="../../cuerpo/librerias/js/data-table.js"></script>   
</body>
</html>
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