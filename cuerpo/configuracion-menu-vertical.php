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

<?php include('contador-menu-vertical.php');?>

<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">

        <?php 
session_start();

$imagen=$_SESSION['imagen'];

?> 
        <?php echo ' <img src="data:image/jpeg;base64,'.base64_encode($imagen).'" class="img-circle" alt="User Image">'  ?>
        <br><?php $imagen = $row["imagen"];?>
			
        </div>

        <div class="pull-left info">

    <p>
        <?php echo  "    " . $_SESSION['nombres']; ?>
        <?php echo  "    " . $_SESSION['apellidos']; ?>
        
    </p>
    <?php 
session_start();
  
$id=$_SESSION['id'];          
$id_rol=$_SESSION['id_rol'];                       
$nombres=$_SESSION['nombres'];
$apellidos=$_SESSION['apellidos'];
$usuario=$_SESSION['usuario'];
$perfil=$_SESSION['perfil'];

?> 
<a href="#"><i class="fa fa-circle text-success"></i>En Linea</a>
        </div>
      </div>

      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>     
      <ul class="sidebar-menu" data-widget="tree">
    <li class="header">
    <span class="label label-danger pull-center">
              <?php echo  "MENU DEL SISTEMAS"; ?>
              </span>
        </span> 
    
    </li>



<?php 
/*****************************************************************************************************************************************/
/****************************************************** 1.  VISTA PRINCIPAL *****************************************************************/
       include('sql/conexion.php');
		$sql="SELECT * FROM roles where '$perfil'=nombre";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
			<?php  
            $vista_principal=$mostrar['vista_principal']; 
               
            if ($vista_principal == '0') {
                
          } else
          if ($vista_principal == '1') {
            echo '           
            <li>
          <a href="../../principal/inicio/index.php">
            <i class="fa fa-home"></i> <span>Principal</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-primary">INICIO</small>
            </span>
          </a>
        </li>
          
              ';
          } 
            ?>	
	<?php 
	}
/*****************************************************************************************************************************************/
/****************************************************************************************************************************************/
	 ?> 


<?php
/*****************************************************************************************************************************************/
/****************************************************** 2.  VISTA CONFIGURACION *****************************************************************/
        include('sql/conexion.php');
		$sql="SELECT * FROM roles where '$perfil'=nombre";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
			<?php  
            $vista_configuracion=$mostrar['vista_configuracion']; 
               
            if ($vista_configuracion == '0') {
                
          } else
          if ($vista_configuracion == '1') {
            echo '
           
            <li class="treeview">
            <a href="#">
              <i class="fa fa-cog"></i> <span>Configuración</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
          <ul class="treeview-menu">
            
            <li>
              <a href="../../configuracion/usuarios/principal.php"><i class="fa fa-user"></i>Usuarios
                  <span class="label label-primary pull-right">'.$usuarios.' </span>  
              </a>
            </li> 

            <li>
              <a href="../../configuracion/perfiles/principal.php"><i class="fa fa-group"></i>Perfiles
                  <span class="label bg-purple pull-right">'.$roles.'</span>
              </a>
            </li>

            <li>
              <a href="../../configuracion/gerencias/principal.php"><i class="fa fa-outdent"></i>Gerencias
                   <span class="label bg-yellow pull-right">'.$gerencias.'</span>  
              </a>
            </li>

            <li>
               <a href="../../configuracion/divisiones/principal.php"><i class="fa fa-list"></i>Divisiones
                    <span class="label label-success pull-right">'.$division.'</span>
              </a>
            </li>

            <li>
            <a href="../../configuracion/empleados/principal.php?dat=1"><i class="fa fa-user-plus"></i>Empleados
                      <span class="label label-danger pull-right">'.$nomina.'</span>
                </a>
          </li>
            <li>
                 <a href="http://localhost:8080/guacamole/#/"><i class="fa fa-terminal"></i>Consola
                     <span class="label bg-maroon pull-right">Consola</span>
                </a>
            </li>
          </ul>
        </li>
          
              ';
          } 
            ?>	
	<?php 
	}

    /*****************************************************************************************************************************************/
/****************************************************************************************************************************************/
	 ?> 




