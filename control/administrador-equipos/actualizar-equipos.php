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
session_start();
$usuario=$_SESSION['usuario'];


?>



<div class="modal fade" id="actualizar_equipos<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='glyphicon glyphicon-edit'>&nbsp;</span>Editar Equipo</button></center>
				<br><div class="box box-primary">
			</div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/editar.php" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">
							
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Usuario</label>
								</div>
								<div class="col-sm-10">
								<?php $imagen = $row["imagen_empleado"];?>
								<?php echo  $imagen; ?>	
								</div>
							</div>


							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Asignado</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_empleado" value="<?php echo $row['empleado']; ?>" readonly>
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Equipo:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_equipo" value="<?php echo $row['nombre']; ?>"readonly>
									</div>
							</div>
							


							<?php
                                $sqlm="SELECT * from marcas";
                                $mar=mysqli_query($conexion,$sqlm);
                      ?>



							<div class="row form-group">	
<div class="col-sm-2">
	<label class="control-label modal-label">Marca:</label>
			</div>	   
                  <div class="col-sm-10">
					     <select class="form-control form-control-sm" placeholder="Seleccione la  Marca" name="edit_marca" required>
						                <option value="<?php echo $row['marca']; ?>"><?php echo $row['marca']; ?></option>
					                    
										<?php
                               while($mostrare=mysqli_fetch_array($mar)) {
                                    echo "<option values" . $mostrar['id'] . ">" . $mostrare['nombres'] . "</option>";
                                }
                                ?>
									
					   </select>
					</div>
							
</div>










							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Modelo:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_modelo" value="<?php echo $row['modelo']; ?>">
									</div>
							</div>
							
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Serial:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_serial" value="<?php echo $row['seri']; ?>">
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Bien Nacional:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_bien_nacional" value="<?php echo $row['bien_nacional']; ?>" >
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Responsable:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="responsable" value="<?php echo $usuario; ?>" readonly >
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Fecha:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_fecha" value="<?php  echo  date("d-M-Y"); ?>" readonly>
									</div>
							</div>
							<div class="row form-group"> 
									<div class="col-sm-2">
										<label class="control-label modal-label">Status:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_status" value="<?php echo $row['status']; ?>" readonly>
									</div>
							</div>
							
						</div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="editar" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span>Actualizar Equipo</a>
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
	