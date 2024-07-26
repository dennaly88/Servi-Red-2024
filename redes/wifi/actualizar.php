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


<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		<div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='glyphicon glyphicon-edit'>&nbsp;</span>Editar Wifi</button></center>
				<br><div class="box box-primary">
			</div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/editar.php" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Equipo Wifi</label>
								</div>
								<div class="col-sm-10">
								<?php  $ime = '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';?>
								<?php echo  $ime; ?>	

							
							
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">IP:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_ip" value="<?php echo $row['ip']; ?>" required>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Usuario:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_usuario" value="<?php echo $row['usuario']; ?>" required>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Clave Admin:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_clave_admin" value="<?php echo $row['clave_administrador']; ?>" required>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">SSID:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_ssid" value="<?php echo $row['ssid']; ?>" required>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Clave Paso:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_clave_paso" value="<?php echo $row['clave_paso']; ?>" required >
								</div>
							</div>




							<?php
							$ubicacion_t= $row["id_ubicacion"];
									switch ($ubicacion_t) { 
									case 1: $ub='Sotano 2';
									break;
									case 2: $ub='Sotano 1'; 
									break;
									case 3: $ub='Planta Baja';
									break;
									case 4: $ub='Piso 1';
									break;
									case 5: $ub='Piso 2';
									break;
									case 6: $ub='Piso 3';
									break;
									case 7: $ub='Piso 4';
									break;
									case 8: $ub='Telepuertos';
									break; 
									}     
									     
                               ?>	

<div class="row form-group">	
<div class="col-sm-2">
									<label class="control-label modal-label">Ubicacion:</label>
								</div>	   
                  <div class="col-sm-10">
					     <select class="form-control form-control-sm" placeholder="Seleccione la  Ubicacion" name="edit_id_ubicacion" required>
						                <option value="<?php echo $ubicacion_t; ?>"><?php echo $ub; ?></option>
					                    <option value="1">Sotano 2</option>
										<option value="2">Sotano 1</option>
										<option value="3">Planta Baja</option>
										<option value="4">Piso 1</option>
										<option value="5">Piso 2</option>
										<option value="6">Piso 3</option>
										<option value="7">Piso 4</option>
										<option value="8">Telepuerto</option>
					   </select>
					</div>
							
</div>
						
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Mac Address:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_mac_address" value="<?php echo $row['mac_address']; ?>" >
								</div>
							</div>
						
					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Direccion:</label>
							</div>
							<div class="col-sm-10">
							<input type="text" class="form-control" name="edit_direccion" value="<?php echo $row['direccion']; ?>" >
								</div>
							</div>
									
							
				
						</div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="editar" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span>Actualizar</a>
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
		