<?php 
/*****************************************************************************************************************************************/
/****************************************************** 3.  VISTA CLASIFICACION *****************************************************************/
       include('sql/conexion.php');
		$sql="SELECT * FROM roles where '$perfil'=nombre";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
			<?php  
            $vista_clasificacion=$mostrar['vista_clasificacion']; 
               
            if ($vista_clasificacion == '0') {
                
          } else
          if ($vista_clasificacion == '1') {
            echo '
           
            <li class="treeview">
          <a href="#">
            <i class="fa fa-th-large"></i>
            <span>Clasificación</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="../../clasificacion/marcas/principal.php"><i class="fa fa-tag"></i>Tipos de Marcas
                  <span class="label bg-yellow pull-right">'.$marcas.'</span>
              </a>
            </li>

            <li>
              <a href="../../clasificacion/materiales/principal.php"><i class="fa fa-clipboard"></i>Tipos de Materiales
                   <span class="label label-danger pull-right">'.$materiales.'</span>
              </a>
            </li>

            <li>
               <a href="../../clasificacion/equipos/principal.php"><i class="fa fa-laptop"></i>Tipos de Equipos
                   <span class="label label-success pull-right">'.$equipos.'</span> 
               </a>
            </li>

            <li>
                <a href="../../clasificacion/servicios/principal.php"><i class="fa fa-upload"></i>Tipos de Servicios
                    <span class="label label-primary pull-right">'.$servicios.'</span>
               </a></li>

            <li>
                <a href="../../clasificacion/versiones/principal.php"><i class="fa fa-qrcode"></i>Versiones S.O
                   <span class="label bg-purple pull-right"> '.$distribucion.'</span>
                </a>
            </li>

            <li>
                 <a href="../../clasificacion/ubicacion/principal.php"><i class="fa fa-map-marker"></i>Ubicación
                 <span class="label label-success pull-right">'.$ubicacion.'</span>
                </a>
            </li>

            <li>
                 <a href="../../clasificacion/unidad/principal.php"><i class="fa fa-building-o"></i>Sistema de Unidades
                 <span class="label bg-maroon pull-right">'.$unidad.'</span>
                 </a>
            </li>

            <li>
                 <a href="../../clasificacion/s.o/principal.php"><i class="fa fa-list-alt"></i>Sistemas Operativos
                 <span class="label label-info pull-right">'.$sistemas_operativos.'</span>
                </a></li>
          </ul>
        </li>
          
              ';
          } 
            ?>	
	<?php 
	}
/*****************************************************************************************************************************************/
/****************************************************************************************************************************************/
	 ?> 
      





<?php 
/*****************************************************************************************************************************************/
/****************************************************** 4.  VISTA CONTROL *****************************************************************/
       include('sql/conexion.php');
		$sql="SELECT * FROM roles where '$perfil'=nombre";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
			<?php  
            $vista_control=$mostrar['vista_control']; 
               
            if ($vista_control == '0') {
                
          } else
          if ($vista_control == '1') {
            echo '
           
           
           
            <li class="treeview">
            <a href="#">
             <i class="fa fa-pencil-square-o"></i> <span>Control</span>
               <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
               </span>
             </a>
           <ul class="treeview-menu">
             <li>
               <a href="../../control/administrador-materiales/principal.php"><i class="fa fa-indent"></i>Materiales
                     <span class="label bg-yellow pull-right">'.$administrador_materiales.'</span>
               </a>
             </li>
             <li>
               <a href="../../control/administrador-equipos/principal.php"><i class="fa fa-clipboard"></i>Equipos
                     <span class="label label-danger pull-right">'.$equipos.'</span>
               </a>
             </li>    
           </ul>
         </li>
          
              ';
          } 
            ?>	
	<?php 
	}
/*****************************************************************************************************************************************/
/****************************************************************************************************************************************/
?> 
      


<?php 
/*****************************************************************************************************************************************/
/****************************************************** 5.  VISTA REDES *****************************************************************/
       include('sql/conexion.php');
		$sql="SELECT * FROM roles where '$perfil'=nombre";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
			<?php  
            $vista_redes=$mostrar['vista_redes']; 
               
            if ($vista_redes == '0') {
                
          } else
          if ($vista_redes == '1') {
            echo '
           


<li class="treeview">
            <a href="#">
              <i class="fa fa-sitemap"></i> <span>Redes</span>
            
               <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
               </span>
             </a>
           <ul class="treeview-menu">
             <li>
                       <a href="../../redes/wifi/principal.php">
                          <i class="fa fa-wifi"></i> 
                              Wifi<span class="label label-info pull-right">'.$wifi.'</span>
                      </a>  
             </li>
             <li>
               <a href="../../redes/switch/principal.php">
                                  <i class=" fa fa-tasks"></i>
                                    Switch<span class="label label-danger pull-right">'.$switch.'</span>
                              </a> 


             </li>  
             <li>
               
<a href="../../redes/routers/principal.php">
                                <i class="fa fa-hdd-o"></i>
                                    Routers<span class="label label-success pull-right">'.$router.'</span>
                              </a>    

             </li>
             


           </ul>
         </li>
          


            

            
 






        ';
          } 
            ?>	
	<?php 
	}
/*****************************************************************************************************************************************/
/****************************************************************************************************************************************/
?> 


<?php 
/*****************************************************************************************************************************************/
/****************************************************** 6.  VISTA SERVIDORES *****************************************************************/
       include('sql/conexion.php');
		$sql="SELECT * FROM roles where '$perfil'=nombre";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
			<?php  
            $vista_servidores=$mostrar['vista_servidores']; 
               
            if ($vista_servidores == '0') {
                
          } else
          if ($vista_servidores == '1') {
            echo '
           
            
      

<li class="treeview">
            <a href="#">
              <i class="fa fa-server"></i> <span>Servidores</span>
            
               <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
               </span>
             </a>
           <ul class="treeview-menu">
             <li>
                       <a href="../../servidores/servidores/principal.php">
                          <i class="fa fa-server"></i> 
                              Servidores<span class="label label-warning pull-right">'.$servidor.'</span>
                      </a>  
             </li>
            
           </ul>
         </li>
        ';
          } 
            ?>	
	<?php 
	}
