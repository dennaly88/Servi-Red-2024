
               
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
    <meta charset="UTF-8">
  </head>
  <?php include "sql/conexion.php";?>
  <style type="text/css">
      img.pequeña{width: 50px; height: 50px;}
      img.mediana{width: 100px; height: 100px;}
      img.grande{width: 200px; height: 200px;}
    </style>
 
  <body class="skin-blue">
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

            <div class="box box-primary">
           <div class="box-header">       
             <h3 class="box-title"> <span class="label btn bg-navy btn-fla  pull-left">
             LOG DE EQUIPOS</h3></span> 
           </div>


            
                <div class="box-body">
 <center>
      </div> 
                  <table id="usuarios" class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                    <th>Id Equipo</th>
                                    <th>Foto</th>
                                    <th>Id Movimiento</th>
                                    <th>Asignado a </th>
                                    <th>Equipo</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Serial</th>
                                    <th>Bien Nacional</th>
                                    <th>Registrado por</th>
                                    <th>Fecha</th>
                                    <th>Status</th>
                                    
                            </tr>
                    </thead> 
                    <tbody> 

                       <?php
                                $sql="SELECT * from empleados";
                                $resu=mysqli_query($conexion,$sql);
                                $imagen = '<img src="'.$mostrar["imagen"].'" class="img-circle" width="80" height="80" />';
                       ?>

                    <?php
                                $sql="SELECT * from equipos";
                                $resul=mysqli_query($conexion,$sql);
                       ?>
                    <?php
                                $sql="SELECT * from marcas";
                                $resultados=mysqli_query($conexion,$sql);
                      ?>
                <?php
                     $sql="SELECT * from  order by id desc";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){
                     $imagen_empleado = $row["imagen_empleado"];
                     $estado=$row['status'];
                     if($estado=='Registrado'){
                      
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








								   echo 
								"<tr>
                <td>".$row['id_equipo']."</td>
                <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'>$imagen_empleado</a></td>
                  <td>".$row['id']."</td>
                  
                  <td>".$row['empleado']."</td>
									<td>".$row['nombre']."</td>
									<td>".$row['marca']."</td>
                  <td>".$row['modelo']."</td>
                  <td>".$row['seri']."</td>
                  <td>".$row['bien_nacional']."</td>
                  <td>".$row['responsable']."</td>
                  <td>".$row['fecha']."</td>
                  <td><a class='btn btn-$estado btn-xs' data-toggle='modal'>  ".$row['status']."</a></td>
									
								</tr>";
               
               
             
							}
						?>
                   
                        <tfoot>
                              <tr>
                                    <th>Id Equipo</th>
                                    <th>Foto</th>
                                    <th>Id Movimiento</th>
                                    <th>Asignado a </th>
                                    <th>Equipo</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Serial</th>
                                    <th>Bien Nacional</th>
                                    <th>Registrado por</th>
                                    <th>Fecha</th>
                                    <th>Status</th>
                                   
                              </tr>
                            </tbody><br>
                        </tfoot>
                  </table>
                  <center>  <a  href='../../reportes/controlador_usuarios.php'   title='Ver Total de Materiales PDF' class='btn bg-red btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-file-pdf-o' > Imprimir Moviminetos de Equipos al sistema</span></a>
           </div>
         </div>
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

     