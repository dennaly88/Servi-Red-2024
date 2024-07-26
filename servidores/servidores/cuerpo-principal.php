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
              INTERFAZ DE SERVIDORES</h3></span> 
           </div>
           <div class="box-body">


           
           <center><a href="#ingreso" class='btn btn-primary btn-sm' data-toggle='modal'>
            <span class='fa fa-server'></span> Agregar Servidor</a></center>
             <table id="usuarios" class="table table-bordered table-striped">
               <thead>
                 <tr>
                                    <th>Foto</th>
                                    <th>Servicio</th>
                                    <th>IP</th>
                                    <th>Usuario</th>
                                    <th>Clave</th>
                                    <th>Mac Address</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Estado</th>
                                    <th>Bien Nacional</th>
                                    <th>Sistema Operativo</th>
                                    <th>Ubicación Remoto</th>
                                    <th>Ubicación Geografica</th>
                                    <th>Acción</a></th>
                 
                </tr>
               </thead>
               <tbody>
              
                   



      
               
<?php 
                     $sql="SELECT id  , marca, ip , mac_address, modelo, seri, bien_nacional, imagen,usuario,clave,remoto,sistema_operativo,servicio, ubicacion_geografica, ubicacion, servicio, estado from servidor order by id desc";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){

                     $ubicacion = '<img  width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($row["ubicacion_geografica"]).'"/>';
                     $imagen = '<img height="120" width="120" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                     $remoto =$row['remoto'];


                     $accion=$row['estado'];
                     if($accion=='Activo'){
                       
                       $color='success'; 
                       $boton='';
                     }else{
                       $color='btn bg-maroon';
                       $boton='disabled';

                     }  




								   echo 
								"<tr>
 
                  <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span >$imagen</a></td>
                  <td><a target='_blank' href='http://".$row['ip']."'class='btn btn-primary btn-xs' data-toggle='modal'><span > ".$row['servicio']."</a></td>
                  <td><a href='#estado_".$row['id']."' class='btn btn-success btn-xs' data-toggle='modal'>  ".$row['ip']."</a></td>
                  <td>".$row['usuario']."</td>
                  <td> <a href='#contraseña_".$row['id']."' class='btn btn-dark btn-lg' data-toggle='modal'><span class='fa fa-eye'></span> </a></td>
                  <td><a href='#estado_".$row['id']."' class='btn bg-navy btn-xs' data-toggle='modal'>  ".$row['mac_address']."</a></td>
                  <td>".$row['marca']."</td>
                  <td>".$row['modelo']."</td>
                  <td><a href='#estado_".$row['id']."' class='btn btn-$color btn-xs $boton' data-toggle='modal' >  ".$row['estado']."</a></td>
                  <td>".$row['bien_nacional']."</td>
                  <td>".$row['sistema_operativo']."</td>
                 <td>".$row['remoto']."</td>
                 
                  <td><a href='#ubicacion_".$row['id']."'  data-toggle='modal'><span class='img-circle'>$ubicacion</a></td>
                
                 
									<td>
										<a href='#edit_".$row['id']."' title='Editar'class='btn btn-info btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span></a>

										            
                                <a href='#delete_".$row['id']."' title='Eliminar'class='btn btn-danger btn-sm disabled' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span></a>
                 
                                <a href='$remoto' 
                     class='btn bg-navy btn-flat btn-sm' data-toggle='modal'
                     target='_blank' onclick='window.open(this.href, this.target,'width=60,height=40'); title='Consola'return false;
                     > <span class='glyphicon glyphicon-blackboard'></span></a>
                       
                     
                     </td>
								</tr>";
                include('ubicacion.php');
                include('perfil.php');
                include('registrar.php');
								include('actualizar.php');
								include('eliminar.php');
                include('cambiar-foto.php');
                include('contraseña.php');
                include('estado.php');
            
							}
						?>





               </tbody>
               <tfoot>
               <tr>
               <th>Foto</th>
                                    <th>Servicio</th>
                                    <th>IP</th>
                                    <th>Usuario</th>
                                    <th>Clave</th>
                                    <th>Mac Address</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Estado</th>
                                    <th>Bien Nacional</th>
                                    <th>Sistema Operativo</th>
                                    <th>Ubicación Remoto</th>
                                    <th>Ubicación Geografica</th>
                                    <th>Acción</a></th>
               </tr>
               </tfoot>
             </table>
            <!-------  boton para imprimir
           <center>  <a  href='../../reportes/controlador_wifi.php'   title='Ver Total de Materiales PDF' class='btn bg-red btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-file-pdf-o' > Imprimir Total de Servidores</span></a>
          ------->
          </div>
         </div>
         <?php include('contador.php');?>
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