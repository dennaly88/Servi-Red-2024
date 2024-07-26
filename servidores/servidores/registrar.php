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

<div class="modal fade" id="ingreso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		
            <div class="modal-header">
			
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"><button class="btn bg-navy btn-sm" type="button"><span class='fa fa-server'>&nbsp;</span>Registrar Servidor</button></h4></center>
<br>
				<div class="box box-primary">
				</div>
				
            <div class="modal-body"> 
			<div class="container-fluid">
<form action="sql/insertar.php" method="POST" enctype="multipart/form-data">
	





				
<div class="row form-group">
			<div class="col-sm-2">
				<label class="control-label modal-label">Servidor:</label>
			</div>
			<div class="col-sm-10">
				<input type="file" id="imagen" name="imagen" accept=".jpg, .jpeg, .png, .git" class="form-control" id="exampleInputEmail1" placeholder="IMAGEN DE PERFIL" required>	
				<output id="list"></output>
			</div>
</div>
		
                    <?php
                                $sql="SELECT * from servicios";
                                $ser=mysqli_query($conexion,$sql);
                      ?>

<div class="row form-group">
			<div class="col-sm-2">
				<label class="control-label modal-label">Servicios:</label>
			</div>
			<div class="col-sm-10">
				<select class="form-control form-control-sm" placeholder="Seleccione el Servicios" name="servicios"  required>
				<option value="">Selecciona una opción</option>
				<?php
                               while($mostrar=mysqli_fetch_array($ser)) {
                                    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombre'] . "</option>";
                                }
                                ?>


				</select>
			</div>
		</div>

		<div class="row form-group"> 
			<div class="col-sm-2">
				<label class="control-label modal-label">IP:</label>
			</div>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="ip" placeholder="Ingrese la IP" required>
			</div> 
		</div>

		<div class="row form-group"> 
			<div class="col-sm-2">
				<label class="control-label modal-label">Usuario:</label>
			</div>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="usuario" placeholder="Ingrese el Usuario" required>
			</div> 
       </div>
	   <div class="row form-group"> 
			<div class="col-sm-2">
				<label class="control-label modal-label">Clave:</label>
			</div>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="clave"  placeholder="Ingrese la Clave" required>
			</div> 
       </div>
      <div class="row form-group">
	        <div class="col-sm-2">
			    <label class="control-label modal-label">Mac Address:</label>
			</div>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="mac_address"  placeholder="Ingrese la Mac Address" required>
			</div>
	    </div>






		<?php
                                $sql2="SELECT * from marcas";
                                $mar=mysqli_query($conexion,$sql2);
                      ?>

<div class="row form-group">
			<div class="col-sm-2">
				<label class="control-label modal-label">Marcas:</label>
			</div>
			<div class="col-sm-10">
				<select class="form-control form-control-sm" placeholder="Seleccione el Perfil" name="marcas" placeholder="Ingrese la Ubicación" required>
				<option value="">Selecciona una opción</option>
				<?php
                               while($mostrar=mysqli_fetch_array($mar)) {
                                    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombres'] . "</option>";
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
				<input type="text" class="form-control" name="modelo" required placeholder="Ingrese Modelo" required>
			</div>
		</div>


		<div class="row form-group">
			<div class="col-sm-2">
				<label class="control-label modal-label">Serial:</label>
			</div>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="serial" placeholder="Ingrese el Serial del Equipo" required>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-sm-2">
				<label class="control-label modal-label">Bien Nacional:</label>
			</div>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="bien_nacional" placeholder="Ingrese el Bien Nacional" required>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-sm-2">
				<label class="control-label modal-label">Dirección Remota:</label>
			</div>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="remoto" placeholder="Ingrese la Direccion" required>
			</div>
		</div>

		<?php
                                $sql3="SELECT * from distribucion";
                                $dis=mysqli_query($conexion,$sql3);
                      ?>

<div class="row form-group">
			<div class="col-sm-2">
				<label class="control-label modal-label">Distribuciones S.O:</label>
			</div>
			<div class="col-sm-10">
				<select class="form-control form-control-sm" placeholder="Seleccione el Perfil" name="distribucion" placeholder="Ingrese la Ubicación" required>
				<option value="">Selecciona una opción</option>
				<?php
                               while($mostrar=mysqli_fetch_array($dis)) {
                                    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombre'] . "</option>";
                                }
                                ?>
 

				</select>
			</div>
		</div>

			



		<div class="row form-group">
			<div class="col-sm-2">
				<label class="control-label modal-label">Ubicacion:</label>
			</div>
			<div class="col-sm-10">
				<select class="form-control form-control-sm" placeholder="Seleccione el Perfil" name="id_ubicacion" placeholder="Ingrese la Ubicación" required>
				<option value="">Selecciona una opción</option>
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
				<label class="control-label modal-label">Ubicacion Geografica:</label>
			</div>
			<div class="col-sm-10">
				<input type="file" id="ubicacion_geografica" name="ubicacion_geografica" accept=".jpg, .jpeg, .png, .git" class="form-control" id="exampleInputEmail1" placeholder="IMAGEN DE PERFIL" required>	
				<output id="list"></output>
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