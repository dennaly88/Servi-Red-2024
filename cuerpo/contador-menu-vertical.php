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

<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from usuarios";
                        $result=mysqli_query($conexion,$consulta);
                        $total = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $total = $total + 1;
                        }
  
                    ?>
                   <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from usuarios where id_rol=1";
                        $result=mysqli_query($conexion,$consulta);
                        $administrador = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $administrador = $administrador + 1;
                        }
                    ?>
                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from usuarios where id_rol=2";
                        $result=mysqli_query($conexion,$consulta);
                        $coordinador = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $coordinador = $coordinador + 1;
                        }
                    ?>
                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from usuarios where id_rol=3";
                        $result=mysqli_query($conexion,$consulta);
                        $tecnico = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $tecnico = $tecnico + 1;
                        }
                    ?>



<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from roles";
                        $result=mysqli_query($conexion,$consulta);
                        $perfiles = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $perfiles = $perfiles + 1;
                        }
  
?>

<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from vistas ";
                        $result=mysqli_query($conexion,$consulta);
                        $vistas = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $vistas = $vistas + 1;
                        }
  
?>




<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from marcas";
                        $result=mysqli_query($conexion,$consulta);
                        $marcas = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $marcas = $marcas + 1;
                        }
  
?>

<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from categoria ";
                        $result=mysqli_query($conexion,$consulta);
                        $categoria = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $categoria = $categoria + 1;
                        }
  
?>








<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from usuarios";
                        $resultados=mysqli_query($conexion,$consulta);
                        $usuarios = 0;
                        while($row = mysqli_fetch_array($resultados))
                        {
                          $usuarios = $usuarios + 1;
                        }
  
?>

<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from roles ";
                        $result=mysqli_query($conexion,$consulta);
                        $roles = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $roles = $roles + 1;
                        }
  
?>

<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from gerencias ";
                        $result=mysqli_query($conexion,$consulta);
                        $gerencias = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $gerencias = $gerencias + 1;
                        }
  
?>

<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from division ";
                        $result=mysqli_query($conexion,$consulta);
                        $division = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $division = $division + 1;
                        }
  
?>
<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from nomina ";
                        $result=mysqli_query($conexion,$consulta);
                        $nomina = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $nomina = $nomina + 1;
                        }
  
?>

<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from  marcas";
                        $result=mysqli_query($conexion,$consulta);
                        $marcas = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $marcas = $marcas + 1;
                        }
  
?>
     <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from  materiales";
                        $result=mysqli_query($conexion,$consulta);
                        $materiales = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $materiales = $materiales + 1;
                        }
  
?>              
                    
                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from  equipos";
                        $result=mysqli_query($conexion,$consulta);
                        $equipos = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $equipos = $equipos + 1;
                        }
  
?>                  

<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from  servicios";
                        $result=mysqli_query($conexion,$consulta);
                        $servicios = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $servicios = $servicios + 1;
                        }
  
?>                     
<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from  unidad";
                        $result=mysqli_query($conexion,$consulta);
                        $unidad = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $unidad = $unidad + 1;
                        }
  
?> 

<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from  sistemas_operativos";
                        $result=mysqli_query($conexion,$consulta);
                        $sistemas_operativos = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $sistemas_operativos = $sistemas_operativos + 1;
                        }
  
?> 
<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from ubicacion";
                        $result=mysqli_query($conexion,$consulta);
                        $ubicacion = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $ubicacion = $ubicacion + 1;
                        }
  
?> 
<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from unidad";
                        $result=mysqli_query($conexion,$consulta);
                        $unidad = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $unidad = $unidad + 1;
                        }
  
?> 

<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from distribucion";
                        $result=mysqli_query($conexion,$consulta);
                        $distribucion = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $distribucion = $distribucion + 1;
                        }
  
?> 

<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from administrador_materiales";
                        $result=mysqli_query($conexion,$consulta);
                        $administrador_materiales = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $administrador_materiales = $administrador_materiales + 1;
                        }
  
?> 
<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from wifi";
                        $result=mysqli_query($conexion,$consulta);
                        $wifi = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $wifi = $wifi + 1;
                        }
  
?> 

<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from router";
                        $result=mysqli_query($conexion,$consulta);
                        $router = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $router = $router + 1;
                        }
  
?> 
<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from  switch";
                        $result=mysqli_query($conexion,$consulta);
                        $switch = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $switch = $switch + 1;
                        }
  
?> 
 
<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from servidor";
                        $result=mysqli_query($conexion,$consulta);
                        $servidor = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $servidor = $servidor + 1;
                        }
  
?> 




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

