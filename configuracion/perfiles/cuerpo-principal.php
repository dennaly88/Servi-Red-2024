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
INTERFAZ DE PERFILES</h3></span> 
</div>
<div class="box-body">

<table id="perfiles" class="table table-bordered table-striped">
<thead>
<tr>
                 
                  <th>Perfil</th>
                  <th>Descripción</th>
                  <th>Status</th>
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
                     $sql="SELECT *  from roles order by id desc";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){
                     $sta=$row['status'];
                     if($sta=='Activo'){
                       
                       $sta='success'; 
                     }else{
                       $sta='danger';
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
                     <td><a href='#_".$row['id']."' class='btn btn-$color btn-xs' data-toggle='modal'>".$row['nombre']." </td>
                     <td>".$row['Descripcion']."</td>
                     <td><a href='#status_".$row['id']."' class='btn btn-$sta btn-xs' data-toggle='modal'>  ".$row['status']."</a></td>
                     <td width='300' height='20'> 
                       <a href='#edit_".$row['id']."'title='Editar' class='btn btn-primary btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> </a>
                       <a href='#ver_".$row['id']."' title='Ver' class='btn btn-danger  btn-sm' data-toggle='modal'><span class='fa fa-eye'></span>  &nbsp; </a>
                     </td>
                     </tr>";
                     include('actualizar-perfil.php');
                     include('status.php');
                     include('ver.php');
                   }                
                 ?>
               </tbody>
               <tfoot>
               <tr>
                    <th>Perfil</th>
                    <th>Descripción</th>
                    <th>Status</th>
                    <th>Acción</th>
               </tr>
               </tfoot>
             </table>
           </div>
         </div>
         <?php include('contador-perfiles.php');?>
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

