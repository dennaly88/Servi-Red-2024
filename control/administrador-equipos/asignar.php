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

<div class="modal fade" id="asignar_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		<div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"><button class="btn bg-navy btn-sm" type="button"> <span class='fa fa-user'></span>&nbsp;Asignar Equipo al Empleado</button></h4></center>
				<br><div class="box box-primary">
			</div>

            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/asignar.php" enctype="multipart/form-data">
							
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
			
			
		

							<?php
 $nombre =  $row["nombre"];


        $sql5="SELECT imagen from equipos WHERE nombre='$nombre'";
        $resulta=mysqli_query($conexion,$sql5);
          while($log=mysqli_fetch_array($resulta)){
$imagen4 = '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($log["imagen"]).'"/>';
					   } 

	?>			

<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Equipo</label>
								</div>
								<div class="col-sm-10">
								
								<?php echo  $imagen4; ?>	
								</div>
			</div>

			<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Empleado:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_nombre" readonly value="<?php echo $row['empleado']; ?>" required>
								</div>
							</div>
					 		
							
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Equipo:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_equipo" readonly value="<?php echo $row['nombre']; ?>" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Responsable:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_responsable" readonly value="<?php echo $usuario; ?>" required>
								</div>
							</div>

						






							<?php
                                
                                $bel="SELECT * from nomina where gerencia  = 'TECNOLOGIA DE LA INFORMACION Y COMUNICACION'"; 
                                $tecnologia=mysqli_query($conexion,$bel);
                      ?>					

							<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Asignar :</label>
					</div>
							<div class="col-sm-10">
                <select type="text" class="form-control" id="nombre" name="nombre" required>
				<option value="">Selecciona una opción</option>
                         <?php
                               while($mos=mysqli_fetch_array($tecnologia)) {
								$imagen = '<img src="'.$mos["imagen"].'" class="img-circle" width="80" height="80" />';
 
                           echo "<option values" . $mos['id'] . ">" . $mos['nombres'] . "</option>";


                                }
                           ?>
                 </select>
	            </div> 
             </div>	
						
			 <div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Status:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_status" readonly value="<?php echo $row['status']; ?>" required>
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
							
						
							
						</div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="editar" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span>Asignar Equipo</a>
			
						
             
                   




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



