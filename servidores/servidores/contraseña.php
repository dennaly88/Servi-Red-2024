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

<div class="modal fade" id="contraseña_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		<div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">
                  <button class="btn bg-navy btn-sm" type="button"> <span class='fa fa-lock'></span>&nbsp;Cambiar la Contraseña del Servidor</button>
				 
				
				</h4></center>
				<br><div class="box box-primary">
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/contraseña.php" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">

							
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Foto:</label>
								</div>
								<div class="col-sm-10">
								<?php  $conti = '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';?>

								<?php echo  $conti; ?>
							
									
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Servicio:</label>
								</div>
								<div class="col-sm-10">
								  <input type="text" class="form-control" name="#" value="<?php echo  $row['servicio']." ".$row['apellidos']; ?>" readonly>
									
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">IP:</label>
								</div>
								<div class="col-sm-10">
								  <input type="text" class="form-control" name="#" value="<?php echo  $row['ip']." ".$row['apellidos']; ?>" readonly>
									
								</div>
							</div>

                            <div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Contraseña </label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="contraseña" value="<?php echo $row['clave']; ?>">
								</div>
							</div>
                            


                             
				               
					</div>
				</div>
			<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="editar" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span>Cambiar Contraseña</a>
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
