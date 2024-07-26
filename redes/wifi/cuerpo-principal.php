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
           <center><a href="#registro" class='btn btn-primary btn-sm' data-toggle='modal'>
            <span class='glyphicon glyphicon-plus'></span>Agregar Equipo</a></center>
             <table id="administrar-materiales" class="table table-bordered table-striped">
               <thead> 
                 <tr>
                
                                    <th>Foto</th>
                                    <th>IP</th>
                                    <th>Usuario</th>
                                    <th>Clave Admin</th>
                                    <th>Estado</th>
                                    <th>SSID</th>
                                    <th>Clave de Paso</th>
                                    <th>Ubicacion</th>
                                    <th>Mac Address</th>
                                    <th>Direccion</th>
                                    <th>Foto Ubicacion</th>
                                    <th>QR</th>
                                    <th>Acción</a></th>
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
                    $sql="SELECT * from wifi order by id";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){
                      $accion=$row['estado'];
                      if($accion=='Activo'){
                        
                        $color='success'; 
                        $boton='';
                      }else{
                        $color='btn bg-maroon';
                        $boton='disabled';

                      }  






                      
                     $imagen_empleado = $row["imagen_empleado"];
                     
                   
                    $ip = $row["ip"];
                    $consulta88="SELECT imagen from wifi WHERE ip='$ip'";
                    $resultado88=mysqli_query($conexion,$consulta88);
                    while($rowis88=mysqli_fetch_array($resultado88)){

                    $imagenequipo = '<img class="img" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($rowis88["imagen"]).'"/>';
                                                                                              
                  } 

                  $ip = $row["ip"];
                  $consulta8="SELECT ubicacion_geografica from wifi WHERE ip='$ip'";
                                        $resultado=mysqli_query($conexion,$consulta8);
                                        while($rowis=mysqli_fetch_array($resultado)){
                                         $imagenubicacion = '<img class="img" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($rowis["ubicacion_geografica"]).'"/>';
                                                      } 



                                                      $ip = $row["ip"];
                                                      $consulta8="SELECT qr from wifi WHERE ip='$ip'";
                                                                            $resultado=mysqli_query($conexion,$consulta8);
                                                                            while($rowiss=mysqli_fetch_array($resultado)){
                                                                             $imagenqr = '<img class="img" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($rowiss["qr"]).'"/>';
                                                                                          }
                                                                                          



                    $ubi= $row["id_ubicacion"];
                    switch ($ubi) { 
                     case 1: $ubi='Sotano 2';
                     break;
                     case 2: $ubi='Sotano 1'; 
                     break;
                     case 3: $ubi='Planta Baja';
                     break;
                     case 4: $ubi='Piso 1';
                     break;
                     case 5: $ubi='Piso 2';
                     break;
                     case 6: $ubi='Piso 3';
                     break;
                     case 7: $ubi='Piso 4';
                     break;
                     case 8: $ubi='Telepuertos';
                     break; 
                            }    
                    echo
                     "<tr>
                    
                    
                 <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'>$imagenequipo</a></td>
                           <td>".$row['ip']."</td>
                           <td>".$row['usuario']."</td>
                           <td>".$row['clave_administrador']."</td>
                           <td><a href='#estado_".$row['id']."' class='btn btn-$color btn-xs $boton' data-toggle='modal' >  ".$row['estado']."</a></td>
                           <td>".$row['ssid']."</td>
                           <td>".$row['clave_paso']."</td>
                           <td>".$ubi."</td> 
                           <td>".$row['mac_address']."</td> 
                          <td>".$row['direccion']."</td>
                           <td><a href='#ubicacion_".$row['id']."'  data-toggle='modal'><span class='img-circle'> $imagenubicacion</a></td>
                           <td><a href='#qr_".$row['id']."'  data-toggle='modal'><span class='img-circle'>$imagenqr</a></td>

                   

            <td class='dropdown'>
                <div class='btn-group dropleft'>
                
                  <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                  <span class='glyphicon glyphicon-list'></span><span class='caret'></span>
                  </a>
                  <ul class='dropdown-menu dropdown-menu-right'>
                    <li>

                         <a href='#edit_".$row['id']."'title='Editar' class='btn btn btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> </a>
                     
                    
                    </li>

                    <li role='presentation'>
                          <a href='#eliminar_equipos".$row['id']."'  title='Eliminar' class='btn btn btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span></a>

                    </li>

                  
                  
                    </li>

                  </ul>
              
                </div>
           </td>
                

               
                  
                     </tr>";
                     include('ubicacion.php');
                     include('actualizar.php');
                     include('perfil.php');
                     include('cambiar-foto.php');
                     include('qr.php');
                     include('registrar.php');
                     include('eliminar.php');
                     include('estado.php');
                     include('contraseña.php');
                   }    
                 ?>
               </tbody>
               <tfoot>
               <tr>
              
                                    
             
                                    <th>Foto</th>
                                    <th>IP</th>
                                    <th>Usuario</th>
                                    <th>Clave Admin</th>
                                    <th>Estado</th>
                                    <th>SSID</th>
                                    <th>Clave de Paso</th>
                                    <th>Ubicacion</th>
                                    <th>Mac Address</th>
                                    <th>Direccion</th>
                                    <th>Foto Ubicacion</th>
                                    <th>QR</th>
                                    <th>Acción</a></th>
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