/*****************************************************************************************************************************************/
/****************************************************************************************************************************************/
?> 

<?php 
/*****************************************************************************************************************************************/
/****************************************************** 7.  VISTA AUDITORIA *****************************************************************/
       include('sql/conexion.php');
		$sql="SELECT * FROM roles where '$perfil'=nombre";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
			<?php  
            $vista_auditoria=$mostrar['vista_auditoria']; 
               
            if ($vista_auditoria == '0') {
                
          } else
          if ($vista_auditoria == '1') {
            echo '
          <li class="treeview">
            <a href="#">
             <i class="fa fa-archive"></i></i> <span>Auditoria</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">   
            <li>
                
                      <a href="../../auditoria/movimiento/principal.php"><i class="fa fa-line-chart"></i>LOG
                        <span class="label label-primary pull-right">NUEVO</span>
                      </a>
            </li> 
            <li>
                 <a href="../../auditoria/graficas/principal.php">
                          <i class="fa fa-pie-chart"></i> Graficas
                  <span class="label label-success pull-right">NUEVO</span>
                                                      
                </a> 
            


                 
        </ul>
          
            

          
              ';
          } 
            ?>	
	<?php 
	}

  /**  **/
/*****************************************************************************************************************************************/
/****************************************************************************************************************************************/
?> 


<?php 
/*****************************************************************************************************************************************/
/****************************************************** 8.  VISTA OPCIONES  *****************************************************************/
       include('sql/conexion.php');
		$sql="SELECT * FROM roles where '$perfil'=nombre";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
			<?php  
            $vista_opciones=$mostrar['vista_opciones']; 
               
            if ($vista_opciones == '0') {
                
          } else
          if ($vista_opciones == '1') {
            echo '
           
          <li class="treeview">
            <a href="#">
              <i class="fa fa-info-circle"></i> <span>Opciones</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">   
            <li>
                
                  <a href="#">
                     <i class="fa fa-cloud"></i>Principal
                        <span class="label label-primary pull-right">Ir</span>
                  </a>
            </li> 
            <li>
                <a href="../../acerca/acerca-de/index.php">
                          <i class="fa fa-info-circle"></i> Acerca de
                  <span class="label label-success pull-right"> Entrar </span>
                                                      
                </a>             
            </li>  
                 
            </li>       
        </ul>
          
              ';
          } 
            ?>	
	<?php 
	}
/*****************************************************************************************************************************************/
/****************************************************************************************************************************************/
?>

<?php 
/*****************************************************************************************************************************************/
/****************************************************** 9.  VISTA DOCUMENTACION  *****************************************************************/
    include('sql/conexion.php');
		$sql="SELECT * FROM roles where '$perfil'=nombre";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
			<?php  
            $vista_documentacion=$mostrar['vista_documentacion']; 
               
            if ($vista_documentacion == '0') {
                
          } else
          if ($vista_documentacion == '1') {
            echo '
           
            <li>
            <a href="../../acerca/acerca-de/index.php"><i class="fa fa-book"></i> 
            
            
            
            
            <span>Acerca de</span>
 <small class="label pull-right bg-primary">SERVI-RED</small>
            </a>
        </li>
          
       



              ';
          } 
            ?>	
	<?php 
	}
/*****************************************************************************************************************************************/
/****************************************************************************************************************************************/
?> 






        


        <li class="header">
          
        
        <center>
        <span class="label label-danger pull-left">
              <?php echo  "ADMINISTRACIÓN Y CONTROL DE LA RED"; ?>
              </span>
        </span> 
       
      
      </li>
  <header class="main-header">
    <a href="#" class="logo">
      <span class="logo-mini"><img href="#" src="imagenes/logo1-vtv.ico" alt="logo"></span>
      <span class="logo-lg"><img href="#" src="imagenes/logo.png" alt="logo">
      <span class="label label-primary pull-center">
              Servi-Red C.A.
              </span>
        </span> 
      Servi-Red<br>
      
     
      </span>
    </a>
</header>
<li class="header">
          
        
          <center>
          <span class="label label-bg-danger pull-left">
                <?php echo  "SITIO WEB CREADO POR : DANNY JIMENEZ"; ?>
                </span>
          </span> 
         
         
        </li>
        <li>
            <a href="../../acerca/principal.php">
              <i class="fa fa-facebook"></i> 
              <i class="fa fa-twitter"></i>  
              <i class="fa fa-youtube-play"></i>  
              <i class="fa fa-linkedin"></i> 
              <i class="fa fa-instagram"></i> 
              <i class="fa fa-github"></i> 
              <i class="fa fa-skype"></i> 
              <i class="fa fa-trello"></i> 
              <i class="fa fa-android"></i> 
             
            </a>
        </li>
          

     

        
      </ul>
    </section>
  </aside>
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

  