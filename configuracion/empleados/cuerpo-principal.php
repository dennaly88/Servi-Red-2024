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
              INTERFAZ DE EMPLEADOS</h3></span> 
           </div>
           <center><?php
               $estado='label btn bg-navy btn-fla';
$gerencia=$_SESSION['gerencia'];
echo 
"<td><a class='btn btn-$estado btn-xs' data-toggle='modal'> GERENCIA DE  ".$gerencia ."</a></td>";  '<br>'      
?></center>
           <div class="box-body">
           <div class="col-lg-6 col-xs-6">
           <center><a href="#registrar_empleado" class='btn btn-success btn-sm' data-toggle='modal'>
            <span class='glyphicon glyphicon-user'> </span>Registrar Empleado</a></center>
            </div>
            <br>
            <div class="col-lg-6 col-xs-6">
            <center><a href="#buscar_gerencias" class='btn btn-primary btn-sm' data-toggle='modal'>
            <span class='glyphicon glyphicon-search'> </span>Buscar por Gerencias</a></center>
            </div>
            
            <table id="empleados" class="table table-bordered table-striped">
              
               <thead>
                 <tr> 
                                                    
                                    <th>Foto</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Cedula</th>
                                    <th>Gerencia</th>
                                    <th>División</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                </tr>
               </thead>
               <tbody>      
              
<?php

// *******************************************************************************************************************************//
// ******************************************************************************************************************************//


// 1.  $sql="SELECT * from nomina where gerencia  = 'OFICINA DE ATENCION CIUDADANA'"; LISTA  10 */
// 2.  $sql="SELECT * from nomina where gerencia  = 'TECNOLOGIA DE LA INFORMACION Y COMUNICACION'"; LISTA 51
// 3.  $sql="SELECT * from nomina where gerencia  = 'PRESIDENCIA'"; LISTA 107
// 4.  $sql="SELECT * from nomina where gerencia  = 'RELACIONES PUBLICAS'"; LISTA 0
// 5.   $sql="SELECT * from nomina where gerencia  = 'CONSULTORIA JURIDICA'"; /* LISTA 8 */
// 6.  $sql="SELECT * from nomina where gerencia  = 'UNIDAD DE AUDITORIA INTERNA'"; /* LISTA 13*/
// 7.  $sql="SELECT * from nomina where gerencia  = 'JUNTA DIRECTIVA'"; /* LISTA 0 */
// 8.  $sql="SELECT * from nomina where gerencia  = 'INGENIERIA'"; /* LISTA 90 */
// 9.  $sql="SELECT * from nomina where gerencia  = 'VICEPRESIDENCIA DE SOPORTE TECNOLOGICO'"; /* LISTA 23 */
// 10. $sql="SELECT * from nomina where gerencia  = 'COMERCIALIZACION Y VENTAS'"; /* LISTA 8 */
// 11. $sql="SELECT * from nomina where gerencia  = 'VICEPRESIDENCIA EJECUTIVA'"; /* LISTA 3 */
// 12. $sql="SELECT * from nomina where gerencia  = 'PLANIFICACION Y PRESUPUESTO'"; /* LISTA 18 */
// 13. $sql="SELECT * from nomina where gerencia  = 'ASUNTOS PUBLICOS'"; /* LISTA 21 */
// 14. $sql="SELECT * from nomina where gerencia  = 'VICEPRESIDENCIA DE INFORMACION'"; /* LISTA 9 */
// 15. $sql="SELECT * from nomina where gerencia  = 'PROGRAMACION'"; /* LISTA 27 */
// 16. $sql="SELECT * from nomina where gerencia  = 'VICEPRESIDENCIA EJECUTIVA DE PRODUCCION'"; /* LISTA 13 */
// 17. $sql="SELECT * from nomina where gerencia  = 'MULTIMEDIOS'"; /* LISTA 63 */
// 18. $sql="SELECT * from nomina where gerencia  = 'ARCHIVO AUDIOVISUAL'"; /* LISTA 38 */
// 19. $sql="SELECT * from nomina where gerencia  = 'CONTRATACIONES PUBLICAS'"; /* LISTA 16 */
// 20. $sql="SELECT * from nomina where gerencia  = 'ADMINISTRACION Y FINANZAS'"; /* LISTA 28 */
// 21. $sql="SELECT * from nomina where gerencia  = 'SEGURIDAD INTEGRAL'"; /* LISTA 78 */
// 22. $sql="SELECT * from nomina where gerencia  = 'IMAGEN'"; /* LISTA 84 */
// 23. $sql="SELECT * from nomina where gerencia  = 'PROGRAMAS'"; /* LISTA 142 */
// 24. $sql="SELECT * from nomina where gerencia  = 'INFRAESTRUCTURA Y SERVICIOS GENERALES'"; /* LISTA 156 */
// 25. $sql="SELECT * from nomina where gerencia  = 'SERVICIOS A LA PRODUCCION'"; /* LISTA 219 */
// 26. $sql="SELECT * from nomina where gerencia  = 'SERVICIOS INFORMATIVOS'"; /* LISTA 337 */
// 27. $sql="SELECT * from nomina where gerencia = 'GESTION HUMANA'"; /* LISTA 606 */


$sql="SELECT * from nomina where gerencia='$gerencia'";

                         $result=mysqli_query($conexion,$sql);
                         while($row=mysqli_fetch_array($result)){
                         $imagen = '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                        
                         
                        
                        
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
                           <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'>$imagen</a></td>
                           <td>".$row['nombres']."</td>
                           <td>".$row['apellidos']."</td> 
                           <td>".$row['cedula']."</td> 
                           <td>".$row['gerencia']."</td>
                           <td>".$row['division']."</td>
                             <td><a href='#estado_".$row['id']."' class='btn btn-$estado btn-xs $es' data-toggle='modal' >  ".$row['estado']."</a></td>
                       <td>
                         <a href='#editar_empleado".$row['id']."'title='Editar' class='btn btn-info btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> </a>
                         <a href='#eliminar_empleado".$row['id']."'title='Eliminar' class='btn btn-danger btn-sm disabled' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> </a>
                       </td>
                     </tr>";
                     include('buscar-gerencias.php');
                     include('registrar-empleado.php');
                     include('actualizar-empleado.php');
                     include('perfil.php');
                     include('cambiar-foto.php');
                     include('eliminar-empleado.php');
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
                                    <th>Gerencia</th>
                                    <th>División</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
               </tr>
               </tfoot>
             </table>
           </div>
         </div>
         <?php include('contador-empleados.php');?>
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