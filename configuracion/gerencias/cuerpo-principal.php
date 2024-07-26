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
<h3 class="box-title"> <span class="label  btn bg-navy btn-fla pull-left">
INTERFAZ DE GERENCIAS</h3></span> 
</div>
<div class="box-body">
<center><a href="#registro_gerencia" class='btn btn-primary btn-sm' data-toggle='modal'>
            <span class='glyphicon glyphicon-plus'></span>Agregar Gerencia</a></center>
<table id="gerencias" class="table table-bordered table-striped">
<thead>
<tr>
                 
                  <th>Id</th>
                  <th>Nombre de la División</th>
                  <th>Estado</th>
                  <th>Acción</th>
</tr>
</thead>
<tbody>
<?php
include('sql/conexion.php');
                $consulta="SELECT * from roles";
                $result=mysqli_query($conexion,$consulta);
                $roles = 0;
                while($row = mysqli_fetch_array($result))
                {
                  $roles = $roles + 1;
                }
            ?>         
            <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from roles";
                        $result=mysqli_query($conexion,$consulta);
                        $total = 8;      
                  ?>
                  <?php
                     $sql="SELECT *  from gerencias order by id desc";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){
                      $estado=$row['estado'];
                      if($estado=='Activa'){
                        $estado='success'; 
                        $es='';
                      }else{
                        $estado='btn bg-maroon';
                        
                      }

                      $cperfil=$row['nombre'] ;

                      if($cperfil=='Administrador'){

                            $color='btn bg-navy btn-fla';

                      }
                      else
                      if($cperfil=='Coordinador'){
                        $color='success';


                      }
                      else
                      {

                        $color='primary';

                      }
								   echo 
                     "<tr>
                     <td>".$row['id']."</td>
                     <td>".$row['nombres']."</td>
                     
                      <td><a href='#estado_".$row['id']."' class='btn btn-$estado btn-xs $es' data-toggle='modal' >  ".$row['estado']."</a></td>
                     <td>
                     <a href='#edit_".$row['id']."'title='Editar' class='btn btn-info btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> </a>
                     <a href='#delete_".$row['id']."'title='Eliminar' class='btn btn-danger btn-sm disabled' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> </a>
                   </td>
                     </tr>";
                     include('registrar-gerencia.php');
                     include('actualizar-gerencia.php');
                     include('eliminar-gerencia.php');
                     include('estado.php');
                   }                
                 ?>
               </tbody>
               <tfoot>
               <tr>
                    
                  <th>Id</th>
                  <th>Nombre de la División</th>
                  <th>Estado</th>
                  <th>Acción</th>

               </tr>
               </tfoot>
             </table>
           </div>
         </div>
         <?php include('contador-gerencia.php');?>
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

