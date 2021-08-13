<div class="content-wrapper">
	
	<section class="content-header">
		<h1>Gestor de Herramientas Agricolas</h1>
	</section>

	<section class="content">
		
		<div class="box box-success">
			
			<div class="box-body">
				
				<div class="row TB">

					<?php
						$item = null;
						$valor = null;

						$herramientas = HerramientasC::MostrarHerramientasC($item, $valor);

						foreach ($herramientas as $key => $value){

							echo '<div class="col-md-4 col-sm-6">
						
								<a href="#" class="EditarHerramienta" Hid="'.$value["id"].'" "data-toggle="modal" data-target="#EditarHerramienta">
									
									<i class="fa fa-'.$value["icono"].'" style="font-size: 25px;"></i>
		
									<h4>'.$value["titulo"].'</h4>
		
									<p>'.$value["descripcion"].'</p>
		
								</a>
		
							</div>';
						}
					?>
					
				</div>

			</div>

			<div class="box-footer">
				<center><h3>Haga clic en la herramienta que deseé editar.</h3></center>
			</div>

		</div>

	</section>

</div>


<div id="EditarHerramienta" class="modal fade" rol="dialog">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<form rol="form" method="post">
				
				<div class="modal-body">
					
					<div class="box-body">
						
						<div class="form-group">
							
							<h2>Icono:</h2>
							<input type="text" name="iconoE" id="iconoE" class="form-control input-lg">

							<input type="hidden" name="Hid" id="Hid">

						</div>

						<div class="form-group">
							
							<h2>Título:</h2>
							<input type="text" name="tituloE" id="tituloE" class="form-control input-lg">

						</div>

						<div class="form-group">
							
							<h2>Descripción:</h2>
							<textarea name="descripcionE" id="descripcionE"></textarea>

						</div>

						<div class="form-group">
							
							<h2>Imagen:</h2>
							<textarea name="imagenE" id="imagenE"></textarea>

						</div>

					</div>

					<div class="modal-footer">
						
						<button type="submit" class="btn btn-success">Guardar</button>

						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

					</div>

				</div>

				<?php

					$actualizarH = new HerramientasC();
					$actualizarH -> actualizarHerramientasC();

				?>

			</form>

		</div>

	</div>

</div>