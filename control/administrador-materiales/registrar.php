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

<div class="modal fade" id="registrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		
            <div class="modal-header">
			
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"><button class="btn bg-navy btn-sm" type="button"><span class='fa fa-user'>&nbsp;</span>Registrar Material</button></h4></center>
<br>
				<div class="box box-primary">
				</div> 
				
            <div class="modal-body"> 
			<div class="container-fluid">
            <form action="sql/registrar-administrador-materiales.php" method="POST" enctype="multipart/form-data">
				 


<?php	 

$nombre = 'JULIO CONTRERAS';
$con="SELECT imagen from nomina WHERE nombres='$nombre'";
$res=mysqli_query($conexion,$con);
while($roro=mysqli_fetch_array($res)){
 $iman = '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($roro["imagen"]).'"/>';
			  } 
?>

<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Jefe de División</label>
								</div>
								<div class="col-sm-10">
								<?php echo  $iman; ?>	
								</div>
</div>


			<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Asignado:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="asignado" value="JULIO CONTRERAS" readonly>
					</div>
				</div>	
			
				

				
				

				<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Material:</label>
					</div>
							<div class="col-sm-10">
                <select type="text" class="form-control" id="nombre" name="nombre" required>
				<option value="">Selecciona una opción</option>
                         <?php
                               while($mostrar=mysqli_fetch_array($materiales)) {
								$imagen = '<img src="'.$mostrar["imagen"].'" class="img-circle" width="80" height="80" />';
 
                           echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombre'] . "</option>";


                                }
                           ?>
                 </select>
	            </div> 
             </div>	
			 <div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Medición:</label>
					</div>
					       
							<div class="col-sm-10">
                           <select type="text" class="form-control" id="unidad" name= "unidad" required>
						   <option value="">Selecciona una opción</option>
                           <?php
                               while($mostrar=mysqli_fetch_array($unidad)) {
                                    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombre'] . "</option>";
                                }
                                ?>
                                </select>
					</div> 
				</div>	

				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Cantidad:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="0" max="10000" class="form-control" name="cantidad" required>
					</div>
				</div>	
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Fecha:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fecha" value="<?php echo  date('Y-m-d');?>" readonly>
					</div>
				</div>
			
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Responsable:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="responsable" value="<?php echo $_SESSION['usuario']; ?>" readonly>
					</div>
				</div>
				
			
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Status:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="status" value="Registrado" readonly>
					</div>
				</div>
	
					

			
				   
			
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" id="ingresar_usuario" name="ingresar_usuario" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-floppy-disk"></span>Guardar</a>
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