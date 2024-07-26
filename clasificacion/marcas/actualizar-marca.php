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


<div class="modal fade" id="editar_marca_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='glyphicon glyphicon-edit'>&nbsp;</span>Editar Marca</button></center>
                <br><div class="box box-primary">
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/editar-marcas.php" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Foto Actual:</label>
								</div>
								<div class="col-sm-10">
                                <?php  $imagen = '<img height="80" width="80" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';?>
								
								<?php echo  $imagen; ?>	
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Nombres:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_nombres" value="<?php echo $row['nombres']; ?>" required >
								</div>
							</div>
                            <?php 
                               $categoria=$row['id_categoria'];
                                        switch ($categoria) { 
                                           case 1:
                                           $categoria='Equipos';
                                                break;
                                         case 2:
                                            $categoria='Wifis';
                                                break;
                                          case 3: 
                                            $categoria='Router';
                                                break;
                                          case 4: 
                                             $categoria='Switch';
                                                 break;
                                           case 5: 
                                               $categoria='Servidores';
                                                  break;
                                             case 6: 
                                                $categoria='Materiales';
                                                   break;
			                              }
									?>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Categoria Actual:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="#" value="<?php echo $categoria; ?>" readonly>
								</div>
							</div>

                            <div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Categoria Nueva:</label>
								</div>
								
                                <div class="col-sm-10">
						
                        <select class="form-control form-control-sm" placeholder="Seleccione el Perfil" name="id_categoria" required>
                    <option value="">Selecciona una opción</option>
                                     <option value="1">Equipos</option>
                                     <option value="2">Wifis</option>
                                     <option value="3">Routers</option>
                                     <option value="4">Switch</option>
                                     <option value="5">Servidores</option>
                                     <option value="6">Materiales</option>
                    </select>
                 </div>
               



							</div>




						</div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="editar" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span>Actualizar Marca</a>
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

