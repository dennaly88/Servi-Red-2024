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


<div class="modal fade" id="ver_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		<div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='glyphicon glyphicon-edit'>&nbsp;</span>Ver Vistas del Perfil</button></center>
				<br><div class="box box-primary">
			</div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/editar-perfiles.php" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Perfil</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_nombre" value="<?php echo $row['nombre']; ?>" readonly>
								</div>
							</div>
							
							
							
							
							<?php
							$estado=$row['estado'];
                     if($estado=='Activo'){
                      
                      $estado='success';
                     }else{
                      $estado='btn bg-maroon';
                    }
					?>
					
							<?php 
                               $perfil=$row['id_rol'];
                                        switch ($perfil) { 
                                        case 1:
                                           $estado='Administrador';
                                                  break;
                                            case 2:
                                                $estado='Coordinador'; 
                                                         break;
                                                             case 3: 
																$estado='Tecnico';
                                                                    break;
																        }
									?> 
							




<div class="row form-group">
	<div class="col-sm-2">
		<label class="control-label modal-label">Principal:</label>
	</div>
	<div class="col-sm-10">

    <?php 

       $vista_principal= $row['vista_principal'];
       if($vista_principal=='1'){
        $vista_principal="Activo";
       }
       else
       {        
        $vista_principal="Inactivo";
       }
    ?>
		<input type="text" class="form-control" name="edit_estado" value="<?php echo $vista_principal; ?>" readonly>
	</div>
</div>

<div class="row form-group">
	<div class="col-sm-2">
		<label class="control-label modal-label">Configuración</label>
	</div>
	<div class="col-sm-10">

    <?php 

       $vista_configuracion= $row['vista_configuracion'];
       if($vista_configuracion=='1'){
        $vista_configuracion="Activo";
       }
       else
       {        
        $vista_configuracion="Inactivo";
       }
    ?>
		<input type="text" class="form-control" name="edit_estado" value="<?php echo $vista_configuracion; ?>" readonly>
	</div>
</div>

<div class="row form-group">
	<div class="col-sm-2">
		<label class="control-label modal-label">Clasificación</label>
	</div>
	<div class="col-sm-10">

    <?php 

       $vista_clasificacion= $row['vista_clasificacion'];
       if($vista_clasificacion=='1'){
        $vista_clasificacion="Activo";
       }
       else
       {        
        $vista_clasificacion="Inactivo";
       }
    ?>
		<input type="text" class="form-control" name="edit_estado" value="<?php echo $vista_clasificacion; ?>" readonly>
	</div>
</div>

<div class="row form-group">
	<div class="col-sm-2">
		<label class="control-label modal-label">Control</label>
	</div>
	<div class="col-sm-10">

    <?php 

       $vista_control= $row['vista_control'];
       if($vista_control=='1'){
        $vista_control="Activo";
       }
       else
       {        
        $vista_control="Inactivo";
       }
    ?>
		<input type="text" class="form-control" name="edit_estado" value="<?php echo $vista_control; ?>" readonly>
	</div>
</div>
<div class="row form-group">
	<div class="col-sm-2">
		<label class="control-label modal-label">Auditoria</label>
	</div>
	<div class="col-sm-10">

    <?php 

       $vista_auditoria= $row['vista_auditoria'];
       if($vista_auditoria=='1'){
        $vista_auditoria="Activo";
       }
       else
       {        
        $vista_auditoria="Inactivo";
       }
    ?>
		<input type="text" class="form-control" name="edit_estado" value="<?php echo $vista_auditoria; ?>" readonly>
	</div>
</div>

<div class="row form-group">
	<div class="col-sm-2">
		<label class="control-label modal-label">Redes</label>
	</div>
	<div class="col-sm-10">

    <?php 

       $vista_redes= $row['vista_redes'];
       if($vista_redes=='1'){
        $vista_redes="Activo";
       }
       else
       {        
        $vista_redes="Inactivo";
       }
    ?>
		<input type="text" class="form-control" name="edit_estado" value="<?php echo $vista_redes; ?>" readonly>
	</div>
</div>

<div class="row form-group">
	<div class="col-sm-2">
		<label class="control-label modal-label">Servidores</label>
	</div>
	<div class="col-sm-10">

    <?php 

       $vista_servidores= $row['vista_servidores'];
       if($vista_servidores=='1'){
        $vista_servidores="Activo";
       }
       else
       {        
        $vista_servidores="Inactivo";
       }
    ?>
		<input type="text" class="form-control" name="edit_estado" value="<?php echo $vista_servidores; ?>" readonly>
	</div>
</div>

<div class="row form-group">
	<div class="col-sm-2">
		<label class="control-label modal-label">Opciones</label>
	</div>
	<div class="col-sm-10">

    <?php 

       $vista_opciones= $row['vista_opciones'];
       if($vista_opciones=='1'){
        $vista_opciones="Activo";
       }
       else
       {        
        $vista_opciones="Inactivo";
       }
    ?>
		<input type="text" class="form-control" name="edit_estado" value="<?php echo $vista_opciones; ?>" readonly>
	</div>
</div>
<div class="row form-group">
	<div class="col-sm-2">
		<label class="control-label modal-label">Acerca de </label>
	</div>
	<div class="col-sm-10">

    <?php 

       $vista_documentacion= $row['vista_documentacion'];
       if($vista_documentacion=='1'){
        $vista_documentacion="Activo";
       }
       else
       {        
        $vista_documentacion="Inactivo";
       }
    ?>
		<input type="text" class="form-control" name="edit_estado" value="<?php echo $vista_documentacion; ?>" readonly>
	</div>
</div>




						</div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
			</form>
            </div>
        </div>
		</div>
    </div>
</div>
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
		
