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


<div class="modal fade" id="aumentar_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		<div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='glyphicon glyphicon-edit'>&nbsp;</span>Aumentar Materiales</button></center>
				<br><div class="box box-primary">
			</div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/aumentar-material.php" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Material</label>
								</div> 
								<div class="col-sm-10">
								<?php  $imagen =  $row["imagen"];?>
								<?php echo  $imagen; ?>	
								</div> 
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Nombre:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_nombre" readonly value="<?php echo $row['nombre']; ?>" required>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Cantidad:</label>
								</div>
								<div class="col-sm-10">
								<input type="number" min="<?php echo $row['cantidad']; ?>"  value='<?php echo $row['cantidad']; ?>'  max="10000" class="form-control" name="edit_cantidad"  required>
									
								</div>
							</div>
							
							
						
							

			

						</div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="editar" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span>Aumentar Material</a>
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
		
