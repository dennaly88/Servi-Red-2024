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
              INTERFAZ DE SISTEMAS OPERATIVOS</h3></span> 
           </div>
           <div class="box-body">
           <center><a href="#registro_sistema_operativo" class='btn btn-primary btn-sm' data-toggle='modal'>
            <span class='glyphicon glyphicon-plus'></span>Agregar Sistema Operativo</a></center>
             <table id="sistemas_operativos" class="table table-bordered table-striped">
               <thead>
                 <tr>
                                  <th>Id</th>
                                  <th>Foto</th>
                                  <th>Clasificación</th>
                                  <th>Nombre</th>
                                  <th>Acción</th>

                </tr>
               </thead>
               <tbody>
               <?php
                         $sql="SELECT * from sistemas_operativos order by id";   
                         $result=mysqli_query($conexion,$sql);
                         while($row=mysqli_fetch_array($result)){
                         $imagen = '<img  width="90" height="80" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                        
                        
                         $imagen = '<img height="80" width="80" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                         $clasificación=$row['id_clasificacion'];
                              switch ($clasificación) { 
                           case 1:
                               $nombre_clasificacion='Dos'; 
                              break;
                           case 2:
                               $nombre_clasificacion='UNIX'; 
                              break;
                           case 3: 
                               $nombre_clasificacion='WINDOWS';
                              break;
                              case 4: 
                                $nombre_clasificacion='GNU/LINUX';
                               break;
                               case 5: 
                                $nombre_clasificacion='MAC OS';
                               break;
                            }
                       echo 
                     "<tr>
                     <td>".$row['id']."</td>
                     <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'>$imagen</a></td>
                     <td>".$nombre_clasificacion."</td>
                     <td>".$row['nombre']."</td>
                     <td width='300' height='20'>
                         <a href='#editar_sistema_operativo".$row['id']."'title='Editar' class='btn btn-info btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> </a>
                         <a href='#eliminar_sistema_operativo".$row['id']."'title='Eliminar' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> </a>
                      </td>
                     </tr>";
                     include('registrar-sistemas-operativo.php');
                     include('actualizar-sistemas-operativo.php');
                     include('eliminar-sistemas-operativo.php');  
                     include('cambiar-foto-sistema-operativo.php');  
                   }
                 
                 ?>
               </tbody>
               <tfoot>
               <tr>
                                  <th>Id</th>
                                  <th>Foto</th>
                                  <th>Clasificación</th>
                                  <th>Nombre</th>
                                  <th>Acción</th>
               </tr>
               </tfoot>
             </table>
           </div>
         </div>
         <?php include('contador-sistemas-operatvivos.php');?>
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