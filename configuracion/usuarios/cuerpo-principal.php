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
              INTERFAZ DE USUARIOS</h3></span> 
           </div>
           <div class="box-body">


           
           <center><a href="#registrar_" class='btn btn-primary btn-sm' data-toggle='modal'>
            <span class='glyphicon glyphicon-plus'></span>Agregar Usuarios</a></center>
             <table id="usuarios" class="table table-bordered table-striped">
               <thead>
                 <tr>
                                    <th>Foto</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Cedula</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Usuario</th>
                                    <th>Estado</th>
                                    <th>Pregunta</th>
                                    <th>Contraseña</th>
                                    <th>Perfil</th>
                                    <th>Acción</a></th>
                 
                </tr>
               </thead>
               <tbody>
               


               <?php 
session_start();

$$carnet=$_SESSION['imagen'];

?> 
               
            
               <?php
                         
                         $sql="SELECT * from usuarios order by id";
                       
                         $result=mysqli_query($conexion,$sql);
                         while($row=mysqli_fetch_array($result)){
                         $imagen2 = '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                         $estado=$row['estado'];
                         if($estado=='Activo'){
                           
                           $estado='success'; 
                           $es='';
                         }else{
                           $estado='btn bg-maroon';
                           $es='disabled';

                         }  
                       echo 
                     "<tr>
                          
                           <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'>$imagen2</a></td>
                           <td>".$row['nombres']."</td>
                           <td>".$row['apellidos']."</td>
                           <td>".$row['cedula']."</td>
                           <td>".$row['telefono']."</td>
                           <td>".$row['corre']."</td>
                           <td>".$row['usuario']."</td> 
                          <td><a href='#estado_".$row['id']."' class='btn btn-$estado btn-xs $es' data-toggle='modal' >  ".$row['estado']."</a></td>
                          <td>".$row['pregunta']."</td>
                       <td> <a href='#contraseña_".$row['id']."' class='btn btn-dark btn-lg' data-toggle='modal'><span class='fa fa-eye'></span> </a></td>
                       <td> <a href='#perfil_".$row['id']."' class='btn btn-dark btn-lg' data-toggle='modal'><span class='fa fa-user'></span> </a></td>
                       <td>
                         <a href='#edi_".$row['id']."'title='Editar' class='btn btn-info btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> </a>
                         
                       </td>
                     </tr>";
 
                     include('editar.php');
                     include('perfil.php');
                     include('cambiar-foto.php');
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
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Cedula</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Usuario</th>
                                    <th>Estado</th>
                                    <th>Pregunta</th>
                                    <th>Contraseña</th>
                                    <th>Perfil</th>
                                    <th>Acción</th>
               </tr>
               </tfoot>
             </table>
             <!----- BOTON PARA IMPRIMIR
           <center>  <a  href='../../reportes/controlador_usuarios.php' value="ocultar" onclick="OcultarButton(this)" title='Ver Total de Materiales PDF' class='btn bg-red btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-file-pdf-o' > Imprimir Usuarios</span></a>
        ----->
          </div>
         </div>
         <?php include('contador-usuarios.php');?>
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