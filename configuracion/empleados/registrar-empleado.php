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

<div class="modal fade" id="registrar_empleado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		
            <div class="modal-header">
			
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"><button class="btn bg-navy btn-sm" type="button"><span class='fa fa-user'>&nbsp;</span>Registrar Empleado</button></h4></center>
<br>
				<div class="box box-primary">
				</div> 
				
            <div class="modal-body"> 
			<div class="container-fluid">
      <form action="sql/registrar-empleado.php" method="POST" enctype="multipart/form-data">
				 
				
				<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Nombres:</label>
					</div>
					<div class="col-sm-10">
					<input type="text" class="form-control" minlength="5" y maxlength="10"  name="nombres" placeholder="Ingresar Uusario" required
						
						pattern="[A-Za-z]{5,10}"
						title="Debe contener solo Letras Mayusculas y/o Minusculas Minimo 5 Letras"
						>


						
					</div> 
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Apellidos:</label>
					</div>
					<div class="col-sm-10">
					<input type="text" class="form-control" minlength="5" y maxlength="10"  name="apellidos" placeholder="Ingresar Uusario" required
						
						pattern="[A-Za-z]{5,10}"
						title="Debe contener solo Letras Mayusculas y/o Minusculas Minimo 5 Letras"
						>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Cedula:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cedula" placeholder="Ingresar Cedula" required
						pattern="[0-99999999]{1,15}"
						title="Debe contener solo Numeros">
					</div>
				</div>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nacionalidad</label>
					</div>
					<div class="col-sm-10">
						
					   <select class="form-control form-control-sm" placeholder="Seleccione el Perfil" name="nacionalidad" required>
					                    <option value="">Selecciona la Nacionalidad</option>
					                    <option value="V">Venezolano</option>
										<option value="E">Extranjero</option>
					   </select>
					</div>
				</div>


                    <?php
                         $sql="SELECT * from gerencias";
                         $gerencia=mysqli_query($conexion,$sql);
                    ?>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Gerencia</label>
					</div>
					<div class="col-sm-10">
						
                        <select class="form-control form-control-sm" placeholder name="gerencia" required>
                             
							 <option value="">Selecciona la Gerencia</option>

                               <?php
                                   while($lista=mysqli_fetch_array($gerencia)) {
                                   echo "<option values" . $lista['id'] . ">" . $lista['nombres'] . "</option>";
                                      }
                                ?>
                        </select>
					</div> 
				</div>
                        <?php
                          $sql="SELECT * from division";
                          $division=mysqli_query($conexion,$sql);
                        ?>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">División</label>
					</div>
					<div class="col-sm-10">
						
                        <select class="form-control form-control-sm" placeholder name="division" required>

						<option value="">Selecciona la División </option>
                             
                               <?php
                                   while($lista=mysqli_fetch_array($division)) {
                                   echo "<option values" . $lista['id'] . ">" . $lista['nombres'] . "</option>";
                                      }
                                ?>
                        </select>
					</div>
				</div>
                        <?php
                          $sql="SELECT * from cargos";
                          $cargos=mysqli_query($conexion,$sql);
                        ?>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Cargo</label>
					</div>
					<div class="col-sm-10">
						
                        <select class="form-control form-control-sm" placeholder name="cargo" required>
						<option value="">Selecciona el Cargo</option>
                             
                               <?php
                                   while($lista=mysqli_fetch_array($cargos)) {
                                   echo "<option values" . $lista['id'] . ">" . $lista['cargo'] . "</option>";
                                      }
                                ?>
                        </select>
					</div>
				</div>


                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Codigo Empleado:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="codigo" placeholder="Ingresar Codigo" required
						pattern="[0-99999999]{1,15}"
						title="Debe contener solo Numeros">



					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Telefono Local:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="telefono_casa" placeholder="Ingresar Telefono Local" required
						pattern="[0-99999999]{1,15}"
						title="Debe contener solo Numeros Ejemplo 0414-0424-0416-0426">
						
					</div>
				</div>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Telefono Celular:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="telefono_celular" placeholder="Ingresar Telefono Celular" required
						pattern="[0-99999999]{1,15}"
						title="Debe contener solo Numeros Ejemplo 0414-0424-0416-0426">
						
					</div>
				</div>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Direccion:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="direccion" placeholder="Ingresar la Dirección" required
						>
					</div>
				</div>


                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Observacion:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="observacion" placeholder="Ingrese si hay Observaciones" required
						pattern="[A-Za-z]{1,15}"
						title="Debe contener solo Letras Mayusculas y/o Minusculas">
					</div>
				</div>

               
               <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Sufragio</label>
					</div>
					<div class="col-sm-10">
					
					   <select class="form-control form-control-sm" placeholder="Seleccione el Perfil"  name="voto" required>
					                    <option value="">Selecciona una opción</option>
					                    <option value="SI">SI</option>
										<option value="NO">NO</option>
					   </select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Estado</label>
					</div>
					<div class="col-sm-10">
						
					<select class="form-control form-control-sm" placeholder="Seleccione el Estado" name="estado" required>
					                    <option value="">Selecciona una opción</option>
					                    <option value="Activo">Activo</option>
										<option value="Inactivo">Inactivo</option>
										
					   </select> 


					</div> 
				</div>
		
					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Foto:</label>
						</div>
						<div class="col-sm-10">
						<input type="file" id="imagen" name="imagen" accept=".jpg, .jpeg, .png, .git" class="form-control" id="exampleInputEmail1" placeholder="IMAGEN DE PERFIL"required >
						<output id="list"></output>	
						</div>
					</div>

	<script>
            
      </script>
			
				   
			
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="registrar-empleado" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-floppy-disk"></span>Guardar</a>
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