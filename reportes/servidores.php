
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<section class="content">
<?php
include('conexion.php');
      ?>

<style>
  
  table {
    border-collapse: collapse;
    
  }
  p{

    font-size: 12px
  }

  th, td {
    border: 1px solid #dddddd;
    text-align: left;
padding: 2px;
  }

  th {
    background-color: #f2f2f2;
    font-weight: bold;
  }

  tr:nth-child(even) {
    background-color: #f5f5f5;
  }



 
  .my-button {
  padding: 4px 4px;
  background-color: #00008B;
  color: white;
  border: none;
  border-radius: 7px;
  cursor: pointer;
  font-size: 14px
}
thead{

background-color:#246355;

}
  
</style>



<?php

include('conexion.php');
$query="SELECT * from imagenes WHERE id='1' ";         
$resultado=mysqli_query($conexion,$query);
while($mostrar=mysqli_fetch_array($resultado))
                         
{
   $logo = '<img class="img-circle"  width="1050" height="100" src="data:image/jpeg;base64,'.base64_encode($mostrar["imagen"]).'"/>';
   

  }
  
?>



<img src="logo.gif" alt="HTML desde Cero"  value="<?php echo $logo;?>

         <div class="box box-primary">
           <div class="box-header">       
             <h3 class="box-title"> <span class="label btn bg-navy btn-fla  pull-left">

            <center> <button class="my-button">Interfaz de Servidores</button>

<center></h3></span> 
           </div>
           <div class="box-body">


           
           <center>
           <table id="usuarios" class="table table-bordered table-striped">
               <thead>
                 <tr>
                                     <th>Imagen</th>
                                     <th>Responsable</th>
                                    <th>Servicio</th>
                                    <th>Ip</th>
                                    <th>Usuario</th>
                                    <th>Mac_address</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Serial</th>
                                    <th>Bien Nacional</th>
                                    <th>Fecha</th>
                                    <th>Hora</a></th>
                                    <th>Estado</a></th>
                                    <th>Acción</a></th>

                 
                </tr>
               </thead>
               <tbody>
               
               


            
               <?php
                         
                         
                         $sql="SELECT * from movimiento_servidores  order by id";
										
                                       
                         $result=mysqli_query($conexion,$sql);
                         while($row=mysqli_fetch_array($result)){


                          $ver=$row['estado'];
                          switch ($ver) { 
                          case 'Activo':
                          $verlo='success';
                          break;
                          case 'Inactivo':
                          $verlo='btn bg-maroon'; 
                          break;
                         
                      }



                        

                      $el=$row['accion'];
                      switch ($el) { 
                      case 'Registrado':
                      $elo='primary';
                      break;
                      case 'Editado':
                      $elo='success'; 
                      break;
                      case 'Inactivo': 
                      $elo='danger';
                      break;
                  }
                      
                          
                    
                      








                


                      
                      session_start();
                        
                      $id=$_SESSION['id'];          
            
                      $perfil=$_SESSION['perfil'];
                      
                      



                     
                       
                      $nombre = $row["responsable"];
                      $col="SELECT imagen from usuarios WHERE id='$id'";
                                            $rel=mysqli_query($conexion,$col);
                                            while($rol=mysqli_fetch_array($rel)){
                                             $imagen = '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($rol["imagen"]).'"/>';
                                                          } 
                        
            


                       echo 
                     "<tr>
                          <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'> $imagen</a></td>
                          <td>".$row['responsable']."</td>
                          <td>".$row['servicio']."</td>
                           <td>".$row['ip']."</td>
                           <td>".$row['usuario']."</td>
                           <td>".$row['mac_address']."</td>
                           <td>".$row['marca']."</td>
                           <td>".$row['modelo']."</td> 
                           <td>".$row['seri']."</td>
                           <td>".$row['bien_nacional']."</td>
                           <td>".$row['fecha']."</td>
                          <td>".$row['hora']."</td>
                          <td>".$row['estado']."</td>
 <td>".$row['accion']."</td>




                       
                     </tr>";
                    
                    
                   }    
                 ?>
               </tbody>
               <tfoot>
               <tr>
              
               <th>Imagen</th>
               <th>Responsable</th>
                                    <th>Servicio</th>
                                    <th>Ip</th>
                                    <th>Usuario</th>
                                    <th>Mac_address</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Serial</th>
                                    <th>Bien Nacional</th>
                                    <th>Fecha</th>
                                    <th>Hora</a></th>
                                    <th>Estado</a></th>
                                    <th>Acción</a></th>
               </tr>
               </tfoot>
             </table>
             <br>

             <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from movimiento_servidores";
                        $result=mysqli_query($conexion,$consulta);
                        $total = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $total = $total + 1;
                        }
  
              ?>
             <center> <button class="my-button">Total de Registros = <?php echo $total; ?></button>
           <center>  <a  href='../../reportes/index.php'   title='Ver Total de Materiales PDF' class='btn bg-red btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-file-pdf-o' ></span></a>
           </div>
         </div>
         <?php include('contador-usuarios.php');?>
   </section>
  
   <script src="../../cuerpo/librerias/js/data-table.js"></script>
</body>
</html>

