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
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='glyphicon glyphicon-edit'>&nbsp;</span>Actualizar Perfil</button></center>
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
					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Status:</label>
							</div>
							<div class="col-sm-10">
							<input type="text" class="form-control" name="edit_estado" value="<?php echo $row['status']; ?>" readonly>
								</div>
							</div>
									<?php                                 
									$contraseña= $row['contraseña'];
									$sSalt = '20adeb83e85f03cfc84d0fb7e5f4d290';
									$sSalt = substr(hash('sha256', $sSalt, true), 0, 32);
									$method = 'aes-256-cbc';
									$iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
									$decrypted = openssl_decrypt(base64_decode($contraseña), $method, $sSalt, OPENSSL_RAW_DATA, $iv);
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
<div class="col">
									<label class="control-label modal-label">Vistas :</label>
								</div>

								<div class="form-group col-xs-12 col-md-4">


		<div class="checkbox">
			<label>
				<input type="checkbox" name="vista_principal" id="vista_principal" value="1"  >
				PRINCIPAL
			</label>
		</div>


		

</div>

<div class="form-group col-xs-12 col-md-4">




                  <div class="checkbox">
                    <label>
                        <input type="checkbox" name="vista_configuracion" value="1">
					      CONFIGURACIÓN
                    </label>
                  </div>




				  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="vista_clasificacion" value="1">
					     CLASIFICACIÓN
                    </label>
                  </div>





				  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="vista_control"  value="1">
					  CONTROL
                    </label>
                  </div>




				  <div class="checkbox" >
                    <label>
                      <input type="checkbox" name="vista_auditoria" value="1">
					  AUDITORIA
                    </label>
                  </div>
				
</div>



<div class="form-group col-xs-12 col-md-4">


                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="vista_redes" value="1">
					  REDES
                    </label>
                  </div>

				  <div class="checkbox">
                    <label>
                      <input type="checkbox"  name="vista_servidores" value="1">
					  SERVIDORES
                    </label>
                  </div>




				  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="vista_opciones" value="1"  >
					  OPCIONES
                    </label>
                  </div>



				  <div class="checkbox">
                    <label>
                      <input type="checkbox"  name="vista_documentacion" value="1" >
					  DOCUMENTACIÓN
                    </label>
                </div>
				
</div>




                 
				
				  </div>
				

				




						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="editar" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span>Actualizar Perfil</a>
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
		
